<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_devices', function (Blueprint $table) {
            $table->string('category_id')->nullable();
            $table->string('department')->nullable();
            $table->string('deviceLocation')->nullable();
            $table->unsignedInteger('level')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_devices');
    }
}
