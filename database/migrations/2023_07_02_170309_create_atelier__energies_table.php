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
        Schema::create('atelier__energies', function (Blueprint $table) {
            $table->id();
             $table->integer('nbre_slot');
            $table->integer('nbre_redresseur');
            $table->foreignId('baie_id')->constrained('baies');
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
        Schema::dropIfExists('atelier__energies');
    }
};
