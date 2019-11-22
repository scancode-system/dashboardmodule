<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = ['id', 'name', 'visible', 'columns', 'view', 'order'];
}
