@extends('layouts.site')

@section('title', 'Online Application Form')
@section('active_nav', 'admissions')

@section('content')
{{-- Hero/Breadcrumb Section --}}
<section class="bg-[#6b8e6b] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#1a3a1a] mb-2 uppercase tracking-wide">
            Online Application Form
        </h1>
        <div class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-emerald-900 hover:underline">Home</a>
            <span class="text-emerald-800">/</span>
            <a href="{{ url('/admissions') }}" class="text-emerald-800 hover:underline">Admissions</a>
            <span class="text-emerald-800">/</span>
            <span class="text-emerald-800 font-medium">Apply Now</span>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-8">
            
            {{-- Main Content - Form Area --}}
            <div class="flex-1">
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 sm:p-10">
                    <h2 class="text-2xl font-bold text-emerald-900 mb-8 pb-2 border-b-2 border-emerald-800 inline-block">
                        Application for Diploma (Distance Learning)
                    </h2>

                    <form id="applyForm" class="space-y-10">
                        @csrf
                        
                        {{-- Step 1: Personal Info --}}
                        <div class="space-y-6">
                            <h3 class="text-sm font-extrabold text-emerald-800 uppercase tracking-widest flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-emerald-800 text-white flex items-center justify-center text-[10px]">01</span>
                                Personal Information
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Email Address <span class="text-red-500">*</span></label>
                                    <input type="email" name="email" required placeholder="mfano@gmail.com" class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Full Name (As per certificates) <span class="text-red-500">*</span></label>
                                    <input type="text" name="full_name" required placeholder="Jina lako kamili" class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Gender <span class="text-red-500">*</span></label>
                                    <select name="gender" required class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm bg-white">
                                        <option value="">-- Select Gender --</option>
                                        <option value="Mke">Mke (Female)</option>
                                        <option value="Mme">Mme (Male)</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Date of Birth <span class="text-red-500">*</span></label>
                                    <input type="date" name="dob" required class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                </div>
                            </div>
                        </div>

                        {{-- Step 2: Location --}}
                        <div class="space-y-6">
                            <h3 class="text-sm font-extrabold text-emerald-800 uppercase tracking-widest flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-emerald-800 text-white flex items-center justify-center text-[10px]">02</span>
                                Residence & Contact
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Region <span class="text-red-500">*</span></label>
                                    <select name="region" id="regionSelect" required class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm bg-white">
                                        <option value="">-- Select Region --</option>
                                    </select>
                                    <div id="regionLoading" class="hidden text-[10px] text-emerald-600 font-bold pt-1">Loading regions...</div>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">District <span class="text-red-500">*</span></label>
                                    <select name="district" id="districtSelect" required disabled class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm bg-white disabled:bg-gray-100 disabled:text-gray-400">
                                        <option value="">-- Select District --</option>
                                    </select>
                                    <div id="districtLoading" class="hidden text-[10px] text-emerald-600 font-bold pt-1">Loading districts...</div>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Ward <span class="text-red-500">*</span></label>
                                    <select name="ward" id="wardSelect" required disabled class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm bg-white disabled:bg-gray-100 disabled:text-gray-400">
                                        <option value="">-- Select Ward --</option>
                                    </select>
                                    <div id="wardLoading" class="hidden text-[10px] text-emerald-600 font-bold pt-1">Loading wards...</div>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="text-[11px] font-bold text-gray-500 uppercase">Current Postal Address <span class="text-red-500">*</span></label>
                                <textarea name="address" required rows="2" placeholder="Anuani yako ya sasa ya makazi..." class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm"></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Applicant's Phone Number <span class="text-red-500">*</span></label>
                                    <input type="tel" name="phone" required placeholder="0xxxxxxxxx" class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Relative's Phone Number <span class="text-red-500">*</span></label>
                                    <input type="tel" name="relative_phone" required placeholder="0xxxxxxxxx" class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                </div>
                            </div>
                        </div>

                        {{-- Step 3: Professional --}}
                        <div class="space-y-6">
                            <h3 class="text-sm font-extrabold text-emerald-800 uppercase tracking-widest flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-emerald-800 text-white flex items-center justify-center text-[10px]">03</span>
                                Academic & Professional
                            </h3>
                            <div class="space-y-4">
                                <div class="space-y-1">
                                    <label class="text-[11px] font-bold text-gray-500 uppercase">Employment Status <span class="text-red-500">*</span></label>
                                    <div class="flex gap-4">
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="employment_status" value="Nimeajiriwa" required class="text-emerald-600 focus:ring-emerald-500">
                                            <span class="text-sm">Nimeajiriwa (Employed)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="employment_status" value="Sijaajiriwa" required class="text-emerald-600 focus:ring-emerald-500">
                                            <span class="text-sm">Sijaajiriwa (Unemployed)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div class="space-y-1">
                                        <label class="text-[11px] font-bold text-gray-500 uppercase">Previous Profession <span class="text-red-500">*</span></label>
                                        <select name="previous_profession" required class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm bg-white">
                                            <option value="">-- Select Qualification --</option>
                                            <option value="Astashahada ya Ualimu Elimu ya Msingi">Astashahada ya Ualimu Elimu ya Msingi</option>
                                            <option value="Astashahada ya Ualimu Elimu ya Awali">Astashahada ya Ualimu Elimu ya Awali</option>
                                        </select>
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-[11px] font-bold text-gray-500 uppercase">College Attended <span class="text-red-500">*</span></label>
                                        <input type="text" name="college_name" required placeholder="mfano: Butimba Teachers College" class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-[11px] font-bold text-gray-500 uppercase">Graduation Year <span class="text-red-500">*</span></label>
                                        <input type="number" name="graduation_year" required placeholder="mfano: 2020" class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-[11px] font-bold text-gray-500 uppercase">Certificate Number <span class="text-red-500">*</span></label>
                                        <input type="text" name="certificate_number" required placeholder="mfano: CSEE/2020/xxxxx" class="w-full px-4 py-2.5 rounded border border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Step 4: Course Selection --}}
                        <div class="space-y-6">
                            <h3 class="text-sm font-extrabold text-emerald-800 uppercase tracking-widest flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-emerald-800 text-white flex items-center justify-center text-[10px]">04</span>
                                Programme Choice
                            </h3>
                            <div class="space-y-3">
                                <label class="text-[11px] font-bold text-gray-500 uppercase tracking-wider">Select one course only <span class="text-red-500">*</span></label>
                                <div class="grid grid-cols-1 gap-2">
                                    @foreach([
                                        'Stashahada ya Ualimu Elimu ya Msingi Mchepuo wa Sayansi ya Jamii',
                                        'Stashahada ya Ualimu Elimu ya Msingi Mchepuo wa Sayansi na Hisabati',
                                        'Stashahada ya Ualimu Elimu ya Msingi mchepuo wa Sanaa na Michezo',
                                        'Stashahada ya Ualimu Elimu ya Msingi mchepuo wa Lugha'
                                    ] as $course)
                                    <label class="flex items-center gap-3 p-3 rounded border border-gray-200 cursor-pointer hover:bg-gray-50 transition-all group">
                                        <input type="radio" name="applied_course" value="{{ $course }}" required class="text-emerald-600 focus:ring-emerald-500 border-gray-300">
                                        <span class="text-sm text-gray-700 font-medium group-hover:text-emerald-900">{{ $course }}</span>
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Declaration --}}
                        <div class="p-5 bg-gray-50 border-l-4 border-emerald-800 rounded">
                            <div class="flex items-start gap-4">
                                <input type="checkbox" name="declaration" required id="decl" class="w-5 h-5 rounded text-emerald-600 focus:ring-emerald-500 border-gray-300 mt-1">
                                <label for="decl" class="text-[13px] text-gray-700 leading-relaxed cursor-pointer">
                                    Nathibitisha kuwa taarifa zote nilizotoa hapo juu ni za kweli na sahihi. Aidha, ninaelewa kwamba endapo itabainika kuwa nimetoa taarifa za uongo au zisizo sahihi, nitawajibika kwa mujibu wa sheria, kanuni na taratibu husika. <span class="text-red-500 font-bold">*</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <button type="button" onclick="previewApplication()" class="w-full sm:w-auto px-8 py-3.5 bg-white border-2 border-emerald-800 text-emerald-800 hover:bg-emerald-50 font-bold rounded shadow transition-all flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <span>Preview Application</span>
                            </button>
                            <button type="submit" id="submitBtn" class="flex-1 px-10 py-3.5 bg-emerald-800 hover:bg-emerald-900 text-white font-bold rounded shadow transition-all flex items-center justify-center gap-2 group">
                                <span id="btnText">Wasilisha Maombi (Submit)</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="w-full lg:w-80 space-y-6">
                <div class="bg-[#f2f2f2] rounded-lg p-6 border border-gray-200 shadow-sm shadow-black/5">
                    <h3 class="text-emerald-900 font-bold mb-4 pb-2 border-b border-gray-300 w-full">Quick Help</h3>
                    <div class="space-y-4">
                        <div class="text-[13px] text-gray-600 leading-relaxed">
                            Need help with the application process? Contact our support team.
                        </div>
                        <div class="space-y-3 pt-2">
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

                <div class="bg-emerald-900 text-white rounded-lg p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-3">Notice</h4>
                    <p class="text-[13px] text-emerald-100/80 leading-relaxed mb-4">
                        Please ensure all information provided is accurate and matches your official documents. Application fee of <span class="font-bold text-gold-400">5,000/=</span> is required.
                    </p>
                    <a href="{{ url('/admissions') }}" class="text-[11px] font-bold uppercase tracking-wider text-gold-400 hover:text-gold-300 flex items-center gap-2">
                        View Payment Details →
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Confirmation Modal --}}
<div id="confirmModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeConfirmModal()"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden z-10">
        {{-- Success Header Bar --}}
        <div class="bg-gradient-to-r from-emerald-700 to-emerald-900 px-8 py-6 text-center">
            <div class="w-16 h-16 bg-white/20 text-white rounded-full flex items-center justify-center mx-auto mb-3 backdrop-blur-sm">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-1">Application Submitted!</h3>
            <p class="text-emerald-100 text-sm">Maombi yako yamewasilishwa kwa mafanikio</p>
        </div>

        <div class="p-8">
            {{-- Tracking Code Badge --}}
            <div class="mb-6">
                <p class="text-center text-[11px] font-bold uppercase tracking-widest text-gray-400 mb-3">Your Tracking Code</p>
                <div class="relative bg-gradient-to-br from-gray-50 to-gray-100 border-2 border-dashed border-emerald-300 rounded-xl p-5 text-center">
                    <div class="absolute top-2 left-2 text-[8px] font-bold uppercase tracking-wider text-emerald-600/40">BTC</div>
                    <div class="absolute top-2 right-2 text-[8px] font-bold uppercase tracking-wider text-emerald-600/40">2026/27</div>
                    <p id="trackingCodeDisplay" class="text-3xl font-black text-emerald-800 tracking-[3px] mb-1">BTC-XXXXXXXX</p>
                    <div class="flex items-center justify-center gap-2 mt-2">
                        <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Keep this code safe
                        </span>
                        <button onclick="copyTrackingCode()" id="copyCodeBtn" class="inline-flex items-center gap-1 text-[10px] font-bold text-gray-500 bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded-full transition-all">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            Copy
                        </button>
                    </div>
                </div>
                <p class="text-center text-[11px] text-gray-400 mt-2">A copy has been sent to your email</p>
            </div>

            <div class="space-y-3">
                <a id="trackAppBtn" href="#" class="block w-full py-3.5 bg-emerald-800 hover:bg-emerald-900 text-white font-bold rounded-xl shadow-lg transition-all flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <span>Track My Application</span>
                </a>
                <a id="downloadPdfBtn" href="#" class="block w-full py-3.5 bg-white border-2 border-emerald-800 text-emerald-800 hover:bg-emerald-50 font-bold rounded-xl transition-all flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4-4v12"/></svg>
                    <span>Download Application (PDF)</span>
                </a>
                <button onclick="closeConfirmModal()" class="block w-full py-3.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-xl transition-all">
                    Back to Homepage
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// === Location Dropdowns ===
const regionSelect = document.getElementById('regionSelect');
const districtSelect = document.getElementById('districtSelect');
const wardSelect = document.getElementById('wardSelect');
const regionLoading = document.getElementById('regionLoading');
const districtLoading = document.getElementById('districtLoading');
const wardLoading = document.getElementById('wardLoading');

// Load regions on page load
(async function loadRegions() {
    regionLoading.classList.remove('hidden');
    try {
        const res = await fetch('{{ route("api.regions") }}');
        const data = await res.json();
        data.regions.forEach(r => {
            const opt = document.createElement('option');
            opt.value = r;
            opt.textContent = r;
            regionSelect.appendChild(opt);
        });
    } catch (e) {
        console.error('Failed to load regions:', e);
    } finally {
        regionLoading.classList.add('hidden');
    }
})();

// When region changes, load districts
regionSelect.addEventListener('change', async function() {
    wardSelect.innerHTML = '<option value="">-- Select Ward --</option>';
    wardSelect.disabled = true;

    if (!this.value) {
        districtSelect.innerHTML = '<option value="">-- Select District --</option>';
        districtSelect.disabled = true;
        return;
    }

    districtSelect.innerHTML = '<option value="">-- Select District --</option>';
    districtSelect.disabled = true;
    districtLoading.classList.remove('hidden');

    try {
        const res = await fetch('{{ route("api.districts", ["region" => "REGION_PLACEHOLDER"]) }}'.replace('REGION_PLACEHOLDER', encodeURIComponent(this.value)));
        const data = await res.json();
        data.districts.forEach(d => {
            const opt = document.createElement('option');
            opt.value = d;
            opt.textContent = d;
            districtSelect.appendChild(opt);
        });
        districtSelect.disabled = false;
    } catch (e) {
        console.error('Failed to load districts:', e);
    } finally {
        districtLoading.classList.add('hidden');
    }
});

// When district changes, load wards
districtSelect.addEventListener('change', async function() {
    if (!this.value) {
        wardSelect.innerHTML = '<option value="">-- Select Ward --</option>';
        wardSelect.disabled = true;
        return;
    }

    wardSelect.innerHTML = '<option value="">-- Select Ward --</option>';
    wardSelect.disabled = true;
    wardLoading.classList.remove('hidden');

    try {
        const res = await fetch('{{ route("api.wards", ["district" => "DISTRICT_PLACEHOLDER"]) }}'.replace('DISTRICT_PLACEHOLDER', encodeURIComponent(this.value)));
        const data = await res.json();
        data.wards.forEach(w => {
            const opt = document.createElement('option');
            opt.value = w;
            opt.textContent = w;
            wardSelect.appendChild(opt);
        });
        wardSelect.disabled = false;
    } catch (e) {
        console.error('Failed to load wards:', e);
    } finally {
        wardLoading.classList.add('hidden');
    }
});

// === Form Functions ===
function previewApplication() {
    const form = document.getElementById('applyForm');
    const formData = new FormData(form);
    
    // Check if form is valid first
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    // Create a temporary hidden form to submit for preview (PDF streaming)
    const tempForm = document.createElement('form');
    tempForm.method = 'POST';
    tempForm.action = '{{ route("apply.preview") }}';
    tempForm.target = '_blank';
    
    for (let [key, value] of formData.entries()) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = key;
        input.value = value;
        tempForm.appendChild(input);
    }
    
    document.body.appendChild(tempForm);
    tempForm.submit();
    document.body.removeChild(tempForm);
}

function openConfirmModal(downloadUrl, trackingCode, trackUrl) {
    const modal = document.getElementById('confirmModal');
    document.getElementById('downloadPdfBtn').href = downloadUrl;
    document.getElementById('trackingCodeDisplay').textContent = trackingCode;
    document.getElementById('trackAppBtn').href = trackUrl;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function copyTrackingCode() {
    const code = document.getElementById('trackingCodeDisplay').textContent;
    navigator.clipboard.writeText(code).then(() => {
        const btn = document.getElementById('copyCodeBtn');
        const originalText = btn.innerHTML;
        btn.innerHTML = '<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Copied!';
        setTimeout(() => { btn.innerHTML = originalText; }, 2000);
    });
}

function closeConfirmModal() {
    window.location.href = '{{ url("/") }}';
}

document.getElementById('applyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const originalText = btnText.textContent;
    
    btn.disabled = true;
    btnText.textContent = 'Inatuma...';
    btn.classList.add('opacity-75', 'cursor-not-allowed');

    const formData = new FormData(this);
    
    fetch('{{ route("apply.submit") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            openConfirmModal(data.download_url, data.tracking_code, data.track_url);
        } else {
            let errorMsg = '';
            if (data.errors) {
                Object.values(data.errors).forEach(err => {
                    errorMsg += err[0] + '<br>';
                });
            } else {
                errorMsg = data.message;
            }
            Swal.fire({
                icon: 'error',
                title: 'Tatizo!',
                html: errorMsg,
                confirmButtonColor: '#b91c1c',
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Tatizo la Mtandao!',
            text: 'Tafadhali kagua muunganisho wako wa mtandao.',
            confirmButtonColor: '#b91c1c',
        });
    })
    .finally(() => {
        btn.disabled = false;
        btnText.textContent = originalText;
        btn.classList.remove('opacity-75', 'cursor-not-allowed');
    });
});
</script>
@endpush
@endsection

