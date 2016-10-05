<?php
namespace App\Models;

use App\Models\Person as Person;

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
		'description',
		'person_id'
	];

	public function person()
	{
		return $this->belongsTo(Person::class);
	}
}
