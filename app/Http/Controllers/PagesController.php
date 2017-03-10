<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }	
    public function halamanInput()
    {
        return view('dataPeserta.create');
    }
    public function contact()
    {
        return view('contact');
    }
}
