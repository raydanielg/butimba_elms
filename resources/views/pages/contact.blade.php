@extends('layouts.site')

@section('title', 'Contact')

@section('active_nav', 'contact')

@section('content')
{{-- Page Hero --}}
<section class="relative bg-gradient-to-br from-emerald-800 via-emerald-700 to-emerald-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.4) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 left-0 w-72 h-72 bg-gold-500/10 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-emerald-400/10 rounded-full blur-3xl pulse-glow"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-24 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6 fade-in">
            <span class="w-2 h-2 rounded-full bg-gold-400 animate-pulse"></span>
            <span class="text-xs font-semibold text-emerald-50 tracking-wide" data-lang="en">Get in Touch</span>
            <span class="text-xs font-semibold text-emerald-50 tracking-wide" data-lang="sw">Wasiliana Nasi</span>
        </div>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold leading-tight fade-in-up delay-1">
            <span data-lang="en">Contact Us</span>
            <span data-lang="sw">Wasiliana Nasi</span>
        </h1>
        <p class="mt-6 text-base sm:text-lg text-emerald-50/80 max-w-2xl mx-auto fade-in-up delay-2" data-lang="en">
            Have questions? We're here to help. Reach out to us through any of the channels below.
        </p>
        <p class="mt-6 text-base sm:text-lg text-emerald-50/80 max-w-2xl mx-auto fade-in-up delay-2" data-lang="sw">
            Una maswali? Tuko hapa kusaidia. Wasiliana nasi kupitia njia yoyote hapo chini.
        </p>
    </div>
</section>

{{-- Contact Cards --}}
<section class="py-16 sm:py-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 text-center fade-in-up hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Address</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Anuani</h4>
                <p class="text-xs text-gray-500 leading-relaxed" data-lang="en">Butimba Teachers College<br>P.O. Box 1234<br>Mwanza, Tanzania</p>
                <p class="text-xs text-gray-500 leading-relaxed" data-lang="sw">Chuo Cha Walimu Butimba<br>S.L.P. 1234<br>Mwanza, Tanzania</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 text-center fade-in-up delay-1 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 rounded-2xl bg-gold-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Phone</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Simu</h4>
                <p class="text-xs text-gray-500 leading-relaxed">
                    +255 28 250 0000<br>
                    +255 712 345 678
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 text-center fade-in-up delay-2 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Email</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Barua Pepe</h4>
                <p class="text-xs text-gray-500 leading-relaxed">
                    info@butimba.ac.tz<br>
                    admissions@butimba.ac.tz
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 text-center fade-in-up delay-3 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 rounded-2xl bg-gold-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="en">Office Hours</h4>
                <h4 class="font-bold text-emerald-800 text-sm mb-2" data-lang="sw">Masaa ya Ofisi</h4>
                <p class="text-xs text-gray-500 leading-relaxed" data-lang="en">Mon - Fri: 08:00 - 17:00<br>Sat: 08:00 - 13:00</p>
                <p class="text-xs text-gray-500 leading-relaxed" data-lang="sw">Jumatatu - Ijumaa: 08:00 - 17:00<br>Jumamosi: 08:00 - 13:00</p>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form + Map --}}
<section class="py-16 sm:py-20 px-4 sm:px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
            {{-- Form --}}
            <div class="fade-in-up">
                <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="en">Send a Message</p>
                <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="sw">Tuma Ujumbe</p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800 mb-6" data-lang="en">We'd Love to Hear From You</h2>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800 mb-6" data-lang="sw">Tungependa Kusikia Kutoka Kwako</h2>

                <form id="contactForm" class="space-y-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="en">Full Name</label>
                            <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="sw">Jina Kamili</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 text-sm rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100 outline-none transition-all" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="en">Email Address</label>
                            <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="sw">Barua Pepe</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 text-sm rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100 outline-none transition-all" placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="en">Subject</label>
                        <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="sw">Mada</label>
                        <input type="text" name="subject" required class="w-full px-4 py-3 text-sm rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100 outline-none transition-all" placeholder="Admissions Inquiry">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="en">Message</label>
                        <label class="block text-xs font-bold text-gray-600 mb-1.5" data-lang="sw">Ujumbe</label>
                        <textarea name="message" rows="5" required class="w-full px-4 py-3 text-sm rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100 outline-none transition-all resize-none" placeholder="Your message here..."></textarea>
                    </div>
                    <button type="submit" class="w-full sm:w-auto px-8 py-3.5 text-sm font-bold text-emerald-900 bg-gradient-to-r from-gold-300 to-gold-400 hover:from-gold-400 hover:to-gold-500 rounded-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        <span data-lang="en">Send Message</span>
                        <span data-lang="sw">Tuma Ujumbe</span>
                    </button>
                </form>
            </div>

            {{-- Map + Info --}}
            <div class="fade-in-up delay-1">
                <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="en">Find Us</p>
                <p class="text-sm font-bold text-gold-500 uppercase tracking-wider mb-2" data-lang="sw">Tupate</p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800 mb-6" data-lang="en">Our Location</h2>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-800 mb-6" data-lang="sw">Mahali Petu</h2>

                {{-- Map Placeholder --}}
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 mb-6">
                    <div class="aspect-[4/3] bg-gradient-to-br from-emerald-100 to-emerald-200 flex items-center justify-center relative">
                        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(rgba(2,73,56,0.3) 1px, transparent 1px); background-size: 24px 24px;"></div>
                        <div class="text-center z-10">
                            <div class="w-16 h-16 rounded-full bg-emerald-600 flex items-center justify-center mx-auto mb-3 shadow-lg float-anim">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <p class="text-sm font-bold text-emerald-700" data-lang="en">Butimba Teachers College</p>
                            <p class="text-sm font-bold text-emerald-700" data-lang="sw">Chuo Cha Walimu Butimba</p>
                            <p class="text-xs text-emerald-600 mt-1">Mwanza, Tanzania</p>
                        </div>
                    </div>
                </div>

                {{-- Quick Info --}}
                <div class="space-y-3">
                    <div class="flex items-start gap-3 p-4 rounded-xl bg-gray-50 border border-gray-100">
                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <div>
                            <p class="text-sm font-semibold text-gray-700" data-lang="en">Main Campus</p>
                            <p class="text-sm font-semibold text-gray-700" data-lang="sw">Chuo Kuu</p>
                            <p class="text-xs text-gray-500" data-lang="en">Butimba, Mwanza City<br>Along Airport Road</p>
                            <p class="text-xs text-gray-500" data-lang="sw">Butimba, Jiji la Mwanza<br>Kando ya Barabara ya Uwanja wa Ndege</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 rounded-xl bg-gray-50 border border-gray-100">
                        <svg class="w-5 h-5 text-gold-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <div>
                            <p class="text-sm font-semibold text-gray-700" data-lang="en">Admissions Office</p>
                            <p class="text-sm font-semibold text-gray-700" data-lang="sw">Ofisi ya Uandikishaji</p>
                            <p class="text-xs text-gray-500">+255 712 345 678</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Social Links --}}
<section class="py-12 px-4 sm:px-6 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center fade-in">
        <h3 class="text-lg font-extrabold text-emerald-800 mb-2" data-lang="en">Follow Us</h3>
        <h3 class="text-lg font-extrabold text-emerald-800 mb-2" data-lang="sw">Tufuate</h3>
        <p class="text-xs text-gray-500 mb-6" data-lang="en">Stay connected on social media</p>
        <p class="text-xs text-gray-500 mb-6" data-lang="sw">Kaa macho kwenye mitandao ya kijamii</p>
        <div class="flex items-center justify-center gap-4">
            <a href="#" class="w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center hover:bg-emerald-50 hover:shadow-lg transition-all">
                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
            </a>
            <a href="#" class="w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center hover:bg-emerald-50 hover:shadow-lg transition-all">
                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
            </a>
            <a href="#" class="w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center hover:bg-emerald-50 hover:shadow-lg transition-all">
                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"/></svg>
            </a>
            <a href="#" class="w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center hover:bg-emerald-50 hover:shadow-lg transition-all">
                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.063 2.063 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
        </div>
    </div>
</section>
@endsection
