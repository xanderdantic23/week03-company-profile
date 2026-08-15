@extends('layouts.app')

@section('title', 'About Us - Aeolus Digital')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-6">
    <h1 class="text-4xl font-bold mb-6 text-slate-900 border-b pb-4">About Aeolus Digital</h1>
    
    <section class="mb-10">
        <h2 class="text-2xl font-bold text-blue-600 mb-3">Company History</h2>
        <p class="text-gray-700 leading-relaxed">
            Founded as an independent systems assembly shop, Aeolus Digital quickly expanded into full-scale enterprise hardware integration and web development services. Our commitment to modular design and structural reliability drives everything we engineer.
        </p>
    </section>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
        <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg">
            <h3 class="text-xl font-bold mb-2 text-slate-800">Our Mission</h3>
            <p class="text-gray-600">To engineer seamless client-server solutions and deliver reliable hardware optimization that maximizes client productivity.</p>
        </div>
        <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg">
            <h3 class="text-xl font-bold mb-2 text-slate-800">Our Vision</h3>
            <p class="text-gray-600">To become a benchmark provider in hardware diagnostics and web architecture across emerging markets.</p>
        </div>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4">Core Values</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="p-4 bg-white rounded shadow-sm border border-slate-200">
                <h4 class="font-bold text-slate-900 mb-1">Precision</h4>
                <p class="text-xs text-gray-600">Attention to every line of code and hardware pin connection.</p>
            </div>
            <div class="p-4 bg-white rounded shadow-sm border border-slate-200">
                <h4 class="font-bold text-slate-900 mb-1">Efficiency</h4>
                <p class="text-xs text-gray-600">Optimized MVC structures and low-latency system responses.</p>
            </div>
            <div class="p-4 bg-white rounded shadow-sm border border-slate-200">
                <h4 class="font-bold text-slate-900 mb-1">Integrity</h4>
                <p class="text-xs text-gray-600">Transparent reporting, security compliance, and trustworthy service.</p>
            </div>
        </div>
    </section>

    <!-- Team Introduction Section -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-slate-900">Meet Our Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Team Member 1 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm text-center">
                <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-4xl mx-auto mb-4">
                    🛠️
                </div>
                <h3 class="font-bold text-lg text-slate-900">Alex Reyes</h3>
                <p class="text-xs text-blue-600 font-semibold mb-2">Lead Hardware Architect</p>
                <p class="text-xs text-gray-600">Specializes in enterprise workstation configurations, thermal diagnostics, and bench repairs.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm text-center">
                <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-4xl mx-auto mb-4">
                    💻
                </div>
                <h3 class="font-bold text-lg text-slate-900">Sarah Chen</h3>
                <p class="text-xs text-blue-600 font-semibold mb-2">Senior Full-Stack Developer</p>
                <p class="text-xs text-gray-600">Expert in Laravel MVC architecture, database schema design, and REST API development.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm text-center">
                <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-4xl mx-auto mb-4">
                    ☁️
                </div>
                <h3 class="font-bold text-lg text-slate-900">David Santos</h3>
                <p class="text-xs text-blue-600 font-semibold mb-2">Cloud & Systems Engineer</p>
                <p class="text-xs text-gray-600">Focuses on Linux server deployment, network topology, and automated cloud workflows.</p>
            </div>
        </div>
    </section>
</div>
@endsection