<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Course;
use App\Models\CourseUser;

class HomeController extends Controller
{
      /**
       * Create a new controller instance.
       *
       * @return void
       */
      public function __construct()
      {
            $this->middleware('auth');
      }

      /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Contracts\Support\Renderable
       */
      public function index()
      {
            return view('home');
      }
      public function contacts(){
            return view('contacts');
      }
      public function about(){
            return view('about');
      }
}
