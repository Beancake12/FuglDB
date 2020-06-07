<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
	protected $fillable = [
		'name', 'ring', 'dead',
	];

	protected $casts = [
		'dead' => 'boolean'
	];

	public function locations()
	{
		return $this->morphToMany('App\Models\Location', 'locationable');
	}

	public function eggs()
	{
		return $this->hasMany('App\Models\Egg');
	}

	public function chicks()
	{
		return $this->hasMany('App\Models\Chick');
	}

	public function delete()
	{
		$this->locations()->detach();

		parent::delete();
	}
}