<?php

namespace App\Http\Controllers;

use App\Processes;
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
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $processos = Processes::all()->sortByDesc('id');
      return view('admin.processos.index', compact('processos'));
    }
}
