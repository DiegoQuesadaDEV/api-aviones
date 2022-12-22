<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aviones')->insert([
            'modelo' => 'Airbus 330',
            'capacidad' => 870,
            'alcance' => 13567.47,
            'estado' => true,
            'fabricante_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('aviones')->insert([
            'modelo' => 'Airbus 230',
            'capacidad' => 650,
            'alcance' => 25000.17,
            'estado' => false,
            'fabricante_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('aviones')->insert([
            'modelo' => 'Airbus 300',
            'capacidad' => 900,
            'alcance' => 18547.10,
            'estado' => true,
            'fabricante_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('aviones')->insert([
            'modelo' => 'Boeing 747',
            'capacidad' => 1100,
            'alcance' => 35000.50,
            'estado' => true,
            'fabricante_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
