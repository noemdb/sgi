<?php

use Illuminate\Database\Seeder;

class MproductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Models\poa\producto\Mproducto::class)->times(200)->create();
        
    }
}
