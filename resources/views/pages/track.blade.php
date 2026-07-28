@extends('layouts.site')

@section('title', 'Track Your Application')
@section('active_nav', 'admissions')

@section('content')
<section class="bg-[#6b8e6b] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#1a3a1a] mb-2 uppercase tracking-wide">
            Track Your Application
        </h1>
        <div class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-emerald-900 hover:underline">Home</a>
            <span class="text-emerald-800">/</span>
            <a href="{{ url('/admissions') }}" class="text-emerald-800 hover:underline">Admissions</a>
            <span class="text-emerald-800">/</span>
            <span class="text-emerald-800 font-medium">Track Application</span>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 min-h-[60vh]">
    <div class="max-w-2xl mx-auto px-4 sm:px-6">

        {{-- Search Card --}}
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 sm:p-10 mb-8">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Enter Your Tracking Code</h2>
                <p class="text-gray-500 text-sm">Ingiza tracking code uliyopewa baada ya kuwasilisha maombi yako</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-3">
                <input
                    type="text"
                    id="trackInput"
                    placeholder="e.g. BTC-ABCD1234"
                    class="flex-1 px-5 py-3.5 rounded-xl border-2 border-gray-200 focus:border-emerald-500 outline-none transition-all text-sm font-mono uppercase tracking-wider text-center"
                    style="text-transform: uppercase;"
                >
                <button onclick="trackApplication()" id="trackBtn" class="px-8 py-3.5 bg-emerald-800 hover:bg-emerald-900 text-white font-bold rounded-xl shadow-lg transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <span>Track</span>
                </button>
            </div>

            <div id="trackError" class="hidden mt-4 bg-red-50 border border-red-200 text-red-600 text-sm rounded-lg px-4 py-3 text-center"></div>
        </div>

        {{-- Result Card (hidden initially) --}}
        <div id="resultCard" class="hidden bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
            {{-- Status Header --}}
            <div id="statusHeader" class="px-8 py-6 text-center">
                <div id="statusIcon" class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3"></div>
                <h3 id="statusTitle" class="text-xl font-bold mb-1"></h3>
                <p id="statusSubtitle" class="text-sm"></p>
            </div>

            {{-- Tracking Code Badge --}}
            <div class="px-8 pb-6">
                <div class="relative bg-gradient-to-br from-gray-50 to-gray-100 border-2 border-dashed border-emerald-300 rounded-xl p-5 text-center">
                    <div class="absolute top-2 left-2 text-[8px] font-bold uppercase tracking-wider text-emerald-600/40">BTC</div>
                    <div class="absolute top-2 right-2 text-[8px] font-bold uppercase tracking-wider text-emerald-600/40">2026/27</div>
                    <p id="resultTrackingCode" class="text-2xl font-black text-emerald-800 tracking-[3px]"></p>
                </div>
            </div>

            {{-- Details --}}
            <div class="px-8 pb-8 space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Applicant Name</p>
                        <p id="resultName" class="text-sm font-bold text-gray-800"></p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Email</p>
                        <p id="resultEmail" class="text-sm font-bold text-gray-800 break-all"></p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 sm:col-span-2">
                        <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Applied Programme</p>
                        <p id="resultCourse" class="text-sm font-bold text-emerald-800"></p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 sm:col-span-2">
                        <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Submitted On</p>
                        <p id="resultDate" class="text-sm font-bold text-gray-800"></p>
                    </div>
                </div>

                {{-- Status Timeline --}}
                <div class="pt-4">
                    <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-3">Application Progress</p>
                    <div class="flex items-center justify-between relative">
                        <div class="absolute top-4 left-0 right-0 h-0.5 bg-gray-200"></div>
                        <div id="timelineProgress" class="absolute top-4 left-0 h-0.5 bg-emerald-500 transition-all duration-500" style="width: 0%;"></div>
                        <div class="flex flex-col items-center relative z-10 flex-1">
                            <div id="step1" class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold border-2 transition-all">
                                1
                            </div>
                            <p class="text-[9px] font-bold uppercase mt-2 text-gray-500">Submitted</p>
                        </div>
                        <div class="flex flex-col items-center relative z-10 flex-1">
                            <div id="step2" class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold border-2 transition-all">
                                2
                            </div>
                            <p class="text-[9px] font-bold uppercase mt-2 text-gray-500">Under Review</p>
                        </div>
                        <div class="flex flex-col items-center relative z-10 flex-1">
                            <div id="step3" class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold border-2 transition-all">
                                3
                            </div>
                            <p class="text-[9px] font-bold uppercase mt-2 text-gray-500">Approved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Help Card --}}
        <div class="mt-8 bg-emerald-50 border border-emerald-200 rounded-xl p-6 text-center">
            <p class="text-sm text-gray-600 mb-2">
                Lost your tracking code? Check your email or contact our support team.
            </p>
            <div class="flex items-center justify-center gap-4 text-sm font-bold text-emerald-800">
                <a href="tel:0689363690" class="hover:underline">0689 363 690</a>
                <span class="text-gray-300">|</span>
                <a href="tel:0653144677" class="hover:underline">0653 144 677</a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
const trackInput = document.getElementById('trackInput');
const trackBtn = document.getElementById('trackBtn');

trackInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') trackApplication();
});

function trackApplication() {
    const code = trackInput.value.trim().toUpperCase();
    const errorDiv = document.getElementById('trackError');
    const resultCard = document.getElementById('resultCard');

    errorDiv.classList.add('hidden');
    resultCard.classList.add('hidden');

    if (!code) {
        errorDiv.textContent = 'Please enter your tracking code.';
        errorDiv.classList.remove('hidden');
        return;
    }

    trackBtn.disabled = true;
    trackBtn.innerHTML = '<svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg> <span>Searching...</span>';

    fetch('/track/' + encodeURIComponent(code))
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                displayResult(data.application);
            } else {
                errorDiv.textContent = data.message || 'Tracking code not found.';
                errorDiv.classList.remove('hidden');
            }
        })
        .catch(err => {
            errorDiv.textContent = 'Network error. Please try again.';
            errorDiv.classList.remove('hidden');
        })
        .finally(() => {
            trackBtn.disabled = false;
            trackBtn.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg> <span>Track</span>';
        });
}

function displayResult(app) {
    const resultCard = document.getElementById('resultCard');
    const statusHeader = document.getElementById('statusHeader');
    const statusIcon = document.getElementById('statusIcon');
    const statusTitle = document.getElementById('statusTitle');
    const statusSubtitle = document.getElementById('statusSubtitle');

    document.getElementById('resultTrackingCode').textContent = app.tracking_code;
    document.getElementById('resultName').textContent = app.full_name;
    document.getElementById('resultEmail').textContent = app.email;
    document.getElementById('resultCourse').textContent = app.applied_course;
    document.getElementById('resultDate').textContent = app.submitted_at;

    const status = (app.status || 'Pending').toLowerCase();
    let progress = 33;
    let bgColor, iconColor, iconSvg, title, subtitle;

    if (status === 'pending') {
        progress = 33;
        bgColor = 'bg-amber-50';
        iconColor = 'bg-amber-100 text-amber-600';
        iconSvg = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
        title = 'Application Pending';
        subtitle = 'Your application is awaiting review';
    } else if (status === 'under review' || status === 'reviewing') {
        progress = 66;
        bgColor = 'bg-blue-50';
        iconColor = 'bg-blue-100 text-blue-600';
        iconSvg = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>';
        title = 'Under Review';
        subtitle = 'Your application is being reviewed by our team';
    } else if (status === 'approved' || status === 'accepted') {
        progress = 100;
        bgColor = 'bg-emerald-50';
        iconColor = 'bg-emerald-100 text-emerald-600';
        iconSvg = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>';
        title = 'Application Approved!';
        subtitle = 'Congratulations! Your application has been approved';
    } else if (status === 'rejected' || status === 'declined') {
        progress = 100;
        bgColor = 'bg-red-50';
        iconColor = 'bg-red-100 text-red-600';
        iconSvg = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>';
        title = 'Application Rejected';
        subtitle = 'Unfortunately, your application was not successful';
    } else {
        progress = 33;
        bgColor = 'bg-gray-50';
        iconColor = 'bg-gray-100 text-gray-600';
        iconSvg = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
        title = 'Status: ' + app.status;
        subtitle = 'Your application is being processed';
    }

    statusHeader.className = 'px-8 py-6 text-center ' + bgColor;
    statusIcon.className = 'w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 ' + iconColor;
    statusIcon.innerHTML = iconSvg;
    statusTitle.textContent = title;
    statusSubtitle.textContent = subtitle;
    statusSubtitle.className = 'text-sm text-gray-500';

    // Timeline
    document.getElementById('timelineProgress').style.width = progress + '%';

    const steps = ['step1', 'step2', 'step3'];
    const activeStep = progress === 33 ? 1 : progress === 66 ? 2 : 3;
    const isRejected = status === 'rejected' || status === 'declined';

    steps.forEach((stepId, i) => {
        const el = document.getElementById(stepId);
        if (isRejected) {
            el.className = 'w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold border-2 bg-red-500 border-red-500 text-white';
        } else if (i < activeStep) {
            el.className = 'w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold border-2 bg-emerald-500 border-emerald-500 text-white';
        } else if (i === activeStep - 1) {
            el.className = 'w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold border-2 bg-emerald-500 border-emerald-500 text-white';
        } else {
            el.className = 'w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold border-2 bg-white border-gray-300 text-gray-400';
        }
    });

    resultCard.classList.remove('hidden');
    resultCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Auto-fill from URL if code is present
@if(request()->has('code'))
    trackInput.value = '{{ request()->get("code") }}';
    trackApplication();
@endif
</script>
@endpush
@endsection
