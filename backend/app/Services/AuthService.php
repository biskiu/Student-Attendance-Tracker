<?php

namespace App\Services;


class AuthService
{
    public function login($email, $password){
        if ($email == 'admin@gmail.com' && $password == 'password'){
            return [
                'status'=> 'success',
                'user' =>[
                    'email'=> $email,
                    'full_name' =>'Admin User'
                ]];
        }
        return ['status' =>'error', 'message'=>'Invalid credentials'];
    }
}