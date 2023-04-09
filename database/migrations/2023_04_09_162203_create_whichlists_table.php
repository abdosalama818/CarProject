<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    
    public function up()
    {
        Schema::create('whichlists', function (Blueprint $table) {
            $table->id();
            $table->text('car_id')->nullable();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('whichlists');
    }
};
