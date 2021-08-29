<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getlogin()
    {
        return view('user.login');
    }


}
