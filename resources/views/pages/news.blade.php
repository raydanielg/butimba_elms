@extends('layouts.site')

@section('title', 'News & Events')

@section('active_nav', 'news')

@section('content')
{{-- Hero/Breadcrumb Section --}}
<section class="bg-[#6b8e6b] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#1a3a1a] mb-2 uppercase tracking-wide">
            <span data-lang="en">Blogs &amp; Events</span>
            <span data-lang="sw">Blogs &amp; Matukio</span>
        </h1>
        <div class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-emerald-900 hover:underline">Home</a>
            <span class="text-emerald-800">/</span>
            <span class="text-emerald-800 font-medium" data-lang="en">Blogs &amp; Events</span>
            <span class="text-emerald-800 font-medium" data-lang="sw">Blogs &amp; Matukio</span>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-8">

            {{-- Main Content --}}
            <div class="flex-1 space-y-8">

                {{-- Featured/Latest Blog Post --}}
                @if($posts->count() > 0)
                @php $featured = $posts->first(); @endphp
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden group text-left">
                    <div class="bg-emerald-800 px-6 py-3 flex justify-between items-center">
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="en">Latest Blog</h2>
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="sw">Blog ya Karibuni</h2>
                        <span class="text-[10px] font-bold text-gold-400 uppercase tracking-widest">{{ $featured->category }}</span>
                    </div>
                    <div class="p-6 sm:p-8">
                        <p class="text-xs text-gray-400 mb-2">{{ $featured->created_at->format('d M, Y') }}</p>
                        <h3 class="text-2xl font-bold text-emerald-900 mb-4 group-hover:text-emerald-700 transition-colors">
                            <span data-lang="en">{{ $featured->title_en }}</span>
                            <span data-lang="sw">{{ $featured->title_sw }}</span>
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed mb-6 line-clamp-3">
                            <span data-lang="en">{{ $featured->body_en }}</span>
                            <span data-lang="sw">{{ $featured->body_sw }}</span>
                        </p>
                        <button onclick="viewPost({{ $featured->id }})" class="inline-flex items-center gap-2 px-6 py-2.5 bg-emerald-800 hover:bg-emerald-900 text-white text-xs font-bold rounded-lg transition-all shadow-md">
                            <span data-lang="en">Read Full Post</span>
                            <span data-lang="sw">Soma Habari Kamili</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </div>
                </div>
                @endif

                {{-- More Blogs Grid --}}
                <div>
                    <h3 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-4 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="en">Recent Stories</h3>
                    <h3 class="text-xs font-extrabold text-emerald-800 uppercase tracking-widest mb-4 pb-2 border-b-2 border-emerald-800 inline-block" data-lang="sw">Hadithi za Karibuni</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach($posts->skip(1) as $post)
                            <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all flex flex-col text-left">
                                <div class="h-3 bg-emerald-800"></div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <div class="flex justify-between items-center mb-3">
                                        <span class="text-[10px] font-bold text-gray-400">{{ $post->created_at->format('d M, Y') }}</span>
                                        <span class="px-2 py-0.5 text-[9px] font-bold uppercase rounded bg-gold-50 text-gold-700">{{ $post->category }}</span>
                                    </div>
                                    <h4 class="font-bold text-emerald-800 text-sm mb-3 leading-tight flex-1">
                                        <span data-lang="en">{{ $post->title_en }}</span>
                                        <span data-lang="sw">{{ $post->title_sw }}</span>
                                    </h4>
                                    <button onclick="viewPost({{ $post->id }})" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-700 hover:text-emerald-900 transition-colors mt-4">
                                        <span data-lang="en">View Post</span>
                                        <span data-lang="sw">Angalia</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Events Section --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden text-left">
                    <div class="bg-emerald-800 px-6 py-3">
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="en">Mark Your Calendar</h2>
                        <h2 class="text-sm font-bold text-white uppercase tracking-wider" data-lang="sw">Andika Kalenda Yako</h2>
                    </div>
                    <div class="p-6 space-y-4">
                        @forelse($events as $event)
                            <div class="flex items-center gap-4 p-4 rounded-lg border border-gray-100 hover:border-emerald-200 hover:bg-gray-50 transition-all group">
                                <div class="flex-shrink-0 w-16 h-16 rounded-lg bg-emerald-50 text-emerald-800 border border-emerald-100 flex flex-col items-center justify-center group-hover:bg-emerald-800 group-hover:text-white transition-all">
                                    <span class="text-2xl font-black leading-none">{{ $event->date->format('d') }}</span>
                                    <span class="text-[10px] font-bold uppercase mt-1">{{ $event->date->format('M') }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-bold text-emerald-900 text-sm mb-1">
                                        <span data-lang="en">{{ $event->title_en }}</span>
                                        <span data-lang="sw">{{ $event->title_sw }}</span>
                                    </h4>
                                    <div class="flex flex-wrap items-center gap-3 text-[11px] text-gray-500">
                                        <span class="flex items-center gap-1">
                                            <svg class="w-3 h-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                            {{ $event->time }}
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <svg class="w-3 h-3 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                            <span data-lang="en">{{ $event->location_en }}</span>
                                            <span data-lang="sw">{{ $event->location_sw }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-sm text-gray-500 py-8" data-lang="en">No upcoming events scheduled at the moment.</p>
                            <p class="text-center text-sm text-gray-500 py-8" data-lang="sw">Hakuna matukio yaliyopangwa kwa sasa.</p>
                        @endforelse
                    </div>
                </div>

            </div>

            {{-- Sidebar --}}
            <div class="w-full lg:w-80 space-y-6 text-left">
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
                            <a href="{{ url('/courses') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Programmes Offered</span>
                                <span data-lang="sw">Programu Zinazotolewa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('apply.form') }}" class="group flex items-center gap-2 text-[13px] text-gray-700 hover:text-emerald-800 transition-colors">
                                <span class="text-gray-400 group-hover:text-emerald-800 font-bold transition-all">></span>
                                <span data-lang="en">Apply Online</span>
                                <span data-lang="sw">Omba Mtandaoni</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Newsletter CTA Card --}}
                <div class="bg-emerald-900 text-white rounded-lg p-6 shadow-lg relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12"></div>
                    <h4 class="font-bold text-lg mb-3 relative z-10" data-lang="en">Join Newsletter</h4>
                    <h4 class="font-bold text-lg mb-3 relative z-10" data-lang="sw">Jiunge nasi</h4>
                    <p class="text-sm text-emerald-100/80 mb-6 relative z-10" data-lang="en">Receive the latest updates from Butimba Teachers College directly in your inbox.</p>
                    <p class="text-sm text-emerald-100/80 mb-6 relative z-10" data-lang="sw">Pata habari za hivi karibuni kutoka Chuo Cha Walimu Butimba kupitia barua pepe yako.</p>
                    <a href="{{ route('register') }}" class="block text-center py-2.5 bg-gold-400 hover:bg-gold-500 text-emerald-950 font-bold rounded-md transition-all relative z-10 shadow-md">
                        <span data-lang="en">Register for Updates</span>
                        <span data-lang="sw">Jisajili sasa</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Blog Detail Modal --}}
<div id="blogModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeBlogModal()"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-3xl overflow-hidden z-10">
        {{-- Modal Header --}}
        <div class="bg-emerald-800 px-8 py-6">
            <div class="flex justify-between items-start">
                <h3 id="modalBlogTitle" class="text-xl font-bold text-white leading-tight"></h3>
                <button onclick="closeBlogModal()" class="text-white/80 hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="flex gap-4 mt-4">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 text-white text-xs font-bold border border-white/20">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span id="modalBlogDate"></span>
                </span>
                <span id="modalBlogCategory" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gold-400 text-emerald-900 text-xs font-black uppercase tracking-wider"></span>
            </div>
        </div>

        {{-- Modal Body --}}
        <div class="p-8 max-h-[60vh] overflow-y-auto custom-scrollbar text-left">
            <div id="modalBlogContent" class="text-gray-600 leading-relaxed text-sm space-y-4"></div>
        </div>

        {{-- Modal Footer --}}
        <div class="p-6 bg-gray-50 border-t border-gray-100 flex justify-end">
            <button onclick="closeBlogModal()" class="px-6 py-2.5 bg-white border border-gray-200 text-gray-700 font-bold rounded-lg hover:bg-gray-50 transition-all text-xs">
                <span data-lang="en">Close</span>
                <span data-lang="sw">Funga</span>
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
async function viewPost(id) {
    try {
        const res = await fetch(`/api/posts/${id}`);
        const post = await res.json();
        
        const lang = document.body.classList.contains('lang-sw') ? 'sw' : 'en';
        
        document.getElementById('modalBlogTitle').textContent = post['title_' + lang];
        document.getElementById('modalBlogCategory').textContent = post.category;
        document.getElementById('modalBlogDate').textContent = new Date(post.created_at).toLocaleDateString();
        
        // Formating content with paragraphs
        const content = post['body_' + lang];
        document.getElementById('modalBlogContent').innerHTML = content.split('\n').map(p => `<p>${p}</p>`).join('');

        const modal = document.getElementById('blogModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    } catch (e) {
        console.error('Failed to load blog post:', e);
    }
}

function closeBlogModal() {
    const modal = document.getElementById('blogModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
}
</script>
<style>
.custom-scrollbar::-webkit-scrollbar { width: 6px; }
.custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; }
.custom-scrollbar::-webkit-scrollbar-thumb { background: #024938; border-radius: 10px; }
.custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #013028; }
</style>
@endpush
@endsection
