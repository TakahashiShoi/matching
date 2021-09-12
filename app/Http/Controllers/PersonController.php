<?php

namespace App\Http\Controllers;

use App\Models\Prefecture;
use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\RegisterRequest;
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
        Log::debug(var_export($items, true));
        return view('user.register', ['items' => $items],);
    }

    public static function register_post(RegisterRequest $request)
    {
        $register_data = $request->all();
        return view('user.register_2', compact('register_data'));
    }

    public function register_2(Request $request)
    {
        return view('user.register_2');
    }
}
