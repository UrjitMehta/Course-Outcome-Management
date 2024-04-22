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
        Schema::create('CoTable', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('questions');
            $table->string('co')->nullable();
            $table->string('marks'); 
            $table->string('coIndex'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CoTable');
    }
};
