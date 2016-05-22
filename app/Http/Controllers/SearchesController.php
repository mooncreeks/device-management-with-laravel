<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Device;

use DB;

use Session;

class SearchesController extends Controller
{
    public function search(Request $request)
    {
    	/*$data = Device::orderBy('title');

    	$title = $request->input('title');

    	if(!empty($title))
    	{
    		$data->where('title', 'LIKE', '%' . $title . '%');
    	}
    	$result = $data->get();

    	return view('welcome')->withResult($data);*/

    	$title = $request->input('title');
    	
    	if(!empty($title)) 
    	{
	    	$deviceTitle = DB::table('devices')
        		        ->where('title', 'like', "%{$title}%")
                		->get();
		}
		else
		{
			$deviceTitle = [];

			//Session::flash('flash_message', 'Nothing found!!');

		}
        
        return view('welcome', compact('deviceTitle'));
    }
}
