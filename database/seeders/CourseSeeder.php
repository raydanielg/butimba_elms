<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            // DIPLOMA (STASHAHADA) - Primary focus for the user
            [
                'name_en' => 'Diploma in Primary Education (Distance Learning)',
                'name_sw' => 'Stashahada ya Ualimu wa Elimu ya Msingi (Njia ya Masafa)',
                'category' => 'Diploma',
                'description_en' => 'This programme is designed for teachers holding a Grade III A certificate who wish to upgrade their qualifications to a diploma level while continuing with their professional duties.',
                'description_sw' => 'Programu hii imeandaliwa kwa ajili ya walimu wenye cheti cha Daraja la III A wanaohitaji kujiendeleza kielemu kufikia ngazi ya stashahada wakiwa kazini.',
                'duration_en' => '3 Years',
                'duration_sw' => 'Miaka 3',
                'requirements_en' => 'Grade III A Teaching Certificate or equivalent.',
                'requirements_sw' => 'Cheti cha Ualimu Daraja la III A au sifa inayolingana nayo.',
            ],
            [
                'name_en' => 'Diploma in Early Childhood Education',
                'name_sw' => 'Stashahada ya Elimu ya Awali',
                'category' => 'Diploma',
                'description_en' => 'A comprehensive programme focusing on the pedagogical skills required for early childhood development and education, preparing teachers for the foundation years of learning.',
                'description_sw' => 'Programu kamili inayolenga stadi za ufundishaji zinazohitajika kwa maendeleo na elimu ya awali, ikiandaa walimu kwa ajili ya miaka ya msingi ya kujifunza.',
                'duration_en' => '2 Years',
                'duration_sw' => 'Miaka 2',
                'requirements_en' => 'Division I-III in CSEE or equivalent teaching certificates.',
                'requirements_sw' => 'Ufaulu wa Daraja la I-III katika kidato cha nne au cheti cha ualimu kinachotambulika.',
            ],
            [
                'name_en' => 'Diploma in Special Needs Education',
                'name_sw' => 'Stashahada ya Elimu ya Mahitaji Maalum',
                'category' => 'Diploma',
                'description_en' => 'Specialized training for teachers to handle students with diverse learning needs, including physical, sensory, and intellectual disabilities.',
                'description_sw' => 'Mafunzo maalum kwa walimu ili kuwahudumia wanafunzi wenye mahitaji mbalimbali ya kujifunza, ikiwa ni pamoja na ulemavu wa mwili, hisia, na akili.',
                'duration_en' => '2 Years',
                'duration_sw' => 'Miaka 2',
                'requirements_en' => 'Teaching certificate with relevant experience in inclusive or special education settings.',
                'requirements_sw' => 'Cheti cha ualimu pamoja na uzoefu katika mazingira ya elimu jumuishi au maalum.',
            ],
            
            // DEGREE (SHAHADA)
            [
                'name_en' => 'Bachelor Degree In Education (Science)',
                'name_sw' => 'Shahada ya Ualimu (Sayansi)',
                'category' => 'Degree',
                'description_en' => 'A high-level programme for secondary school teachers specializing in Science subjects like Physics, Chemistry, and Biology.',
                'description_sw' => 'Programu ya ngazi ya juu kwa walimu wa shule za sekondari waliojikita katika masomo ya Sayansi kama Fizikia, Kemia, na Biolojia.',
                'duration_en' => '3 Years',
                'duration_sw' => 'Miaka 3',
                'requirements_en' => 'Two principal passes in Science subjects at A-Level.',
                'requirements_sw' => 'Ufaulu wa "Principal Passes" mbili katika masomo ya Sayansi ngazi ya Kidato cha Sita.',
            ],
            [
                'name_en' => 'Bachelor Degree In Education (Mathematics)',
                'name_sw' => 'Shahada ya Ualimu (Hisabati)',
                'category' => 'Degree',
                'description_en' => 'Equipping teachers with advanced mathematical knowledge and pedagogical techniques for secondary and tertiary institutions.',
                'description_sw' => 'Kuwapa walimu maarifa ya juu ya hisabati na mbinu za ufundishaji kwa ajili ya shule za sekondari na vyuo.',
                'duration_en' => '3 Years',
                'duration_sw' => 'Miaka 3',
                'requirements_en' => 'Principal pass in Mathematics and another subject at A-Level.',
                'requirements_sw' => 'Ufaulu wa "Principal Pass" katika Hisabati na somo lingine ngazi ya Kidato cha Sita.',
            ],

            // CERTIFICATE (ASTASHAHADA)
            [
                'name_en' => 'Grade III A Teacher Education Certificate',
                'name_sw' => 'Astashahada ya Ualimu Daraja la III A',
                'category' => 'Certificate',
                'description_en' => 'Foundation teaching certificate for primary school teachers.',
                'description_sw' => 'Cheti cha msingi cha ualimu kwa walimu wa shule za msingi.',
                'duration_en' => '2 Years',
                'duration_sw' => 'Miaka 2',
                'requirements_en' => 'Division I-IV in CSEE.',
                'requirements_sw' => 'Ufaulu wa Daraja la I-IV katika Kidato cha Nne.',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
