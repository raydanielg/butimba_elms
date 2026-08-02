<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') - Butimba eLMS</title>

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
        [data-lang="sw"] { display: none !important; }
        body.lang-sw [data-lang="en"] { display: none !important; }
        body.lang-sw [data-lang="sw"] { display: revert !important; }
        .sidebar-link { position: relative; }
        .sidebar-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: #f9ac00;
            border-radius: 0 3px 3px 0;
            transform: scaleY(0);
            transition: transform 0.2s ease;
        }
        .sidebar-link.active::before,
        .sidebar-link:hover::before { transform: scaleY(1); }
        @stack('styles')
    </style>
</head>
<body class="font-['Nunito',sans-serif] antialiased bg-gray-100 min-h-screen">

<div class="flex min-h-screen">
    {{-- Sidebar --}}
    <aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-50 w-64 bg-emerald-800 text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300 flex flex-col">
        <div class="flex items-center gap-2 px-4 py-4 border-b border-emerald-700">
            <img src="{{ asset('logo.png') }}" alt="Butimba" class="w-9 h-9 object-contain flex-shrink-0">
            <div class="min-w-0">
                <p class="text-sm font-bold leading-tight truncate">Butimba eLMS</p>
                <p class="text-[10px] text-emerald-300 capitalize">{{ auth()->user()->role }} Panel</p>
            </div>
        </div>

        <nav class="flex-1 overflow-y-auto py-2">
            @if(auth()->user()->isAdmin())
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.applications.index') }}" class="sidebar-link {{ request()->routeIs('admin.applications.*') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Applications
                </a>
                <a href="{{ route('admin.users.index') }}" class="sidebar-link {{ request()->routeIs('admin.users.*') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    Users
                </a>
                <a href="{{ route('admin.courses.index') }}" class="sidebar-link {{ request()->routeIs('admin.courses.*') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    Courses
                </a>
                <a href="{{ route('admin.payments.index') }}" class="sidebar-link {{ request()->routeIs('admin.payments.*') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Finance
                </a>
                <a href="{{ route('admin.announcements.index') }}" class="sidebar-link {{ request()->routeIs('admin.announcements.*') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.117a1 1 0 01-1.707.707L4.586 16H2a1 1 0 01-1-1V9a1 1 0 011-1h2.586l4.707-4.824A1 1 0 0111 5.882z"/></svg>
                    Announcements
                </a>

            @elseif(auth()->user()->isTeacher())
                <a href="{{ route('teacher.dashboard') }}" class="sidebar-link {{ request()->routeIs('teacher.dashboard') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('teacher.courses.index') }}" class="sidebar-link {{ request()->routeIs('teacher.courses.*') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    My Courses
                </a>

            @else
                <a href="{{ route('student.dashboard') }}" class="sidebar-link {{ request()->routeIs('student.dashboard') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('student.courses.index') }}" class="sidebar-link {{ request()->routeIs('student.courses.*') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    My Courses
                </a>
                <a href="{{ route('student.status') }}" class="sidebar-link {{ request()->routeIs('student.status') ? 'active bg-emerald-700' : '' }} flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-emerald-700 transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    My Status
                </a>
            @endif
        </nav>

        <div class="border-t border-emerald-700 p-3">
            <div class="flex items-center gap-2 mb-2">
                <div class="w-8 h-8 rounded-full bg-gold-400 text-emerald-900 flex items-center justify-center text-xs font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold truncate">{{ auth()->user()->name }}</p>
                    <p class="text-[10px] text-emerald-300 truncate">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center gap-2 text-xs text-emerald-300 hover:text-gold-300 transition-colors py-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
        </div>
    </aside>

    {{-- Mobile sidebar overlay --}}
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 lg:hidden hidden" onclick="toggleSidebar()"></div>

    {{-- Main content --}}
    <div class="flex-1 flex flex-col min-w-0">
        {{-- Top bar --}}
        <header class="bg-white shadow-sm border-b border-gray-200 px-4 py-3 flex items-center justify-between sticky top-0 z-30">
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebar()" class="lg:hidden text-gray-600 hover:text-emerald-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <h1 class="text-base sm:text-lg font-bold text-emerald-800">@yield('page_title', 'Dashboard')</h1>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" class="text-xs text-gray-500 hover:text-emerald-700 transition-colors" target="_blank">
                    <span data-lang="en">View Site</span>
                    <span data-lang="sw">Tazama Tovuti</span>
                </a>
            </div>
        </header>

        {{-- Flash messages --}}
        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 px-4 py-3 text-sm mx-4 mt-4 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 px-4 py-3 text-sm mx-4 mt-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        {{-- Page content --}}
        <main class="flex-1 p-4 sm:p-6 overflow-x-auto">
            @yield('content')
        </main>
    </div>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
        document.getElementById('sidebarOverlay').classList.toggle('hidden');
    }
    function setLang(lang) {
        document.body.classList.remove('lang-en', 'lang-sw');
        document.body.classList.add('lang-' + lang);
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
