<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prii', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente')->nullable();
            $table->string('lugar')->nullable();
            $table->string('um')->nullable();
            $table->string('tipo_explotacion')->nullable();
            $table->string('minerales')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('medicion')->nullable();
            $table->string('profundidad')->nullable();
            $table->string('nivel_agua')->nullable();
            $table->string('nivel_organico')->nullable();
            $table->string('nivel_roca')->nullable();
            $table->text('componentes')->nullable();
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
        Schema::dropIfExists('prii');
    }
}
