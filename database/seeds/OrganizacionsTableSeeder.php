<?php

use Illuminate\Database\Seeder;

class OrganizacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Organizacion::class, 4)->create();
    }
}
