<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
	protected $fillable = [
		'name', 'ring', 'dead',
	];

	public function locations()
	{
		return $this->morphToMany('App\Models\Location', 'locationable');
	}
}
