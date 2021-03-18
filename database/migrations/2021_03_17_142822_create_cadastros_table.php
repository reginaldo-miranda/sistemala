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
            $table->id();
            $table->timestamps();
//---------------------------------

   // $table->Codigo varchar(15),

    $table->smallint('Ativo');
    $table->string('Nome', 100);

    $table->string('Fantasia',80);

     Fantasia varchar(50),

     $table->string('Endereco', 100);
    Endereco varchar(50);

    $table->string('bairro', 40);
    Bairro varchar(20),

    $table->string('Cidade', 100);
    Cidade varchar(20),

    $table->string('Cep', 11);
    CEP varchar(9),

    $table->string('Uf', 2);
    UF varchar(2),

    $table->string('Fone1', 16);
    Fone1 varchar(15),

    $table->string('fone2', 16);
    Fone2 varchar(15),

    $table->string('CompFone', 16);
    CompFone varchar(15),

    $table->string('Fax', 16);
    Fax varchar(15),


    $table->string('Documento1', 20);
    Documento1 varchar(20),

    $table->string('Documento2', 20);
    Documento2 varchar(20),

    $table->string('Pessoa', 1);
    Pessoa varchar(1),

    $table->smallint('flagCli');
    FlagCli smallint,


    $table->smallint('flagFor');
    FlagFor smallint,

    $table->smallint('flagVen');
    FlagVen smallint,

    $table->smallint('flagTransp');
    FlagTransp smallint,

    $table->smallint('flagConp');
    FlagConP smallint,

    $table->smallint('flagConc');
    FlagConC smallint,

    $table->string('Email', 60);
    Email varchar(50),

    $table->text('Obs');
    Obs text,

    $table->string('Usuario', 50);
    Usuario varchar(15),


    $table->date('DataInc');
    DataInc date,


    $table->date('DataAlt');
    DataAlt date,

    $table->integer('EmpresaAlt');
    EmpresaAlt int,

    $table->float('ComVend');
    ComVend float,

    $table->string('CodVend', 15);
    CodVend varchar(15),

    $table->string('CodTransp', 15);
    CodTransp varchar(15),

    
    $table->smallint('flagTecnico');
    FlagTecnico smallint,

    $table->integer('Bloqueado');
    Bloqueado int,

    $table->string('MotivoBloqueio', 50);
    MotivoBloqueio varchar(50),

    $table->float('DescMaxVend');
    DescMaxVend float,

    $table->string('SenhaVend', 15);
    SenhaVend varchar(15),

    $table->float('DescFornec');
    DescFornec float,

    $table->integer('VisualDesc');
    VisualDesc int,


    $table->string('Regiao');
    CondPgto varchar(15),

    $table->float('LimCredito');
    LimCredito float,

    $table->float('SaldoUtilizado');
    SaldoUtilizado float,

    
    Transmitido smallint,
    FlagGuia smallint,
    CodPais int,
    RefEntrega varchar(40),
    FlagMotorista smallint,
    EmpresaFat smallint,
    FlagCRM smallint,
    CodGuia varchar(15),
    ComisGuia float,
    CodTabPreco varchar(15),
    CodCtaRazao varchar(6),
    FlagGerRisco smallint,
    ComplEnd varchar(30),
    TipoNota float,
    FlagFuncionario smallint,
    FlagPrestServ smallint,
    FlagEntregador smallint,
    FlagNFeAnfavea smallint,
    DocEstrangeiro varchar(20),
    HoraAlt time,
    EndEntrega int,
    EndCobranca int,
   primary key (Codigo));



//---------------------------------------






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
