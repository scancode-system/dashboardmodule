<?php

namespace Modules\Dashboard\Repositories;

use Modules\Dashboard\Entities\Widget;

class WidgetRepository
{

	public static function loadPaginate($items_per_page = 10, $filter = ''){
		$widgets =  Widget::paginate($items_per_page);
		return $widgets;
	}


	public static function loadVisible(){
		return Widget::where('visible', true)->get();
	}


	public static function storeMany(Array $data_widgets){
		return Widget::insert($data_widgets);
	}

	public static function removeByName($name){
		$widget = Widget::where('name', $name)->first();
		$widget->delete();
	}

}
