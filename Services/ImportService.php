<?php

namespace Modules\Dashboard\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Dashboard\Repositories\CompanyRepository;

class ImportService {

    public static function logo($path_logo)
    {
        if(Storage::exists($path_logo))
        {
            Storage::disk('public')->put('companies/logo/logo.png', file_get_contents(storage_path('app/'.$path_logo)), 'public');
            CompanyRepository::updateLogo('storage/companies/logo/logo.png');
        }
    }

}
