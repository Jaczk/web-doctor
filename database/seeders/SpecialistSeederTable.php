<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\Specialist;
use Illuminate\Support\Facades\DB;


class SpecialistSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $specialist = [
            [
                'name' => 'Dermatology',
                'price' => '180000',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Dentist',
                'price' => '200000',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Oral and Teeth',
                'price' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Optometrics',
                'price' => '300000',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Pediatrics',
                'price' => '400000',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'General',
                'price' => '280000',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            
        ];

        //insert $specialist to Specialist Table
        Specialist::insert($specialist);
    }
}
