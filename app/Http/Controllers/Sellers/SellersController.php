<?php

namespace App\Http\Controllers\Sellers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SellersController extends Controller
{
    public function index(): View
    {
        return view('sellers.index');
    }
}
