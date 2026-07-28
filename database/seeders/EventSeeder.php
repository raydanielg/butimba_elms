<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title_en' => 'Orientation Week for New Students',
                'title_sw' => 'Wiki ya Muelekeo kwa Wanafunzi Wapya',
                'date' => '2026-08-15',
                'time' => '08:00 - 16:00',
                'location_en' => 'Main Campus Hall',
                'location_sw' => 'Ukumbi Mkuu wa Chuo',
                'description_en' => 'Welcome week for all first-year students to get familiar with the college facilities and system.',
                'description_sw' => 'Wiki ya ukaribisho kwa wanafunzi wote wa mwaka wa kwanza ili kufahamu mazingira ya chuo na mfumo.',
            ],
            [
                'title_en' => 'First Semester Begins',
                'title_sw' => 'Muhula wa Kwanza Unaanza',
                'date' => '2026-09-01',
                'time' => '08:00',
                'location_en' => 'All Classrooms',
                'location_sw' => 'Madarasa Yote',
                'description_en' => 'Official commencement of lectures for the 2026/2027 academic year.',
                'description_sw' => 'Kuanza rasmi kwa mihadhara kwa mwaka wa masomo 2026/2027.',
            ],
            [
                'title_en' => 'Graduation Ceremony 2026',
                'title_sw' => 'Sherehe ya Kuhitimu 2026',
                'date' => '2026-12-15',
                'time' => '10:00 - 14:00',
                'location_en' => 'Main Campus Grounds',
                'location_sw' => 'Uwanja Mkuu wa Chuo',
                'description_en' => 'Celebrating the success of our graduating cohort of 2026.',
                'description_sw' => 'Kusherehekea mafanikio ya wahitimu wetu wa mwaka 2026.',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
