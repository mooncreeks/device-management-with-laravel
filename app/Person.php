<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

	/*
	* Fillable Fields
	* 
	*@var array
	*/

	protected $fillable = [
		'name',
		'designation',
		'email',
		'status'
	];
}
