@extends('layouts.site')

@section('title', 'Admission Information')
@section('active_nav', 'admissions')

@section('content')
{{-- Hero/Breadcrumb Section --}}
<section class="bg-[#6b8e6b] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#1a3a1a] mb-2 uppercase tracking-wide">
            Admission Information
        </h1>
        <div class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-emerald-900 hover:underline">Home</a>
            <span class="text-emerald-800">/</span>
            <span class="text-emerald-800 font-medium">Admissions</span>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-8">
            
            {{-- Main Content --}}
            <div class="flex-1 space-y-8">
                
                {{-- Diploma Announcement Card --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    {{-- Alert bar --}}
                    <div class="bg-red-50 px-6 py-3 border-b border-red-100 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                        <p class="text-[11px] font-bold text-red-800 uppercase tracking-wider">
                            Deadline: 10th August 2026 / Mwisho: 10 Agosti 2026
                        </p>
                    </div>

                    <div class="p-8 sm:p-10">
                        <h2 class="text-xl font-bold text-emerald-900 mb-6 uppercase leading-tight border-b border-gray-100 pb-6">
                            Nafasi za Masomo ya Stashahada ya Ualimu wa Elimu ya Msingi kwa Njia ya Masafa (2026/2027)
                        </h2>

                        {{-- Introduction --}}
                        <div class="mb-10">
                            <h3 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-4 pb-2 border-b-2 border-emerald-800 inline-block">
                                Introduction / Utangulizi
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Chuo kinatangaza nafasi za Mafunzo ya Ualimu ya Stashahada ya Ualimu Elimu ya Msingi kwa Njia ya Masafa kwa muda wa miaka mitatu (03) kwa Walimu waliohitimu Mafunzo ya Ualimu Ngazi ya Astashahada (Cheti cha Daraja la III A) ya Ualimu wa Elimu ya Awali au Msingi.
                            </p>
                        </div>

                        {{-- Details Grid --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                            <div class="space-y-4">
                                <h4 class="text-xs font-bold text-emerald-900 uppercase flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Service Area / Eneo la Huduma
                                </h4>
                                <p class="text-sm text-gray-600">Mikoa ya <span class="font-bold">Mwanza, Geita na Simiyu</span>.</p>
                            </div>
                            <div class="space-y-4">
                                <h4 class="text-xs font-bold text-emerald-900 uppercase flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3a7 7 0 00-7 7v5a2 2 0 002 2h10a2 2 0 002-2v-5a7 7 0 00-7-7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3"/></svg>
                                    Delivery / Uendeshaji
                                </h4>
                                <p class="text-sm text-gray-600">Vipindi vya ana kwa ana na teknolojia ya kidijitali (Hybrid).</p>
                            </div>
                        </div>

                        {{-- Payment Box - Simplified --}}
                        <div class="bg-emerald-50/50 border border-emerald-100 rounded-lg p-6 mb-10">
                            <h3 class="text-xs font-bold text-emerald-800 uppercase mb-4 flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                                Fees & Instructions / Maelekezo ya Ada
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="text-sm space-y-2">
                                    <p class="text-gray-600 font-medium">Application Fee: <span class="text-emerald-900 font-bold">5,000/=</span></p>
                                    <div class="bg-white p-3 rounded border border-emerald-100 text-[13px]">
                                        <p class="text-emerald-800 font-bold mb-1">NMB BANK</p>
                                        <p>Acc Name: <span class="font-bold">Butimba Teachers Training College</span></p>
                                        <p>Acc No: <span class="font-bold">31101200023</span></p>
                                    </div>
                                </div>
                                <div class="text-sm space-y-3">
                                    <div class="flex justify-between border-b border-emerald-100 pb-2">
                                        <span class="text-gray-600">Tuition Fee / Ada ya Mafunzo</span>
                                        <span class="font-bold text-emerald-900">450,000/=</span>
                                    </div>
                                    <div class="flex justify-between border-b border-emerald-100 pb-2">
                                        <span class="text-gray-600">Contributions / Michango</span>
                                        <span class="font-bold text-emerald-900">150,000/=</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Reporting Dates --}}
                        <div class="mb-10">
                            <h3 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-6 pb-2 border-b-2 border-emerald-800 inline-block">
                                Reporting Dates / Tarehe za Kuripoti
                            </h3>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-1 bg-gray-50 p-4 rounded border border-gray-100 text-center">
                                    <p class="text-[10px] text-gray-500 font-bold uppercase mb-1">Start / Kuanza</p>
                                    <p class="text-base font-bold text-emerald-900">17 August, 2026</p>
                                </div>
                                <div class="flex-1 bg-gray-50 p-4 rounded border border-gray-100 text-center">
                                    <p class="text-[10px] text-gray-500 font-bold uppercase mb-1">Deadline / Mwisho</p>
                                    <p class="text-base font-bold text-red-700">30 August, 2026</p>
                                </div>
                            </div>
                        </div>

                        {{-- Action --}}
                        <div class="text-center pt-4 flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <a href="{{ route('apply.form') }}" class="inline-flex items-center gap-2 px-10 py-3.5 bg-emerald-800 hover:bg-emerald-900 text-white font-bold rounded shadow-lg transition-all group">
                                <span data-lang="en">Apply for this Programme</span>
                                <span data-lang="sw">Omba Programu Hii</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="{{ route('track.form') }}" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white border-2 border-emerald-800 text-emerald-800 hover:bg-emerald-50 font-bold rounded shadow-sm transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                <span data-lang="en">Track Application</span>
                                <span data-lang="sw">Fuatilia Maombi</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Sidebar --}}
            <div class="w-full lg:w-80 space-y-6">
                {{-- Quick Contact Card --}}
                <div class="bg-[#f2f2f2] rounded-lg p-6 border border-gray-200 shadow-sm">
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="en">Need Help?</h3>
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="sw">Msaada?</h3>
                    
                    <div class="space-y-4">
                        <div class="text-[13px] text-gray-600 leading-relaxed">
                            Call the Registrar's office for admission support.
                        </div>
                        <div class="space-y-3">
                            <a href="tel:0689363690" class="flex items-center gap-3 text-sm text-gray-700 hover:text-emerald-800 transition-colors font-bold">
                                <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>0689 363 690</span>
                            </a>
                            <a href="tel:0653144677" class="flex items-center gap-3 text-sm text-gray-700 hover:text-emerald-800 transition-colors font-bold">
                                <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>0653 144 677</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Related Pages Card --}}
                <div class="bg-[#f2f2f2] rounded-lg p-6 border border-gray-200 shadow-sm">
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="en">Related Pages</h3>
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full" data-lang="sw">Kurasa Husika</h3>
                    
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ url('/courses') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Programmes Offered</span>
                                <span data-lang="sw">Programu Zinazotolewa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Fee Structure</span>
                                <span data-lang="sw">Muundo wa Ada</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- OAS Portal Card --}}
                <div class="bg-emerald-900 text-white rounded-lg p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-3">Online Application</h4>
                    <p class="text-[13px] text-emerald-100/80 leading-relaxed mb-4">
                        Register for an account on our OAS platform to start your journey.
                    </p>
                    <a href="{{ route('apply.form') }}" class="text-[11px] font-bold uppercase tracking-wider text-gold-400 hover:text-gold-300 flex items-center gap-2 transition-colors">
                        Go to Portal →
                    </a>
                </div>

                {{-- Track Application Card --}}
                <div class="bg-white border-2 border-emerald-200 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-emerald-900">Track Application</h4>
                    </div>
                    <p class="text-[13px] text-gray-600 leading-relaxed mb-4">
                        Already applied? Enter your tracking code to check your application status.
                    </p>
                    <a href="{{ route('track.form') }}" class="text-[11px] font-bold uppercase tracking-wider text-emerald-700 hover:text-emerald-900 flex items-center gap-2 transition-colors">
                        Track Now →
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection


