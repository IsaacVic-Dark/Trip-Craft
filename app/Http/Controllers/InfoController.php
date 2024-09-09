<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    // Store the additional information in Profile
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'marital_status' => 'required|in:single,married',
            'location' => 'required|string|max:255',
            'contact' => 'required|string|max:15',
            'hobbies' => 'required|string|max:255',
        ]);

        // Create a new Information instance
        $info = new Information();
        $info->marital_status = $validatedData['marital_status'];
        $info->location = $validatedData['location'];
        $info->contact = $validatedData['contact'];
        $info->hobbies = $validatedData['hobbies'];
        $info->save();

        // Redirect back or wherever you want
        return redirect('/');
    }

}
