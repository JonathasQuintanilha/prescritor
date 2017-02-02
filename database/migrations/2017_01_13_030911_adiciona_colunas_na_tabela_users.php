<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaColunasNaTabelaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('users', function (Blueprint $table) {
		    $table->string('sexo', 1);
		    $table->string('nascimento', 10);
		    $table->string('cpf', 14);
		    $table->string('estado', 2);
		    $table->boolean('aceitetermo');
		    
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        		    $table->dropColumn('sexo');
        		    $table->dropColumn('nascimento');
        		    $table->dropColumn('cpf');
        		    $table->dropColumn('estado');
        		    $table->dropColumn('aceitetermo');
        		});
    }
}
