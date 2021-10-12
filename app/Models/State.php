<?php

namespace App\Models;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model {
	use HasFactory;

	protected $fillable = ['country_id', 'name'];

	public function country() {
		return $this->belongsTo(Country::class);
	}

	public function city() {
		return $this->hasMany(City::class);
	}
}
