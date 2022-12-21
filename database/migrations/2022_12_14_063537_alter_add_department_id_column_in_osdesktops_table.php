<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddDepartmentIdColumnInOsdesktopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('osdesktops', function (Blueprint $table) {
            $table->unsignedInteger('department_id')->nullable()->after('warrantyDate');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('osdesktops', function (Blueprint $table) {
            //
        });
    }
}
