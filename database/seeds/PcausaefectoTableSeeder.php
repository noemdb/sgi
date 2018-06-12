<?php

use Illuminate\Database\Seeder;

class PcausaefectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\problema\Pcausaefecto::class)->times(100)->create();
    }
}
