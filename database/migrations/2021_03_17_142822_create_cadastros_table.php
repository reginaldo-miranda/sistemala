<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
        
            $table->increments('id_codigo');
            // $table->Codigo varchar(15),
            $table->smallint('Ativo');
            $table->string('Nome', 100);
            $table->string('Fantasia',80);
            $table->string('Endereco', 100);
            $table->string('bairro', 40);
            $table->string('Cidade', 100);
            $table->string('Cep', 11);
            $table->string('Uf', 2);
            $table->string('Fone1', 16);
            $table->string('fone2', 16);
            $table->string('CompFone', 16);
            $table->string('Fax', 16);
            $table->string('Documento1', 20);
            $table->string('Documento2', 20);
            $table->string('Pessoa', 1);
            $table->smallint('flagCli');
            $table->smallint('flagFor');
            $table->smallint('flagVen');
            $table->smallint('flagTransp');
            $table->smallint('flagConp');
            $table->smallint('flagConc');
            $table->string('Email', 60);
            $table->text('Obs');
            $table->string('Usuario', 50);
            $table->date('DataInc');
            $table->date('DataAlt');
            $table->integer('EmpresaAlt');
            $table->float('ComVend');
            $table->string('CodVend', 15);
            $table->string('CodTransp', 15);
            $table->smallint('flagTecnico');
            $table->integer('Bloqueado');
            $table->string('MotivoBloqueio', 50);
            $table->float('DescMaxVend');
            $table->string('SenhaVend', 15);
            $table->float('DescFornec');
            $table->integer('VisualDesc');
            $table->string('Regiao');
            $table->float('LimCredito');
            $table->float('SaldoUtilizado');
            $table->smallint('Transmitido');
            $table->smallint('FlagGuia');
            $table->integer('CodPais');
            $table->smallint('FlagMotorista');
            $table->smallint('EmpresaFat');
            $table->smallint('FlagCRM');
            $table->string('CodGuia');
            $table->float('ComisGuia');
            $table->string('CodTabPreco');
            $table->string('CodCtaRazao', 6);
            $table->smallint('FlagGerRisco');
            $table->string('ComplEnd',30);
            $table->float('TipoNota');
            $table->smallint('FlagFuncionario');
            $table->smallint('FlagPrestServ');
            $table->smallint('FlagEntregador');
            $table->smallint('FlagNFeAnfavea');
            $table->string('DocEstrangeiro',20);
            $table->time('HoraAlt');
            $table->integer('EndEntrega');
            $table->integer('EndCobranca');
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
        Schema::dropIfExists('cadastros');
    }
}
