<?php

namespace Garantia3\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }
}
