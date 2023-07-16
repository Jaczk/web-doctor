<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\ConfigPayment;
use Illuminate\Support\Facades\DB;

class ConfigPaymentSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $configPayment = [
            [
                'fee'=> '150000',
                'vat' => '20',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]
        ];

        //insert $configPayment to configPayment Table
        ConfigPayment::insert($configPayment);
    }
}
