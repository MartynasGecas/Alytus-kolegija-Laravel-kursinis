<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index($user)
    {

        $user = \App\Models\User::findOrFail($user);

        return view('user.index', [ 'user'=>$user]);
    }
}
