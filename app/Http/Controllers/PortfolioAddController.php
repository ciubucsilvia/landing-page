<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;

class PortfolioAddController extends Controller
{
    public function execute(Request $request){

    	if(view()->exists('admin.portfolios.add')){

    		if($request->isMethod('post')){
    			$input = $request->except('_token');

    			$validator = Validator::make($input, [
    					'name' => 'required|max:200',
    					'filter' => 'required|max:100',
    					'images' => 'required'
    				]);

    			if($validator->fails()){
    				return redirect()
    						->route('portfolioAdd')
    						->withErrors($validator)
    						->withInput();
    			}

    			if($request->hasFile('images')){
    				$file = $request->file('images');

    				$input['images'] = $file->getClientOriginalName();

    				$file->move(public_path() . '/images/portfolio/' , $input['images']);

    			}

    			$portfolio = new Portfolio;

    			$portfolio->fill($input);

    			if($portfolio->save()){
    				return redirect('admin')->with('status', 'Portfolio added');
    			}
	    	}

	    	$title = 'Add Portfolio';

	    	return view('admin.portfolios.add')
	    			->withTitle($title);
    	}

    }
}
