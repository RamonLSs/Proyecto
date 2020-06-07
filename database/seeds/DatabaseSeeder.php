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
        $this->call(EpisodioSeeder::class);
        $this->call(InformacionSeeder::class);
        $this->call(EstadisticaSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PersonajeSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);

    }
}
