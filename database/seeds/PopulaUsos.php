<?php

use Illuminate\Database\Seeder;

class PopulaUsos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usos')->insert([
        	'nome' => 'Injetável',
        ]);

        DB::table('usos')->insert([
            'nome' => 'Oral',
        ]);

        
    }
}
