<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // Destroy user account by admin
    public function destroyUserAdmin(Request $request)
    {
        // Ensure the authenticated user is an admin
        if (!Auth::check() || Auth::user()->usertype !== 'admin') {
            return Redirect::back()->withErrors(['message' => 'You do not have permission to perform this action.']);
        }

        // Validate the request
        $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'password' => ['required', 'password'], // Assuming you have a custom password validation rule
        ]);

        // Find the user by ID
        $user = User::findOrFail($request->user_id);

        // Delete the user
        $user->delete();

        return Redirect::back()->with('success', 'User has been deleted successfully.');
    }

}
