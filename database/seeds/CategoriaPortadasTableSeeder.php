<?php

use Illuminate\Database\Seeder;

class CategoriaPortadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CategoriaPortada::class, 6)->create();
    }
}
