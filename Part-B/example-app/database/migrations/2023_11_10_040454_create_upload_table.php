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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('rollno');
            $table->integer('co1');
            $table->double('p_co1');
            $table->integer('co2');
            $table->double('p_co2');
            $table->integer('co3');
            $table->double('p_co3');
            $table->integer('co4');
            $table->double('p_co4');
            $table->integer('co5');
            $table->double('p_co5');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload');
    }
};
