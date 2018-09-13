<?php

use Illuminate\Database\Seeder;

class AestadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        for ($i=0; $i < 180; $i++) { 
            factory(App\Models\poa\actividades\Aestado::class)->times(1)->create();
        }
    }
}
