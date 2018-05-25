<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
        $this->call(OrganizacionsTableSeeder::class);
        $this->call(CategoriaPortadasTableSeeder::class);
        $this->call(ContenidoPortadasTableSeeder::class);
        $this->call(OrganizacionDataTableSeeder::class);
        $this->call(SlaTableSeeder::class);
        $this->call(TicketPrioridadTableSeeder::class);
        $this->call(TopicosTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
    }
}
