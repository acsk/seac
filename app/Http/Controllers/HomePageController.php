<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Processes;

class HomePageController extends Controller
{
    //
    public function index()
    {
      $processos = Processes::all()->sortByDesc('id');
      return view('welcome', compact('processos'));
    }
}
