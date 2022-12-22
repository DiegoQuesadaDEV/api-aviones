<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fabricantes')->insert([
            'nombre' => 'Airbus',
            'localización' => 'USA',
            'capital' => 13000456.67,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('fabricantes')->insert([
            'nombre' => 'Lockheed Martin',
            'localización' => 'United Kingdom',
            'capital' => 2400326.13,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('fabricantes')->insert([
            'nombre' => 'Boeing',
            'localización' => 'USA',
            'capital' => 43000112.45,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
