<?php

namespace SIDTT\Http\Controllers;

use Illuminate\Http\Request;

class FrontEnd extends Controller
{
	public function index(){ 
		return view('index');  
	}
	public function registro(){ 
		return view('registro');  
	}
}
    
