<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddDepartmentIdColumnInEncoremedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('encoremeds', function (Blueprint $table) {
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
        Schema::table('encoremeds', function (Blueprint $table) {
            //
        });
    }
}
