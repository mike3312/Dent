<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NuevosDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function ($table) {
            $table-> string('cantidad')->nullable();
            $table-> string('costo')->nullable();
            $table-> string('precio_venta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function ($table) {
            $table-> dropcolumn('cantidad');
            $table-> dropcolumn('costo');
            $table-> dropcolumn('precio_venta');
        });
    }
}
