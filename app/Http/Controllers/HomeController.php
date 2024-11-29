<?php

namespace App\Http\Controllers;

use id;
use Carbon\Carbon;
use App\Models\Trip;
use App\Models\User;
use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\WeatherService;
use Illuminate\Http\JsonResponse;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    // Display User or Admin Home Page
    public function homePage(){
        if(Auth::check()) {
            $user = Auth::user();

            if($user->usertype == 'admin') {
                $adminName = User::where('usertype', 'admin')->value('name');
                $userCount = User::count();
                $activityCount= Trip::count();
                $users=User::all();
                return view('admin.adminhome', compact('userCount', 'adminName', 'activityCount', 'users'));
            } else {
                $content = Trip::all();
                return view('dashboard', ['content' => $content]);
            }
        } else {
            return redirect()->route('login');
        }
    }

    // Search function
    public function search(Request $req){
        $query = $req->input('query');
        $content = Trip::where('activity_name', 'LIKE', '%' . $query . '%')->get();
        return view('dashboard', compact('content', 'query'));
    }

    // Display Pages
    public function plan(){
        return view('pages.plan');
    }
    public function review(){
        return view('pages.review');
    }
    public function activities(){
        return view('pages.activities');
    }
    public function pay(Request $request){
        $price = $request->query('price');
        return view('pages.payment', compact('price'));
    }

    public function detailed_activity(Request $request)
    {
        $id = $request->query('id'); // Trip ID

        $trip = Trip::with('user')->find($id);

        if (!$trip) {
            return redirect()->back()->with('error', 'Trip not found');
        }

        $createdAgo = Carbon::parse($trip->created_at)->diffForHumans();
        $reviews = Review::with('user')->where('activity_id', $id)->get();
        $averageRating = DB::table('reviews')
            ->where('activity_id', $id)
            ->avg('rating');

        // OPTIONAL: Fetch weather data if location exists
        $weather = null;
        $location = $trip->location; // Example: Use trip's location for weather
        if ($location) {
            $weatherService = app(WeatherService::class); // Instantiate the WeatherService
            $weather = $weatherService->getWeather($location);
        }

        // dd($weather);

        return view('pages.detailed_activity', [
            'activity_name' => $trip->activity_name,
            'description' => $trip->description,
            'image' => $trip->image,
            'price' => $trip->price,
            'category' => $trip->category,
            'contact' => $trip->contact,
            'location' => $trip->location,
            'date' => $trip->starting_at,
            'end_date' => $trip->ending_at,
            'reviews' => $reviews,
            'averageRating' => $averageRating,
            'id' => $trip->id,
            'user' => $trip->user,
            'createdAgo' => $createdAgo,
            'weather' => $weather, // Pass weather data to view
        ]);
    }


    // Post Activity to Database
    public function trip(Request $req){
        $trip = new Trip;

        $req->validate([
            'activity_name' => 'required|string',
            'contact' => 'required|string',
            'price' => 'required|integer',
            'location' => 'required|string',
            'category' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'starting_at' => 'required|date',
            'ending_at' => 'required|date|after:starting_at'
        ]);

        $trip->activity_name = $req->input('activity_name');
        $trip->contact = $req->input('contact');
        $trip->price = $req->input('price');
        $trip->location = $req->input('location');
        $trip->category = $req->input('category');
        $trip->starting_at = $req->input('starting_at');
        $trip->ending_at = $req->input('ending_at');
        $trip->user_id = Auth::id();

        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $trip->image = $req->file('image')->store('images', 'public');
        }

        $trip->description = $req->input('description');
        $trip->save();

        return redirect()->route('home')->with('message','Trip created successfully');
    }

    public function getUserDetails($id): JsonResponse
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'user_type' => ['required', 'string', 'in:User,Admin'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usertype' => $request->user_type,
        ]);

        return redirect()->back();
    }

    public function updateUser(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // Add validation rules for other fields if necessary
        ]);

        $user = User::findOrFail($request->input('user_id'));

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Update other fields if necessary
        ]);

        return Redirect::back()->with('success', 'User updated successfully!');
    }



    public function saveReview(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'rate' => 'required|integer|between:1,5',
            'comment' => 'required|string',
            'activity_id' => 'required|exists:activity,id',
        ]);

        $review = new Review();
        $review->rating = $validatedData['rate'];
        $review->comment = $validatedData['comment'];
        $review->activity_id = $request->input('activity_id');
        $review->user_id = Auth::id(); // Associate the authenticated user
        $review->save();

        return redirect()->back()->with('success', 'Review posted successfully!');
    }
}
