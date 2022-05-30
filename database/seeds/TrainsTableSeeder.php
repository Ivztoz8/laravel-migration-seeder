<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train -> azienda = 'Trenitalia';
        $train -> stazione_partenza = 'Roma';
        $train -> stazione_arrivo = 'Napoli';
        $train -> orario_partenza = 712;
        $train -> orario_arrivo = 1028;
        $train -> cod_treno = 'A104928';
        $train -> num_carrozze  = 6;
        $train -> in_orario = 1;
        $train -> cancellato = 0;
        
        $train -> save();
    }
}
