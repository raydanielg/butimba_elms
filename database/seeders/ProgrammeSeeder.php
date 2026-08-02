<?php

namespace Database\Seeders;

use App\Models\Programme;
use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{
    public function run(): void
    {
        $programmes = [
            [
                'code' => 'DPE-SS',
                'name_en' => 'Diploma in Primary Education - Social Science',
                'name_sw' => 'Stashahada ya Elimu Msingi - Sayansi ya Jamii',
                'stream' => 'Social Science',
                'medium' => 'Kiswahili',
                'description_en' => 'Distance learning diploma for primary teachers in the Social Science stream.',
                'description_sw' => 'Stashahada kwa njia ya masafa kwa walimu wa elimu msingi katika mchepuo wa Sayansi ya Jamii.',
            ],
            [
                'code' => 'DPE-SK',
                'name_en' => 'Diploma in Primary Education - Social Science & Kiswahili',
                'name_sw' => 'Stashahada ya Elimu Msingi - Sayansi ya Jamii na Kiswahili',
                'stream' => 'Social Science & Kiswahili',
                'medium' => 'Kiswahili',
                'description_en' => 'Distance learning diploma combining Social Studies with Kiswahili language specialization.',
                'description_sw' => 'Stashahada kwa njia ya masafa inayochanganya Sayansi ya Jamii na lugha ya Kiswahili.',
            ],
            [
                'code' => 'DPE-SM',
                'name_en' => 'Diploma in Primary Education - Science & Mathematics',
                'name_sw' => 'Stashahada ya Elimu Msingi - Sayansi na Hisabati',
                'stream' => 'Science & Mathematics',
                'medium' => 'Kiswahili & English',
                'description_en' => 'Distance learning diploma for teachers specializing in Science and Mathematics.',
                'description_sw' => 'Stashahada kwa njia ya masafa kwa walimu wanaobobea katika Sayansi na Hisabati.',
            ],
            [
                'code' => 'DPE-AS',
                'name_en' => 'Diploma in Primary Education - Arts & Sports',
                'name_sw' => 'Stashahada ya Elimu Msingi - Sanaa na Michezo',
                'stream' => 'Arts & Sports',
                'medium' => 'Kiswahili & English',
                'description_en' => 'Distance learning diploma for teachers specializing in Arts and Sports.',
                'description_sw' => 'Stashahada kwa njia ya masafa kwa walimu wanaobobea katika Sanaa na Michezo.',
            ],
        ];

        foreach ($programmes as $p) {
            Programme::create($p);
        }
    }
}
