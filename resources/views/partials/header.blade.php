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
    <div class="max-w-7xl mx-auto px-3 sm:px-6 py-2 sm:py-3">
        <div class="flex items-center justify-between gap-2 sm:gap-4">
            {{-- Left Logo --}}
            <div class="flex items-center slide-in-left">
                <img src="{{ asset('logo.png') }}" alt="Butimba Teachers College" class="w-10 h-10 sm:w-16 sm:h-16 lg:w-20 lg:h-20 object-contain flex-shrink-0">
            </div>

            {{-- Center Title --}}
            <div class="text-center flex-1 fade-in min-w-0">
                <h1 class="text-sm sm:text-xl lg:text-2xl font-extrabold text-emerald-800 tracking-tight leading-tight truncate">
                    BUTIMBA TEACHERS COLLEGE
                </h1>
                <p class="text-[10px] sm:text-xs text-gray-500 font-semibold mt-0.5 hidden sm:block" data-lang="en">
                    E-Learning Management System (ELMS)
                </p>
                <p class="text-[10px] sm:text-xs text-gray-500 font-semibold mt-0.5 hidden sm:block" data-lang="sw">
                    Mfumo wa Elimu kwa Mtandao (ELMS)
                </p>
                <div class="hidden sm:flex items-center justify-center gap-2 mt-1">
                    <span class="h-0.5 w-6 bg-gold-400"></span>
                    <p class="text-[10px] sm:text-xs text-gold-600 font-bold italic tracking-wide" data-lang="en">Quality education for modern teachers</p>
                    <p class="text-[10px] sm:text-xs text-gold-600 font-bold italic tracking-wide" data-lang="sw">Elimu bora kwa walimu wa kisasi</p>
                    <span class="h-0.5 w-6 bg-gold-400"></span>
                </div>
            </div>

            {{-- Right Logo (Duplicate College Logo) --}}
            <div class="flex items-center slide-in-right">
                <img src="{{ asset('logo.png') }}" alt="Butimba Teachers College" class="w-10 h-10 sm:w-16 sm:h-16 lg:w-20 lg:h-20 object-contain flex-shrink-0">
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
                    <a href="{{ url('/courses') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'courses' ? 'active' : '' }}" data-lang="en">Courses</a>
                    <a href="{{ url('/courses') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'courses' ? 'active' : '' }}" data-lang="sw">Kozi</a>
                    <a href="{{ url('/admissions') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'admissions' ? 'active' : '' }}" data-lang="en">Admissions</a>
                    <a href="{{ url('/admissions') }}" class="nav-link hover:text-gold-300 transition-colors py-3 {{ ($activeNav ?? '') === 'admissions' ? 'active' : '' }}" data-lang="sw">Uandikishaji</a>
                </div>
                {{-- Desktop: Language Toggle + Auth --}}
                <div class="hidden md:flex items-center gap-3 ml-auto">
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
                {{-- Mobile: Language Toggle + Hamburger --}}
                <div class="flex md:hidden items-center gap-2 ml-auto">
                    <div class="flex items-center gap-1 bg-emerald-900/50 rounded-full px-1 py-0.5 border border-emerald-600/50">
                        <button onclick="setLang('en')" id="langEnMobile" class="lang-toggle active text-xs font-bold px-2 py-0.5 rounded-full text-white">
                            EN
                        </button>
                        <button onclick="setLang('sw')" id="langSwMobile" class="lang-toggle text-xs font-bold px-2 py-0.5 rounded-full text-emerald-200">
                            SW
                        </button>
                    </div>
                    <button id="mobileMenuBtn" class="text-white p-1.5" onclick="openMobileDrawer()">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

{{-- Mobile Side Drawer --}}
<div id="mobileDrawer" class="fixed inset-0 z-[9999] md:hidden pointer-events-none">
    {{-- Backdrop --}}
    <div id="drawerBackdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300" onclick="closeMobileDrawer()"></div>
    {{-- Drawer Panel --}}
    <div id="drawerPanel" class="absolute right-0 top-0 h-full w-72 max-w-[80vw] bg-emerald-900 shadow-2xl translate-x-full transition-transform duration-300 flex flex-col">
        {{-- Drawer Header --}}
        <div class="flex items-center justify-between px-5 py-4 border-b border-emerald-700/50">
            <div class="flex items-center gap-2">
                <img src="{{ asset('logo.png') }}" alt="Butimba" class="w-9 h-9 object-contain">
                <span class="text-xs font-extrabold text-white leading-tight">BUTIMBA<br><span class="text-gold-400 font-bold">TEACHERS COLLEGE</span></span>
            </div>
            <button onclick="closeMobileDrawer()" class="text-white/70 hover:text-white hover:bg-white/10 rounded-lg p-1.5 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        {{-- Drawer Navigation --}}
        <div class="flex-1 overflow-y-auto px-3 py-4 space-y-1">
            <a href="{{ url('/') }}" onclick="closeMobileDrawer()" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-semibold text-white hover:bg-emerald-800/60 transition-colors {{ ($activeNav ?? '') === 'home' ? 'bg-emerald-800/60 text-gold-300' : '' }}">
                <svg class="w-4 h-4 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span data-lang="en">Home</span><span data-lang="sw">Mwanzo</span>
            </a>
            <a href="{{ url('/courses') }}" onclick="closeMobileDrawer()" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-semibold text-white hover:bg-emerald-800/60 transition-colors {{ ($activeNav ?? '') === 'courses' ? 'bg-emerald-800/60 text-gold-300' : '' }}">
                <svg class="w-4 h-4 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                <span data-lang="en">Courses</span><span data-lang="sw">Kozi</span>
            </a>
            <a href="{{ url('/admissions') }}" onclick="closeMobileDrawer()" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-semibold text-white hover:bg-emerald-800/60 transition-colors {{ ($activeNav ?? '') === 'admissions' ? 'bg-emerald-800/60 text-gold-300' : '' }}">
                <svg class="w-4 h-4 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span data-lang="en">Admissions</span><span data-lang="sw">Uandikishaji</span>
            </a>
        </div>
        {{-- Drawer Footer: Auth Buttons --}}
        <div class="px-4 py-4 border-t border-emerald-700/50 space-y-2.5">
            @guest
                <a href="{{ route('login') }}" onclick="closeMobileDrawer()" class="block w-full text-center py-2.5 text-sm font-bold text-white bg-white/10 hover:bg-white/20 border border-white/20 rounded-lg transition-colors">
                    <span data-lang="en">Login</span><span data-lang="sw">Ingia</span>
                </a>
                <a href="{{ route('register') }}" onclick="closeMobileDrawer()" class="block w-full text-center py-2.5 text-sm font-bold text-emerald-950 bg-gold-400 hover:bg-gold-300 rounded-lg shadow-md transition-colors">
                    <span data-lang="en">Register</span><span data-lang="sw">Jisajili</span>
                </a>
            @else
                <a href="{{ url('/home') }}" onclick="closeMobileDrawer()" class="block w-full text-center py-2.5 text-sm font-bold text-white bg-white/10 hover:bg-white/20 border border-white/20 rounded-lg transition-colors">
                    <span data-lang="en">Dashboard</span><span data-lang="sw">Dashibodi</span>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); closeMobileDrawer(); document.getElementById('logout-form').submit();" class="block w-full text-center py-2.5 text-sm font-bold text-red-200 bg-red-500/20 hover:bg-red-500/30 border border-red-400/30 rounded-lg transition-colors">
                    <span data-lang="en">Logout</span><span data-lang="sw">Toka</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
            @endguest
        </div>
    </div>
</div>

<script>
function openMobileDrawer() {
    var drawer = document.getElementById('mobileDrawer');
    var backdrop = document.getElementById('drawerBackdrop');
    var panel = document.getElementById('drawerPanel');
    drawer.classList.remove('pointer-events-none');
    backdrop.classList.remove('opacity-0', 'pointer-events-none');
    panel.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
}
function closeMobileDrawer() {
    var backdrop = document.getElementById('drawerBackdrop');
    var panel = document.getElementById('drawerPanel');
    backdrop.classList.add('opacity-0', 'pointer-events-none');
    panel.classList.add('translate-x-full');
    document.body.style.overflow = '';
    setTimeout(function() {
        document.getElementById('mobileDrawer').classList.add('pointer-events-none');
    }, 300);
}
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeMobileDrawer();
});
</script>
