<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Butimba Teachers College') }} - ELMS</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emerald: { 50:'#e6f5f1',100:'#b3e0d4',200:'#80cbc0',300:'#4db5a8',400:'#1a9f8e',500:'#024938',600:'#023d30',700:'#013028',800:'#01241f',900:'#001816' },
                        gold: { 50:'#fff5e0',100:'#ffe6b3',200:'#ffd680',300:'#ffc64d',400:'#ffb71a',500:'#f9ac00',600:'#d49700',700:'#b07c00',800:'#8c6100',900:'#684600' }
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes fadeInUp { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes slideInLeft { from { opacity:0; transform:translateX(-30px); } to { opacity:1; transform:translateX(0); } }
        @keyframes slideInRight { from { opacity:0; transform:translateX(30px); } to { opacity:1; transform:translateX(0); } }
        @keyframes float { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-8px); } }
        @keyframes pulseGlow { 0%,100% { opacity:0.3; } 50% { opacity:0.6; } }
        .fade-in-up { animation: fadeInUp 0.7s ease-out both; }
        .fade-in { animation: fadeIn 1s ease-out both; }
        .slide-in-left { animation: slideInLeft 0.6s ease-out both; }
        .slide-in-right { animation: slideInRight 0.6s ease-out both; }
        .float-anim { animation: float 4s ease-in-out infinite; }
        .pulse-glow { animation: pulseGlow 4s ease-in-out infinite; }
        .delay-1 { animation-delay: 0.15s; }
        .delay-2 { animation-delay: 0.3s; }
        .delay-3 { animation-delay: 0.45s; }
        .delay-4 { animation-delay: 0.6s; }
        .hero-bg {
            background: linear-gradient(135deg, rgba(0,24,22,0.92) 0%, rgba(2,61,48,0.85) 50%, rgba(1,48,40,0.88) 100%),
                        url('{{ asset("medium-shot-students-classroom.jpg") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #f9ac00;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after { width: 100%; }
        .lang-toggle { transition: all 0.3s ease; }
        .lang-toggle.active { background: rgba(249,172,0,0.2); color: #ffc64d; }
        [data-lang="sw"] { display: none !important; }
        body.lang-sw [data-lang="en"] { display: none !important; }
        body.lang-sw [data-lang="sw"] { display: revert !important; }
    </style>
</head>
<body class="font-['Nunito',sans-serif] antialiased text-slate-800 bg-gray-50">

    @include('partials.header', ['activeNav' => 'home'])

    {{-- Hero Section --}}
    <section class="hero-bg relative min-h-[80vh] flex items-center justify-center overflow-hidden">
        {{-- Decorative glows --}}
        <div class="absolute top-0 left-0 w-96 h-96 bg-gold-500/10 rounded-full blur-3xl pulse-glow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl pulse-glow"></div>
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 32px 32px;"></div>

        {{-- Content --}}
        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center py-20">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6 fade-in">
                <span class="w-2 h-2 rounded-full bg-gold-400 animate-pulse"></span>
                <span class="text-xs font-semibold text-emerald-50 tracking-wide" data-lang="en">E-Learning Management System</span>
                <span class="text-xs font-semibold text-emerald-50 tracking-wide" data-lang="sw">Mfumo wa Elimu kwa Mtandao</span>
            </div>

            {{-- Heading --}}
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight fade-in-up delay-1">
                <span data-lang="en">Welcome to</span>
                <span data-lang="sw">Karibu kwenye</span>
                <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-gold-300 to-gold-500">
                    Butimba Teachers College
                </span>
            </h2>

            {{-- Subtitle --}}
            <p class="mt-6 text-lg sm:text-xl text-emerald-50/80 max-w-2xl mx-auto fade-in-up delay-2" data-lang="en">
                Empowering educators with digital learning tools, course management,
                and resources to excel in the teaching profession.
            </p>
            <p class="mt-6 text-lg sm:text-xl text-emerald-50/80 max-w-2xl mx-auto fade-in-up delay-2" data-lang="sw">
                Kuwawezesha walimu kwa zana za kidijitali za kujifunzia, usimamizi wa kozi,
                na rasilimali kufanikiwa katika taaluma ya ualimu.
            </p>

            {{-- Tagline --}}
            <p class="mt-3 text-sm text-gold-300 font-semibold italic fade-in-up delay-2">
                <span data-lang="en">"Quality education for modern teachers"</span>
                <span data-lang="sw">"Elimu bora kwa walimu wa kisasa"</span>
            </p>

            {{-- CTA Buttons --}}
            <div class="mt-8 flex flex-row items-stretch justify-center gap-2 sm:gap-3 fade-in-up delay-3 max-w-lg mx-auto">
                {{-- Admissions Button --}}
                <a href="{{ url('/admissions') }}" class="group flex-1 relative overflow-hidden px-4 sm:px-6 py-2.5 sm:py-3 text-xs sm:text-sm font-bold text-emerald-950 bg-gradient-to-br from-gold-300 to-gold-500 hover:from-gold-400 hover:to-gold-600 rounded-lg shadow-lg hover:shadow-xl hover:shadow-gold-500/30 transition-all flex items-center justify-center gap-2 border border-gold-200/40">
                    <span class="absolute inset-0 bg-white/20 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></span>
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-emerald-900 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    <span class="flex flex-col items-start leading-tight">
                        <span data-lang="en">Admissions</span>
                        <span data-lang="sw">Uandikishaji</span>
                    </span>
                </a>

                {{-- Courses Button --}}
                <a href="{{ url('/courses') }}" class="group flex-1 relative overflow-hidden px-4 sm:px-6 py-2.5 sm:py-3 text-xs sm:text-sm font-bold text-white bg-gradient-to-br from-emerald-600 to-emerald-800 hover:from-emerald-500 hover:to-emerald-700 rounded-lg shadow-lg hover:shadow-xl hover:shadow-emerald-500/30 transition-all flex items-center justify-center gap-2 border border-emerald-400/30">
                    <span class="absolute inset-0 bg-white/10 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></span>
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gold-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    <span class="flex flex-col items-start leading-tight">
                        <span data-lang="en">Courses</span>
                        <span data-lang="sw">Kozi</span>
                    </span>
                </a>
            </div>

            {{-- Stats --}}
            <div class="mt-16 grid grid-cols-3 gap-4 sm:gap-8 max-w-2xl mx-auto fade-in-up delay-4">
                <div class="text-center">
                    <p class="text-2xl sm:text-4xl font-extrabold text-gold-400">1,200+</p>
                    <p class="text-xs sm:text-sm text-emerald-50/60 font-medium mt-1" data-lang="en">Students</p>
                    <p class="text-xs sm:text-sm text-emerald-50/60 font-medium mt-1" data-lang="sw">Wanafunzi</p>
                </div>
                <div class="text-center border-x border-white/10">
                    <p class="text-2xl sm:text-4xl font-extrabold text-gold-400">50+</p>
                    <p class="text-xs sm:text-sm text-emerald-50/60 font-medium mt-1" data-lang="en">Courses</p>
                    <p class="text-xs sm:text-sm text-emerald-50/60 font-medium mt-1" data-lang="sw">Kozi</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl sm:text-4xl font-extrabold text-gold-400">80+</p>
                    <p class="text-xs sm:text-sm text-emerald-50/60 font-medium mt-1" data-lang="en">Lecturers</p>
                    <p class="text-xs sm:text-sm text-emerald-50/60 font-medium mt-1" data-lang="sw">Walimu</p>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 fade-in delay-4">
            <div class="w-6 h-10 rounded-full border-2 border-white/30 flex items-start justify-center p-1.5">
                <div class="w-1 h-2 bg-white/50 rounded-full float-anim"></div>
            </div>
        </div>
    </section>

    @include('partials.footer')

<script>
    function setLang(lang) {
        document.body.classList.remove('lang-en', 'lang-sw');
        document.body.classList.add('lang-' + lang);
        var cap = lang.charAt(0).toUpperCase() + lang.slice(1);
        ['langEn','langSw','langEnMobile','langSwMobile'].forEach(function(id) {
            var el = document.getElementById(id);
            if (el) el.classList.remove('active');
        });
        var mainBtn = document.getElementById('lang' + cap);
        if (mainBtn) mainBtn.classList.add('active');
        var mobileBtn = document.getElementById('lang' + cap + 'Mobile');
        if (mobileBtn) mobileBtn.classList.add('active');
        try { localStorage.setItem('lang', lang); } catch(e) {}
    }
    try {
        var saved = localStorage.getItem('lang');
        if (saved) setLang(saved);
    } catch(e) {}
</script>

</body>
</html>
