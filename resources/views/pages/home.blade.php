@extends('layouts.app')

@section('title', 'Home - Aeolus Digital')

@section('content')
<!-- Hero Banner -->
<div class="bg-gradient-to-r from-slate-900 to-blue-900 text-white py-20 px-6 text-center">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Empowering Enterprise Infrastructure</h1>
    <p class="text-lg md:text-xl text-blue-200 mb-8 max-w-2xl mx-auto">We provide elite computer hardware assembly, server optimization, and full-stack software solutions.</p>
    <!-- Call to Action Button -->
    <a href="{{ route('services') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 px-6 rounded-lg transition">Explore Services</a>
</div>

<!-- Company Intro -->
<div class="max-w-5xl mx-auto py-16 px-6">
    <h2 class="text-3xl font-bold text-center mb-6">Welcome to Aeolus Digital</h2>
    <p class="text-gray-600 text-center max-w-3xl mx-auto text-lg leading-relaxed">
        Aeolus Digital is a modern technology provider specializing in hardware architecture deployment and client-server systems. We build maintainable software and configure solid infrastructure tailored to growing digital needs.
    </p>
</div>

<!-- Featured Services Preview -->
<div class="bg-slate-100 py-12">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-center mb-8">Core Specialties</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                <div class="text-3xl mb-3">🖥️</div>
                <h4 class="font-bold text-xl mb-2">Hardware Integration</h4>
                <p class="text-gray-600 text-sm">Custom workstation configuration, diagnostics, and high-performance rig builds.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                <div class="text-3xl mb-3">🌐</div>
                <h4 class="font-bold text-xl mb-2">Web Application Dev</h4>
                <p class="text-gray-600 text-sm">Robust full-stack systems built with Laravel MVC and modern frontends.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                <div class="text-3xl mb-3">☁️</div>
                <h4 class="font-bold text-xl mb-2">Cloud Infrastructure</h4>
                <p class="text-gray-600 text-sm">Secure server setup, automated deployments, and network topology planning.</p>
            </div>
        </div>
    </div>
</div>
@endsection