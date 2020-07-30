<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Dashboard\Entities\ReportCategory;

class Report extends Model
{
    protected $fillable = ['module', 'export', 'alias', 'report_category_id'];

    public function report_category()
    {
        return $this->belongsTo(ReportCategory::class);
    }

    // mutators
    public function getExportClassAttribute()
    {
        return 'Modules\\'.$this->module.'\\Exports\\'.$this->export;
    }

    public function getFileAliasAttribute()
    {
        return $this->alias.'.xlsx';
    }
}
