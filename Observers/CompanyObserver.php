<?php

namespace Modules\Dashboard\Observers;

use Modules\Dashboard\Entities\Company;
use Modules\Dashboard\Entities\CompanyInfo;
use Modules\Dashboard\Entities\CompanyAddress;
use Illuminate\Support\Facades\Hash;

class CompanyObserver
{

	public function created(Company $company)
	{
		CompanyInfo::create(['company_id' => $company->id]);
		CompanyAddress::create(['company_id' => $company->id]);
	}

	public function updating(Company $company)
	{
		if($company->isDirty('password'))
		{
			if(is_null($company->password))
			{
				$company->password = $company->getOriginal()['password'];	
			} else 
			{
				$company->password = Hash::make($company->password);
			}
		}
	}
}
