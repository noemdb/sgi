<?php

use Illuminate\Database\Seeder;

class institucionTableSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 4; $i++) { 
            factory(App\Models\poa\Institucion::class)->times(1)->create();
        }
    }
}
