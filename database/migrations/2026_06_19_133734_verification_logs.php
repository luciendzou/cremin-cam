<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('verification_logs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_saisi');
            $table->foreignId('guest_id')->nullable()->constrained('guests')->nullOnDelete();
            $table->string('result'); // valide | invalide | deja_utilise
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('verification_logs');
    }
};

