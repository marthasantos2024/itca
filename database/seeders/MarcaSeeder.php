<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos el arreglo de datos a insertar
        $data = array([
            'nombre'=>'Nike',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Pumas',
            'created_at'=>Carbon::now() 
        ],[
            'nombre'=>'Adidas',
            'created_at'=>Carbon::now()
        ]);

        //Insertamos la data en la tabla marcas
        DB::table('marcas')->insert($data);
    }
}
