<?php

use Illuminate\Database\Seeder;

class TicketPrioridadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TicketPrioridad::class, 5)->create();
    }
}
