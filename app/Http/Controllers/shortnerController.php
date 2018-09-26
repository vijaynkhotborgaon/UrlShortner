<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Shortner;

use Illuminate\Support\Facades\Validator;

class shortnerController extends Controller
{
    
	// home page function
	public function index()
	{
		$shortners=Shortner::all()->sortByDesc("id");;
		return view('pages.welcome',['shortners'=>$shortners]);	
	}
	
	// insert date into database
	public function store(Request $request)
    {
         // validate form data
		$validator = Validator::make($request->all(), [
			'url' => 'required|active_url',
        ]);

		if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }	

		$shortner= new Shortner();
		$url_code=null;
		
		// check whether url is already present
		$url_present = Shortner::where('short_url', '=', $request['url']);
		
		
		// if url exist in database the do nothing and we will flash message to user with short url
		if($url_present->count() > 0)
		{
			$url_code = $url_present->first()->unique_code;
			return redirect('/')->with('success', "<p>Short URL already exist in database.</p> <b>Your Short URL :</b> <a target='_blank' href=". route('generator',$url_code).">". route('generator',$url_code)."</a>");
		}
		else
		{
			$url_code = substr(time(), -5);;
			$shortner->short_url= $request['url'];
			$shortner->unique_code= $url_code;
			
			//save data to databse
			$shortner->save();
			return redirect('/')->with('success', "<p>Short URL has been created successfully.</p> <b>Your Short URL :</b> <a target='_blank' href=". route('generator',$url_code).">". route('generator',$url_code)."</a>");
		}
		
	}
	
	// redirect to actual url using unique_code from table
	public function generator($uniqueCode)
	{
		$url_present = Shortner::where('unique_code', '=', $uniqueCode);
		if($url_present->count() === 1)
		{
			return redirect($url_present->first()->short_url); 
		}
		
		
	}
	
	
	
}
