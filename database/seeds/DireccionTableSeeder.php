<?php

use Illuminate\Database\Seeder;

class DireccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 20; $i++) { 
            factory(App\Models\poa\Direccion::class)->times(1)->create();
        }
    }
}
