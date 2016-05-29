<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Device;

use App\Person;

use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    public function getIndex()
    {
    	return view('searches.index');
    }

    public function anyData()
    {
    	//return Datatables::of(Device::query())->make(true);

    	//$posts = Post::with('user')->select('posts.*');

    	$devices = Device::with('person')->select('devices.*');

        return Datatables::of($devices)->make(true);
    }
}
