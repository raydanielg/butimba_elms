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
                        <button onclick="switchTab('diploma')" id="tab-diploma" class="tab-btn px-6 py-4 text-sm font-bold text-emerald-800 border-b-2 border-emerald-800 whitespace-nowrap">
                            <span data-lang="en">Diploma Programmes</span>
                            <span data-lang="sw">Programu za Stashahada</span>
                        </button>
                        
                        <button onclick="switchTab('degree')" id="tab-degree" class="tab-btn px-6 py-4 text-sm font-semibold text-gray-500 hover:text-emerald-800 transition-colors whitespace-nowrap">
                            <span data-lang="en">Degree Programmes</span>
                            <span data-lang="sw">Programu za Shahada</span>
                        </button>
                        
                        <button onclick="switchTab('certificate')" id="tab-certificate" class="tab-btn px-6 py-4 text-sm font-semibold text-gray-500 hover:text-emerald-800 transition-colors whitespace-nowrap">
                            <span data-lang="en">Certificate Programmes</span>
                            <span data-lang="sw">Programu za Astashahada</span>
                        </button>
                    </div>

                    {{-- Table Content --}}
                    <div class="p-6">
                        {{-- Diploma Section (Default) --}}
                        <div id="section-diploma" class="tab-content overflow-x-auto">
                            <table class="w-full text-sm text-left border-collapse">
                                <thead class="bg-gray-50/80 border-y border-gray-200">
                                    <tr>
                                        <th class="px-4 py-3 font-bold text-gray-700 uppercase tracking-wider text-[11px]">
                                            <span data-lang="en">Programme Name</span>
                                            <span data-lang="sw">Jina la Programu</span>
                                        </th>
                                        <th class="px-4 py-3 text-right"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @foreach($diplomaCourses as $course)
                                    <tr class="hover:bg-gray-50/80 transition-colors group">
                                        <td class="px-4 py-4 text-emerald-900 font-medium">
                                            <span data-lang="en">{{ $course->name_en }}</span>
                                            <span data-lang="sw">{{ $course->name_sw }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-right">
                                            <button onclick="viewDetails({{ $course->id }})" class="inline-flex items-center gap-1.5 text-emerald-700 font-bold text-xs hover:text-emerald-900 group">
                                                <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                                <span data-lang="en">View Details</span>
                                                <span data-lang="sw">Angalia Maelezo</span>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Degree Section --}}
                        <div id="section-degree" class="tab-content hidden overflow-x-auto">
                            <table class="w-full text-sm text-left border-collapse">
                                <thead class="bg-gray-50/80 border-y border-gray-200">
                                    <tr>
                                        <th class="px-4 py-3 font-bold text-gray-700 uppercase tracking-wider text-[11px]">
                                            <span data-lang="en">Programme Name</span>
                                            <span data-lang="sw">Jina la Programu</span>
                                        </th>
                                        <th class="px-4 py-3 text-right"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @foreach($degreeCourses as $course)
                                    <tr class="hover:bg-gray-50/80 transition-colors group">
                                        <td class="px-4 py-4 text-emerald-900 font-medium">
                                            <span data-lang="en">{{ $course->name_en }}</span>
                                            <span data-lang="sw">{{ $course->name_sw }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-right">
                                            <button onclick="viewDetails({{ $course->id }})" class="inline-flex items-center gap-1.5 text-emerald-700 font-bold text-xs hover:text-emerald-900 group">
                                                <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                                <span data-lang="en">View Details</span>
                                                <span data-lang="sw">Angalia Maelezo</span>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Certificate Section --}}
                        <div id="section-certificate" class="tab-content hidden overflow-x-auto">
                            <table class="w-full text-sm text-left border-collapse">
                                <thead class="bg-gray-50/80 border-y border-gray-200">
                                    <tr>
                                        <th class="px-4 py-3 font-bold text-gray-700 uppercase tracking-wider text-[11px]">
                                            <span data-lang="en">Programme Name</span>
                                            <span data-lang="sw">Jina la Programu</span>
                                        </th>
                                        <th class="px-4 py-3 text-right"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @foreach($certificateCourses as $course)
                                    <tr class="hover:bg-gray-50/80 transition-colors group">
                                        <td class="px-4 py-4 text-emerald-900 font-medium">
                                            <span data-lang="en">{{ $course->name_en }}</span>
                                            <span data-lang="sw">{{ $course->name_sw }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-right">
                                            <button onclick="viewDetails({{ $course->id }})" class="inline-flex items-center gap-1.5 text-emerald-700 font-bold text-xs hover:text-emerald-900 group">
                                                <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                                <span data-lang="en">View Details</span>
                                                <span data-lang="sw">Angalia Maelezo</span>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

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

                {{-- Contact Quick Help Card --}}
                <div class="bg-emerald-900 text-white rounded-lg p-6 shadow-lg relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                    <h4 class="font-bold text-lg mb-4 relative z-10" data-lang="en">Need Help?</h4>
                    <h4 class="font-bold text-lg mb-4 relative z-10" data-lang="sw">Unahitaji Msaada?</h4>
                    <p class="text-sm text-emerald-100/80 mb-6 relative z-10" data-lang="en">Contact our admission office for any queries regarding programmes.</p>
                    <p class="text-sm text-emerald-100/80 mb-6 relative z-10" data-lang="sw">Wasiliana na ofisi yetu ya uandikishaji kwa maswali kuhusu programu.</p>
                    <a href="{{ url('/contact') }}" class="block text-center py-2.5 bg-gold-400 hover:bg-gold-500 text-emerald-950 font-bold rounded-md transition-all relative z-10 shadow-md">
                        <span data-lang="en">Contact Admission</span>
                        <span data-lang="sw">Wasiliana na Ofisi</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Course Detail Modal --}}
<div id="courseModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal()"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden z-10">
        {{-- Modal Header --}}
        <div class="bg-emerald-800 px-8 py-6">
            <div class="flex justify-between items-start">
                <h3 id="modalTitle" class="text-xl font-bold text-white leading-tight"></h3>
                <button onclick="closeModal()" class="text-white/80 hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="flex gap-4 mt-4">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 text-white text-xs font-bold border border-white/20">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span id="modalDuration"></span>
                </span>
                <span id="modalCategory" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gold-400 text-emerald-900 text-xs font-black uppercase tracking-wider"></span>
            </div>
        </div>

        {{-- Modal Body --}}
        <div class="p-8 space-y-6">
            <div>
                <h4 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-2" data-lang="en">Description</h4>
                <h4 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-2" data-lang="sw">Maelezo ya Kozi</h4>
                <p id="modalDescription" class="text-sm text-gray-600 leading-relaxed"></p>
            </div>

            <div>
                <h4 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-2" data-lang="en">Entry Requirements</h4>
                <h4 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-2" data-lang="sw">Sifa za Kujiunga</h4>
                <p id="modalRequirements" class="text-sm text-gray-600 leading-relaxed"></p>
            </div>

            <div class="pt-4 flex gap-3">
                <a href="{{ route('apply.form') }}" class="flex-1 text-center py-3 bg-emerald-800 hover:bg-emerald-900 text-white font-bold rounded-xl transition-all shadow-lg">
                    <span data-lang="en">Apply Now</span>
                    <span data-lang="sw">Omba Sasa</span>
                </a>
                <button onclick="closeModal()" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-xl transition-all">
                    <span data-lang="en">Close</span>
                    <span data-lang="sw">Funga</span>
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function switchTab(tab) {
    // Hide all contents
    document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
    // Show selected
    document.getElementById('section-' + tab).classList.remove('hidden');

    // Update tab styles
    document.querySelectorAll('.tab-btn').forEach(b => {
        b.classList.remove('text-emerald-800', 'border-b-2', 'border-emerald-800', 'font-bold');
        b.classList.add('text-gray-500', 'font-semibold');
    });

    const activeBtn = document.getElementById('tab-' + tab);
    activeBtn.classList.remove('text-gray-500', 'font-semibold');
    activeBtn.classList.add('text-emerald-800', 'border-b-2', 'border-emerald-800', 'font-bold');
}

async function viewDetails(id) {
    try {
        const res = await fetch(`/api/courses/${id}`);
        const course = await res.json();
        
        const lang = document.body.classList.contains('lang-sw') ? 'sw' : 'en';
        
        document.getElementById('modalTitle').textContent = course['name_' + lang];
        document.getElementById('modalDuration').textContent = course['duration_' + lang];
        document.getElementById('modalCategory').textContent = course.category;
        document.getElementById('modalDescription').textContent = course['description_' + lang];
        document.getElementById('modalRequirements').textContent = course['requirements_' + lang];

        const modal = document.getElementById('courseModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    } catch (e) {
        console.error('Failed to load course details:', e);
    }
}

function closeModal() {
    const modal = document.getElementById('courseModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
}
</script>
@endpush
@endsection

