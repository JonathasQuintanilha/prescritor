<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	   //$this->call(PopulaClinicas::class);
    	   //$this->call(PopulaPacientes::class);
    	   //$this->call(PopulaMedicamentos::class);
           $this->call(PopulaUsos::class);
    }
}
