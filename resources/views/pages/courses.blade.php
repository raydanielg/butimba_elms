@extends('layouts.site')

@section('title', 'Offered Programmes')
@section('active_nav', 'courses')

@section('content')
{{-- Hero/Breadcrumb Section --}}
<section class="bg-[#6b8e6b] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#1a3a1a] mb-2 uppercase tracking-wide">
            BUTIMBA Offered Programmes
        </h1>
        <div class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-emerald-900 hover:underline">Home</a>
            <span class="text-emerald-800">/</span>
            <span class="text-emerald-800 font-medium">Programmes</span>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-8">
            
            {{-- Main Content --}}
            <div class="flex-1">
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    {{-- Tabs --}}
                    <div class="flex border-b border-gray-200 overflow-x-auto scrollbar-hide">
                        <button class="px-6 py-4 text-sm font-bold text-emerald-800 border-b-2 border-emerald-800 whitespace-nowrap" data-lang="en">Degree Programmes</button>
                        <button class="px-6 py-4 text-sm font-bold text-emerald-800 border-b-2 border-emerald-800 whitespace-nowrap" data-lang="sw">Programu za Shahada</button>
                        
                        <button class="px-6 py-4 text-sm font-semibold text-gray-500 hover:text-emerald-800 transition-colors whitespace-nowrap" data-lang="en">Diploma Programmes</button>
                        <button class="px-6 py-4 text-sm font-semibold text-gray-500 hover:text-emerald-800 transition-colors whitespace-nowrap" data-lang="sw">Programu za Stashahada</button>
                        
                        <button class="px-6 py-4 text-sm font-semibold text-gray-500 hover:text-emerald-800 transition-colors whitespace-nowrap" data-lang="en">Certificate Programmes</button>
                        <button class="px-6 py-4 text-sm font-semibold text-gray-500 hover:text-emerald-800 transition-colors whitespace-nowrap" data-lang="sw">Programu za Astashahada</button>
                    </div>

                    {{-- Table Content --}}
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-6 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <span data-lang="en">Show</span>
                                <span data-lang="sw">Onyesha</span>
                                <select class="border rounded px-1 py-0.5 mx-1 outline-none"><option>10</option><option>25</option><option>50</option></select>
                                <span data-lang="en">entries</span>
                                <span data-lang="sw">matokeo</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span data-lang="en">Search:</span>
                                <span data-lang="sw">Tafuta:</span>
                                <input type="text" class="border rounded px-2 py-1 ml-1 outline-none focus:border-emerald-500 transition-all w-32 sm:w-48">
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left border-collapse">
                                <thead class="bg-gray-50/80 border-y border-gray-200">
                                    <tr>
                                        <th class="px-4 py-3 font-bold text-gray-700 w-[70%] uppercase tracking-wider text-[11px]" data-lang="en">Programme Name</th>
                                        <th class="px-4 py-3 font-bold text-gray-700 w-[70%] uppercase tracking-wider text-[11px]" data-lang="sw">Jina la Programu</th>
                                        <th class="px-4 py-3 w-[30%]"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @php
                                        $degreeProgs = [
                                            ['en' => 'Bachelor Degree In Education (Science) - Full Time', 'sw' => 'Shahada ya Ualimu (Sayansi) - Muda Wote'],
                                            ['en' => 'Bachelor Degree In Education (Mathematics) - Full Time', 'sw' => 'Shahada ya Ualimu (Hisabati) - Muda Wote'],
                                            ['en' => 'Bachelor Degree In Education (ICT) - Full Time', 'sw' => 'Shahada ya Ualimu (Tehama) - Muda Wote'],
                                            ['en' => 'Bachelor Degree In Education (Languages) - Full Time', 'sw' => 'Shahada ya Ualimu (Lugha) - Muda Wote'],
                                            ['en' => 'Bachelor Degree In Special Needs Education - Full Time', 'sw' => 'Shahada ya Ualimu (Mahitaji Maalum) - Muda Wote'],
                                            ['en' => 'Bachelor Degree In Primary Education - Full Time', 'sw' => 'Shahada ya Ualimu wa Msingi - Muda Wote'],
                                            ['en' => 'Bachelor Degree In Early Childhood Education - Full Time', 'sw' => 'Shahada ya Elimu ya Awali - Muda Wote'],
                                            ['en' => 'Bachelor Degree In Educational Management - Full Time', 'sw' => 'Shahada ya Usimamizi wa Elimu - Muda Wote'],
                                        ];
                                    @endphp
                                    @foreach($degreeProgs as $prog)
                                    <tr class="hover:bg-gray-50/80 transition-colors group">
                                        <td class="px-4 py-4 text-emerald-900 font-medium">
                                            <span data-lang="en">{{ $prog['en'] }}</span>
                                            <span data-lang="sw">{{ $prog['sw'] }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-right">
                                            <a href="#" class="inline-flex items-center gap-1.5 text-emerald-700 font-bold text-xs hover:text-emerald-900 group">
                                                <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                                <span data-lang="en">View Details</span>
                                                <span data-lang="sw">Angalia Maelezo</span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Pagination Visual --}}
                        <div class="flex flex-col sm:flex-row items-center justify-between mt-8 gap-4 text-xs text-gray-500">
                            <div data-lang="en">Showing 1 to 8 of 8 entries</div>
                            <div data-lang="sw">Inaonyesha 1 hadi 8 kati ya 8</div>
                            <div class="flex items-center gap-1">
                                <button class="px-3 py-1.5 rounded border border-gray-200 hover:bg-gray-50 transition-colors" data-lang="en">Previous</button>
                                <button class="px-3 py-1.5 rounded border border-gray-200 hover:bg-gray-50 transition-colors" data-lang="sw">Iliyopita</button>
                                <button class="px-3 py-1.5 rounded bg-emerald-800 text-white font-bold">1</button>
                                <button class="px-3 py-1.5 rounded border border-gray-200 hover:bg-gray-50 transition-colors" data-lang="en">Next</button>
                                <button class="px-3 py-1.5 rounded border border-gray-200 hover:bg-gray-50 transition-colors" data-lang="sw">Inayofuata</button>
                            </div>
                        </div>
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
                            <a href="{{ url('/admissions') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">How To Apply</span>
                                <span data-lang="sw">Jinsi ya Kuomba</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Fee Structure</span>
                                <span data-lang="sw">Muundo wa Ada</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors font-bold">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Online Application System</span>
                                <span data-lang="sw">Mfumo wa Maombi Mtandaoni</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Contact Quick Help Card --}}
                <div class="bg-emerald-900 text-white rounded-lg p-6 shadow-lg relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                    <h4 class="font-bold text-lg mb-4 relative z-10" data-lang="en">Need Help?</h4>
                    <h4 class="font-bold text-lg mb-4 relative z-10" data-lang="sw">Unahitaji Msaada?</h4>
                    <p class="text-sm text-emerald-100/80 mb-6 relative z-10" data-lang="en">Contact our admission office for any queries regarding programmes and applications.</p>
                    <p class="text-sm text-emerald-100/80 mb-6 relative z-10" data-lang="sw">Wasiliana na ofisi yetu ya uandikishaji kwa maswali yoyote kuhusu programu na maombi.</p>
                    <a href="{{ url('/contact') }}" class="block text-center py-2.5 bg-gold-400 hover:bg-gold-500 text-emerald-950 font-bold rounded-md transition-all relative z-10 shadow-md">
                        <span data-lang="en">Contact Admission</span>
                        <span data-lang="sw">Wasiliana na Ofisi</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

