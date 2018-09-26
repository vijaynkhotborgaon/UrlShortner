<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortner extends Model
{
    // this model is corresponds to Shorteners table in database
	
	//created at and updated at not included in table
	public $timestamps = false;
}
