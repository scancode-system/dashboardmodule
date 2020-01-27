<?php

namespace Modules\Dashboard\Repositories;

use Modules\Dashboard\Entities\Company;

class CompanyRepository
{


	public static function company(){
		return Company::limit(1)->with('company_info', 'company_address')->first();
	}

	// UPDATE
	public static function update($data){
		$company = self::company();
		$company->update($data);
	}

	public static function updateLogo($new_path){
		$company = self::company();
		$company->logo = $new_path;
		$company->save();
	}


	public static function updateInfo($values){
		$company = self::company();
		$company->company_info->update($values);
	}


	public static function updateAddress($values){
		$company = self::company();
		$company->company_address->update($values);
	}


}
