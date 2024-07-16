<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function redirectTo()
    {
        
        if(auth()->user()->role == 'admin'){
                $this->redirectTo = '/admin/dashboard';
                return $this->redirectTo;
            }
        else {
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
        
    }

}
