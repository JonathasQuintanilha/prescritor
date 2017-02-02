<?php

use Illuminate\Database\Seeder;

class PopulaClinicas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinicas')->insert([

        	'nome' => 'Top Trauma',
        	'estado' => 'RJ',
        	'cep' => '26.385.130',
        	'logradouro' => 'Quati',
        	'numero' => '907',
        	'telefone1' => '(21) 3698-3090',
        	'telefone2' => '(21) 3698-4557',
        	'email' => 'contato@toptrauma.com.br',
        	'logo' => 'images/clinicas/logotoptrauma.png',
        ]);
    }
}



