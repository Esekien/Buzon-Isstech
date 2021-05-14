<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuejaSugerenciaFelicitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queja__sugerencia__felicitacions', function (Blueprint $table) {
            $table->bigIncrements('id_Queja_Sugerencia_Felicitacion');

            $table->unsignedBigInteger('id_clips_fk')
            ->nullable();
            $table->foreign('id_clips_fk')
            ->references('id')
            ->on('clips')
            ->nullable();
            $table->unsignedBigInteger('id_nodhabientes_fk')->nullable();
            $table->foreign('id_nodhabientes_fk')
            ->references('id')
            ->on('no_derechohabientes')
            ->nullable();
            $table->boolean('anonimo')->nullable();
            $table->unsignedBigInteger('telefono_celular')->nullable();
            $table->string('correo')->nullable();
            $table->unsignedBigInteger('id_direccion_fk')->nullable();
            $table->foreign('id_direccion_fk')
            ->references('id_direccion')
            ->on('direccions')
            ->nullable();
            $table->string('tipo');
            $table->string('nombre_del_servidor_publico');
            $table->string('cargo');
            $table->string('area_de_servicio');
            $table->string('descripcion');
            $table->boolean('estatus')->default(True);
            $table->dateTime('fecha_hora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queja__sugerencia__felicitacions');
    }
}
