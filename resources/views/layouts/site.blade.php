<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Butimba Teachers College')) - ELMS</title>

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
        .nav-link.active::after { width: 100%; }
        .lang-toggle { transition: all 0.3s ease; }
        .lang-toggle.active { background: rgba(249,172,0,0.2); color: #ffc64d; }
        [data-lang="sw"] { display: none !important; }
        body.lang-sw [data-lang="en"] { display: none !important; }
        body.lang-sw [data-lang="sw"] { display: revert !important; }
        @stack('styles')
    </style>
</head>
<body class="font-['Nunito',sans-serif] antialiased text-slate-800 bg-gray-50">

    @include('partials.header', ['activeNav' => trim($__env->yieldContent('active_nav'))])

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

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

@stack('scripts')
</body>
</html>
