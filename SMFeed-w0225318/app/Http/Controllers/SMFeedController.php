<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMFeedController extends Controller
{
    public function index()
    {
        return view("smfeed.display");
    }

    public function users()
    {
        $users = \App\User::all();
        $roles = \App\Role::all();

        return view("smfeed.display", compact("users", "roles"));
    }

}
