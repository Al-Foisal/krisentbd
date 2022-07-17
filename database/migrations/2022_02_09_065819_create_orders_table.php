<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->integer('shipping_charge')->default(0);
            $table->integer('additional_charge')->default(0);
            $table->string('coupon_code')->default('N/A');
            $table->integer('coupon_discount')->default(0);

            $table->string('payment_type')->default('COD');
            $table->string('payment_number')->nullable();
            $table->string('trx_id')->nullable();

            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('city');
            $table->string('area');
            $table->string('zip_code')->nullable();
            $table->string('address');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('total_price');
            $table->integer('status')->default(1);

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
        Schema::dropIfExists('orders');
    }
}
