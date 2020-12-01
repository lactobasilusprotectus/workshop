<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->only('id', 'password');

        if (auth()->guard('web')->attempt($data))
        {
            return response()->json([
                'status' => 'oke',
                'message' => 'Login berhasil'
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Login gagal'
            ]);
        }
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        auth()->logout();

        session()->flush();

        return redirect()->route('login');
    }
}
