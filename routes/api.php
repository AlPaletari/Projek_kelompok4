<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Route::post('/login', function (Request $request) {
    $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        return response()->json([
            'status' => 'success',
            'user'   => $user,
        ]);
    }

    return response()->json([
        'status'  => 'error',
        'message' => 'Email atau password salah',
    ], 401);
})->withoutMiddleware(['auth:sanctum', 'auth:api']); // 🚀 penting
