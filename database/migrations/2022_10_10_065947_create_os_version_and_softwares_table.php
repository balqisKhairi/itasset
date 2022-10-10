<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsVersionAndSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os_version_and_softwares', function (Blueprint $table) {
            $table->string('category_id')->nullable();
            $table->string('operatingSystem')->nullable();
            $table->string('windowVersion')->nullable();
            $table->string('MSofficeAndVersion')->nullable();
            $table->string('antivirusAndVersion')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('os_version_and_softwares');
    }
}
