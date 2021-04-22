<?php

namespace Leo\Hello;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function hello()
    {
        return view('hello::hello');
    }
}
