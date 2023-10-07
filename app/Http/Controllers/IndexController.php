<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use App\Client;
use Mail;
use DB;


class IndexController extends Controller
{
    public function execute(Request $request){
        // dd($request->isMethod('post'));
        // dd($request->method());
        if($request->isMethod('post')){

            // $messages = [
            //     'required' => 'Cimpul :attribute obligatoriu pentru completare',
            //     'email' => 'Cimpul :attribute trebuie sa corespunda adresei postale',
            //     ''
            // ];
            
            // $this->validate($request, [
            //         'name' => 'required|max:255',
            //         'email' => 'required|email',
            //         'text' => 'required'
            //     ], $messages);

            $this->validate($request, [
                    'name' => 'required|max:255',
                    'email' => 'required|email',
                    'text' => 'required'
                ]);

            $data = $request->all();


            // send mail
            $result = Mail::send('site.email', ['data' => $data], function($message) use ($data) {

                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin)->subject('Question');
                
            });

            if($result){
                return redirect()->route('home')
                                ->with('status', 'Email is send');
            }

        }

    	$pages = Page::all();
    	$services = Service::all();
    	$portfolios = Portfolio::all();
    	$peoples = People::take(3)->get();
    	$clients = Client::take(4)->get();

    	$filters = DB::table('portfolios')
                                        ->select('filter')
                                        ->distinct()
    									// ->value('filter')
                                        ->get();
                                        // dd($filters);

    	$menu = [];
    	foreach($pages as $page){
    		$item = array(
    			'title' => $page->name,
    			'alias' => $page->alias
    		);

    		array_push($menu, $item);
    	}

    	$item = array(
    		'title' => 'Services',
    		'alias' => 'services'
    		);
    	array_push($menu, $item);

    	$item = array(
    		'title' => 'Portfolio',
    		'alias' => 'portfolio'
    		);
    	array_push($menu, $item);

    	$item = array(
    		'title' => 'Clients',
    		'alias' => 'clients'
    		);
    	array_push($menu, $item);

    	$item = array(
    		'title' => 'Team',
    		'alias' => 'team'
    		);
    	array_push($menu, $item);

    	$item = array(
    		'title' => 'Contact',
    		'alias' => 'contact'
    		);
    	array_push($menu, $item);

    	return view('site.index')->withMenu($menu)
    							->withPages($pages)
    							->withServices($services)
    							->withPortfolios($portfolios)
    							->withClients($clients)
    							->withPeoples($peoples)
    							->withFilters($filters);
    }
}
