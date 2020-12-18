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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('template_id')->nullable();
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->string('product_name');
            $table->string('slug')->unique()->nullable();
            $table->string('product_description');
            $table->string('product_image');
            $table->string('product_display_name');
            $table->string('product_price');
            $table->string('sale_price');
            $table->string('stock_qty');
            $table->string('shipping_weight')->nullable();
            $table->string('shipping_length')->nullable();
            $table->string('shipping_width')->nullable();
            $table->string('shipping_height')->nullable();
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
