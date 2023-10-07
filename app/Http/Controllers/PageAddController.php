<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Page;

class PageAddController extends Controller
{
    public function execute(Request $request){

    	if($request->isMethod('post')){
    		$input = $request->except('_token');

    		$validator = Validator::make($input, [
    				'name' => 'required|max:255',
    				'alias' => 'required|unique:pages|max:255',
    				'text' => 'required'
    			]);

    		if($validator->fails()){
    			return redirect()->route('pageAdd')->withErrors($validator)->withInput();
    		}

            if($request->HasFile('images')){
                $file = $request->file('images');

                $input['images'] = $file->getClientOriginalName();

                $file->move(public_path() . '/images/', $input['images']);    
            }

            $page = new Page;

            // $page = new Page($input);

            $page->fill($input);

            if($page->save()){
                return redirect('admin')->with('status', 'Page added');
            }
    	}

    	if(view()->exists('admin.pages.add')){
    		$title = 'Add Page';
	    	
	    	return view('admin.pages.add')->withTitle($title);	
    	}

    }
}
