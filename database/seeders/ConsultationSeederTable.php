<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\Consultation;
use Illuminate\Support\Facades\DB;

class ConsultationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create data here
        $consultation = [
            [
                'name' => 'Jantung Sesak',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Tekanan Darah Tinggi',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Gangguan Irama Jantung',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],

        ];

        //insert $consultation to Specialist Table
        Consultation::insert($consultation);
    }
}
