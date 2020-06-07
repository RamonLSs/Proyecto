<?php

use App\Informacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('informacions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Informacion::create([
            'nombrehp'=> 'Buena suerte Kakarot',

            'habilidadprincipal'=>'Roba una carta definitiva. Restaura la salud en un 30% y Ki en 20.
             Anula los estados negativos durante 3 segundos. Obtiene -50% del daño recibido por parte del enemigo durante 30 segundos. Requisitos: Deben transcurrir 25 segundos
             desde el comienzo de la partida.',

             'habilidadz'=>'+17% de defensa fisica a los "Tag: Saiyan"',

             'nombrehu'=> 'El destino descansa en esta batalla',

             'habilidadunica'=>'+40% de daño cuando la batalla comienza (no puede ser cancelado). Aplica los siguientes beneficios cuando pasan 40 segundos:
            -5% de coste de cartas de daño fisico y cartas de daño de ki. Incrementa la velocidad de recuperacion de cartas en 1 nivel. Reduce el daño recibido en un 20%.',

            'nombrehuu'=> 'Gracias, Dragon Ball',

            'habilidadunicaa'=>'No recibe daño cuando realiza un cambio por primera vez. Mientras este personaje se encuentra en la batalla, los siguientes
            efectos son aplicados cuando el enemigo cambia de personaje: +20% de daño durante 15 segundos. +10% de daño en la Ultimate. Gana una Bola de Dragon'
        ]);

        Informacion::create([

            'nombrehp'=> 'Manejar la dominacion galactica',

            'habilidadprincipal'=>'Roba una carta de ataque fisico. Restauras un 30% de tu ki. +30% de daño fisico durante 40 segundos. Requisitos: Deben transcurrir 10 segundos.',

             'habilidadz'=>'+22% de daño fisico a los "Tag: Sagas de las peliculas',

             'nombrehu'=> 'El guerrero mas fuerte de la galaxia',

             'habilidadunica'=>'Reduce el daño recibido de los "Tag: Super Saiyan" un 20%. Aplica los siguientes efectos cuando entra en combate:
             +40% de daño infligido. Restaura 40 de ki. Cancela todos los estados negativos. +25% de daño a los aliados "Episodio: Sagas de las peliculas" cuando vuelve al banquillo.',

            'nombrehuu'=> 'Escudo despiadado',

            'habilidadunicaa'=>'Restaura su salud un 30% cuando han pasado 40 segundos. Noquea al rival si cubre el ataque enemigo y reduce su salud un 15% de su salud maxima. Aplica los siguientes efectos:
            +20% de daño infligido. +30% de ki recuperado. -5 de coste a las cartas de ataque fisico.'
        ]);

        Informacion::create([


            'nombrehp'=> 'Gobernante del dragon de las sombras',

            'habilidadprincipal'=>'Inflige a todos los enemigos con estados negativos: -50% de regeneracion de vida durante 30 segundos. +30% de daño recibido durante 30 segundos y +10% de coste de las cartas especiales durante 30 segundos.',

             'habilidadz'=>'+22% de defensa de ki a los "Tag: GT" ',

             'nombrehu'=> 'Nada de eso parecia lastimarme',

             'habilidadunica'=>'Reduce el daño recibido un 50% durante 10 segundos cuando el personaje entra en el campo de batalla. Aplica los siguientes efectos cuando su salud llega a 0:
             Restaura un 25% de su salud maxima. Elimina cualquier estado negativo durante 30 segundos.',

            'nombrehuu'=> 'Cuidado con lo que deseas',

            'habilidadunicaa'=>'Aplica los siguientes efectos cuando un aliado o un enemigo activa el Rising Rush: +50% de daño infligido. +100% de recuperacion de ki.'
        ]);

        Informacion::create([


            'nombrehp'=> 'Combinacion Perfecta',

            'habilidadprincipal'=>'Roba una carta definitiva. Restaura 50 de ki. +40% de daño de fisico durante 20 segundos. Reduce un 20% el daño recibido. Requisitos: Deben transcurrir 15 segundos. ',

             'habilidadz'=>'+22% de daño fisico a los "Tag: Fuerza de frieza"',

             'nombrehu'=> 'Saiyan con un corazon',

             'habilidadunica'=>'+30% de daño cuando el personaje entra al campo de batalla. Los siguientes efectos ocurren dependiendo de los segundos que han pasado:
             Cuando han pasado 40 segundos: Incrementa la cantidad de bolas de dragon en 1.
             Cuando han pasado 60 segundos: Incrementa la cantidad de bolas de dragon en 1.',

            'nombrehuu'=> 'Asistencia de Cheelai.',

            'habilidadunicaa'=>'Aplica los siguientes efectos cuando el personaje entra al banquillo:
            Restaura un 10% de la salud maxima.
            +20% de daño infligido hasta un 80%.
            Cancela los estados negativos.
            Reduce el tiempo de sustitucion en 3 segundos.'
        ]);

        Informacion::create([


            'nombrehp'=> 'Mira lo mal que lo has calculado',

            'habilidadprincipal'=>'Roba una carta  definitiva. Restaura 50 de ki. Incrementa la recuperaciond de cartas en 2 niveles durante 10 segundos.
            Requisitos: Deben transcurrir 25 segundos',

             'habilidadz'=>'+19% de defensa fisica  a los "Tag: God Ki"',

             'nombrehu'=> '¡Soy Vegeta, Principe de los Saiyan!',

             'habilidadunica'=>'+20% de daño infligido contra "Tag: God Ki".
             Los siguientes efectos ocurren cada vez que el personaje usa una carta de ataque fisico o ataque de ki:
             +10% de daño a todos los aliados de "Tag: God Ki" o "Tag: Vegeta Family" durante 10 segundos.
             +15% de daño infligod durante 10 segundos.
             -3 de coste a las cartas durante 5 segundos.',

            'nombrehuu'=> 'Furia de la raza guerrera',

            'habilidadunicaa'=>'Aplica los siguientes efectos cada vez que otro miembro recibe un ataque fisico o ataque de ki:
            Reduce la sustitucion de personajes en 1.
            Reduce un 40% el siguiente daño recibido.
            Esto se aplica hasta que el combo enemigo termina.
            Gana mejora de atributo: -30% a los efectos negativos que produce el enemigo.'
        ]);

        Informacion::create([


            'nombrehp'=> '¡Por favor, prestame tu energía!',

            'habilidadprincipal'=>'Roba una carta definitiva. Restaura un 35% de su salud.
            Requisitos: Deben transcurrir 25 segundos',

             'habilidadz'=>'+24% de defensa de ki a los "Tag: Sagas de las peliculas" o a personajes de color verde',

             'nombrehu'=> 'Golpe milagroso',

             'habilidadunica'=>'+50% de daño de ki contra "Tag: Androides". Los siguientes efectos ocurren de acuerdo a los segundos transcurridos:
             15 segundos: Reduce el daño recibido un 20%.
             30 segundos: +50% de daño con la carta definitiva.
             45 segundos: +50% de daño infligido.',

            'nombrehuu'=> 'Espíritu de lucha implacable',

            'habilidadunicaa'=>'Reduce el daño recibido un 50% hasta el final del combo. +35% de daño infligido por cada aliado derrotado.'
        ]);

        Informacion::create([
            'nombrehp'=> 'Goku..!!',

            'habilidadprincipal'=>'Roba carta de habilidad definitiva. Restaura un 30% de salud y +30 de ki.
            Requisitos: Deben transcurrir 25 segundos.',

             'habilidadz'=>'+21% de ataque fisico y de ki a los "Tag: Android"',

             'nombrehu'=> 'Poder de fusión siniestro',

             'habilidadunica'=>'+30% de daño conta "Tag: Super Saiyan". Los siguientes efectos ocurren de acuerdo al numero de segundos que el personaje se encuentra en batalla:
             3 segundos: +35% de daño infligido.
             5 segundos: +35% de recuperacion de ki.
             10 segundos: +25% de daño infligido.
             Mientras este personaje se encuentre en el campo de batalla, inflige 2 efectos negativos al enemigo.',

            'nombrehuu'=> 'Arma final de androides',

            'habilidadunicaa'=>'Inflige al enemigo un efecto negativo: -1 a la velocidad de robo de carta durante 15 segundos.
            El movimiento definitivo aplica los siguientes efectos a el mismo cuando 2 aliados con "Tag: Android" han muerto: +50% de daño infligido. +30% de recuperacion de ki. Restaura un 30% de su salud.'
        ]);

        Informacion::create([
            'nombrehp'=> '¡Cree en ti mismo, Gohan!',

            'habilidadprincipal'=>'Roba una carta definitiva. Restaura un 30% de su salud y 50 de ki.
            Elimina la desventaja de color durante 20 segundos si hay un enemigo derrotado.
            Requisitos: Deben transcurrir 25 segundos.',

             'habilidadz'=>'+24& de ataque de ki a los "Tag: Saiyan Hibrido"',

             'nombrehu'=> '¡Daré lo mejor de mi!',

             'habilidadunica'=>'Los siguientes efectos ocurren por cada miembro del equipo derrotado:
             +30% de daño infligido.
             +20% de restauracion de ki.',

            'nombrehuu'=> 'Convierte el arrepentimiento en poder',

            'habilidadunicaa'=>'-5 de coste de las cartas de daño de ki. Reduce el daño recibido de "Tag: Regeneracion" un 20%.
            +15% de daño infligido durante 15 segundos cada vez que este personaje usa una carta de daño de ki.
            Reduce el daño recibido un 40% hasta el final del combo.
            +25% de daño de ki infligido durante 20 segundos.'
        ]);

        Informacion::create([
            'nombrehp'=> '¿Te gustaría una demostración?',

            'habilidadprincipal'=>'Se transforma en Super Vegito. Destruye todas sus cartas y robas unas nuevas aleatoriamente.
            Requisitos: Deben transcurrir 15 segundos.',

             'habilidadz'=>'19% de daño de ki a los "Tag: Guerreros Fusionados"',

             'nombrehu'=> 'Guerrero definitivo sin igual',

             'habilidadunica'=>'Aplica los siguientes efectos desde el principio de la batalla hasta que se transforma:
                +50% de daño de ki .
                Reduce el daño recibido un 20%.',

            'nombrehuu'=> 'Compostura absoluta',

            'habilidadunicaa'=>'Los siguientes efectos ocurren cuando el ataque enemigo acabe:
            Destruye una carta aleatoria del enemigo y roba una carta definitiva.
            Reduce la cantidad de bolas de dragon del enemigo en 1.'
        ]);

        Informacion::create([
            'nombrehp'=> '¡Tu tiempo se ha acabado!',

            'habilidadprincipal'=>'Roba una carta definitiva. Restaura un 20% de salud. Elimina todos los efectos negativos durante 30 segundos..
            Requisitos: Deben transcurrir 25 segundos.',

             'habilidadz'=>'22% de daño de ki a los "Tag: God Ki"',

             'nombrehu'=> 'El Super Saiyan de color rosa',

             'habilidadunica'=>'Aplica los siguientes efectos dependiendo de la salud del personaje cuando entra en batalla:
             Si la salud esta al 75% o mas: +30% de daño infligido durante 154 segundos. Incrementa la recuperacion de cartas en 1 durante 15 segundos.',

            'nombrehuu'=> 'Castigo Divino Servido',

            'habilidadunicaa'=>'Inflige a todos los enemigos con efectos negativos: +10% de daño recibido de "Tag: God Ki" o "Tag: Future".
            Los siguientes efectos ocurren cuando este personaje esquiva un ataque enemigo: Destruye una carta aleatoria del enemigo. Reduce el siguiente daño recibido un 30%. Esto se aplica hasta el final del combo.'
        ]);
    }
}
