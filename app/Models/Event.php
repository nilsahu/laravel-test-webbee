<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	/**
     * This function used to create relation between event and workshop
    */
	public function workShop() 
    {
        return $this->hasMany(Workshop::class);
    }
}
