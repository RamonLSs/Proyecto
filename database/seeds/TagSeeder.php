<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tags')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Tag::create([
            'nombre'=>'Son Family',
        ]);

        Tag::create([
            'nombre'=>'Vegeta Family',
        ]);

        Tag::create([
            'nombre'=>'Super Guerreros',
        ]);

        Tag::create([
            'nombre'=>'Guerreras',
        ]);

        Tag::create([
            'nombre'=>'Ejercito de Frieza',
        ]);

        Tag::create([
            'nombre'=>'Fuerza Ginyu',
        ]);

        Tag::create([
            'nombre'=>'Saiyan',
        ]);

        Tag::create([
            'nombre'=>'Saiyan Hibridos',
        ]);

        Tag::create([
            'nombre'=>'Super Saiyan',
        ]);

        Tag::create([
            'nombre'=>'Universo 2',
        ]);

        Tag::create([
            'nombre'=>'Universo 6',
        ]);

        Tag::create([
            'nombre'=>'Guerreros del otro mundo',
        ]);

        Tag::create([
            'nombre'=>'Niños',
        ]);

        Tag::create([
            'nombre'=>'Guerreros transformados',
        ]);

        Tag::create([
            'nombre'=>'Androides',
        ]);

        Tag::create([
            'nombre'=>'Futuro',
        ]);

        Tag::create([
            'nombre'=>'Angel',
        ]);

        Tag::create([
            'nombre'=>'Dios de la destruccion',
        ]);

        Tag::create([
            'nombre'=>'Regeneracion',
        ]);

        Tag::create([
            'nombre'=>'GT',
        ]);

        Tag::create([
            'nombre'=>'Merging',
        ]);

        Tag::create([
            'nombre'=>'Fusion',
        ]);

        Tag::create([
            'nombre'=>'Potara',
        ]);

        Tag::create([
            'nombre'=>'Absorcion',
        ]);

        Tag::create([
            'nombre'=>'Gemelos',
        ]);

        Tag::create([
            'nombre'=>'Super Saiyan 2',
        ]);

        Tag::create([
            'nombre'=>'Fusion Warrior',
        ]);

        Tag::create([
            'nombre'=>'God Ki',
        ]);

        Tag::create([
            'nombre'=>'Super Saiyan 3',
        ]);

        Tag::create([
            'nombre'=>'Linaje del mal',
        ]);

        Tag::create([
            'nombre'=>'Legends Road',
        ]);

        Tag::create([
            'nombre'=>'Super Saiyan God',
        ]);

        Tag::create([
            'nombre'=>'Super Saiyan God SS',
        ]);

        Tag::create([
            'nombre'=>'Esbirro',
        ]);

        Tag::create([
            'nombre'=>'Namekiano',
        ]);

        Tag::create([
            'nombre'=>'Super Saiyan 4',
        ]);

        Tag::create([
            'nombre'=>'Super Saiyan Rosé',
        ]);

        Tag::create([
            'nombre'=>'Equipo Bardock',
        ]);

        Tag::create([
            'nombre'=>'Dragon Oscuro',
        ]);
    }
}
