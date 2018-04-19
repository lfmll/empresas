<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtiquetaEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_etiqueta', function (Blueprint $table){
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('etiqueta_id')->unsigned();
            $table->integer('empresa_id')->unsigned();
            $table->foreign("etiqueta_id")->references("id")->on("etiquetas")->onDelete('cascade');
            $table->foreign("empresa_id")->references("id")->on("empresas")->onDelete('cascade');            
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
        Schema::dropIfExists('etiqueta_empresas');
    }
}
