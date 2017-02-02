<?php

use Illuminate\Database\Seeder;

class PopulaMedicamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
DB::table('medicamentos')->insert([

'uso_id' => 1,
'nome' => 'DIPROSPAN',
'miligramas' => NULL,
'administracao' => 'Aplicar 01 dose intramuscular na região glutea.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'TORAGESIC',
'miligramas' => '10',
'administracao' => 'Tomar 01 comprimido de 8/8h em caso de dor.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'VIMOVO',
'miligramas' => NULL,
'administracao' => 'TOMAR 01 COMPRIMIDO DE 12/12H POR 10 DIAS',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'ARTROLIVE SACHÊ',
'miligramas' => NULL,
'administracao' => 'Tomar 01 dose após almoço por 90 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'ALGINAC RETARD',
'miligramas' => NULL,
'administracao' => 'Tomar 01 comprimido 01 vez ao dia por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'CONDRES',
'miligramas' => NULL,
'administracao' => 'Tomar 01 comprimido 01 vez ao dia por 90 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'ARTRODAR',
'miligramas' => '50',
'administracao' => 'Tomar 01 comprimido 01 vez ao dia por 03 meses.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MAXSULIDE',
'miligramas' => '400',
'administracao' => 'Tomar 01 comprimido de 12/12h por 05 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'TANDRILAX',
'miligramas' => NULL,
'administracao' => 'TOMAR 01 COMPRIMIDO DE 08/08H POR 07 DIAS.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MIOFLEX A',
'miligramas' => NULL,
'administracao' => 'TOMAR 01 COMPRIMIDO DE 08/08H POR 05 DIAS.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'OSSOTRAT D',
'miligramas' => NULL,
'administracao' => 'Tomar 01 comprimido de 12/12h por 06 meses .',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'ADDERA D3',
'miligramas' => NULL,
'administracao' => 'Tomar 04 gotas 01 vez ao dia por 06 meses.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'ALENDRONATO SÓDICO',
'miligramas' => '70',
'administracao' => 'Tomar 01 comprimido 01 vez por semana em jejum com copo duplo de água, não deitar e nem comer por 40 minutos.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'OSTEOFORM',
'miligramas' => '70',
'administracao' => 'Tomar 01 comprimido 01 vez por semana em jejum com copo duplo de águam, não deitar e nem comer por 40 minutos .',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'OSTEOTRAT',
'miligramas' => '35',
'administracao' => 'Tomar 01 comprimido 01 vez por semana em jejum com copoduplo de água,não deitar e nem comer por 40 minutos .',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'GLICOLIVE',
'miligramas' => NULL,
'administracao' => 'Tomar 1 sachê ao dia.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 1,
'nome' => 'DEXACITRONEURIN',
'miligramas' => NULL,
'administracao' => 'Aplicar 01 dose intramuscular na região glutea.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 1,
'nome' => 'DEXALGEN',
'miligramas' => NULL,
'administracao' => 'Aplicar 01 dose intramuscular na região glútea em dias alternados (máximo 03 doses).',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 1,
'nome' => 'BETATRINTA',
'miligramas' => NULL,
'administracao' => 'Aplicar 01 dose intramuscular na região glutea.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 1,
'nome' => 'DUOFLAN',
'miligramas' => NULL,
'administracao' => 'Aplicar 01 dose intramuscular na região glutea.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'OSTEOBAN',
'miligramas' => '150',
'administracao' => 'Tomar 01 comprimido 01 vez por MÊS em jejum com um copo duplo de água, não deitar e nem comer por 40 minutos após a tomada do medicamento.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'LISADOR',
'miligramas' => NULL,
'administracao' => 'Tomar 01 comprimido de 8/8h em caso de dor.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'PARACETAMOL',
'miligramas' => '500',
'administracao' => 'Tomar 01 comprimido de 12/12h por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'PARACETAMOL',
'miligramas' => '750',
'administracao' => 'Tomar 01 comprimido de 12/12h por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MELOCOX 7',
'miligramas' => '5',
'administracao' => 'Tomar 01 comprimido de 12/12h por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'OMEPRAZOL',
'miligramas' => '20',
'administracao' => 'Tomar 01 comprimido de 12/12h por 15 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MELOCOX',
'miligramas' => '15',
'administracao' => 'Tomar 01 comprimido ao dia por 5 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MILGAMMA',
'miligramas' => '150',
'administracao' => 'Tomar 01 comprimido pela manhã durante 90 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MIRTAX',
'miligramas' => '5',
'administracao' => 'Tomar 01 comprimido a noite por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MIRTAX',
'miligramas' => '10',
'administracao' => 'Tomar 01 comprimido a noite por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MUSCULARE',
'miligramas' => '5',
'administracao' => 'Tomar 01 comprimido a noite por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MUSCULARE',
'miligramas' => '10',
'administracao' => 'Tomar 01 comprimido a noite por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'MIOSANCAF',
'miligramas' => '5',
'administracao' => 'Tomar 01 comprimido a noite por 10 dias.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'ÉTNA',
'miligramas' => NULL,
'administracao' => 'Tomar 01 comprimido de manhã durante 03 meses.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([



'uso_id' => 2,
'nome' => 'PROSSO',
'miligramas' => NULL,
'administracao' => 'Tomar 01 comprimido 01 vez ao dia durante 06 meses.',
'controlado' => 0,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'DOREN', 
'miligramas' => '75MG',
'administracao' =>' Tomar 01 comprimido a noite por 03 meses.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'DOREN', 
'miligramas' => '150MG',
'administracao' =>' Tomar 01 comprimido a noite por 03 meses.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'AMITRIL', 
'miligramas' => '10MG',
'administracao' =>' Tomar 01 comprimido a noite por 03 meses.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'AMITRIL', 
'miligramas' => '25MG',
'administracao' =>' Tomar 01 comprimido a noite por 03 meses.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'GABAPENTINA', 
'miligramas' => '300MG',
'administracao' =>' Tomar 01 comprimido a noite por 03 meses.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'GABAPENTINA', 
'miligramas' => '400MG',
'administracao' =>' Tomar 01 comprimido a noite por 03 meses.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'GABAPENTINA', 
'miligramas' => '600MG',
'administracao' =>' Tomar 01 comprimido a noite por 03 meses.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'TRAMADOL', 
'miligramas' => '50MG',
'administracao' =>' Tomar 01 comprimido de 08/08h em caso de dor.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'TRAMADON', 
'miligramas' => '50MG',
'administracao' =>' Tomar 01 comprimido de 08/08h em caso de dor.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'TRAMAL', 
'miligramas' => '50MG',
'administracao' =>' Tomar 01 comprimido de 08/08h em caso de dor.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'ARCOXIA', 
'miligramas' => '60MG',
'administracao' =>' Tomar 01 comprimido 01 vez ao dia por 07 dias.',
'controlado' => 1,

]);

DB::table('medicamentos')->insert([

'uso_id' => 2,
'nome' => 'ARCOXIA', 
'miligramas' => '90MG',
'administracao' =>' Tomar 01 comprimido 01 vez ao dia por 07 dias.',
'controlado' => 1,

]);









    }
}




