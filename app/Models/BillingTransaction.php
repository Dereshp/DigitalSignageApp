<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingTransaction extends Model
{
    public function assignable()
    {

		return $this->morphTo();
		
	}

}