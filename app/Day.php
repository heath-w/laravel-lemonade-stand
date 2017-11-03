<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
  protected $table = 'day';

	public function condition() {
		return $this->belongsTo('App\Condition');
	}
}
