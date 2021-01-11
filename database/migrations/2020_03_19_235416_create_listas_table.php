<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->string('cep')->nullable();
            $table->string('uf')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('conjuge')->nullable();
            $table->string('telefone')->nullable();
            $table->string('empresa')->nullable();
            $table->string('salario_base')->nullable();
            $table->string('endereco_comercial')->nullable();
            $table->string('telefone_empresa')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('curso')->nullable();
            $table->string('membro_desde')->nullable();
            $table->string('batismo_aguas')->nullable();
            $table->string('batismo_santo')->nullable();
            $table->string('livros_religiosos')->nullable();
            $table->string('funcao_na_igreja')->nullable();
            $table->string('funcao_na_igreja_desde')->nullable();
            $table->string('chamada_minsterio')->nullable();
            $table->string('obs')->nullable();
            $table->text('detail')->nullable();
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
        Schema::dropIfExists('listas');
    }
}
