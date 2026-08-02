<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            ['code' => 'EDU', 'name_en' => 'Educational Foundations & Professional Studies', 'name_sw' => 'Misingi ya Elimu na Masomo ya Kitaaluma'],
            ['code' => 'KIS', 'name_en' => 'Kiswahili', 'name_sw' => 'Kiswahili'],
            ['code' => 'ENG', 'name_en' => 'English', 'name_sw' => 'Kiingereza'],
            ['code' => 'MTC', 'name_en' => 'Mathematics', 'name_sw' => 'Hisabati'],
            ['code' => 'SCI', 'name_en' => 'Science', 'name_sw' => 'Sayansi'],
            ['code' => 'SST', 'name_en' => 'Social Studies', 'name_sw' => 'Sayansi ya Jamii'],
            ['code' => 'ART', 'name_en' => 'Arts', 'name_sw' => 'Sanaa'],
            ['code' => 'SPO', 'name_en' => 'Physical Education & Sports', 'name_sw' => 'Elimu ya Michezo na Viungo'],
            ['code' => 'ICT', 'name_en' => 'ICT in Education', 'name_sw' => 'TEHAMA katika Elimu'],
            ['code' => 'RES', 'name_en' => 'Research & Teaching Practice', 'name_sw' => 'Utafiti na Mafunzo kwa Vitendo'],
        ];

        foreach ($departments as $dept) {
            Department::create($dept);
        }
    }
}
