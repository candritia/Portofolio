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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->string('id',30);
            $table->text('pp');
            $table->string('nm',50);
            $table->string('identitas',50);
            $table->string('about',10000);
            // $table->string('about1',10000);
            $table->text('project');
            // $table->text('pa');
            // $table->text('pb');
            // $table->text('pc');
            // $table->text('pd');
            $table->string('contact',50);
            $table->string('nohp',50);
            $table->string('email',50);
            $table->primary('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
