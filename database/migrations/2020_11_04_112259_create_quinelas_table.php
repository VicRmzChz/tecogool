<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuinelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quinelas', function (Blueprint $table) {
            $table->id();
            $table->char('partido_1', 1);
            $table->char('partido_2', 1);
            $table->char('partido_3', 1);
            $table->char('partido_4', 1);
            $table->char('partido_5', 1);
            $table->char('partido_6', 1);
            $table->char('partido_7', 1);
            $table->char('partido_8', 1);
            $table->char('partido_9', 1);
            $table->foreignId('cliente_id')->constrained('clientes');
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
        Schema::dropIfExists('quinelas');
    }
}