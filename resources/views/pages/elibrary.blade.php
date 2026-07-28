@extends('layouts.site')

@section('title', 'E-Library')

@section('active_nav', 'library')

@section('content')
{{-- Coming Soon Hero --}}
<section class="relative min-h-[75vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-emerald-900 via-emerald-800 to-emerald-900 text-white">
    {{-- Decorative elements --}}
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(rgba(255,255,255,0.4) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 left-0 w-96 h-96 bg-gold-500/10 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-white/5 rounded-full"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] border border-white/5 rounded-full"></div>

    <div class="relative z-10 max-w-3xl mx-auto px-6 text-center py-20">

        {{-- Floating Book Icon --}}
        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-3xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center mx-auto mb-8 shadow-2xl float-anim">
            <svg class="w-12 h-12 sm:w-14 sm:h-14 text-emerald-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
        </div>

        {{-- Coming Soon Badge --}}
        <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-gold-500/20 backdrop-blur-sm border border-gold-400/30 mb-6 fade-in">
            <span class="w-2 h-2 rounded-full bg-gold-400 animate-pulse"></span>
            <span class="text-sm font-bold text-gold-300 tracking-wider uppercase" data-lang="en">Coming Soon</span>
            <span class="text-sm font-bold text-gold-300 tracking-wider uppercase" data-lang="sw">Inakuja Hivi Karibuni</span>
        </div>

        {{-- Title --}}
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight fade-in-up delay-1">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-300 to-gold-500" data-lang="en">E-Library</span>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-300 to-gold-500" data-lang="sw">Maktaba ya Mtandao</span>
        </h1>

        {{-- Subtitle --}}
        <p class="mt-6 text-base sm:text-lg text-emerald-50/80 max-w-xl mx-auto fade-in-up delay-2" data-lang="en">
            Our digital library is under construction. Soon you'll have access to thousands of e-books, research papers, journals, and educational resources — all available at your fingertips.
        </p>
        <p class="mt-6 text-base sm:text-lg text-emerald-50/80 max-w-xl mx-auto fade-in-up delay-2" data-lang="sw">
            Maktaba yetu ya kidijitali iko ujenzini. Hivi karibuni utakuwa na ufikiaji wa maelfu ya vitabu vya elektroniki, karatasi za utafiti, majarida, na rasilimali za elimu — vyote vinapatikana kwa vidole vyako.
        </p>

        {{-- Features Preview --}}
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 max-w-2xl mx-auto fade-in-up delay-3">
            <div class="p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-gold-500/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <p class="text-xs font-bold text-white" data-lang="en">10,000+ E-Books</p>
                <p class="text-xs font-bold text-white" data-lang="sw">Vitabu 10,000+</p>
                <p class="text-[10px] text-emerald-200/60 mt-1" data-lang="en">Across all subjects</p>
                <p class="text-[10px] text-emerald-200/60 mt-1" data-lang="sw">Katika masomo yote</p>
            </div>
            <div class="p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <p class="text-xs font-bold text-white" data-lang="en">Research Papers</p>
                <p class="text-xs font-bold text-white" data-lang="sw">Karatasi za Utafiti</p>
                <p class="text-[10px] text-emerald-200/60 mt-1" data-lang="en">Journals & articles</p>
                <p class="text-[10px] text-emerald-200/60 mt-1" data-lang="sw">Majarida na makala</p>
            </div>
            <div class="p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-gold-500/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/></svg>
                </div>
                <p class="text-xs font-bold text-white" data-lang="en">24/7 Access</p>
                <p class="text-xs font-bold text-white" data-lang="sw">Ufikiaji 24/7</p>
                <p class="text-[10px] text-emerald-200/60 mt-1" data-lang="en">Anytime, anywhere</p>
                <p class="text-[10px] text-emerald-200/60 mt-1" data-lang="sw">Wakati wowote, popote</p>
            </div>
        </div>

        {{-- Progress Indicator --}}
        <div class="mt-12 max-w-md mx-auto fade-in-up delay-4">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-semibold text-emerald-200/80" data-lang="en">Development Progress</span>
                <span class="text-xs font-semibold text-emerald-200/80" data-lang="sw">Maendeleo ya Ujenzi</span>
                <span class="text-xs font-bold text-gold-400">75%</span>
            </div>
            <div class="h-2 rounded-full bg-white/10 overflow-hidden">
                <div class="h-full rounded-full bg-gradient-to-r from-gold-400 to-gold-500" style="width: 75%;"></div>
            </div>
        </div>

        {{-- CTA --}}
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 fade-in-up delay-4">
            @guest
                <a href="{{ route('register') }}" class="w-full sm:w-auto px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                    <span data-lang="en">Register to Get Notified</span>
                    <span data-lang="sw">Jisajili Kupata Taarifa</span>
                </a>
            @else
                <a href="{{ url('/home') }}" class="w-full sm:w-auto px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span data-lang="en">Go to Dashboard</span>
                    <span data-lang="sw">Nenda Dashibodi</span>
                </a>
            @endguest
            <a href="{{ url('/courses') }}" class="w-full sm:w-auto px-8 py-3.5 text-sm font-bold text-white bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:bg-white/20 hover:border-white/50 rounded-lg transition-all flex items-center justify-center gap-2">
                <span data-lang="en">Explore Courses</span>
                <span data-lang="sw">Chunguza Kozi</span>
            </a>
        </div>
    </div>
</section>

{{-- What to Expect Section --}}
<section class="py-16 sm:py-20 px-4 sm:px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="en">What's Coming</p>
            <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="sw">Kinacho Kuja</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800" data-lang="en">Features of Our E-Library</h2>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800" data-lang="sw">Vipengele vya Maktaba Yetu</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center p-6 rounded-2xl border-2 border-emerald-100 hover:border-emerald-300 transition-colors fade-in-up">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Digital Books</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Vitabu vya Kidijitali</h4>
                <p class="text-xs text-gray-500" data-lang="en">Thousands of e-books across all teaching subjects and disciplines.</p>
                <p class="text-xs text-gray-500" data-lang="sw">Maelfu ya vitabu vya elektroniki katika masomo yote ya ualimu.</p>
            </div>
            <div class="text-center p-6 rounded-2xl border-2 border-gold-100 hover:border-gold-300 transition-colors fade-in-up delay-1">
                <div class="w-14 h-14 rounded-2xl bg-gold-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Research Journals</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Majarida ya Utafiti</h4>
                <p class="text-xs text-gray-500" data-lang="en">Access peer-reviewed journals and academic research publications.</p>
                <p class="text-xs text-gray-500" data-lang="sw">Fikia majarida yaliyokaguliwa na machapisho ya utafiti wa kitaaluma.</p>
            </div>
            <div class="text-center p-6 rounded-2xl border-2 border-emerald-100 hover:border-emerald-300 transition-colors fade-in-up delay-2">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Video Lectures</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Mihadhara ya Video</h4>
                <p class="text-xs text-gray-500" data-lang="en">Recorded lectures and educational videos from our expert lecturers.</p>
                <p class="text-xs text-gray-500" data-lang="sw">Mihadhara iliyorekodiwa na video za elimu kutoka kwa walimu wetu wataalamu.</p>
            </div>
            <div class="text-center p-6 rounded-2xl border-2 border-gold-100 hover:border-gold-300 transition-colors fade-in-up delay-3">
                <div class="w-14 h-14 rounded-2xl bg-gold-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Smart Search</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Utafutaji Mwerevu</h4>
                <p class="text-xs text-gray-500" data-lang="en">Powerful search engine to quickly find the resources you need.</p>
                <p class="text-xs text-gray-500" data-lang="sw">Injini ya utafutaji yenye nguvu ya kupata haraka rasilimali unayohitaji.</p>
            </div>
        </div>
    </div>
</section>

{{-- Notification CTA --}}
<section class="py-16 px-4 sm:px-6 bg-emerald-800 text-white text-center">
    <div class="max-w-3xl mx-auto fade-in-up">
        <div class="w-16 h-16 rounded-2xl bg-gold-500/20 flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
        </div>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-4" data-lang="en">Get Notified When We Launch</h2>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-4" data-lang="sw">Pata Taarifa Tunapofungua</h2>
        <p class="text-emerald-50/80 mb-8 text-sm sm:text-base" data-lang="en">Register on our ELMS platform today and be the first to know when the E-Library goes live.</p>
        <p class="text-emerald-50/80 mb-8 text-sm sm:text-base" data-lang="sw">Jisajili kwenye jukwaa letu la ELMS leo na uwe wa kwanza kujua wakati Maktaba ya Mtandao inapofunguliwa.</p>
        @guest
            <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                <span data-lang="en">Register Now</span>
                <span data-lang="sw">Jisajili Sasa</span>
            </a>
        @else
            <a href="{{ url('/home') }}" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <span data-lang="en">Go to Dashboard</span>
                <span data-lang="sw">Nenda Dashibodi</span>
            </a>
        @endguest
    </div>
</section>
@endsection
