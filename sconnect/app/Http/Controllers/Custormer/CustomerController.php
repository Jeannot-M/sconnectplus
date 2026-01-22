<?php

namespace App\Http\Controllers\Custormer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function chat_area() {
        return view('customer.chat_area');
    }
}