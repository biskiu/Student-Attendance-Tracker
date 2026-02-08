<?php

namespace App\Http\Controllers;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authService;
    public function __construct(AuthService $authService){
        $this->authService = $authService;
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $result = $this->authService->login($request->email, $request->password);
        if ($result['status'] === 'success') {
            return response()->json($result);
        }
        return response()->json($result, 401);

    }
}
