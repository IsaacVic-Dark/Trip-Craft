<?php

namespace App\Http\Controllers;

use id;
use App\Models\Trip;
use App\Models\User;
use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\Request;
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


    public function detailed_activity(Request $request) {
        $activity_name = $request->query('activity_name');
        $description = $request->query('description');
        $image = $request->query('image');
        $contact = $request->query('contact');
        $price = $request->query('price');
        $category = $request->query('category');
        $location = $request->query('location');
        $date = $request->query('date');
        $id = $request->query('id');
        $activity_id = $request->query('activity_id');
        $reviews = Review::where('activity_id', $id)->get();


        $averageRating = DB::table('reviews')
        ->where('activity_id', $id)
        ->avg('rating');

        return view('pages.detailed_activity', compact('activity_name', 'description', 'image', 'price','category' ,'contact','averageRating' , 'location', 'activity_id','date' ,'reviews', 'id'));
    }



    // Post Activity to Database
    function trip(Request $req){
        $trip = new Trip;

        $req->validate([
            'activity_name' => 'required|string',
            'contact' => 'required|string',
            'price' => 'required|integer',
            'location' => 'required|string',
            'category' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $trip->activity_name = $req->input('activity_name');
        $trip->contact = $req->input('contact');
        $trip->price = $req->input('price');
        $trip->location = $req->input('location');
        $trip->category = $req->input('category');

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


    // Review Post
    public function saveReview(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'rate' => 'required|integer|between:1,5',
            'comment' => 'required|string',
        ]);

        $review = new Review();
        $review->rating = $validatedData['rate'];
        $review->comment = $validatedData['comment'];
        $review->activity_id = $request->input('activity_id'); // Use activity_id instead of trip_id
        $review->save();

        return redirect()->back();
    }


}
