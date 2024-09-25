<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.vv
     */
    public function run(): void
    {
        //Definimos el arregro de datos a insertar
        $data = array([
            'nombre'=>'Juan Pérez',
            'edad'=>25,
            'categoria'=>3,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Ana López',
            'edad'=>30,
            'categoria'=>1,
            'created_at'=>Carbon::now()
        ],
        [
            'nombre'=>'Carlos Gómez',
            'edad'=>40,
            'categoria'=>2,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'María García',
            'edad'=>22,
            'categoria'=>5,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Pedro Ruiz',
            'edad'=>28,
            'categoria'=>6,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Laura Sanhez',
            'edad'=>35,
            'categoria'=>4,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Miguel Fernández',
            'edad'=>42,
            'categoria'=>9,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Rosa Martínez',
            'edad'=>27,
            'categoria'=>7,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Héctor Ramírez',
            'edad'=>29,
            'categoria'=>8,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Andrea Paredes',
            'edad'=>31,
            'categoria'=>11,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Julio Ortega',
            'edad'=>33,
            'categoria'=>10,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Sofía López',
            'edad'=>26,
            'categoria'=>12,
            'created_at'=>Carbon::now()
        ]);

        //Insertamos la data en la tabla clientes
        DB::table('clientes')->insert($data);
    }
}
