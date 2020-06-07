<?php

use App\Episodio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EpisodioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('episodios')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Episodio::create([
            'nombre'=>'Juego Original',
        ]);

        Episodio::create([
            'nombre'=>'Saga Dragon Ball',
        ]);

        Episodio::create([
            'nombre'=>'Saga Saiyan (Z)',
        ]);

        Episodio::create([
            'nombre'=>'Saga Frieza (Z)',
        ]);

        Episodio::create([
            'nombre'=>'Saga Androides (Z)',
        ]);

        Episodio::create([
            'nombre'=>'Saga Celula (Z)',
        ]);

        Episodio::create([
            'nombre'=>'Saga Majin Buu (Z)',
        ]);

        Episodio::create([
            'nombre'=>'Saga Dragon Ball Black Star',
        ]);

        Episodio::create([
            'nombre'=>'Saga Super Baby',
        ]);

        Episodio::create([
            'nombre'=>'Saga super #17',
        ]);

        Episodio::create([
            'nombre'=>'Saga Dragones oscuros',
        ]);

        Episodio::create([
            'nombre'=>'Saga Resurreccion de Frieza',
        ]);

        Episodio::create([
            'nombre'=>'Sagas originales del anime',
        ]);

        Episodio::create([
            'nombre'=>'Saga de las peliculas',
        ]);

        Episodio::create([
            'nombre'=>'Saga Dios de la destruccion Champa',
        ]);

        Episodio::create([
            'nombre'=>'Saga Trunks del futuro (Super)',
        ]);

        Episodio::create([
            'nombre'=>'Saga Supervivencia de los universos',
        ]);

        Episodio::create([
            'nombre'=>'Saga del dios de la destruccion de Beerus',
        ]);

        Episodio::create([
            'nombre'=>'Dragon Ball FighterZ',
        ]);
    }
}
