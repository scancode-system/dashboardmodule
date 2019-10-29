<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{

	use Notifiable;

	protected $dateFormat = 'Y-m-d H:i:s';
	protected $guard = 'company';

	protected $fillable = [
		'name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	public function company_info()
	{
		return $this->hasOne('Modules\Dashboard\Entities\CompanyInfo');
	}

	public function company_address()
	{
		return $this->hasOne('Modules\Dashboard\Entities\CompanyAddress');
	}


}
