<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Personaje;
class PersonajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('personajes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Personaje::create([
            'nombre'=>'Goku Super Saiyan 3',
            'rareza'=>'Sparking',
            'color'=>'Verde',
            'tipo'=>'A distancia',
            'imagen'=>'img/personajes/DBL17-05S.jpg',
            'episodio_id'=>7,
            'informacion_id'=>1,
            'estadistica_id' =>1,
            'tag_id' =>1
        ]);

        Personaje::create([
            'nombre'=>'Boujack 100% poder',
            'rareza'=>'Sparking',
            'color'=>'Morado',
            'tipo'=>'Cuerpo a Cuerpo',
            'imagen'=>'img/personajes/DBL17-03S.jpg',
            'episodio_id'=>14,
            'informacion_id'=>2,
            'estadistica_id' =>2,
            'tag_id' =>3
        ]);

        Personaje::create([
            'nombre'=>'Syn Shenron',
            'rareza'=>'Sparking',
            'color'=>'Amarillo',
            'tipo'=>'Defensivo',
            'imagen'=>'img/personajes/DBL21-01S.jpg',
            'episodio_id'=>11,
            'informacion_id'=>3,
            'estadistica_id' =>3,
            'tag_id' =>7
        ]);
        Personaje::create([
            'nombre'=>'Broly: Cheelai (Asistente)',
            'rareza'=>'Sparking',
            'color'=>'Azul',
            'tipo'=>'Cuerpo a Cuerpo',
            'imagen'=>'img/personajes/DBL22-09S.jpg',
            'episodio_id'=>14,
            'informacion_id'=>4,
            'estadistica_id' =>4,
            'tag_id' =>3
        ]);


        Personaje::create([
            'nombre'=>'Vegeta super saiyan god SS',
            'rareza'=>'Sparking',
            'color'=>'Verde',
            'tipo'=>'Cuerpo a Cuerpo',
            'imagen'=>'img/personajes/DBL18-05S.jpg',
            'episodio_id'=>16,
            'informacion_id'=>5,
            'estadistica_id' =>5,
            'tag_id' =>6
        ]);

         Personaje::create([
             'nombre'=>'Goku',
             'rareza'=>'Sparking',
             'color'=>'Verde',
             'tipo'=>'Defensivo',
             'imagen'=>'img/personajes/DBL16-01S.jpg',
             'episodio_id'=>14,
             'informacion_id'=>6,
             'estadistica_id' =>6,
             'tag_id' =>2
        ]);

        Personaje::create([
            'nombre'=>'Androide 13 fusionado',
            'rareza'=>'Sparking',
            'color'=>'Rojo',
            'tipo'=>'Cuerpo a Cuerpo',
            'imagen'=>'img/personajes/DBL16-02S.jpg',
            'episodio_id'=>14,
            'informacion_id'=>7,
            'estadistica_id' =>7,
            'tag_id' =>5
        ]);

        Personaje::create([
            'nombre'=>'Gohan Super saiyan 2 (Joven)',
            'rareza'=>'Sparking',
            'color'=>'Rojo',
            'tipo'=>'A distancia',
            'imagen'=>'img/personajes/DBL10-06S.jpg',
            'episodio_id'=>6,
            'informacion_id'=>8,
            'estadistica_id' =>8,
            'tag_id' =>5
        ]);

        Personaje::create([
            'nombre'=>'Vegito',
            'rareza'=>'Sparking',
            'color'=>'Amarillo',
            'tipo'=>'A distancia',
            'imagen'=>'img/personajes/DBL22-08S.jpg',
            'episodio_id'=>7,
            'informacion_id'=>9,
            'estadistica_id' =>9,
            'tag_id' =>2
        ]);

        Personaje::create([
            'nombre'=>'Gogeta',
            'rareza'=>'Sparking',
            'color'=>'Verde',
            'tipo'=>'A distancia',
            'imagen'=>'img/personajes/DBL20-01S.jpg',
            'episodio_id'=>14,
            'informacion_id'=>10,
            'estadistica_id' =>10,
            'tag_id' =>2
        ]);
    }
}
