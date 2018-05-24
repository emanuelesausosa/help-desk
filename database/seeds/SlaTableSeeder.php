<?php

use Illuminate\Database\Seeder;
use App\Sla;

class SlaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sla::class, 5)->create();
    }
}
