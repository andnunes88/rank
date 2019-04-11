<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ven_vendedor_id')->nullable();
            $table->integer('ven_unidade_id')->nullable();
            $table->integer('ven_categoria_id')->nullable();
            $table->integer('ven_categoria_id')->nullable();
            $table->string('ven_aluno')->nullable();
            $table->string('ven_telefone')->nullable();
            $table->string('ven_email')->nullable();
            $table->decimal('ven_valor', 10, 2)->nullable();
            $table->timestamp('ven_data')->nullable();
            $table->string('ven_status')->nullable();
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
        Schema::dropIfExists('vendas');
    }
}
