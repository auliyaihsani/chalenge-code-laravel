<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriminalitas extends Model
{

    	protected $fillable = ['id', 'kecamatan', 'kelurahan', 'informasi'];


		public function user()
		{
			return $this->belongsTo('App\User');
		}

}





