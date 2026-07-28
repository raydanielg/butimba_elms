{{-- Footer --}}
<footer class="bg-emerald-900 text-emerald-50/70">
    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">

            {{-- College Info --}}
            <div class="sm:col-span-2 lg:col-span-1">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('logo.png') }}" alt="Butimba Teachers College" class="w-14 h-14 object-contain">
                    <div>
                        <h3 class="text-sm font-extrabold text-white leading-tight">BUTIMBA TEACHERS<br>COLLEGE</h3>
                        <p class="text-xs text-gold-400 font-semibold italic mt-1" data-lang="en">Skills make the difference</p>
                        <p class="text-xs text-gold-400 font-semibold italic mt-1" data-lang="sw">Stadi ndiyo tofauti</p>
                    </div>
                </div>
                <p class="text-xs leading-relaxed text-emerald-200/60" data-lang="en">
                    A premier government teachers college dedicated to excellence in teacher education and professional development.
                </p>
                <p class="text-xs leading-relaxed text-emerald-200/60" data-lang="sw">
                    Chuo kikuu cha walimu cha serikali kinachojitolea kwa ubora katika elimu ya ualimu na maendeleo ya kitaaluma.
                </p>
            </div>

            {{-- Contact Us --}}
            <div>
                <h4 class="text-sm font-extrabold text-white mb-5 pb-2.5 border-b-2 border-gold-500/60 inline-flex items-center gap-2">
                    <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span data-lang="en">Contact Us</span>
                    <span data-lang="sw">Wasiliana Nasi</span>
                </h4>
                <ul class="space-y-2.5 text-xs text-emerald-200/70">
                    <li class="flex items-start gap-2">
                        <svg class="w-3.5 h-3.5 text-gold-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Butimba, Mwanza City<br>Along Airport Road<br>P.O. Box 1234<br>Mwanza - Tanzania</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>Phone: +255 28 250 0000</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>Email: info@butimba.ac.tz</span>
                    </li>
                </ul>
            </div>

            {{-- Useful Links --}}
            <div>
                <h4 class="text-sm font-extrabold text-white mb-5 pb-2.5 border-b-2 border-gold-500/60 inline-flex items-center gap-2">
                    <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                    <span data-lang="en">Useful Links</span>
                    <span data-lang="sw">Viungo Muhimu</span>
                </h4>
                <ul class="space-y-0">
                    @php
                        $links = [
                            ['url' => 'https://www.nacte.go.tz', 'en' => 'National Council for Technical and Vocational Education and Training', 'sw' => 'Halmashauri ya Taifa ya Elimu ya Kiufundi na Ufundi'],
                            ['url' => 'https://www.moe.go.tz', 'en' => 'Ministry of Education, Science and Technology', 'sw' => 'Wizara ya Elimu, Sayansi na Teknolojia'],
                            ['url' => 'https://www.tcu.go.tz', 'en' => 'Tanzania Commission for Universities', 'sw' => 'Tume ya Vyuo Vikuu Tanzania'],
                            ['url' => 'https://www.heslb.go.tz', 'en' => "Higher Education Students' Loans Board", 'sw' => 'Bodi ya Mikopo ya Wanafunzi wa Elimu ya Juu'],
                            ['url' => 'https://www.costech.or.tz', 'en' => 'Tanzania Commission for Science and Technology', 'sw' => 'Tume ya Sayansi na Teknolojia Tanzania'],
                            ['url' => 'https://www.taneps.go.tz', 'en' => 'National e-Procurement System of Tanzania', 'sw' => 'Mfumo wa Kitaifa wa Ununuzi wa Kielektroniki Tanzania'],
                            ['url' => '#', 'en' => 'Mfumo wa Vibali vya Kusafiri Nje ya Nchi', 'sw' => 'Mfumo wa Vibali vya Kusafiri Nje ya Nchi'],
                        ]
                    @endphp
                    @foreach($links as $link)
                        <li>
                            <a href="{{ $link['url'] }}" target="_blank" rel="noopener" class="group flex items-start gap-2 py-2 px-3 -mx-3 rounded-lg text-xs text-emerald-200/70 hover:text-gold-300 hover:bg-emerald-800/40 transition-all">
                                <svg class="w-3 h-3 text-gold-500 flex-shrink-0 mt-0.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                <span data-lang="en">{{ $link['en'] }}</span>
                                <span data-lang="sw">{{ $link['sw'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Visitors Counter --}}
            <div>
                <h4 class="text-sm font-extrabold text-white mb-5 pb-2.5 border-b-2 border-gold-500/60 inline-flex items-center gap-2">
                    <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    <span data-lang="en">Visitors Counter</span>
                    <span data-lang="sw">Wageni Waliotembelea</span>
                </h4>
                @php
                    try {
                        $today = now()->toDateString();
                        $yesterday = now()->subDay()->toDateString();
                        $weekStart = now()->startOfWeek()->toDateString();
                        $monthStart = now()->startOfMonth()->toDateString();
                        $yearStart = now()->startOfYear()->toDateString();

                        $vToday     = \App\Models\Visitor::where('visit_date', $today)->count();
                        $vYesterday = \App\Models\Visitor::where('visit_date', $yesterday)->count();
                        $vWeek      = \App\Models\Visitor::where('visit_date', '>=', $weekStart)->count();
                        $vMonth     = \App\Models\Visitor::where('visit_date', '>=', $monthStart)->count();
                        $vYear      = \App\Models\Visitor::where('visit_date', '>=', $yearStart)->count();
                        $vTotal     = \App\Models\Visitor::count();
                    } catch (\Exception $e) {
                        $vToday = 0; $vYesterday = 0; $vWeek = 0; $vMonth = 0; $vYear = 0; $vTotal = 0;
                    }

                    $stats = [
                        ['label_en' => 'Today', 'label_sw' => 'Leo', 'value' => number_format($vToday)],
                        ['label_en' => 'Yesterday', 'label_sw' => 'Jana', 'value' => number_format($vYesterday)],
                        ['label_en' => 'This Week', 'label_sw' => 'Wiki Hii', 'value' => number_format($vWeek)],
                        ['label_en' => 'This Month', 'label_sw' => 'Mwezi Huu', 'value' => number_format($vMonth)],
                        ['label_en' => 'This Year', 'label_sw' => 'Mwaka Huu', 'value' => number_format($vYear)],
                        ['label_en' => 'Total Visit', 'label_sw' => 'Jumla', 'value' => number_format($vTotal)],
                    ];
                @endphp
                <div class="bg-emerald-950/50 rounded-xl p-4 space-y-2 border border-emerald-800/50 cursor-pointer hover:border-gold-500/40 transition-colors" onclick="openVisitorModal()">
                    @foreach($stats as $stat)
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-emerald-200/70" data-lang="en">{{ $stat['label_en'] }}</span>
                            <span class="text-emerald-200/70" data-lang="sw">{{ $stat['label_sw'] }}</span>
                            <span class="font-bold text-gold-400 tabular-nums">{{ $stat['value'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-emerald-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-5">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
                <p class="text-xs text-emerald-200/50" data-lang="en">
                    This website is developed and maintained by Butimba Teachers College
                </p>
                <p class="text-xs text-emerald-200/50" data-lang="sw">
                    Tovuti hii imeundwa na kuendeshwa na Chuo Cha Walimu Butimba
                </p>
            </div>
            <div class="mt-2 text-center">
                <p class="text-xs text-emerald-200/40">&copy; {{ date('Y') }} Butimba Teachers College.
                    <span data-lang="en">All Rights Reserved.</span>
                    <span data-lang="sw">Haki Zote Zimehifadhiwa.</span>
                </p>
            </div>
        </div>
    </div>
</footer>

{{-- Visitor Stats Modal --}}
<div id="visitorModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4">
    {{-- Backdrop --}}
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeVisitorModal()"></div>

    {{-- Modal Content --}}
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-hidden z-10">
        {{-- Modal Header --}}
        <div class="bg-gradient-to-r from-emerald-800 to-emerald-900 px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gold-500/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <div>
                    <h3 class="text-lg font-extrabold text-white" data-lang="en">Visitor Statistics</h3>
                    <h3 class="text-lg font-extrabold text-white" data-lang="sw">Takwimu za Wageni</h3>
                    <p class="text-xs text-emerald-200/60" data-lang="en">Real-time website traffic analytics</p>
                    <p class="text-xs text-emerald-200/60" data-lang="sw">Uchambuzi wa wageni wa moja kwa moja</p>
                </div>
            </div>
            <button onclick="closeVisitorModal()" class="text-white/60 hover:text-white hover:bg-white/10 rounded-lg p-2 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- Modal Body --}}
        <div class="p-6 overflow-y-auto max-h-[calc(90vh-100px)]">

            {{-- Stat Cards --}}
            <div id="visitorStatCards" class="grid grid-cols-2 sm:grid-cols-3 gap-3 mb-6">
                <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100">
                    <p class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider mb-1" data-lang="en">Today</p>
                    <p class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider mb-1" data-lang="sw">Leo</p>
                    <p class="text-2xl font-extrabold text-emerald-800 tabular-nums" id="modalToday">-</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                    <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1" data-lang="en">Yesterday</p>
                    <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1" data-lang="sw">Jana</p>
                    <p class="text-2xl font-extrabold text-gray-700 tabular-nums" id="modalYesterday">-</p>
                </div>
                <div class="bg-gold-50 rounded-xl p-4 border border-gold-100">
                    <p class="text-[10px] font-bold text-gold-600 uppercase tracking-wider mb-1" data-lang="en">This Week</p>
                    <p class="text-[10px] font-bold text-gold-600 uppercase tracking-wider mb-1" data-lang="sw">Wiki Hii</p>
                    <p class="text-2xl font-extrabold text-gold-700 tabular-nums" id="modalWeek">-</p>
                </div>
                <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100">
                    <p class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider mb-1" data-lang="en">This Month</p>
                    <p class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider mb-1" data-lang="sw">Mwezi Huu</p>
                    <p class="text-2xl font-extrabold text-emerald-800 tabular-nums" id="modalMonth">-</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                    <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1" data-lang="en">This Year</p>
                    <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1" data-lang="sw">Mwaka Huu</p>
                    <p class="text-2xl font-extrabold text-gray-700 tabular-nums" id="modalYear">-</p>
                </div>
                <div class="bg-gradient-to-br from-emerald-700 to-emerald-900 rounded-xl p-4 border border-emerald-700">
                    <p class="text-[10px] font-bold text-gold-400 uppercase tracking-wider mb-1" data-lang="en">Total</p>
                    <p class="text-[10px] font-bold text-gold-400 uppercase tracking-wider mb-1" data-lang="sw">Jumla</p>
                    <p class="text-2xl font-extrabold text-white tabular-nums" id="modalTotal">-</p>
                </div>
            </div>

            {{-- 7-Day Trend Chart --}}
            <div class="mb-6">
                <h4 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l3-3 3 3 4-4M17 14h2v2M3 3v18h18"/></svg>
                    <span data-lang="en">7-Day Visitor Trend</span>
                    <span data-lang="sw">Mwenendo wa Siku 7</span>
                </h4>
                <div id="visitorTrendChart" class="flex items-end justify-between gap-2 h-32 bg-gray-50 rounded-xl p-4 border border-gray-100">
                    <div class="flex-1 flex flex-col items-center gap-1">
                        <div class="w-full bg-emerald-200 rounded-t-md trend-bar" style="height: 0%"></div>
                        <span class="text-[9px] text-gray-400" id="trendDay0">-</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-1">
                        <div class="w-full bg-emerald-300 rounded-t-md trend-bar" style="height: 0%"></div>
                        <span class="text-[9px] text-gray-400" id="trendDay1">-</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-1">
                        <div class="w-full bg-emerald-400 rounded-t-md trend-bar" style="height: 0%"></div>
                        <span class="text-[9px] text-gray-400" id="trendDay2">-</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-1">
                        <div class="w-full bg-emerald-500 rounded-t-md trend-bar" style="height: 0%"></div>
                        <span class="text-[9px] text-gray-400" id="trendDay3">-</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-1">
                        <div class="w-full bg-emerald-500 rounded-t-md trend-bar" style="height: 0%"></div>
                        <span class="text-[9px] text-gray-400" id="trendDay4">-</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-1">
                        <div class="w-full bg-emerald-600 rounded-t-md trend-bar" style="height: 0%"></div>
                        <span class="text-[9px] text-gray-400" id="trendDay5">-</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-1">
                        <div class="w-full bg-gold-500 rounded-t-md trend-bar" style="height: 0%"></div>
                        <span class="text-[9px] text-gray-400 font-bold" id="trendDay6">-</span>
                    </div>
                </div>
            </div>

            {{-- Popular Pages Today --}}
            <div>
                <h4 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2">
                    <svg class="w-4 h-4 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    <span data-lang="en">Popular Pages Today</span>
                    <span data-lang="sw">Kurasa Zilizotembelewa Leo</span>
                </h4>
                <div id="popularPages" class="space-y-2">
                    <div class="text-xs text-gray-400 text-center py-4" data-lang="en">Loading...</div>
                    <div class="text-xs text-gray-400 text-center py-4" data-lang="sw">Inapakia...</div>
                </div>
            </div>

            {{-- Footer Info --}}
            <div class="mt-6 pt-4 border-t border-gray-100 text-center">
                <p class="text-[10px] text-gray-400" data-lang="en">Data is updated in real-time as visitors browse the website</p>
                <p class="text-[10px] text-gray-400" data-lang="sw">Takwimu zinabadilika moja kwa moja unapotembelea tovuti</p>
            </div>
        </div>
    </div>
</div>

<style>
    .trend-bar { transition: height 0.6s cubic-bezier(0.4, 0, 0.2, 1); min-height: 4px; }
    #visitorModal.show { display: flex; animation: modalFadeIn 0.25s ease-out; }
    @keyframes modalFadeIn { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }
</style>

<script>
    function openVisitorModal() {
        var modal = document.getElementById('visitorModal');
        modal.classList.remove('hidden');
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
        loadVisitorStats();
    }

    function closeVisitorModal() {
        var modal = document.getElementById('visitorModal');
        modal.classList.add('hidden');
        modal.classList.remove('show');
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeVisitorModal();
    });

    function loadVisitorStats() {
        fetch('{{ route("visitor.stats") }}')
            .then(function(r) { return r.json(); })
            .then(function(data) {
                var s = data.stats;
                document.getElementById('modalToday').textContent     = formatNum(s.today);
                document.getElementById('modalYesterday').textContent = formatNum(s.yesterday);
                document.getElementById('modalWeek').textContent      = formatNum(s.this_week);
                document.getElementById('modalMonth').textContent     = formatNum(s.this_month);
                document.getElementById('modalYear').textContent      = formatNum(s.this_year);
                document.getElementById('modalTotal').textContent     = formatNum(s.total);

                var trend = data.daily_trend || [];
                var maxVal = 1;
                trend.forEach(function(t) { if (t.visits > maxVal) maxVal = t.visits; });

                var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
                for (var i = 0; i < 7; i++) {
                    var bar = document.querySelector('#visitorTrendChart .trend-bar:nth-of-type(' + (i + 1) + ')');
                    var label = document.getElementById('trendDay' + i);
                    if (trend[i]) {
                        var d = new Date(trend[i].visit_date);
                        var pct = Math.round((trend[i].visits / maxVal) * 100);
                        if (bar) bar.style.height = Math.max(pct, 5) + '%';
                        if (label) label.textContent = days[d.getDay()] + ' (' + trend[i].visits + ')';
                    } else {
                        if (bar) bar.style.height = '5%';
                        if (label) label.textContent = '-';
                    }
                }

                var pages = data.recent_pages || [];
                var container = document.getElementById('popularPages');
                if (pages.length === 0) {
                    container.innerHTML = '<p class="text-xs text-gray-400 text-center py-4">No data yet</p>';
                } else {
                    var maxVisits = pages[0].visits;
                    var html = '';
                    pages.forEach(function(p) {
                        var pct = Math.round((p.visits / maxVisits) * 100);
                        html += '<div class="flex items-center gap-3">' +
                            '<span class="text-xs text-gray-600 w-24 truncate">' + (p.page_visited || '/') + '</span>' +
                            '<div class="flex-1 bg-gray-100 rounded-full h-2 overflow-hidden">' +
                                '<div class="h-full bg-gradient-to-r from-emerald-500 to-gold-400 rounded-full" style="width:' + pct + '%"></div>' +
                            '</div>' +
                            '<span class="text-xs font-bold text-emerald-700 tabular-nums">' + p.visits + '</span>' +
                        '</div>';
                    });
                    container.innerHTML = html;
                }
            })
            .catch(function() {
                var container = document.getElementById('popularPages');
                if (container) container.innerHTML = '<p class="text-xs text-gray-400 text-center py-4">Unable to load data</p>';
            });
    }

    function formatNum(n) {
        return n ? n.toLocaleString() : '0';
    }
</script>
