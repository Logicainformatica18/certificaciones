<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('exams', function (Blueprint $table) {
       
           $table->string("image1")->nullable();
           $table->string("image2")->nullable();
           $table->string("image3")->nullable();
           $table->string("image4")->nullable();
           $table->string("question_image")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
    }
};
