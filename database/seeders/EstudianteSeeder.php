<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiantes = [
            [
           'ci'=>'6591234',   
           'nombre' => 'JHONY WALTER',
           'apellidos' => 'APAZA MANRIQUE',
        ],
       [
        'ci'=>'8549200',   
        'nombre' => 'ERICK',
        'apellidos' => 'ARAUJO CALLE',
       ],
       [
        'ci'=>'10560578',   
           'nombre' => 'ELMER',
           'apellidos' => 'ARICOMA CHURA',
       ],
       [
        'ci'=>'8578502',   
           'nombre' => 'SHAYDA GEORGINA',
           'apellidos' => 'CHAVARRIA ROSAS',
       ],
       [
        'ci'=>'6706858',   
           'nombre' => 'JEANNETH TATIANA',
           'apellidos' => 'CHOQUE COLQUES',
       ],
       [
        'ci'=>'10561506',   
       'nombre' => 'MOISES AARON',
       'apellidos' => 'CHOQUE VALVERDE',
       ]
       ,
       [
        'ci'=>'10574615',   
       'nombre' => 'DORIAN MIGUEL',
       'apellidos' => 'CHUNGARA MARTINEZ',
       ],
       [
        'ci'=>'13584153',   
       'nombre' => 'KEVIN',
       'apellidos' => 'CHUNGARA MARTINEZ',
       ],
       [
        'ci'=>'10472483',   
       'nombre' => 'DANITZA BRITNEY',
       'apellidos' => 'CONDORI ABENDAÑO',
       ],
       [
        'ci'=>'8631891',   
       'nombre' => 'HECTOR JOSUE',
       'apellidos' => 'CONDORI CHAMBI',
       ],
       [
        'ci'=>'8522032',   
       'nombre' => 'IVAR JOEL',
       'apellidos' => 'COPA VERA',
       ],
       [
        'ci'=>'6704698',   
       'nombre' => 'AYDE EVA',
       'apellidos' => 'CUAGIRA',
       ],
       [
        'ci'=>'8522723',   
       'nombre' => 'MARIA FERNANDA',
       'apellidos' => 'DELGADO ONTIVEROS',
       ],
       [
        'ci'=>'13871210',   
       'nombre' => 'GHERSON',
       'apellidos' => 'GUTIERREZ CONTRERAS',
       ],
       [
        'ci'=>'6629119',   
       'nombre' => 'ALAN SEBASTIAN',
       'apellidos' => 'HUALLPA FLORES',
       ],
       [
        'ci'=>'12557797',   
       'nombre' => 'NOVIK FRANCIS',
       'apellidos' => 'LAIME MIRANDA',
       ],
       [
        'ci'=>'8534718',   
       'nombre' => 'ELIZARDO',
       'apellidos' => 'MAMANI HUANCA',
       ]
       ,
       [
        'ci'=>'4006608',   
       'nombre' => 'JOSE VLADIMIR',
       'apellidos' => 'MARQUEZ',
       ] ,
       [
        'ci'=>'8616251',   
       'nombre' => 'JUAN DANIEL',
       'apellidos' => 'MEDINACELI MAMANI',
       ]
       ,
       [
        'ci'=>'12407065',   
       'nombre' => 'CARLOS ERLAN',
       'apellidos' => 'NAVARRO MAMANI',
       ]
       ,
       [
        'ci'=>'13870276',   
       'nombre' => 'ROBERTO CARLOS',
       'apellidos' => 'PACO LIMACHI',
       ]
       ,
       [
        'ci'=>'13101053',   
       'nombre' => 'RENE MARCELO',
       'apellidos' => 'PARDO ARANCIBIA',
       ]
       ,
       [
        'ci'=>'6707590',   
       'nombre' => 'JESUS FERNANDO',
       'apellidos' => 'PINTO MAMANI',
       ]
       ,
       [
        'ci'=>'5551266',   
       'nombre' => 'WALTER FRANKLIN',
       'apellidos' => 'QUISPE AVIZA',
       ]
       ,
       [
        'ci'=>'8566177',   
       'nombre' => 'LUIS GUSTAVO',
       'apellidos' => 'QUISPE RAMOS',
       ]
       ,
       [
        'ci'=>'6659074',   
       'nombre' => 'RODOLFO	REYES',
       'apellidos' => 'ORTIZ CHIGUA',
       ]
       ,
       [
        'ci'=>'13293088',   
       'nombre' => 'BELEN ASUNCION',
       'apellidos' => 'RODRIGUEZ NAVARRO',
       ]
       ,
       [
        'ci'=>'13229696',   
       'nombre' => 'TATIANA',
       'apellidos' => 'RODRIGUEZ TORREZ',
       ]
       ,
       [
        'ci'=>'8509972',   
       'nombre' => 'JOSE CARMELO',
       'apellidos' => 'ROJAS ESCOBAR',
       ]
       ,
       [
        'ci'=>'8519028',   
       'nombre' => 'GERARDO',
       'apellidos' => 'SOTO SORIA',
       ]
       ,
       [
        'ci'=>'12557128',   
       'nombre' => 'ESTEFANNY',
       'apellidos' => 'TANUZ ZAMBRANA',
       ]
       ,
       [
        'ci'=>'13326375',   
       'nombre' => 'DANIEL',
       'apellidos' => 'VEDIA CONDE',
       ]
       ,
       [
        'ci'=>'13923872',   
       'nombre' => 'RONALDO',
       'apellidos' => 'VENTURA BOBARIN	',
       ] ,
       [
        'ci'=>'13165879',   
       'nombre' => 'ERIKA CAROL',
       'apellidos' => 'VILLCA GUTIERREZ',
       ] 

       ];

       foreach ($estudiantes as $estudiantes) {
           Estudiante::create($estudiantes);
       }
    }
}
