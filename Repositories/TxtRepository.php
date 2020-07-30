<?php

namespace Modules\Dashboard\Repositories;

use Modules\Dashboard\Entities\Txt;

class TxtRepository
{

	// LOADS
	public static function load(){
		return Txt::all();
	}


	// CREATES
	public static function new($data){
		return Txt::create($data);
	}

	// DELETE
	public static function deleteByAlias($alias){
		Txt::where('alias', $alias)->first()->delete();
	}

}
