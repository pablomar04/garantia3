<?php

namespace Garantia3\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }
}
