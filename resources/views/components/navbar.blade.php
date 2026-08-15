<nav class="bg-slate-900 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="text-xl font-bold tracking-wider text-blue-400">
                    ⚡ AeolusDigital
                </a>
            </div>
            <div class="flex space-x-6">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-400 font-semibold' : 'text-gray-300 hover:text-white' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-400 font-semibold' : 'text-gray-300 hover:text-white' }}">About</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-blue-400 font-semibold' : 'text-gray-300 hover:text-white' }}">Services</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-400 font-semibold' : 'text-gray-300 hover:text-white' }}">Contact</a>
            </div>
        </div>
    </div>
</nav>