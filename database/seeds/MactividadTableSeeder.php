<?php

use Illuminate\Database\Seeder;

class MactividadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\actividades\Mactividad::class)->times(200)->create();
    }
}
