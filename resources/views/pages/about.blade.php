@extends('layouts.site')

@section('title', 'About Our College')
@section('active_nav', 'about')

@section('content')
{{-- Hero/Breadcrumb Section --}}
<section class="bg-[#6b8e6b] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#1a3a1a] mb-2 uppercase tracking-wide">
            BUTIMBA About Our College
        </h1>
        <div class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-emerald-900 hover:underline">Home</a>
            <span class="text-emerald-800">/</span>
            <span class="text-emerald-800 font-medium" data-lang="en">About Us</span>
            <span class="text-emerald-800 font-medium" data-lang="sw">Kuhusu Sisi</span>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-8">
            
            {{-- Main Content --}}
            <div class="flex-1">
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                    <div class="prose prose-emerald max-w-none">
                        <h2 class="text-2xl font-bold text-emerald-900 mb-6 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="en">Historical Background</h2>
                        <h2 class="text-2xl font-bold text-emerald-900 mb-6 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="sw">Historia ya Chuo</h2>
                        
                        <p class="text-gray-700 leading-relaxed mb-6" data-lang="en">
                            Butimba Teachers College was established under the Ministry of Education, Science and Technology to address the growing need for qualified teachers in Tanzania. Over the years, the college has built a strong reputation for academic excellence and practical teacher training.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-6" data-lang="sw">
                            Chuo Cha Walimu Butimba kilianzishwa chini ya Wizara ya Elimu, Sayansi na Teknolojia kukidhi hitaji la walimu wenye sifa nchini Tanzania. Kwa muda, chuo kimejenga sifa nzuri ya ubora wa kitaaluma na mafunzo ya kiutendaji ya ualimu.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-10">
                            <div class="bg-emerald-50/50 p-6 rounded-xl border border-emerald-100">
                                <h3 class="text-lg font-bold text-emerald-800 mb-3" data-lang="en">Our Mission</h3>
                                <h3 class="text-lg font-bold text-emerald-800 mb-3" data-lang="sw">Dhamira Yetu</h3>
                                <p class="text-sm text-gray-600 leading-relaxed" data-lang="en">To produce competent, ethical, and innovative teachers who can deliver quality education and contribute to the sustainable development of Tanzania's education sector.</p>
                                <p class="text-sm text-gray-600 leading-relaxed" data-lang="sw">Kutoa walimu wenye uwezo, maadili, na ubunifu ambao wanaweza kutoa elimu bora na kuchangia katika maendeleo endelevu ya sekta ya elimu nchini Tanzania.</p>
                            </div>
                            <div class="bg-gold-50/30 p-6 rounded-xl border border-gold-100">
                                <h3 class="text-lg font-bold text-emerald-800 mb-3" data-lang="en">Our Vision</h3>
                                <h3 class="text-lg font-bold text-emerald-800 mb-3" data-lang="sw">Dira Yetu</h3>
                                <p class="text-sm text-gray-600 leading-relaxed" data-lang="en">To be a center of excellence in teacher education, recognized nationally and internationally for producing transformative educators who shape future generations.</p>
                                <p class="text-sm text-gray-600 leading-relaxed" data-lang="sw">Kuwa kituo cha ubora katika elimu ya ualimu, kinachotambulika kitaifa na kimataifa kwa kutoa walimu wabadilishaji wanaoathiri vizazi vijavyo.</p>
                            </div>
                        </div>

                        <h2 class="text-2xl font-bold text-emerald-900 mb-6 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="en">Core Values</h2>
                        <h2 class="text-2xl font-bold text-emerald-900 mb-6 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="sw">Maadili Yetu</h2>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 list-none p-0">
                            @foreach([
                                ['en' => 'Integrity & Professionalism', 'sw' => 'Uadilifu na Kitaaluma'],
                                ['en' => 'Excellence in Teaching', 'sw' => 'Ubora katika Kufundisha'],
                                ['en' => 'Innovation & Creativity', 'sw' => 'Ubunifu na Uvumbuzi'],
                                ['en' => 'Community Engagement', 'sw' => 'Ushirikiano na Jamii']
                            ] as $value)
                            <li class="flex items-center gap-3 text-gray-700 bg-gray-50 p-3 rounded-lg border border-gray-100">
                                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span data-lang="en">{{ $value['en'] }}</span>
                                <span data-lang="sw">{{ $value['sw'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="w-full lg:w-80 space-y-6">
                {{-- Related Pages Card --}}
                <div class="bg-[#f2f2f2] rounded-lg p-6 border border-gray-200 shadow-sm shadow-black/5">
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="en">Related Pages</h3>
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="sw">Kurasa Husika</h3>
                    
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ url('/about') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors font-bold">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">About Our College</span>
                                <span data-lang="sw">Kuhusu Chuo Chetu</span>
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
                            <a href="{{ url('/admissions') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Admission Information</span>
                                <span data-lang="sw">Taarifa za Uandikishaji</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Staff Directory</span>
                                <span data-lang="sw">Orodha ya Watumishi</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Quick Fact Card --}}
                <div class="bg-emerald-900 text-white rounded-lg p-6 shadow-lg relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                    <h4 class="font-bold text-lg mb-4 relative z-10" data-lang="en">Quick Facts</h4>
                    <h4 class="font-bold text-lg mb-4 relative z-10" data-lang="sw">Ukweli kwa Ufupi</h4>
                    <div class="space-y-4 relative z-10">
                        <div class="flex justify-between border-b border-emerald-800 pb-2">
                            <span class="text-xs text-emerald-200/80" data-lang="en">Established</span>
                            <span class="text-xs text-emerald-200/80" data-lang="sw">Kuanzishwa</span>
                            <span class="text-xs font-bold">1960s</span>
                        </div>
                        <div class="flex justify-between border-b border-emerald-800 pb-2">
                            <span class="text-xs text-emerald-200/80" data-lang="en">Staff count</span>
                            <span class="text-xs text-emerald-200/80" data-lang="sw">Watumishi</span>
                            <span class="text-xs font-bold">100+</span>
                        </div>
                        <div class="flex justify-between border-b border-emerald-800 pb-2">
                            <span class="text-xs text-emerald-200/80" data-lang="en">Student count</span>
                            <span class="text-xs text-emerald-200/80" data-lang="sw">Wanafunzi</span>
                            <span class="text-xs font-bold">2,000+</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
