<?php

namespace App\Model;

use App\Model\Region;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function Region()
    {
    	return $this->hasMany(Region::class);
    }
}
