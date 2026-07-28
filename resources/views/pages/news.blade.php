@extends('layouts.site')

@section('title', 'News & Events')

@section('active_nav', 'news')

@section('content')
{{-- Hero/Breadcrumb Section --}}
<section class="bg-[#6b8e6b] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#1a3a1a] mb-2 uppercase tracking-wide">
            <span data-lang="en">News &amp; Events</span>
            <span data-lang="sw">Habari &amp; Matukio</span>
        </h1>
        <div class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-emerald-900 hover:underline">Home</a>
            <span class="text-emerald-800">/</span>
            <span class="text-emerald-800 font-medium" data-lang="en">News &amp; Events</span>
            <span class="text-emerald-800 font-medium" data-lang="sw">Habari &amp; Matukio</span>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-8">

            {{-- Main Content --}}
            <div class="flex-1 space-y-8">

                {{-- Featured Article --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    <div class="bg-emerald-800 px-6 py-3">
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="en">Featured Story</h2>
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="sw">Hadithi Kuu</h2>
                    </div>
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 text-[10px] font-bold rounded-full bg-emerald-100 text-emerald-700 uppercase tracking-wider" data-lang="en">Announcement</span>
                            <span class="px-3 py-1 text-[10px] font-bold rounded-full bg-emerald-100 text-emerald-700 uppercase tracking-wider" data-lang="sw">Tangazo</span>
                            <span class="text-xs text-gray-400">15 Jul 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-emerald-900 mb-3" data-lang="en">ELMS Platform Launch for Academic Year 2026</h3>
                        <h3 class="text-xl font-bold text-emerald-900 mb-3" data-lang="sw">Uzinduzi wa Jukwaa la ELMS kwa Mwaka wa Masomo 2026</h3>
                        <p class="text-sm text-gray-600 leading-relaxed mb-4" data-lang="en">
                            Butimba Teachers College is proud to announce the official launch of our E-Learning Management System (ELMS) for the 2026 academic year. This digital platform will provide students and lecturers with online access to course materials, assignments, and collaborative learning tools.
                        </p>
                        <p class="text-sm text-gray-600 leading-relaxed mb-4" data-lang="sw">
                            Chuo Cha Walimu Butimba kina fakhari kutangaza uzinduzi rasmi wa Mfumo wa Elimu kwa Mtandao (ELMS) kwa mwaka wa masomo 2026. Jukwaa hili la kidijitali litawapa wanafunzi na walimu ufikiaji wa mtandaoni wa vifaa vya kozi, kazi, na zana za kujifunza kwa pamoja.
                        </p>
                        <a href="#" class="inline-flex items-center gap-1.5 text-sm font-bold text-emerald-700 hover:text-emerald-900 transition-colors">
                            <span data-lang="en">Read More</span>
                            <span data-lang="sw">Soma Zaidi</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- News Grid --}}
                <div>
                    <h3 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-4 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="en">Latest News</h3>
                    <h3 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-4 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="sw">Habari za Karibuni</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
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
                            <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all">
                                <div class="h-28 bg-emerald-800 flex items-center justify-center relative">
                                    <svg class="w-12 h-12 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 0a2 2 0 012 2v8a2 2 0 01-2 2m2-0V8a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                                    <span class="absolute top-2 left-2 px-2 py-0.5 text-[9px] font-bold uppercase tracking-wider rounded-full bg-gold-400 text-emerald-900">
                                        {{ $item['cat_en'] }}
                                    </span>
                                </div>
                                <div class="p-4">
                                    <p class="text-[11px] text-gray-400 mb-1">{{ $item['date'] }}</p>
                                    <h4 class="font-bold text-emerald-800 text-sm mb-2 leading-tight" data-lang="en">{{ $item['title_en'] }}</h4>
                                    <h4 class="font-bold text-emerald-800 text-sm mb-2 leading-tight" data-lang="sw">{{ $item['title_sw'] }}</h4>
                                    <p class="text-xs text-gray-500 leading-relaxed mb-3" data-lang="en">{{ $item['desc_en'] }}</p>
                                    <p class="text-xs text-gray-500 leading-relaxed mb-3" data-lang="sw">{{ $item['desc_sw'] }}</p>
                                    <a href="#" class="inline-flex items-center gap-1 text-xs font-bold text-emerald-700 hover:text-emerald-900 transition-colors">
                                        <span data-lang="en">Read More</span>
                                        <span data-lang="sw">Soma Zaidi</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Upcoming Events --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    <div class="bg-emerald-800 px-6 py-3">
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="en">Upcoming Events</h2>
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="sw">Matukio Yanayokuja</h2>
                    </div>
                    <div class="p-6 space-y-4">
                        @php
                            $events = [
                                ['day' => '15', 'month_en' => 'Aug', 'month_sw' => 'Ago', 'title_en' => 'Orientation Week for New Students', 'title_sw' => 'Wiki ya Muelekeo kwa Wanafunzi Wapya', 'time' => '08:00 - 16:00', 'loc_en' => 'Main Campus Hall', 'loc_sw' => 'Ukumbi Mkuu wa Chuo'],
                                ['day' => '01', 'month_en' => 'Sep', 'month_sw' => 'Sep', 'title_en' => 'First Semester Begins', 'title_sw' => 'Muhula wa Kwanza Unaanza', 'time' => '08:00', 'loc_en' => 'All Classrooms', 'loc_sw' => 'Madarasa Yote'],
                                ['day' => '10', 'month_en' => 'Oct', 'month_sw' => 'Okt', 'title_en' => 'Teacher Education Conference 2026', 'title_sw' => 'Mkutano wa Elimu ya Ualimu 2026', 'time' => '09:00 - 17:00', 'loc_en' => 'Conference Center', 'loc_sw' => 'Kituo cha Mkutano'],
                                ['day' => '15', 'month_en' => 'Dec', 'month_sw' => 'Des', 'title_en' => 'Graduation Ceremony 2026', 'title_sw' => 'Sherehe ya Kuhitimu 2026', 'time' => '10:00 - 14:00', 'loc_en' => 'Main Campus Grounds', 'loc_sw' => 'Uwanja Mkuu wa Chuo'],
                            ]
                        @endphp

                        @foreach($events as $event)
                            <div class="flex items-center gap-4 p-3 rounded-lg border border-gray-100 hover:border-emerald-200 hover:bg-gray-50/50 transition-all">
                                <div class="flex-shrink-0 w-14 h-14 rounded-lg bg-emerald-800 flex flex-col items-center justify-center text-white">
                                    <span class="text-xl font-extrabold leading-none">{{ $event['day'] }}</span>
                                    <span class="text-[10px] font-semibold mt-0.5" data-lang="en">{{ $event['month_en'] }}</span>
                                    <span class="text-[10px] font-semibold mt-0.5" data-lang="sw">{{ $event['month_sw'] }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-bold text-emerald-800 text-sm mb-1" data-lang="en">{{ $event['title_en'] }}</h4>
                                    <h4 class="font-bold text-emerald-800 text-sm mb-1" data-lang="sw">{{ $event['title_sw'] }}</h4>
                                    <div class="flex flex-wrap items-center gap-3 text-[11px] text-gray-500">
                                        <span class="flex items-center gap-1">
                                            <svg class="w-3 h-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                            {{ $event['time'] }}
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <svg class="w-3 h-3 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                            <span data-lang="en">{{ $event['loc_en'] }}</span>
                                            <span data-lang="sw">{{ $event['loc_sw'] }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            {{-- Sidebar --}}
            <div class="w-full lg:w-80 space-y-6">
                {{-- Related Pages Card --}}
                <div class="bg-[#f2f2f2] rounded-lg p-6 border border-gray-200 shadow-sm">
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="en">Related Pages</h3>
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="sw">Kurasa Husika</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ url('/admissions') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Admission Information</span>
                                <span data-lang="sw">Taarifa za Uandikishaji</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/courses') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Programmes Offered</span>
                                <span data-lang="sw">Programu Zinazotolewa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('apply.form') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Apply Online</span>
                                <span data-lang="sw">Omba Mtandaoni</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('track.form') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Track Application</span>
                                <span data-lang="sw">Fuatilia Maombi</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Newsletter CTA Card --}}
                <div class="bg-emerald-900 text-white rounded-lg p-6 shadow-lg relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12"></div>
                    <h4 class="font-bold text-lg mb-3 relative z-10" data-lang="en">Never Miss an Update</h4>
                    <h4 class="font-bold text-lg mb-3 relative z-10" data-lang="sw">Usikose Habari</h4>
                    <p class="text-sm text-emerald-100/80 mb-4 relative z-10" data-lang="en">Stay connected with the latest news and events from Butimba Teachers College.</p>
                    <p class="text-sm text-emerald-100/80 mb-4 relative z-10" data-lang="sw">Kaa macho na habari za hivi karibuni kutoka Chuo Cha Walimu Butimba.</p>
                    <a href="{{ route('register') }}" class="block text-center py-2.5 bg-gold-400 hover:bg-gold-500 text-emerald-950 font-bold rounded-md transition-all relative z-10 shadow-md">
                        <span data-lang="en">Register for Updates</span>
                        <span data-lang="sw">Jisajili kwa Habari</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
