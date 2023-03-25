<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discountmodels', function (Blueprint $table) {
            $table->id();

            
            $table->text('name')->nullable();

            $table->string('discount_value')->nullable();
          
            $table->enum('discount_type' , ['precent' , 'flat' ])->default('precent')->nullable();

            $table->text('discount_start')->nullable();
            $table->text('discount_end')->nullable();
            $table->string('discount_number')->nullable();

            
            $table->foreignId('model_car_id')->constrained('model_cars')->onDelete('cascade')->onUpdate('cascade')->nullable();

           
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
        Schema::dropIfExists('discountmodels');
    }
};
