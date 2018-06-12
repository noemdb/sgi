<?php

use Illuminate\Database\Seeder;

class PresupuestariaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Models\poa\presupuestaria\Presupuestaria::class)->times(40)->create();
        
    }
}
