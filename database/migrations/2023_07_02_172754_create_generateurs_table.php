<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generateurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marque_id')->constrained('marque_g_e_s');
            $table->foreignId('capacite_id')->constrained('capacite_g_e_s');
            $table->foreignId('moteur_id')->constrained('moteur_g_e_s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generateurs');
    }
};
