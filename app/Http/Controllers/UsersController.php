<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile(User $user){
        return view('profile', compact('user'));
    }
}
