<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;

class PageEditController extends Controller
{
    public function execute(Page $page, Request $request){

    	if($request->isMethod('post')){

    		$input = $request->except('_token');

    		$validator = Validator::make($input, [
    				'name' => 'required|max:255',
    				'alias' => 'required|max:255|unique:pages,alias,' .$input['id'],
    				'text' => 'required'

    			]);

    		if($validator->fails()){
    			return redirect()
    					->route('pageEdit', ['page' => $input['id']])
    					->withErrors($validator);
    		}

    		if($request->hasFile('images')){
    			$file = $request->file('images');
    			$file->move(public_path() . '/images/', $file->getClientOriginalName());

    			$input['images'] = $file->getClientOriginalName();
    		} else {
    			$input['images'] = $input['old_images'];
    		}

    		unset($input['old_images']);

    		$page->fill($input);

    		if($page->update()){
    			return redirect('admin')->with('status', 'Page updated');
    		}

    	}

    	if($request->isMethod('delete')){
    		$page->delete();

    		return redirect('admin')->with('status', 'Page delete');
    	}

    	$old = $page->toArray();

    	if(view()->exists('admin.pages.edit')){



    		return view('admin.pages.edit')->withTitle('Redactare pagina - ' . $old['name'])->withData($old);
    	}
    }
}
