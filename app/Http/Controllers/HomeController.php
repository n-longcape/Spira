<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

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
     * @param Idea $idea
     * @return \Illuminate\Http\Response
     */
    public function index(Idea $idea)
    {
        return view('home',['ideas' => $idea::all()]);
    }
}
