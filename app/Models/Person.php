<?php
namespace App\Models;

use App\Models\Device as Device;

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

	public function devices()
	{
		$this->hasOne(Device::class);
	}
}
