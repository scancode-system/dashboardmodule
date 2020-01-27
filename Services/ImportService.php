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

	public static function setting($data)
	{
		//dd($data);
		$company_info = (array)$data->company_info;
		$company_info['corporate_name'] = $company_info['company_name'];
		$company_info['fantasy_name'] = $company_info['trade_name'];
		$company_info['fantasy_name'] = $company_info['trade_name'];
		$company_info['email'] = $data->email;
		unset($company_info['company_name']);
		unset($company_info['trade_name']);
		unset($company_info['ddd']);
		unset($company_info['observation']);
		unset($company_info['id']);
		unset($company_info['company_id']);
		CompanyRepository::updateInfo($company_info);

		$company_address = (array)$data->company_address;
		$company_address['street'] = $company_address['address'];
		$company_address['postcode'] = $company_address['zip_code'];
		unset($company_address['address']);
		unset($company_address['zip_code']);
		unset($company_address['id']);
		unset($company_address['company_id']);
		CompanyRepository::updateAddress($company_address);
	}

}
