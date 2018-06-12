<?php

use Illuminate\Database\Seeder;

class MobjetivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\objetivo\Mobjetivo::class)->times(100)->create();
    }
}
