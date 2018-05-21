<?php

use Illuminate\Database\Seeder;

class ContenidoPortadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ContenidoPortada::class, 10)->create();
    }
}
