<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('property_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone_number')->nullable();
            $table->text('property_address')->nullable();
            $table->string('zip_code')->nullable();
            $table->integer('total_bedrooms')->nullable();
            $table->integer('total_bathrooms')->nullable();
            $table->string('total_sq_feet')->nullable();
            $table->string('property_image')->nullable();
            $table->string('property_description')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
