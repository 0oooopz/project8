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
            $table->BigIncrements('id');

            $table->integer('sku');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();

            $table->float('price_user');
            $table->float('price_3_opt');
            $table->float('price_8_opt');
            $table->float('price_dealer');
            $table->float('price_vip');

            $table->integer('category_id');
            $table->integer('stock');

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
