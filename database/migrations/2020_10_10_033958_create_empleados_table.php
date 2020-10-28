<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Nombre');  
            $table->string('ApellidoPaterno');  
            $table->string('ApellidoMaterno');
            $table->string('Correo');    
            $table->string('Foto');  

            $table->timestamps();
            
            // Para más informacion sobre el tipado -> https://laravel.com/docs/5.0/schema
        });

        // PARA EJECUTAR CREACIÓN DE CAMPOS DE LA TABLA ->  " php artisan migrate "
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
