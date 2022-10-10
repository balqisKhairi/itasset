<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitor_details', function (Blueprint $table) {
            $table->string('category_id')->nullable();
            $table->string('monitorModel')->nullable();
            $table->string('monitorManufacturer')->nullable();
            $table->string('monitorSize')->nullable();
            $table->string('monitorSerielNumber')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitor_details');
    }
}
