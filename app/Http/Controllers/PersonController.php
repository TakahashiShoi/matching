<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'mail' => ['required','email', 'max:255'],
        'pass' => ['required', 'regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', 'min:8', 'confirmed'],
    );
}
