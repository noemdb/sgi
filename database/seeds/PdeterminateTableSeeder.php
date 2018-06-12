<?php

use Illuminate\Database\Seeder;

class PdeterminateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\problema\Pdeterminante::class)->times(100)->create();
    }
}
