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
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 fade-in-up delay-3">
                @guest
                    <a href="{{ route('register') }}" class="w-full sm:w-auto px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                        <span data-lang="en">Get Started</span>
                        <span data-lang="sw">Anza Sasa</span>
                    </a>
                    <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-3.5 text-sm font-bold text-white bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:bg-white/20 hover:border-white/50 rounded-lg transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                        <span data-lang="en">Sign In</span>
                        <span data-lang="sw">Ingia</span>
                    </a>
                @else
                    <a href="{{ url('/home') }}" class="w-full sm:w-auto px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        <span data-lang="en">Go to Dashboard</span>
                        <span data-lang="sw">Nenda Dashibodi</span>
                    </a>
                @endguest
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
        document.getElementById('langEn').classList.remove('active');
        document.getElementById('langSw').classList.remove('active');
        document.getElementById('lang' + lang.charAt(0).toUpperCase() + lang.slice(1)).classList.add('active');
        try { localStorage.setItem('lang', lang); } catch(e) {}
    }
    try {
        var saved = localStorage.getItem('lang');
        if (saved) setLang(saved);
    } catch(e) {}
</script>

</body>
</html>
