<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvsharpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvsharps', function (Blueprint $table) {
            $table->id();

            $table->string('deviceManufacturer')->nullable();
            $table->string('deviceModel')->nullable();
            $table->string('deviceSerielNumber')->nullable();
            $table->string('warrantyDate')->nullable();
            $table->string('monitorSize')->nullable();
            $table->string('department')->nullable();
            $table->string('deviceLocation')->nullable();
            $table->string('level')->nullable();
          
         
            $table->string('taggingMonitor')->nullable();
           
            $table->string('purchaseOrder')->nullable();
            $table->string('deliveryOrder')->nullable();
            $table->string('noInvoice')->nullable();
            $table->string('supplier')->nullable();
            $table->string('pricePerUnit')->nullable();
            $table->string('statusAsset')->nullable();
            $table->string('cpu')->nullable();
            $table->string('monitor')->nullable();
            $table->string('deployment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tvsharps');
    }
}
