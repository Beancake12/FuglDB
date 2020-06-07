<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    protected $fillable = [
		'bird_id', 'amount',
    ];
    
    public function bird()
    {
        return $this->belongsTo('App\Models\Bird');
    }
}
