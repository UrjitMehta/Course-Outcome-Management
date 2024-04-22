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

        Schema::create('final_tbl', function (Blueprint $table) {
            $table->json('a1');
            $table->json('b1');
            $table->json('c1');
            $table->json('d1');
            $table->json('e1');
            $table->json('f1');
            $table->json('a2');
            $table->json('b2');
            $table->json('c2');
            $table->json('a3');
            $table->json('b3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('final_tbl');
    }
};
