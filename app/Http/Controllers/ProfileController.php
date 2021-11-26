<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        return view('profile', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }

    public function create(){
        return view('createProfile');
    }
    
    public function postCreate() {
        $data = request()->validate([
            'description' => 'required',
            'profilepic' => ['required', 'image'],
        ]);

        // store the image in uploads, under public
        // request(‘profilepic’) is like $_GET[‘profilepic’]
        $imagePath = request('profilepic')->store('uploads', 'public');

        // create a new profile, and save it
        $user = Auth::user();
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->description = request('description');
        $profile->image = $imagePath;
        $saved = $profile->save();

        // if it saved, we send them to the profile page
        if ($saved) {
            return redirect('/profile');
        }
        
    }

}
