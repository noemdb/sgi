<?php

use Illuminate\Database\Seeder;

class PoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 5; $i++) { 
            factory(App\Models\poa\Poa::class)->times(1)->create();
        }
    }
}
