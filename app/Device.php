<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
	protected $table = 'devices';

	/*
	* Fillable Fields
	* 
	*@var array
	*/

	protected $fillable = [
		'title',
		'serial_number',
		'description'
	];
}
