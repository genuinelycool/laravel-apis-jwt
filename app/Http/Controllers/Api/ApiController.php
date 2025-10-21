<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    // Register API [name, email, password, password_confirmation]
    public function register(Request $request) {
        $data = $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed"
        ]);

        User::create($data);

        return response()->json([
            "status" => "success",
            "message" => "User registered successfully"
        ]);
    }

    // Login API [email, password]
    public function login() {

    }

    // Profile API
    public function profile() {

    }

    // Refresh API
    public function refresh() {

    }

    // Logout API
    public function logout() {

    }
}
