<?php

use Illuminate\Database\Seeder;

class MproblemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\problema\Mproblema::class)->times(100)->create();
    }
}
