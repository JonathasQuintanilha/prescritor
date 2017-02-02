<?php

use Illuminate\Database\Seeder;

class PopulaEstados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('estados')->insert([
                              
                 'nome' => 'Rondônia',
                 'abbr' => 'RO',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Acre',
                 'abbr' => 'AC',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Amazonas',
                 'abbr' => 'AM',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Roraima',
                 'abbr' => 'RR',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Pará',
                 'abbr' => 'PA',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Amapá',
                 'abbr' => 'AP',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Tocantins',
                 'abbr' => 'TO',
             ]);
         DB::table('estados')->insert([
                 'nome' => 'Maranhão',
                 'abbr' => 'MA',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Piauí',
                 'abbr' => 'PI',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Ceará',
                 'abbr' => 'CE',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Rio Grande do Norte',
                 'abbr' => 'RN',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Paraíba',
                 'abbr' => 'PB',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Pernambuco',
                 'abbr' => 'PE',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Alagoas',
                 'abbr' => 'AL',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Sergipe',
                 'abbr' => 'SE',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Bahia',
                 'abbr' => 'BA',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Minas Gerais',
                 'abbr' => 'MG',
             ]);
         DB::table('estados')->insert([        
         		'nome' => 'Espírito Santo',
                 'abbr' => 'ES',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Rio de Janeiro',
                 'abbr' => 'RJ',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'São Paulo',
                 'abbr' => 'SP',
             ]);
          DB::table('estados')->insert([       
                 'nome' => 'Paraná',
                 'abbr' => 'PR',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Santa Catarina',
                 'abbr' => 'SC',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Rio Grande do Sul',
                 'abbr' => 'RS',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Mato Grosso do Sul',
                 'abbr' => 'MS',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Mato Grosso',
                 'abbr' => 'MT',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Goiás',
                 'abbr' => 'GO',
             ]);
         DB::table('estados')->insert([        
                 'nome' => 'Distrito Federal',
                 'abbr' => 'DF',
          ]);
    }
}


