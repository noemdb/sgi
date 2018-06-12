<?php

use Illuminate\Database\Seeder;

class PsupuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\poa\producto\Psupuesto::class)->times(200)->create();
    }
}
