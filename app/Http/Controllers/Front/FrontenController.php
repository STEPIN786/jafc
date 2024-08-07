<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontenController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function menu()
    {
        return view('frontend.menu');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
