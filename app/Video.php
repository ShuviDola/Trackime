<?php

namespace Trackime;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video extends Model
{
	public $timestamps		= false;

	public function web()
	{
		return DB::table('animes')->where('anime', $this->anime)->first()->animeFLV;
	}

}