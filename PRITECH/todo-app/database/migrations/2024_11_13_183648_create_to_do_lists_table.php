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
        Schema::create('to_do_lists', function (Blueprint $table) {
            $table->id(); // Krijon ID për çdo element në listë
            $table->string('titulli'); // Titulli i detyrës
            $table->text('pershkrimi'); // Përshkrimi i detyrës
            $table->timestamp('data_krijimit')->useCurrent(); // Data e krijimit, përdor datën aktuale
            $table->boolean('status')->default(false); // Statusi i detyrës (i papërfunduar fillimisht)
            $table->timestamps(); // Krijon kolona për created_at dhe updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_do_lists');
    }
};
