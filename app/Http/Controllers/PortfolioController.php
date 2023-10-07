<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function execute(){

    	if(view()->exists('admin.portfolios.all')){
    		
    		$title = 'Portfolios';
	    	$portfolios = Portfolio::all();

	    	return view('admin.portfolios.all')
	    				->withTitle($title)
	    				->withPortfolios($portfolios);
    	}
    }
}
