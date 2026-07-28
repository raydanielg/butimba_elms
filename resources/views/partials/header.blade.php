{{-- Top Government Bar --}}
<div class="bg-emerald-900 text-emerald-50 text-xs py-1.5 px-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="flex items-center gap-2">
            <svg class="w-3.5 h-3.5 text-gold-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/></svg>
            <span class="font-semibold tracking-wide" data-lang="en">GOVERNMENT OF THE UNITED REPUBLIC OF TANZANIA</span>
            <span class="font-semibold tracking-wide" data-lang="sw">SERIKALI YA JAMHURI YA MUUNGANO WA TANZANIA</span>
        </div>
        <div class="hidden sm:flex items-center gap-4">
            <div class="flex items-center gap-3 mr-4 border-r border-emerald-700 pr-4">
                <a href="tel:0689363690" class="hover:text-gold-400 transition-colors flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    0689 363 690
                </a>
            </div>
            <span class="text-emerald-200" data-lang="en">Ministry of Education, Science and Technology</span>
            <span class="text-emerald-200" data-lang="sw">Wizara ya Elimu, Sayansi na Teknolojia</span>
        </div>
    </div>
</div>

{{-- Header with Two Logos --}}
<header class="bg-white shadow-md border-b-2 border-emerald-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4">
        <div class="flex items-center justify-between gap-4">
            {{-- Left Logo --}}
            <div class="flex items-center gap-3 slide-in-left">
                <img src="{{ asset('logo.png') }}" alt="Butimba Teachers College" class="w-16 h-16 sm:w-20 sm:h-20 object-contain flex-shrink-0">
            </div>

            {{-- Center Title --}}
            <div class="text-center flex-1 fade-in">
                <h1 class="text-lg sm:text-2xl lg:text-3xl font-extrabold text-emerald-800 tracking-tight leading-tight">
                    BUTIMBA TEACHERS COLLEGE
                </h1>
                <p class="text-xs sm:text-sm text-gray-500 font-semibold mt-0.5" data-lang="en">
                    E-Learning Management System (ELMS)
                </p>
                <p class="text-xs sm:text-sm text-gray-500 font-semibold mt-0.5" data-lang="sw">
                    Mfumo wa Elimu kwa Mtandao (ELMS)
                </p>
                <div class="flex items-center justify-center gap-2 mt-1">
                    <span class="h-0.5 w-8 bg-gold-400"></span>
                    <p class="text-[10px] sm:text-xs text-gold-600 font-bold italic tracking-wide" data-lang="en">Quality education for modern teachers</p>
                    <p class="text-[10px] sm:text-xs text-gold-600 font-bold italic tracking-wide" data-lang="sw">Elimu bora kwa walimu wa kisasa</p>
                    <span class="h-0.5 w-8 bg-gold-400"></span>
                </div>
            </div>

            {{-- Right Logo (Tanzania Coat of Arms) --}}
            <div class="flex items-center gap-3 slide-in-right">
                <div class="w-16 h-16 sm:w-20 sm:h-20 flex-shrink-0 bg-emerald-50 rounded-full border-2 border-emerald-200 flex items-center justify-center">
                    <svg viewBox="0 0 100 100" class="w-14 h-14 sm:w-16 sm:h-16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50 15 L72 20 L72 50 Q72 68 50 80 Q28 68 28 50 L28 20 Z" fill="#1a9f8e" stroke="#f9ac00" stroke-width="1.5"/>
                        <path d="M50 15 L72 20 L72 35 L28 35 L28 20 Z" fill="#024938"/>
                        <path d="M50 15 L72 20 L72 22 L28 22 L28 20 Z" fill="#fcd116"/>
                        <path d="M50 15 L72 20 L72 21 L28 21 L28 20 Z" fill="#000" opacity="0.3"/>
                        <line x1="50" y1="15" x2="50" y2="35" stroke="#000" stroke-width="0.5" opacity="0.3"/>
                        <g stroke="#f9ac00" stroke-width="1.5" fill="none" opacity="0.8">
                            <line x1="38" y1="40" x2="48" y2="55"/>
                            <line x1="62" y1="40" x2="52" y2="55"/>
                            <path d="M36 38 L40 42 M64 38 L60 42" stroke-width="1.5"/>
                        </g>
                        <g fill="#f9ac00">
                            <rect x="49" y="55" width="2" height="12" rx="1"/>
                            <path d="M47 55 Q50 48 53 55 Z"/>
                        </g>
                        <path d="M22 45 Q18 55 24 70" fill="none" stroke="#f5f5f0" stroke-width="2" stroke-linecap="round"/>
                        <path d="M78 45 Q82 55 76 70" fill="none" stroke="#f5f5f0" stroke-width="2" stroke-linecap="round"/>
                        <path d="M20 72 Q50 78 80 72 L80 82 Q50 88 20 82 Z" fill="#f9ac00" opacity="0.9"/>
                        <text x="50" y="80" text-anchor="middle" font-size="4.5" font-weight="bold" fill="#001816" font-family="serif">UHURU NA UMOJA</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Navigation Menu --}}
    <nav class="bg-emerald-800 text-white border-t border-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-12">
                <div class="hidden md:flex items-center gap-6 text-sm font-semibold">
                    <a href="{{ url('/') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'home' ? 'active' : '' }}" data-lang="en">Home</a>
                    <a href="{{ url('/') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'home' ? 'active' : '' }}" data-lang="sw">Mwanzo</a>
                    <a href="{{ url('/about') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'about' ? 'active' : '' }}" data-lang="en">About Us</a>
                    <a href="{{ url('/about') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'about' ? 'active' : '' }}" data-lang="sw">Kuhusu Sisi</a>
                    <a href="{{ url('/courses') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'courses' ? 'active' : '' }}" data-lang="en">Courses</a>
                    <a href="{{ url('/courses') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'courses' ? 'active' : '' }}" data-lang="sw">Kozi</a>
                    <a href="{{ url('/admissions') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'admissions' ? 'active' : '' }}" data-lang="en">Admissions</a>
                    <a href="{{ url('/admissions') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'admissions' ? 'active' : '' }}" data-lang="sw">Uandikishaji</a>
                    <a href="{{ url('/news') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'news' ? 'active' : '' }}" data-lang="en">Blogs &amp; Events</a>
                    <a href="{{ url('/news') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'news' ? 'active' : '' }}" data-lang="sw">Blogs &amp; Matukio</a>
                    <a href="{{ url('/contact') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'contact' ? 'active' : '' }}" data-lang="en">Contact</a>
                    <a href="{{ url('/contact') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'contact' ? 'active' : '' }}" data-lang="sw">Wasiliana</a>
                </div>
                <div class="flex items-center gap-3 ml-auto">
                    {{-- Language Toggle --}}
                    <div class="flex items-center gap-1 bg-emerald-900/50 rounded-full px-1 py-0.5 border border-emerald-600/50">
                        <button onclick="setLang('en')" id="langEn" class="lang-toggle active text-xs font-bold px-2.5 py-1 rounded-full text-white">
                            EN
                        </button>
                        <button onclick="setLang('sw')" id="langSw" class="lang-toggle text-xs font-bold px-2.5 py-1 rounded-full text-emerald-200">
                            SW
                        </button>
                    </div>
                    @guest
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-white hover:text-gold-300 transition-colors px-3 py-1.5" data-lang="en">Login</a>
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-white hover:text-gold-300 transition-colors px-3 py-1.5" data-lang="sw">Ingia</a>
                        <a href="{{ route('register') }}" class="text-sm font-bold text-emerald-900 bg-gold-400 hover:bg-gold-300 transition-colors px-4 py-1.5 rounded-md shadow-sm" data-lang="en">Register</a>
                        <a href="{{ route('register') }}" class="text-sm font-bold text-emerald-900 bg-gold-400 hover:bg-gold-300 transition-colors px-4 py-1.5 rounded-md shadow-sm" data-lang="sw">Jisajili</a>
                    @else
                        <a href="{{ url('/home') }}" class="text-sm font-semibold text-white hover:text-gold-300 transition-colors px-3 py-1.5" data-lang="en">Dashboard</a>
                        <a href="{{ url('/home') }}" class="text-sm font-semibold text-white hover:text-gold-300 transition-colors px-3 py-1.5" data-lang="sw">Dashibodi</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm font-semibold text-white hover:text-gold-300 transition-colors px-3 py-1.5" data-lang="en">Logout</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm font-semibold text-white hover:text-gold-300 transition-colors px-3 py-1.5" data-lang="sw">Toka</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
                    @endguest
                </div>
                {{-- Mobile menu button --}}
                <button id="mobileMenuBtn" class="md:hidden text-white p-1.5" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="hidden md:hidden bg-emerald-900 border-t border-emerald-700">
            <div class="px-4 py-3 space-y-2 text-sm font-semibold">
                <a href="{{ url('/') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="en">Home</a>
                <a href="{{ url('/') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="sw">Mwanzo</a>
                <a href="{{ url('/about') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="en">About Us</a>
                <a href="{{ url('/about') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="sw">Kuhusu Sisi</a>
                <a href="{{ url('/courses') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="en">Courses</a>
                <a href="{{ url('/courses') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="sw">Kozi</a>
                <a href="{{ url('/admissions') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="en">Admissions</a>
                <a href="{{ url('/admissions') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="sw">Uandikishaji</a>
                <a href="{{ url('/news') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="en">Blogs &amp; Events</a>
                <a href="{{ url('/news') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="sw">Blogs &amp; Matukio</a>
                <a href="{{ url('/contact') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="en">Contact</a>
                <a href="{{ url('/contact') }}" class="block text-white hover:text-gold-300 py-1.5" data-lang="sw">Wasiliana</a>
            </div>
        </div>
    </nav>
</header>
