<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
    protected $fillable = ['destiny', 'auto'];

    protected $table = 'backup';
}
