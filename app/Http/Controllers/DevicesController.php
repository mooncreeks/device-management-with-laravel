<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Device;
use App\Person;

use Session;

class DevicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$devices = Device::all();

        return view('devices.index')->withDevices($devices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $personList = Person::all();

        //dd($deviceInfo);

        return view('devices.create', compact('personList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

    	$this->validate($request,
    		['title' => 'required', 
    		 'serial_number' => 'required', 
    		 'description' => 'required',
             'person_id' => 'required'
             ]
    	);

        $input = $request->all();

        Device::create($input);

        Session::flash('flash_message', 'Device successfully added!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$device = Device::findOrFail($id);

    	return view('devices.show')->withDevice($device);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$device = Device::findOrFail($id);

        return view('devices.edit')->withDevice($device);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $device = Device::findOrFail($id);

        $this->validate($request,
    		['title' => 'required', 
    		 'serial_number' => 'required', 
    		 'description' => 'required']
    	);

        $input = $request->all();

        $device->fill($input)->save();

        Session::flash('flash_message', 'Device successfully updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $device = Device::findOrFail($id);

        $device->delete();

        Session::flash('flash_message', 'Device successfully deleted!');

        return redirect()->route('devices.index');
    }    
}
