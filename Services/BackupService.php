<?php

namespace Modules\Dashboard\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Dashboard\Repositories\BackupRepository;

class BackupService {

	private $database_user;
	private $database_password;
	private $database_name;
	private $database_tables;

	private $path;
	private $file_name;


	public function __construct() {
		$connection = config('database.default');
		$driver = config("database.connections.{$connection}.username");

		$this->database_user = config("database.connections.{$connection}.username");
		$this->database_password = config("database.connections.{$connection}.password");
		$this->database_name = config("database.connections.{$connection}.database");
	}

	public function run()
	{
		$backup = shell_exec('mysqldump '
			. '-u ' . $this->database_user . ' '.
			'--routines '
			. '--password="' . $this->database_password . '" '
			. $this->database_name);

		$file_name = 'backup_'.date('Y_m_d_H_i_s').'.sql';
		$path = 'backup/'.$file_name;
		Storage::put($path, $backup);
		$this->file_name = $file_name;
		$this->path = $path;

		$backup = BackupRepository::load();
		if(is_dir($backup->destiny))
		{
			$destiny = $backup->destiny.'/'.$this->file_name;
			copy (storage_path('app/'.$this->path), $destiny);
		}
	}

	public function path()
	{
		return $this->path;
	}

	public function download()
	{
		if($this->path)
		{
			return Storage::download($this->path);
		}

	}

}
