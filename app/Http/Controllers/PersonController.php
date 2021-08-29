<?php

namespace App\Http\Controllers;

use App\Models\Prefecture;
use Illuminate\Http\Request;
use Swift_Plugins_Loggers_EchoLogger;

class PersonController extends Controller
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'mail' => ['required','email', 'max:255'],
        'pass' => ['required', 'regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', 'min:8', 'confirmed'],
    );

    public function register(Request $request)
    {
        $items = Prefecture::all();
        return view('user.register', ['items' => $items]);
    }
}
