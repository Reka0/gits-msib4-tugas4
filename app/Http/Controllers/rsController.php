<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dokter;
use Illuminate\Http\Request;

class rsController extends Controller
{
    //class HomeController extends Controller
    public function index()
    {
        // return view('index');
        $dokter = dokter::all();
        return view('index', ['dokter' => $dokter]);
    }

}
