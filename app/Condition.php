<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
  protected $table = 'condition';

	public function day() {
		return $this->hasMany('App\Day');
	}
}
