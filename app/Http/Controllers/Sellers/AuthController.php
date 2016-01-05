<?php

namespace App\Http\Controllers\Sellers;

use Illuminate\Contracts\View\View;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    
    protected $guard = 'web_sellers';
    protected $redirectTo = 'vendedor';

    public function index(): View
    {
        return view('sellers.auth');
    }
}
