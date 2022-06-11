<?php

namespace Database\Seeders;

use App\Models\Ejercicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ejercicio::create([
            'sesion_id'=>"1",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"1",
            'nombre'=>"Transiciones Defensivas y Ofensivas",
            'img'=>'ejercicios/defesivaOfensiva.png',
            'descripcion'=>"Los rojos juegan un 2vs1 frente al azul del centro.
            -Una vez acabada la jugada de los rojos, los azules montan la transicion generando superioridad 3vs2 
            -El objetivo es trabajar las transiciones tanto ofensivas como defensivas en superioridad y inferioridad numerica.
            ",

            'njugadores'=>"18",
            'tiempo'=>'2sx7',
            'material'=>'Chinos y balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"2",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"1",
            'nombre'=>"Transiciones Ataque-Defensa",
            'img'=>'ejercicios/ataque-defensa.png',
            'descripcion'=>"-Se hace una tarea de transiciones, en la que se juega un 4vs3 en Ataque desde porteria de conos y un 3vs2 en Defensa, desde porteria grande.
            -Si el equipo que se encuentra en porteria de conos, haciendo un 4vs3 pierde el balon, inmediatamente saldra uno de la porteria grande para hacer un 3vs2.
            ",
            'njugadores'=>"17",
            'tiempo'=>'2x5m',
            'material'=>'Chinos y Balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"3",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"2",
            'nombre'=>"Rondos Especificos",
            'img'=>'ejercicios/especificos.png',
            'descripcion'=>"-Se trabaja en dos espacios de 20x12
            -El objetivo es la circulacion de balon y pasar a lado contrario y hacer un 5vs2.
            -Se puede pasar mediante conduccion o tercer hombre
            -Los dos que estan haciendo la presion no pueden bajar.
            -En el momento que roban en porteria de inicio pueden finalizar en porteria F-7
            -Se hacen 2 series de 5 minutos 
            ",
            'njugadores'=>"20",
            'tiempo'=>'2x5m',
            'material'=>'Chinos y Balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"2",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"2",
            'nombre'=>"Rondos Hexagonales",
            'img'=>'ejercicios/hexagonales.png',
            'descripcion'=>"-Se realiza unos rondos hexagonales, los cuales se haceb un 4vs2 + 1 por dentro.
            -Los que estan por fuera deben conservar el balon e intentar filtrar por dentro.
            -Los de dentro deben intentar robar el balon o echarlo fuera.
            -Cada dos robos saldra el que ha perdido y el de su derecha
            -En caso de perder el de dentro, debera elegir a uno de los de fuera para que robe con el.
            -Maximo 2 toques.
            ",
            'njugadores'=>"15",
            'tiempo'=>'8m',
            'material'=>'Chinos y Balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"1",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"3",
            'nombre'=>"Partido Condicionado 1",
            'img'=>'ejercicios/condicionado1.png',
            'descripcion'=>"-En dimensiones de F11 (de medio campo a porteria grande)
            -Dividimos el campo en 3 zonas y acotamos para trabajar los movimientos de manera diagonal.
            -Trabajamos en estructura propia, en vez de trabajar presion de 2, trabajamos presion de 1y cada 2´se hace falta latera, corner o Saque de banda directo 
            ",
            'njugadores'=>"22",
            'tiempo'=>'2x12m',
            'material'=>'chinos y balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"3",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"3",
            'nombre'=>"Partido Condicionado 2",
            'img'=>'ejercicios/condicionado2.png',
            'descripcion'=>"-Se colocan 6 porterias a diferente altura y se divide en 3 pasillos, 2 laterales y 1 central
            -Tratamos de trabajar la movilidad en zonas finales.
            -Se juega un 7vs7 , para meterla en porteria grande primero debe pasar por una de las porterias pequeñas. 
            -Cuando el balon vaya por carril exterior habra que buscar realizar un 2vs1",
            'njugadores'=>"20",
            'tiempo'=>'2x10m',
            'material'=>'Chinos y balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"1",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"4",
            'nombre'=>"Juego de Posiion con transiciones",
            'img'=>'ejercicios/posicion1.png',
            'descripcion'=>"-se juega un 4vs3 + los dos medio centros y el portero.
            -Los dos medio centros se tienen que mover a diferente altura y siempre estando 1 de ellos en campo contrario.
            -El objetivo es tratar de circular y pasar limpio a la otra zona de los rojos para acabar haciendo ataque con los de fuera mas los dos medio centros y el punta.
            -Los medio centros al atacar, uno debera estar mas vigilante que el otro.
            -Trabajamos sobre todo el tener paciencia y el llevar de lado a lado.
            -Los azules se quedan descolgados para en caso de perdida realizar una transicion.
            ",
            'njugadores'=>"17",
            'tiempo'=>'2x5m',
            'material'=>'Chinos y balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"4",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"4",
            'nombre'=>"Juego de Posicion aplicado a partido",
            'img'=>'ejercicios/posicion2.png',
            'descripcion'=>"-El campo se divide en 3 zonas.

            -Lo que buscamos trabajar es la vigilacia en pasillos exterior, para estar en vigilancia del extremo con Lateral y Pivote cercano.
            
            -Se puede hacer gol en porteria grande, el cual el gol vale x2 o en porterias pequeñas, en el que el gol vale x1
            ",
            'njugadores'=>"17",
            'tiempo'=>'2x7m',
            'material'=>'Chinos y Balones',
        ]);


        Ejercicio::create([
            'sesion_id'=>"4",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"5",
            'nombre'=>"Finalizaciones 2vs1",
            'img'=>'ejercicios/finalizaciones2.png',
            'descripcion'=>"-Se haran 2 equipos.
            -Uno de los equipos se situaran en saque de centro de Fut-7 y saldran 2, mientras que de la porteria solo saldra 1. Se hara un 2vs1
            -Una vez finalizado el 2vs1, el defensa tendra que finalizar en porteria de Fut-7 recibiendo el pase de un miembro del cuerpo tecnico.
            -Cuando recibe el pase tendra 2 opciones, o dribla al cono o realiza una pared.
            -Tendra que comunicar que va a hacer.
            -Pasado 5 minutos se cambian los roles.
            ",
            'njugadores'=>"17",
            'tiempo'=>'2x5m',
            'material'=>'Chinos y Balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"5",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"6",
            'nombre'=>"Finalizaciones Ludicas",
            'img'=>'ejercicios/ludicas.png',
            'descripcion'=>"-Realizaremos unas finalizaciones en las que dividiremos al grupo en 2 equipos
            -Las finalizaciones seran ludicas pero buscamos trabajar la toma de decisiones en metros finales.
            -Dentro del area se finalizara a primer toque y fuera se podra realizar control y tiro.
            -Si se marca desde fuera del area el gol valdra doble
            -Si se marca desde dentro del area, el gol solo valdra 1
            -Pasado 4 minutos rotaran, el equipo que pierda 1 ronda tendra que realizar 15 Flexiones en caso de empatar tendran que realizar 10 Flexiones ambos equipos.",
            'njugadores'=>"17",
            'tiempo'=>'10m',
            'material'=>'chinos y balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"4",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"7",
            'nombre'=>"Doble Area con estructura Hexagonal",
            'img'=>'ejercicios/dobles1.png',
            'descripcion'=>"-El objetivo en este doble area es trabajar la profundidad.
            -Tratamos de buscar el hombre libre y saltar a presionar 
            -A la misma vez trabajamos defensa de area.
            ",
            'njugadores'=>"17",
            'tiempo'=>'2x6n',
            'material'=>'Chinos y Balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"6",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"7",
            'nombre'=>"Doble area",
            'img'=>'ejercicios/doble2.png',
            'descripcion'=>"- Se hace un doble area en el que trabajaremos aspectos ofensivos y defensivos

            -Cada 1:30 min se haran acciones a Balon Parado 
            
            -Cada minuto se cambiaran los de fuera.
            ",
            'njugadores'=>"17",
            'tiempo'=>'2x5m',
            'material'=>'Chinos y Balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"2",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"8",
            'nombre'=>"Circuito de activacion",
            'img'=>'ejercicios/activacion.png',
            'descripcion'=>"Funcionalidad de Cadera (5 min)/Carrera Continua(2 min)
            Tras finalizar esta parte, realizaremos un circuito de técnica de pase y golpeo, alternandolo con Propiocepciones de cadera y movilidad articular. Apareceran conceptos como remates de cabeza,saques de banda, golpeos etc . Se irán parando en ciertos momentos para estirar.
            ",
            'njugadores'=>"18",
            'tiempo'=>'15m',
            'material'=>'10 conos, 10 picas,balones y chinos',
        ]);

        Ejercicio::create([
            'sesion_id'=>"5",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"8",
            'nombre'=>"Circuito de velocidad de reaccion",
            'img'=>'ejercicios/reaccion.png',
            'descripcion'=>"Carrera Continua (2’)-Mov.Articular(8’)
            Tras finalizar la primera parte del calentamiento, realizaremos un circuito de veloc.reaccion. Constará de:
            Skipping lat. + ESPRINTAR 10m
            Slalom Picas+ zigzag + ESPRINTAR 
            Tras terminar las dos primeras series, se realizará 30” de estiramientos. Después, se hará una segunda serie con variantes .
            ",
            'njugadores'=>"18",
            'tiempo'=>'15m',
            'material'=>'6 vallas,6picas, 3 conos y chinos',
        ]);

        Ejercicio::create([
            'sesion_id'=>"4",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"9",
            'nombre'=>"Ataque - Defensa",
            'img'=>'ejercicios/atadef.png',
            'descripcion'=>"-Partimos de la linea de conos.
            -Desde esta linea meteremos un balon directo sobre los puntas, los puntas descargaran.
            -Apartir de ahi rapidamente portero iniciara y nos colocaremos para jugar.
            -Se cambian a los 5 minutos los equipos.
            -Pasado 10 minutos, un equipo hace salida de balon Rival y otro presion propia.
            ",
            'njugadores'=>"13",
            'tiempo'=>'20m',
            'material'=>'Chinos y balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"6",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"9",
            'nombre'=>"Ataque - Defensa + Defensa de area",
            'img'=>'ejercicios/atadefarea.png',
            'descripcion'=>"-Realizaremos un ejercicio para trabajar el juego directo y ser vencedores en segundas jugadas.
            -Tambien trabajaremos la defensa de area.
            -El portero realizara un juego directo sobre el delantero y este tendra que descargar con los que aparecen.
            -Una vez descargado, tendran que descargar por fuera, para buscar asi el juego por carril exterior y centros laterales para trabajar la defensa de area.
            -Si el equipo defensor roba, tendra que jugar por fuera con los miembros del cuerpo tecnico.
            ",
            'njugadores'=>"15",
            'tiempo'=>'20m',
            'material'=>'Chinos y Balones',
        ]);

        Ejercicio::create([
            'sesion_id'=>"6",
            'user_id'=>"1",
            'estado'=>"2",
            'tipo_id'=>"10",
            'nombre'=>"Trabajo de A.B.P",
            'img'=>'ejercicios/abp.png',
            'descripcion'=>"Ensayar los córners, las faltas frontales y los saques de banda que tenemos trabajados. Hacemos dos equipos y premiamos el gol con 5 flexiones para el equipo contrario.
            Cada equipo hace 6 córners, 4 faltas laterales , 2 frontales con barrera y 2 saques de banda.
            ",
            'njugadores'=>"20",
            'tiempo'=>'15m',
            'material'=>'Foam Roller',
        ]);

    }
}
