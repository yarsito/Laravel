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
        Schema::create('peliculas', function(Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->string('year');
            $table->string('director');
            $table->string('poster');
            $table->boolean('rented');
            $table->text('synopsis');
            $table->timestamps();
        });
        Schema::table('peliculas', function(Blueprint $tabla){
            $tabla->string('protagonist')->after('director')->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
