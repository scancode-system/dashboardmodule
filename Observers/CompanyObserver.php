<?php

namespace Modules\Dashboard\Observers;

use Modules\Dashboard\Entities\Company;
use Modules\Dashboard\Entities\CompanyInfo;
use Modules\Dashboard\Entities\CompanyAddress;

class CompanyObserver
{
    
	 public function created(Company $company)
    {
        CompanyInfo::create(['company_id' => $company->id]);
        CompanyAddress::create(['company_id' => $company->id]);
    }

}
