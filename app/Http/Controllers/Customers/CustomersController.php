<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function index(): View
    {
        return view('customers.index');
    }
}
