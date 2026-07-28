@extends('layouts.site')

@section('title', 'News & Events')

@section('active_nav', 'news')

@section('content')
{{-- Page Hero --}}
<section class="relative bg-gradient-to-br from-emerald-800 via-emerald-700 to-emerald-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.4) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-gold-500/10 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-emerald-400/10 rounded-full blur-3xl pulse-glow"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-24 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6 fade-in">
            <span class="w-2 h-2 rounded-full bg-gold-400 animate-pulse"></span>
            <span class="text-xs font-semibold text-emerald-50 tracking-wide" data-lang="en">Stay Updated</span>
            <span class="text-xs font-semibold text-emerald-50 tracking-wide" data-lang="sw">Kaa Macho</span>
        </div>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold leading-tight fade-in-up delay-1">
            <span data-lang="en">News &amp; Events</span>
            <span data-lang="sw">Habari &amp; Matukio</span>
        </h1>
        <p class="mt-6 text-base sm:text-lg text-emerald-50/80 max-w-2xl mx-auto fade-in-up delay-2" data-lang="en">
            Latest news, announcements, and upcoming events at Butimba Teachers College.
        </p>
        <p class="mt-6 text-base sm:text-lg text-emerald-50/80 max-w-2xl mx-auto fade-in-up delay-2" data-lang="sw">
            Habari za hivi karibuni, tangazo, na matukio yanayokuja katika Chuo Cha Walimu Butimba.
        </p>
    </div>
</section>

{{-- Featured News --}}
<section class="py-16 sm:py-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="en">Featured Story</p>
            <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="sw">Hadithi Kuu</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800" data-lang="en">Latest News</h2>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800" data-lang="sw">Habari za Karibuni</h2>
        </div>

        {{-- Featured Article --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center mb-16">
            <div class="relative fade-in-up">
                <div class="absolute -top-4 -right-4 w-full h-full rounded-2xl bg-gold-100 -z-10"></div>
                <div class="rounded-2xl shadow-xl overflow-hidden bg-gradient-to-br from-emerald-700 to-emerald-900 aspect-[4/3] flex items-center justify-center">
                    <svg class="w-24 h-24 text-gold-400/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 0a2 2 0 012 2v8a2 2 0 01-2 2m2-0V8a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
            </div>
            <div class="fade-in-up delay-1">
                <div class="flex items-center gap-3 mb-4">
                    <span class="px-3 py-1 text-xs font-bold rounded-full bg-emerald-100 text-emerald-700" data-lang="en">Announcement</span>
                    <span class="px-3 py-1 text-xs font-bold rounded-full bg-emerald-100 text-emerald-700" data-lang="sw">Tangazo</span>
                    <span class="text-xs text-gray-400">15 Jul 2026</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-extrabold text-emerald-800 mb-4" data-lang="en">ELMS Platform Launch for Academic Year 2026</h3>
                <h3 class="text-xl sm:text-2xl font-extrabold text-emerald-800 mb-4" data-lang="sw">Uzinduzi wa Jukwaa la ELMS kwa Mwaka wa Masomo 2026</h3>
                <p class="text-sm text-gray-600 leading-relaxed mb-4" data-lang="en">
                    Butimba Teachers College is proud to announce the official launch of our E-Learning Management System (ELMS) for the 2026 academic year. This digital platform will provide students and lecturers with online access to course materials, assignments, and collaborative learning tools.
                </p>
                <p class="text-sm text-gray-600 leading-relaxed mb-4" data-lang="sw">
                    Chuo Cha Walimu Butimba kina fakhari kutangaza uzinduzi rasmi wa Mfumo wa Elimu kwa Mtandao (ELMS) kwa mwaka wa masomo 2026. Jukwaa hili la kidijitali litawapa wanafunzi na walimu ufikiaji wa mtandaoni wa vifaa vya kozi, kazi, na zana za kujifunza kwa pamoja.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-gold-600 hover:text-gold-700 transition-colors">
                    <span data-lang="en">Read More</span>
                    <span data-lang="sw">Soma Zaidi</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>

        {{-- News Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $news = [
                    ['date' => '10 Jul 2026', 'cat_en' => 'Event', 'cat_sw' => 'Tukio', 'title_en' => 'Graduation Ceremony 2026', 'title_sw' => 'Sherehe ya Kuhitimu 2026', 'desc_en' => 'Join us as we celebrate the graduation of our 2026 cohort. Over 500 students will receive their certificates and diplomas.', 'desc_sw' => 'Jiunge nasi tunaposherehekea kuhitimu kwa wahitimu wa 2026. Zaidi ya wanafunzi 500 watapokea vyeti na stashahili zao.'],
                    ['date' => '5 Jul 2026', 'cat_en' => 'News', 'cat_sw' => 'Habari', 'title_en' => 'New Science Laboratory Inaugurated', 'title_sw' => 'Maabara Mpya ya Sayansi Imefunguliwa', 'desc_en' => 'The college has inaugurated a state-of-the-art science laboratory equipped with modern equipment for practical training.', 'desc_sw' => 'Chuo kimefungua maabara ya kisasa ya sayansi iliyojengwa na vifaa vya kisasa kwa mafunzo ya kiutendaji.'],
                    ['date' => '28 Jun 2026', 'cat_en' => 'Announcement', 'cat_sw' => 'Tangazo', 'title_en' => 'Admissions for 2026/2027 Now Open', 'title_sw' => 'Uandikishaji wa 2026/2027 Umeanza', 'desc_en' => 'Applications for the 2026/2027 academic year are now open. Apply early to secure your place in our programs.', 'desc_sw' => 'Maombi kwa mwaka wa masomo 2026/2027 yameanza. Omba mapema kuhakikisha nafasi yako katika programu zetu.'],
                    ['date' => '20 Jun 2026', 'cat_en' => 'Event', 'cat_sw' => 'Tukio', 'title_en' => 'Teacher Education Conference', 'title_sw' => 'Mkutano wa Elimu ya Ualimu', 'desc_en' => 'Butimba Teachers College will host the annual teacher education conference bringing together educators from across Tanzania.', 'desc_sw' => 'Chuo Cha Walimu Butimba kitaandaa mkutano wa kila mwaka wa elimu ya ualimu unaoleta pamoja walimu kutoka Tanzania nzima.'],
                    ['date' => '15 Jun 2026', 'cat_en' => 'News', 'cat_sw' => 'Habari', 'title_en' => 'Partnership with University of Dar es Salaam', 'title_sw' => 'Ushirikiano na Chuo Kikuu cha Dar es Salaam', 'desc_en' => 'A new partnership agreement signed with UDSM to enhance teacher training programs and research collaboration.', 'desc_sw' => 'Mkataba mpya wa ushirikiano umetiwa saini na UDSM kuboresha programu za mafunzo ya ualimu na ushirikiano wa utafiti.'],
                    ['date' => '1 Jun 2026', 'cat_en' => 'Announcement', 'cat_sw' => 'Tangazo', 'title_en' => 'Mid-Semester Examinations Schedule', 'title_sw' => 'Ratiba ya Mitihani ya Katikati ya Muhula', 'desc_en' => 'The mid-semester examination schedule has been released. Students can check their timetables on the ELMS platform.', 'desc_sw' => 'Ratiba ya mitihani ya katikati ya muhula imetolewa. Wanafunzi wanaweza kuangalia ratiba zao kwenye jukwaa la ELMS.'],
                ]
            @endphp

            @foreach($news as $item)
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden fade-in-up hover:shadow-xl transition-all hover:-translate-y-1" style="animation-delay: {{ ($loop->index % 3) * 0.1 }}s">
                    <div class="h-40 bg-gradient-to-br from-emerald-600 to-emerald-800 flex items-center justify-center relative">
                        <svg class="w-16 h-16 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 0a2 2 0 012 2v8a2 2 0 01-2 2m2-0V8a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        <span class="absolute top-3 left-3 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-gold-400 text-emerald-900">
                            {{ $item['cat_en'] }}
                        </span>
                    </div>
                    <div class="p-5">
                        <p class="text-xs text-gray-400 mb-2">{{ $item['date'] }}</p>
                        <h4 class="font-bold text-emerald-800 text-sm mb-2 leading-tight" data-lang="en">{{ $item['title_en'] }}</h4>
                        <h4 class="font-bold text-emerald-800 text-sm mb-2 leading-tight" data-lang="sw">{{ $item['title_sw'] }}</h4>
                        <p class="text-xs text-gray-500 leading-relaxed mb-3" data-lang="en">{{ $item['desc_en'] }}</p>
                        <p class="text-xs text-gray-500 leading-relaxed mb-3" data-lang="sw">{{ $item['desc_sw'] }}</p>
                        <a href="#" class="inline-flex items-center gap-1 text-xs font-bold text-gold-600 hover:text-gold-700 transition-colors">
                            <span data-lang="en">Read More</span>
                            <span data-lang="sw">Soma Zaidi</span>
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Upcoming Events --}}
<section class="py-16 sm:py-20 px-4 sm:px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="en">Mark Your Calendar</p>
            <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="sw">Andika Kalenda Yako</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800" data-lang="en">Upcoming Events</h2>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800" data-lang="sw">Matukio Yanayokuja</h2>
        </div>

        <div class="space-y-4 max-w-4xl mx-auto">
            @php
                $events = [
                    ['day' => '15', 'month_en' => 'Aug', 'month_sw' => 'Ago', 'title_en' => 'Orientation Week for New Students', 'title_sw' => 'Wiki ya Muelekeo kwa Wanafunzi Wapya', 'time' => '08:00 - 16:00', 'loc_en' => 'Main Campus Hall', 'loc_sw' => 'Ukumbi Mkuu wa Chuo'],
                    ['day' => '01', 'month_en' => 'Sep', 'month_sw' => 'Sep', 'title_en' => 'First Semester Begins', 'title_sw' => 'Muhula wa Kwanza Unaanza', 'time' => '08:00', 'loc_en' => 'All Classrooms', 'loc_sw' => 'Madarasa Yote'],
                    ['day' => '10', 'month_en' => 'Oct', 'month_sw' => 'Okt', 'title_en' => 'Teacher Education Conference 2026', 'title_sw' => 'Mkutano wa Elimu ya Ualimu 2026', 'time' => '09:00 - 17:00', 'loc_en' => 'Conference Center', 'loc_sw' => 'Kituo cha Mkutano'],
                    ['day' => '15', 'month_en' => 'Dec', 'month_sw' => 'Des', 'title_en' => 'Graduation Ceremony 2026', 'title_sw' => 'Sherehe ya Kuhitimu 2026', 'time' => '10:00 - 14:00', 'loc_en' => 'Main Campus Grounds', 'loc_sw' => 'Uwanja Mkuu wa Chuo'],
                ]
            @endphp

            @foreach($events as $event)
                <div class="flex items-center gap-4 sm:gap-6 p-4 sm:p-6 rounded-2xl border-2 border-gray-100 hover:border-emerald-200 hover:shadow-md transition-all fade-in-up" style="animation-delay: {{ $loop->index * 0.08 }}s">
                    <div class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-800 flex flex-col items-center justify-center text-white">
                        <span class="text-2xl sm:text-3xl font-extrabold leading-none">{{ $event['day'] }}</span>
                        <span class="text-xs font-semibold mt-0.5" data-lang="en">{{ $event['month_en'] }}</span>
                        <span class="text-xs font-semibold mt-0.5" data-lang="sw">{{ $event['month_sw'] }}</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-bold text-emerald-800 text-sm sm:text-base mb-1" data-lang="en">{{ $event['title_en'] }}</h4>
                        <h4 class="font-bold text-emerald-800 text-sm sm:text-base mb-1" data-lang="sw">{{ $event['title_sw'] }}</h4>
                        <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500">
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                {{ $event['time'] }}
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span data-lang="en">{{ $event['loc_en'] }}</span>
                                <span data-lang="sw">{{ $event['loc_sw'] }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Newsletter CTA --}}
<section class="py-16 px-4 sm:px-6 bg-emerald-800 text-white text-center">
    <div class="max-w-3xl mx-auto fade-in-up">
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-4" data-lang="en">Never Miss an Update</h2>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-4" data-lang="sw">Usikose Habari</h2>
        <p class="text-emerald-50/80 mb-8 text-sm sm:text-base" data-lang="en">Stay connected with the latest news and events from Butimba Teachers College.</p>
        <p class="text-emerald-50/80 mb-8 text-sm sm:text-base" data-lang="sw">Kaa macho na habari za hivi karibuni kutoka Chuo Cha Walimu Butimba.</p>
        <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all">
            <span data-lang="en">Register for Updates</span>
            <span data-lang="sw">Jisajili kwa Habari</span>
        </a>
    </div>
</section>
@endsection
