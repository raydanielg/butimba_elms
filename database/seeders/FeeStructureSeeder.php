<?php

namespace Database\Seeders;

use App\Models\FeeStructure;
use Illuminate\Database\Seeder;

class FeeStructureSeeder extends Seeder
{
    public function run(): void
    {
        $fees = [
            [
                'programme_id' => null,
                'fee_type' => 'Application Fee',
                'fee_type_sw' => 'Ada ya Maombi',
                'amount' => 30000,
                'description_en' => 'One-time non-refundable application fee.',
                'description_sw' => 'Ada ya maombi inayolipwa mara moja na hairudishwi.',
            ],
            [
                'programme_id' => null,
                'fee_type' => 'Registration Fee',
                'fee_type_sw' => 'Ada ya Usajili',
                'amount' => 100000,
                'description_en' => 'Registration fee required before accessing the learning platform.',
                'description_sw' => 'Ada ya usajili inayohitajika kabla ya kufikia mfumo wa kujifunzia.',
            ],
            [
                'programme_id' => null,
                'fee_type' => 'Tuition Fee (per semester)',
                'fee_type_sw' => 'Ada ya Masomo (kwa semester)',
                'amount' => 250000,
                'description_en' => 'Tuition fee per semester for distance learning programmes.',
                'description_sw' => 'Ada ya masomo kwa semester kwa programu za masomo kwa njia ya masafa.',
            ],
        ];

        foreach ($fees as $fee) {
            FeeStructure::create($fee);
        }
    }
}
