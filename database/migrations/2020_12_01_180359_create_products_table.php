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

	        $table->foreign('category_id')->references('id')->on('categories');
	        $table->unsignedBigInteger('category_id');

	        $table->integer('sku');
	        $table->string('name');
	        $table->string('slug');
	        $table->text('description')->nullable();

	        $table->float('price_user');
	        $table->float('price_3_opt');
	        $table->float('price_8_opt');
	        $table->float('price_dealer');
	        $table->float('price_vip');

	        $table->unsignedInteger('stock');
	        $table->boolean('sale')->default(false);
	        $table->boolean('active')->default(false);

	        $table->unsignedInteger('views')->default(0);
	        $table->unsignedInteger('sales count')->default(0);

	        $table->timestamps();

	        $table->index('id');
	        $table->index('slug');
	        $table->index('sku');
	        $table->index('name');
	        $table->index('category_id');

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
