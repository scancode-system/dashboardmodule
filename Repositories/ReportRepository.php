<?php

namespace Modules\Dashboard\Repositories;

use Modules\Dashboard\Entities\Report;
use Modules\Dashboard\Entities\ReportCategory;

class ReportRepository
{

	// LOADS
	public static function load(){
		return Report::all();
	}

	public static function loadGoupByCategoryName(){
		return self::load()->groupBy(function($report){
			return $report->report_category->name;
		});
	}


	// CREATES
	public static function newByCategory($data, $category){
		$report_category = ReportCategory::where('name', $category)->first();
		if(!$report_category){
			$report_category = ReportCategory::create(['name' => $category]);
		}

		return Report::create($data+['report_category_id' => $report_category->id]);
	}

	// DELETE
	public static function deleteByAlias($alias){
		Report::where('alias', $alias)->first()->delete();
	}

}
