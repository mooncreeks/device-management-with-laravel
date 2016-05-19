<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function search(Request $request)
    {
    	return $request->all();
    }
}
