<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Contracts\View\View;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    
    protected $guard = 'web_customers';
    protected $redirectTo = 'comprador';

    public function index(): View
    {
        return view('customers.auth');
    }
}
