<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class UserLoginController extends Controller
{

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->where('password', $password)->first();

        if ($user) {
            return response()->json(['message' => 'berhasil', 'code' => 200, 'user' => $user]);
        }

        return response()->json(['message' => 'Email dan password tidak cocok', 'code' => 400]);
    }
}