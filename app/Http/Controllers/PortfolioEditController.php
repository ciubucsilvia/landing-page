<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Validator;

class PortfolioEditController extends Controller
{
    public function execute(Portfolio $portfolio, Request $request){

    	if(view()->exists('admin.portfolios.edit')){

    		if($request->isMethod('post')){
    			$input = $request->except('_token');
    				
    			$validator = Validator::make($input, [
    					'name' => 'required|max:200',
    					'filter' => 'required|max:100',
    				]);
    			
    			if($validator->fails()){
    				return redirect()->route('portfolioEdit', ['portfolio'=>$portfolio->id])
    								->withErrors($validator)
    								->withInput();
    			}

    			if($request->hasFile('images')){
    				$file = $request->file('images');

    				$input['images'] = $file->getClientOriginalName();

    				$file->move(public_path() . '/images/portfolios/', $input['images']);
    			} else {
    				$input['images'] = $input['old_images'];
    			}

    			unset($input['old_images']);

    			$portfolio->fill($input);

    			if($portfolio->update()){
    				return redirect('admin')
    					->with('status', 'Portfolio updated');
    			}
    		}

    		if($request->isMethod('delete')){
    			$portfolio->delete();

    			return redirect('admin')
    						->with('status', 'Portfolio deleted');
    		}

    		$title = 'Edit Portfolio';

    		return view('admin.portfolios.edit')
    				->withTitle($title)
    				->withPortfolio($portfolio);
    	}
    }
}
