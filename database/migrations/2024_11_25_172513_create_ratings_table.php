<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id(); 

            $table->string('book_id', 255);
            $table->string('user_id', 255);
            $table->string('rating', 255);
            $table->timestamps(0); 

        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
