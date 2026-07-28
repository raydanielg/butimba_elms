<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title_en' => 'ELMS Platform Launch for Academic Year 2026',
                'title_sw' => 'Uzinduzi wa Jukwaa la ELMS kwa Mwaka wa Masomo 2026',
                'body_en' => 'Butimba Teachers College is proud to announce the official launch of our E-Learning Management System (ELMS) for the 2026 academic year. This digital platform will provide students and lecturers with online access to course materials, assignments, and collaborative learning tools.',
                'body_sw' => 'Chuo Cha Walimu Butimba kina fakhari kutangaza uzinduzi rasmi wa Mfumo wa Elimu kwa Mtandao (ELMS) kwa mwaka wa masomo 2026. Jukwaa hili la kidijitali litawapa wanafunzi na walimu ufikiaji wa mtandaoni wa vifaa vya kozi, kazi, na zana za kujifunza kwa pamoja.',
                'category' => 'Announcement',
            ],
            [
                'title_en' => 'New Science Laboratory Inaugurated',
                'title_sw' => 'Maabara Mpya ya Sayansi Imefunguliwa',
                'body_en' => 'The college has inaugurated a state-of-the-art science laboratory equipped with modern equipment for practical training. This facility aims to enhance the quality of science teacher education in Tanzania.',
                'body_sw' => 'Chuo kimefungua maabara ya kisasa ya sayansi iliyojengwa na vifaa vya kisasa kwa mafunzo ya kiutendaji. Kituo hiki kinalenga kuboresha ubora wa elimu ya walimu wa sayansi nchini Tanzania.',
                'category' => 'News',
            ],
            [
                'title_en' => 'Partnership with University of Dar es Salaam',
                'title_sw' => 'Ushirikiano na Chuo Kikuu cha Dar es Salaam',
                'body_en' => 'A new partnership agreement signed with UDSM to enhance teacher training programs and research collaboration. This synergy will create more opportunities for our degree students.',
                'body_sw' => 'Mkataba mpya wa ushirikiano umetiwa saini na UDSM kuboresha programu za mafunzo ya ualimu na ushirikiano wa utafiti. Ushirikiano huu utaunda fursa zaidi kwa wanafunzi wetu wa shahada.',
                'category' => 'News',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
