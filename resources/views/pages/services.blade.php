@extends('layouts.app')

@section('title', 'Services - Aeolus Digital')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-6">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-slate-900 mb-2">Our Technical Services</h1>
        <p class="text-gray-600">Comprehensive hardware, software, and networking configurations.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4 text-blue-600">💻</div>
            <h3 class="text-xl font-bold mb-2">Web Application Development</h3>
            <p class="text-gray-600 text-sm">Building clean, scalable web apps utilizing modern Laravel MVC architecture and dynamic Blade components.</p>
        </div>

        <!-- Service 2 -->
        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4 text-blue-600">📱</div>
            <h3 class="text-xl font-bold mb-2">Mobile System Integration</h3>
            <p class="text-gray-600 text-sm">Connecting Flutter frontends to lightweight PHP backends and secure RESTful endpoints.</p>
        </div>

        <!-- Service 3 -->
        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4 text-blue-600">🖥️</div>
            <h3 class="text-xl font-bold mb-2">Custom Hardware & Assembly</h3>
            <p class="text-gray-600 text-sm">Specialized PC builds for dev workstations, rendering nodes, and enterprise server racks.</p>
        </div>

        <!-- Service 4 -->
        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4 text-blue-600">☁️</div>
            <h3 class="text-xl font-bold mb-2">Cloud Solutions & Hosting</h3>
            <p class="text-gray-600 text-sm">Deployment and server orchestration to ensure 99.9% uptime for client services.</p>
        </div>

        <!-- Service 5 -->
        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4 text-blue-600">🔒</div>
            <h3 class="text-xl font-bold mb-2">Cybersecurity Auditing</h3>
            <p class="text-gray-600 text-sm">Thorough inspection of routes, databases, and network ports to prevent unauthorized access.</p>
        </div>

        <!-- Service 6 -->
        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4 text-blue-600">🛠️</div>
            <h3 class="text-xl font-bold mb-2">IT Hardware Diagnostics</h3>
            <p class="text-gray-600 text-sm">On-site technical support, thermal repasting, component testing, and component repairs.</p>
        </div>
    </div>
</div>
@endsection