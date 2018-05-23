<?php

use Illuminate\Database\Seeder;

class OrganizacionDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrganizacionData::class, 4)->create();
    }
}
