@extends('layouts.app')

@section('title', 'Contact Us - Aeolus Digital')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-6">
    <h1 class="text-4xl font-bold text-center mb-8">Get In Touch</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Contact Form (UI Only) -->
        <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
            <h2 class="text-2xl font-bold mb-4">Send a Message</h2>
            <form action="#" method="POST" class="space-y-4" onsubmit="event.preventDefault();">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="James Bond">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="name@email.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea rows="4" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="How can we help you?"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 rounded-lg transition">Submit Message</button>
            </form>
        </div>

        <!-- Contact Info & Socials -->
        <div class="flex flex-col justify-between space-y-8">
            <div>
                <h2 class="text-2xl font-bold mb-4">Contact Information</h2>
                <div class="space-y-4 text-gray-700">
                    <p class="flex items-center space-x-3">
                        <span class="text-xl">📍</span>
                        <span>Tech Hub Center, Metro Manila, Philippines</span>
                    </p>
                    <p class="flex items-center space-x-3">
                        <span class="text-xl">📧</span>
                        <span>aeolusdigital@gmail.com</span>
                    </p>
                    <p class="flex items-center space-x-3">
                        <span class="text-xl">📞</span>
                        <span>+63 (02) 8888-0199</span>
                    </p>
                </div>
            </div>

            <!-- Social Media Section -->
            <div>
                <h2 class="text-xl font-bold mb-4">Connect With Us</h2>
                <div class="flex space-x-4">
                    <!-- LinkedIn -->
                    <a href="#" onclick="event.preventDefault();" class="group flex items-center justify-center w-12 h-12 bg-white border border-slate-200 rounded-xl shadow-sm transition-all duration-300 transform hover:-translate-y-1 hover:scale-110 hover:shadow-md hover:border-blue-500 hover:bg-blue-50">
                        <img src="{{ asset('images/linkedin.jpg') }}" alt="LinkedIn" class="w-6 h-6 object-contain transition-transform duration-300 group-hover:scale-125">
                    </a>
                    
                    <!-- GitHub -->
                    <a href="#" onclick="event.preventDefault();" class="group flex items-center justify-center w-12 h-12 bg-white border border-slate-200 rounded-xl shadow-sm transition-all duration-300 transform hover:-translate-y-1 hover:scale-110 hover:shadow-md hover:border-slate-800 hover:bg-slate-100">
                        <img src="{{ asset('images/github.png') }}" alt="GitHub" class="w-6 h-6 object-contain transition-transform duration-300 group-hover:scale-125">
                    </a>

                    <!-- Twitter / X -->
                    <a href="#" onclick="event.preventDefault();" class="group flex items-center justify-center w-12 h-12 bg-white border border-slate-200 rounded-xl shadow-sm transition-all duration-300 transform hover:-translate-y-1 hover:scale-110 hover:shadow-md hover:border-sky-400 hover:bg-sky-50">
                        <img src="{{ asset('images/twitter.jpg') }}" alt="Twitter / X" class="w-6 h-6 object-contain transition-transform duration-300 group-hover:scale-125">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection