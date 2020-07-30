<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;

class Txt extends Model
{
	protected $fillable = ['module', 'service', 'alias'];

    // mutators
	public function getServiceClassAttribute()
	{
		return 'Modules\\'.$this->module.'\\Services\Txt\\'.$this->service.'Service';
	}

}
