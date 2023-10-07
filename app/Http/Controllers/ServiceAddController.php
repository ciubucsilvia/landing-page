<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceAddController extends Controller
{
    public function execute(){

    	return view('admin.services.add');
    }
}
