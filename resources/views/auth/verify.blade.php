@extends('layouts.auth')

@section('title', 'Verify Email - Butimba Teachers College')

@section('content')
<div class="w-full">
    <div class="bg-white rounded-none sm:rounded-2xl shadow-none sm:shadow-xl border-0 sm:border border-gray-100 overflow-hidden min-h-screen sm:min-h-0">
        {{-- Header --}}
        <div class="px-6 sm:px-8 py-8 text-center border-b border-gray-100">
            <img src="{{ asset('logo.png') }}" alt="Butimba Teachers College" class="w-16 h-16 mx-auto object-contain mb-3">
            <div class="mx-auto w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center mb-3">
                <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <h2 class="text-2xl font-extrabold text-gray-800">Verify Your Email</h2>
            <p class="text-gray-400 text-sm mt-1">Check your inbox for a verification link</p>
            <p class="text-emerald-600 text-xs font-semibold mt-2 tracking-wide">Elimu bora kwa walimu wa kisasi</p>
        </div>

        {{-- Content --}}
        <div class="p-6 sm:p-8 text-center">
            @if (session('resent'))
                <div class="mb-5 p-4 rounded-lg bg-emerald-50 border border-emerald-100 flex items-start gap-3 text-left">
                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <p class="text-sm text-emerald-700 font-medium">A fresh verification link has been sent to your email address.</p>
                </div>
            @endif

            <div class="space-y-4">
                <div class="flex items-start gap-3 text-left p-4 rounded-lg bg-gray-50 border border-gray-100">
                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <p class="text-sm text-gray-600">Before proceeding, please check your email for a verification link.</p>
                </div>

                <p class="text-sm text-gray-500">
                    If you did not receive the email,
                    <form method="POST" action="{{ route('verification.resend') }}" class="inline">
                        @csrf
                        <button type="submit" class="font-semibold text-emerald-600 hover:text-emerald-700 transition-colors underline">click here to request another</button>.
                    </form>
                </p>
            </div>

            {{-- Divider --}}
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-200"></div></div>
                <div class="relative flex justify-center text-sm"><span class="px-3 bg-white text-gray-400">or</span></div>
            </div>

            {{-- Logout --}}
            <p class="text-center text-sm text-gray-500">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="font-semibold text-emerald-600 hover:text-emerald-700 transition-colors">Sign out</a>
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </div>

    <p class="mt-6 text-center text-xs text-gray-400 hidden sm:block">&copy; {{ date('Y') }} Butimba Teachers College. All rights reserved.</p>
</div>
@endsection
