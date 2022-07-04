<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_type_id');
            $table->string('name');
            $table->string('desc');
            $table->integer('quantity')->default(0);
            $table->integer('buying_price')->nullable();
            $table->integer('selling_price')->nullable();
            $table->integer('alert_quantity')->nullable();
            $table->boolean('is_bulk')->default(false);
            $table->timestamps();
            $table->softDeletes();

            //Relationships
            $table->foreign('asset_type_id')->references('id')->on('asset_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
