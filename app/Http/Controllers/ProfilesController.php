<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{



    public function index(User $user){



        return view('profiles.index',compact('user'));
    }

   
   public function update(User $user)
   
  { 
   
      return redirect("/profile/{$user->id}");
  }
}
