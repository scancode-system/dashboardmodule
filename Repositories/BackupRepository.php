<?php

namespace Modules\Dashboard\Repositories;

use Modules\Dashboard\Entities\Backup;

class BackupRepository
{


	// CREATE
	public static function create()
	{
		if(Backup::count() == 0)
		{
			return Backup::create([]);
		}
	}


	// LOAD
	public static function load()
	{
		$backup = Backup::first();
		if(!$backup)
		{
			$backup = self::create();
		}
		return $backup;
	}

	// UPDATE
	public static function update($data)
	{
		$backup = Backup::first();
		$backup->update($data);
		return $backup;
	}	


}
