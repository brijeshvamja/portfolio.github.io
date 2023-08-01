<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->subject = $request->subject;
        $user->message = $request->message;

        $user->save();
        return redirect()->route('index')->with('success', 'Thank you for your message ! It has been sent..');
    }
}
