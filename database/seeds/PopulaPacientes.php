<?php

use Illuminate\Database\Seeder;

class PopulaPacientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([

        	'nome' => 'Jônathas Quintanilha',
        	'idade' => '30',
            'rg' => '22.072.745-5',

        ]);
    }
}
