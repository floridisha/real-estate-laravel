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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->string('amenitie_1')->nullable();
            $table->string('amenitie_2')->nullable();
            $table->string('amenitie_3')->nullable();
            $table->string('amenitie_4')->nullable();
            $table->string('amenitie_5')->nullable();
            $table->string('amenitie_6')->nullable();
            $table->string('amenitie_7')->nullable();
            $table->string('amenitie_8')->nullable();
            $table->string('amenitie_9')->nullable();
            $table->enum('type', ['House', 'Appartament', 'Commercial Space', 'Land']);
            $table->enum('status', ['Sale', 'Rent', 'Rented', 'Sold']);
            $table->float('area');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('garage');
            $table->float('price');
            $table->string('slide_1')->nullable();
            $table->string('slide_2')->nullable();
            $table->string('slide_3')->nullable();
            $table->string('slide_4')->nullable();
            $table->string('slide_5')->nullable();
            $table->string('floor_plan')->nullable();
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
