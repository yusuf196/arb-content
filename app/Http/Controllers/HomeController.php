<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Javascript::put([ 'user_id' => Auth::user()->id]);
        return view('front.home');
    }



    
}
