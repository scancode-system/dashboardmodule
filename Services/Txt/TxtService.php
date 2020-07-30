<?php

namespace Modules\Dashboard\Services\Txt;

use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use ZipArchive;


abstract class TxtService 
{

	protected $alias;

	protected $path_base;
	protected $path_zip;

	public function __construct($alias, $root = 'txts') {
		$this->alias = $alias;
		$this->path_base = $root.'/'.$this->alias.'/';
		$this->path_zip = $root.'/'.$this->alias.'.zip';
	}

	public function run()
	{
		if(Storage::exists($this->path_zip)){
			Storage::delete($this->path_zip);
		}
		$this->build();
		$this->zip();
	}

	public function zip()
	{
		$files = Storage::allFiles($this->path_base);
		$zip_path = storage_path('app/'.$this->path_zip);
		$zip = new ZipArchive;
		$zip->open($zip_path, ZipArchive::CREATE | ZipArchive::OVERWRITE);
		foreach ($files as $file) {
			$file_name = str_replace($this->path_base, '', $file);
			$zip->addFile(storage_path('app/'.$file), $file_name);
		}
		$zip->close();

		Storage::deleteDirectory($this->path_base);
	}

	public function download()
	{
		$this->run();
		return response()->download(storage_path('app/'.$this->path_zip));
	}

	abstract protected function build();

}



