<?php

use Illuminate\Database\Seeder;

class TicketEstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TicketEstadoTableSeeder::class, 4)->create();
    }
}
