<?php

use Illuminate\Database\Seeder;

class FunidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\actividades\Funidad::class)->times(40)->create();
    }
}
