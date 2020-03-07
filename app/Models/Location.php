<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $fillable = [
		'bird_id', 'adress', 'city', 'zip', 'latitude', 'longitude',
	];
}
