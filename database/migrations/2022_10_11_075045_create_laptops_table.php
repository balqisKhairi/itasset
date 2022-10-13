<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('assignedTo')->nullable();
            $table->string('deviceHostname')->nullable();
            $table->string('deviceIPaddress')->nullable();
            $table->string('deviceManufacturer')->nullable();
            $table->string('deviceModel')->nullable();
            $table->string('deviceSerielNumber')->nullable();
            $table->string('warrantyDate')->nullable();
            $table->string('department')->nullable();
            $table->string('deviceLocation')->nullable();
            $table->string('level')->nullable();
            $table->string('operatingSystem')->nullable();
            $table->string('windowVersion')->nullable();
            $table->string('msOfficeAndVersion')->nullable();
            $table->string('officeSerielKey')->nullable();
            $table->string('antivirusAndVersion')->nullable();
            $table->string('domain')->nullable();
        
            $table->string('internetConnection')->nullable();
            $table->string('policyRebootAndShutdown')->nullable();
           
            $table->string('condition(CPU)')->nullable();
            $table->string('condition(monitor)')->nullable();
            $table->string('deployment')->nullable();
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
        Schema::dropIfExists('laptops');
    }
}
