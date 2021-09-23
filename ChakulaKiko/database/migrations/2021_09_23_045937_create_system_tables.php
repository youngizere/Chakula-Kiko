<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('households', function (Blueprint $table) {

            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address')->default(null);;
            $table->string('phone_number');
            $table->string('address');
            $table->string('profile_image');
            $table->timestamps();

        });

        Schema::create('farmers', function (Blueprint $table) {

            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address')->default(null);;
            $table->string('phone_number');
            $table->string('address');
            $table->string('profile_image');
            $table->timestamps();

        });

        Schema::create('products', function(Blueprint $table) {

            $table->id();
            $table->string('product_type');
            $table->string('product_name');
            $table->string('product_unit_price');

        });

        Schema::create('stores', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->unsignedBigInteger('product_id');
            $table->string('store_location');
            $table->string('product_quantity');
            $table->timestamps();
            $table->foreign('farmer_id')->references('id')->on('farmers'); 
            $table->foreign('product_id')->references('id')->on('products');
            
        });

        Schema::create('orders', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('household_id');
            $table->unsignedBigInteger('product_id');
            $table->string('order_product_quantity');
            $table->date('order_date');
            $table->timestamps();
            $table->foreign('household_id')->references('id')->on('households'); 
            $table->foreign('product_id')->references('id')->on('products');
            
        });

        Schema::create('riders', function (Blueprint $table) {

            $table->id();
            $table->string('rider_name');
            $table->string('rider_phone_number');
            $table->string('rider_vehicle_number_plate');
            $table->timestamps();
            
        });

        Schema::create('shipments', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('rider_id');
            $table->string('shipment_cost');
            $table->date('shipment_date');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders'); 
            $table->foreign('rider_id')->references('id')->on('riders');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('households');
        Schema::dropIfExists('farmers');
        Schema::dropIfExists('products');
        Schema::dropIfExists('stores');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('riders');
        Schema::dropIfExists('shipments');

    }
}
