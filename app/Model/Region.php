<?php

namespace App\Model;

use App\Model\Country;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function Country()
    {
    	return $this->belongsTo(Country::class);
    }
}
