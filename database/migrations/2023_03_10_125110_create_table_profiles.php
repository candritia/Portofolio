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
        Schema::create('profiles', function (Blueprint $table) {
            $table->string('id',30);
            $table->string('nama',50);
            $table->string('jk',50);
            $table->text('foto');
            $table->string('aboutme',500);
            $table->string('nohp',20);
            $table->string('alamat',50);
            $table->primary('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
