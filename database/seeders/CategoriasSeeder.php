<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definimos el arregro de datos a insertar
        $data = array([
            'nombre'=>'Estudiante',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Profesor',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Administradora',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Blibliotecaria',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Investigador',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Autor',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Lector',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Editor',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Publicista',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Técnico',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Coordinador',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Asistente',
            'created_at'=>Carbon::now()
        ]
        );
        
        //Insertamos la data en la tabla marcas
        DB::table('categorias')->insert($data);
    }
}
