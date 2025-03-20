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
        Schema::create('trains', function (Blueprint $table) {
            $table->id()->unique();
            $table->string("azienda", 50);
            $table->string("stazPartenza",50);
            $table->string("stazArrivo",50);
            $table->dateTime("oraPartenza");
            $table->dateTime("oraArrivo");
            $table->bigInteger("codice")->unique();
            $table->tinyInteger("nCarrozze");
            $table->boolean("inOrario");
            $table->boolean("cancellato");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
