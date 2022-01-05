<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_plan');
            $table->string('lp_referencia');
            $table->string('lp_SKU');
            $table->string('lp_descripcion');
            $table->integer('lp_pcb');
            $table->integer('lp_cantidad');
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
        Schema::dropIfExists('linea_plans');
    }
}
