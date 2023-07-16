<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\TypeUser;
use Illuminate\Support\Facades\DB;

class TypeUserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeUser = [
            [
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Dokter',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Pasien',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],

        ];

        //insert $typeUser to Specialist Table
        Typeuser::insert($typeUser);
    }
}
