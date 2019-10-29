<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Modules\Dashboard\Entities\Company;

class InsertCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = new Company();
        $user->id = 1;
        $user->name = 'scancode';
        $user->email = 'scancode';
        $user->password = bcrypt('scancode');
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Company::find(1)->delete();
    }
}
