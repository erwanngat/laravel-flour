<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Flour;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userDisplay(){
        $user = auth()->user();
        $userFlours = Flour::where('user_id', $user->id)->get();
        return view('user.testUser', compact('userFlours'));
    }
}
