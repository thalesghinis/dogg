<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth');
  }
  
  public function index()
  {
    return view('index');
  }
  
  public function roomsSuites()
  {
    return view('rooms-suites');
  }
  
  public function diningBar()
  {
    return view('dining-bar');
  }
  
  public function aminities()
  {
    return view('aminities');
  }
  
  public function blog()
  {
    return view('blog');
  }
  
  public function contact()
  {
    return view('contact');
  }
  
  public function login()
  {
    return view('login');
  }
  
  public function register()
  {
    return view('register');
  }

  public function conheca()
  {
    return view('conheca');
  }
  
  public function faq()
  {
    return view('faq');
  }
}
