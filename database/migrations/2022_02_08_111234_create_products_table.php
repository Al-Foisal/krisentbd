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

            $table->unsignedInteger('category_id');
            $table->unsignedInteger('subcategory_id')->nullable();
            $table->unsignedInteger('childcategory_id')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->string('name');
            $table->string('slug');

            $table->integer('buying')->nullable();
            $table->integer('selling');
            $table->integer('discount')->nullable();
            $table->integer('discount_price')->nullable();

            $table->unsignedInteger('quantity');

            $table->text('short_details');
            $table->longText('details');

            $table->string('brand')->nullable();
            $table->string('origin')->nullable();
            $table->string('weight')->nullable();
            $table->string('box_size')->nullable();
            $table->string('inside_box')->nullable();
            $table->string('material')->nullable();

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
