<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tablets', function (Blueprint $table) {
            $table->string('purchaseOrder')->nullable();
            $table->string('deliveryOrder')->nullable();
            $table->string('invoiceNo')->nullable();
            $table->string('supplier')->nullable();
            $table->string('pricePerUnit')->nullable();
            $table->string('image')->nullable();
            $table->string('folder')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
