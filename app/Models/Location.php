<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $fillable = [
		'adress', 'city', 'zip', 'latitude', 'longitude',
	];

	public function birds()
    {
        return $this->morphedByMany('App\Models\Bird', 'locationable');
    }

    public function contact()
    {
    	return $this->hasOne('App\Contact');
    }
}
