<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = [
      'name', 'detail','cidade','bairro','rua','numero','cep','uf','cpf','rg','estado_civil','conjuge','telefone','empresa',
      'salario_base','endereco_comercial','telefone_empresa','escolaridade','curso',
      'membro_desde','batismo_aguas','batismo_santo','livros_religiosos','funcao_na_igreja',
      'funcao_na_igreja_desde','chamada_minsterio','obs'
    ];
}