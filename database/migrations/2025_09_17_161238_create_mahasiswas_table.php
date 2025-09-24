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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        public function up(): void
{
        Schema::create('mahasiswas', function (Blueprint $table) {
             $table->id(); // Field ke-1: ID
             $table->string('nim', 10)->unique(); 
             $table->string('nama', 100); 
             $table->string('jurusan', 50); 
             $table->integer('angkatan'); 
             $table->string('email')->nullable(); 
             $table->string('nomor_hp', 15)->nullable(); 
             $table->timestamps(); 
    });
}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
