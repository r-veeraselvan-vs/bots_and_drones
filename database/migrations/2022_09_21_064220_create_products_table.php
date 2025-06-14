<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned(); 
            $table->string('title');
            $table->string('date');
            $table->string('location');
            $table->string('price');
            $table->string('brand');
            $table->string('model_name');
            $table->string('model_year');
            $table->string('year_of_purchase');
            $table->string('description');
            $table->string('e_manual/data_sheet');
            $table->string('owner');
            $table->string('original_invoice_copy');
            $table->string('insurance');
            $table->string('remote_id');
            $table->string('UIN');
            $table->string('package_lists');
            $table->string('damages');
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
        Schema::dropIfExists('products');
    }
}
