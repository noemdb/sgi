<?php

use Illuminate\Database\Seeder;

class PindicadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\producto\Pindicador::class)->times(200)->create();
    }
}
