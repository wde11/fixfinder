@extends('layouts.app')

@section('title', 'FixFinder — Find the Fix. Fast.')

@section('content')

{{-- ============================================================
     HERO / HOME SECTION
============================================================ --}}
<section id="home" class="pt-18 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- Left: Copy --}}
            <div>
                <span class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-6">
                    <span class="w-2 h-2 bg-blue-700 rounded-full"></span>
                    Trusted by 10,000+ Customers
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Find the Fix.<br/>
                    <span class="text-blue-700">Fast &amp; Reliable.</span>
                </h1>

                <p class="text-lg text-gray-500 leading-relaxed mb-8 max-w-lg">
                    FixFinder connects you with skilled professionals to solve your home, business, and tech problems — quickly, affordably, and without the hassle.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#solutions"
                       class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors duration-200">
                        Explore Solutions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#about"
                       class="inline-flex items-center gap-2 border-2 border-gray-200 hover:border-blue-700 text-gray-700 hover:text-blue-700 font-semibold px-7 py-3.5 rounded-lg transition-colors duration-200">
                        Learn More
                    </a>
                </div>

                {{-- Trust Stats --}}
                <div class="flex flex-wrap gap-8 mt-10 pt-10 border-t border-gray-100">
                    <div>
                        <p class="text-3xl font-extrabold text-gray-900">10K+</p>
                        <p class="text-sm text-gray-500 mt-0.5">Happy Customers</p>
                    </div>
                    <div>
                        <p class="text-3xl font-extrabold text-gray-900">500+</p>
                        <p class="text-sm text-gray-500 mt-0.5">Expert Technicians</p>
                    </div>
                    <div>
                        <p class="text-3xl font-extrabold text-gray-900">98%</p>
                        <p class="text-sm text-gray-500 mt-0.5">Satisfaction Rate</p>
                    </div>
                </div>
            </div>

            {{-- Right: Visual --}}
            <div class="relative hidden lg:block">
                {{-- Main card --}}
                <div class="bg-blue-700 rounded-2xl p-8 text-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Request Accepted!</p>
                            <p class="text-xs text-blue-200">Just now</p>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Plumbing Repair</h3>
                    <p class="text-sm text-blue-100 mb-6">A certified technician is on the way to your location.</p>
                    <div class="flex items-center justify-between bg-blue-800 rounded-xl px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-blue-600 rounded-full flex items-center justify-center text-sm font-bold">JD</div>
                            <div>
                                <p class="text-sm font-semibold">Juan Dela Cruz</p>
                                <p class="text-xs text-blue-300">&#9733; 4.9 &middot; Plumber</p>
                            </div>
                        </div>
                        <span class="text-xs bg-green-500 text-white px-2.5 py-1 rounded-full font-medium">En Route</span>
                    </div>
                </div>

                {{-- Floating accent cards --}}
                <div class="absolute -bottom-5 -left-6 bg-white shadow-lg rounded-xl px-4 py-3 flex items-center gap-3 border border-gray-100">
                    <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-800">Fast Response</p>
                        <p class="text-xs text-gray-400">Avg. 15 minutes</p>
                    </div>
                </div>

                <div class="absolute -top-5 -right-4 bg-white shadow-lg rounded-xl px-4 py-3 flex items-center gap-3 border border-gray-100">
                    <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-800">Verified Pros</p>
                        <p class="text-xs text-gray-400">Background checked</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Wave divider --}}
    <div class="text-gray-50">
        <svg viewBox="0 0 1440 60" fill="currentColor" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12">
            <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z"/>
        </svg>
    </div>
</section>


{{-- ============================================================
     ABOUT SECTION
============================================================ --}}
<section id="about" class="bg-gray-50 py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">About Us</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Who is <span class="text-blue-700">FixFinder</span>?
            </h2>
            <p class="text-gray-500 text-base leading-relaxed">
                We are a technology-driven platform that bridges the gap between customers and qualified service professionals — making repairs and solutions accessible to everyone.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Story</h3>
                <p class="text-gray-500 leading-relaxed mb-4">
                    Founded in 2020, FixFinder was born out of frustration — the kind every homeowner and business owner knows: waiting days for a technician, overpaying for mediocre service, and never knowing who's really showing up at your door.
                </p>
                <p class="text-gray-500 leading-relaxed mb-6">
                    Our founders set out to build a smarter, safer, and more transparent platform where verified professionals meet customers who need help — right now, not next week. Today, we serve thousands of clients nationwide with a growing network of skilled experts.
                </p>
                <ul class="space-y-3">
                    @foreach ([
                        'Verified and background-checked professionals',
                        'Real-time booking and service tracking',
                        'Transparent pricing — no hidden fees',
                        'Available 7 days a week, including holidays',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 bg-blue-700 rounded-full flex items-center justify-center mt-0.5 shrink-0">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 text-sm">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="grid grid-cols-2 gap-5">
                @php
                $stats = [
                    ['icon' => 'users',     'value' => '10,000+', 'label' => 'Happy Customers',    'color' => 'blue'],
                    ['icon' => 'briefcase', 'value' => '500+',    'label' => 'Expert Technicians', 'color' => 'orange'],
                    ['icon' => 'map-pin',   'value' => '25+',     'label' => 'Cities Covered',     'color' => 'green'],
                    ['icon' => 'star',      'value' => '4.9',     'label' => 'Average Rating',     'color' => 'yellow'],
                ];
                @endphp
                @foreach ($stats as $stat)
                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-11 h-11 rounded-xl mb-4 flex items-center justify-center
                        {{ $stat['color'] === 'blue'   ? 'bg-blue-100'   : '' }}
                        {{ $stat['color'] === 'orange' ? 'bg-orange-100' : '' }}
                        {{ $stat['color'] === 'green'  ? 'bg-green-100'  : '' }}
                        {{ $stat['color'] === 'yellow' ? 'bg-yellow-100' : '' }}">
                        @if ($stat['icon'] === 'users')
                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        @elseif ($stat['icon'] === 'briefcase')
                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        @elseif ($stat['icon'] === 'map-pin')
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        @else
                        <svg class="w-5 h-5 text-yellow-500" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        @endif
                    </div>
                    <p class="text-3xl font-extrabold text-gray-900">{{ $stat['value'] }}</p>
                    <p class="text-sm text-gray-500 mt-1">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     SOLUTIONS SECTION
============================================================ --}}
<section id="solutions" class="bg-white py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">Our Solutions</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                What We <span class="text-blue-700">Fix</span> For You
            </h2>
            <p class="text-gray-500 text-base leading-relaxed">
                From everyday repairs to complex installations, FixFinder covers every corner of your life and business.
            </p>
        </div>

        @php
        $solutions = [
            ['title' => 'Home Repair & Maintenance', 'desc' => 'Leaky faucets, broken tiles, damaged walls — our pros handle all standard home repair jobs swiftly and neatly.', 'color' => 'blue',   'icon' => 'home'],
            ['title' => 'Electrical Services',        'desc' => 'Safe wiring, panel upgrades, outlet installations, and troubleshooting by licensed electricians.',              'color' => 'yellow', 'icon' => 'bolt'],
            ['title' => 'Plumbing Solutions',         'desc' => 'From pipe repairs to full bathroom installations, our certified plumbers get water flowing right again.',        'color' => 'cyan',   'icon' => 'water'],
            ['title' => 'Appliance Repair',           'desc' => 'AC units, refrigerators, washing machines, and more — diagnosed and repaired by certified technicians.',        'color' => 'green',  'icon' => 'appliance'],
            ['title' => 'IT & Tech Support',          'desc' => 'Network setup, computer repair, software troubleshooting, and smart-home device installations.',                'color' => 'purple', 'icon' => 'tech'],
            ['title' => 'Business Maintenance',       'desc' => 'Keep your commercial space running smoothly with our scheduled preventive maintenance contracts.',               'color' => 'orange', 'icon' => 'business'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($solutions as $solution)
            <div class="group bg-white border border-gray-100 rounded-2xl p-7 hover:border-blue-200 hover:shadow-lg transition-all duration-200">
                <div class="w-12 h-12 rounded-xl mb-5 flex items-center justify-center
                    {{ $solution['color'] === 'blue'   ? 'bg-blue-100'   : '' }}
                    {{ $solution['color'] === 'yellow' ? 'bg-yellow-100' : '' }}
                    {{ $solution['color'] === 'cyan'   ? 'bg-cyan-100'   : '' }}
                    {{ $solution['color'] === 'green'  ? 'bg-green-100'  : '' }}
                    {{ $solution['color'] === 'purple' ? 'bg-purple-100' : '' }}
                    {{ $solution['color'] === 'orange' ? 'bg-orange-100' : '' }}">
                    @if ($solution['icon'] === 'home')
                    <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    @elseif ($solution['icon'] === 'bolt')
                    <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    @elseif ($solution['icon'] === 'water')
                    <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    @elseif ($solution['icon'] === 'appliance')
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    @elseif ($solution['icon'] === 'tech')
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    @else
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    @endif
                </div>
                <h3 class="text-base font-bold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors">{{ $solution['title'] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $solution['desc'] }}</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-semibold text-blue-700 hover:text-blue-900 transition-colors">
                        Learn More
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-14 bg-blue-700 rounded-2xl p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h3 class="text-xl font-bold text-white mb-1">Need something else?</h3>
                <p class="text-blue-100 text-sm">Tell us your problem and we'll match you with the right expert.</p>
            </div>
            <a href="#" class="shrink-0 inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors">
                Request a Custom Fix
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- ============================================================
     VISION & MISSION SECTION
============================================================ --}}
<section id="vision-mission" class="bg-gray-50 py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">Vision &amp; Mission</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                What <span class="text-blue-700">Drives</span> Us
            </h2>
            <p class="text-gray-500 text-base leading-relaxed">
                Our vision and mission guide every decision we make — from the professionals we onboard to the features we build.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-14">

            {{-- Vision --}}
            <div class="bg-blue-700 rounded-2xl p-8 sm:p-10 text-white">
                <div class="w-14 h-14 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold mb-4">Our Vision</h3>
                <p class="text-blue-100 leading-relaxed text-base">
                    To become the most trusted and accessible service platform in Southeast Asia — a world where no problem goes unfixed, and every skilled professional has the opportunity to thrive.
                </p>
                <div class="mt-8 pt-6 border-t border-blue-600 grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-2xl font-extrabold">2030</p>
                        <p class="text-sm text-blue-200 mt-0.5">Target year for SEA expansion</p>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold">1M+</p>
                        <p class="text-sm text-blue-200 mt-0.5">Customers to serve</p>
                    </div>
                </div>
            </div>

            {{-- Mission --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-8 sm:p-10 shadow-sm">
                <div class="w-14 h-14 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold text-gray-900 mb-4">Our Mission</h3>
                <p class="text-gray-500 leading-relaxed text-base mb-6">
                    To simplify the way people access professional services by building a safe, transparent, and technology-powered platform that connects skilled professionals with customers in need — faster and more reliably than ever before.
                </p>
                <ul class="space-y-3">
                    @foreach ([
                        'Make professional services accessible nationwide',
                        'Empower skilled workers with fair, consistent work',
                        'Build a culture of trust, speed, and quality',
                    ] as $item)
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 bg-orange-500 rounded-full flex items-center justify-center mt-0.5 shrink-0">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

        {{-- Core Values --}}
        <div>
            <h3 class="text-center text-xl font-bold text-gray-900 mb-8">Our Core Values</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                @foreach ([
                    ['label' => 'Integrity',     'desc' => 'We act with honesty in every interaction.',    'bg' => 'bg-blue-700',   'text' => 'text-white'],
                    ['label' => 'Excellence',    'desc' => 'We hold every job to the highest standard.',   'bg' => 'bg-gray-900',   'text' => 'text-white'],
                    ['label' => 'Speed',         'desc' => 'We respect your time and move with urgency.',  'bg' => 'bg-orange-500', 'text' => 'text-white'],
                    ['label' => 'Accessibility', 'desc' => 'Quality service should be for everyone.',      'bg' => 'bg-gray-100',   'text' => 'text-gray-900'],
                ] as $value)
                <div class="{{ $value['bg'] }} {{ $value['text'] }} rounded-2xl p-6 text-center">
                    <h4 class="font-bold text-lg mb-2">{{ $value['label'] }}</h4>
                    <p class="text-xs leading-relaxed opacity-80">{{ $value['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>


{{-- ============================================================
     TEAM SECTION
============================================================ --}}
<section id="team" class="bg-white py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-green-100 text-green-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">Our Team</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Meet the <span class="text-blue-700">People</span> Behind FixFinder
            </h2>
            <p class="text-gray-500 text-base leading-relaxed">
                A dedicated team of builders, operators, and problem-solvers working every day to make FixFinder the best in its class.
            </p>
        </div>

        @php
        $team = [
            ['name' => 'Maria Santos',  'role' => 'Chief Executive Officer',  'initials' => 'MS', 'bio' => 'Serial entrepreneur with 12+ years in operations and tech startups across Southeast Asia.', 'color' => 'bg-blue-700'],
            ['name' => 'Carlos Reyes',  'role' => 'Chief Technology Officer',  'initials' => 'CR', 'bio' => 'Full-stack engineer and platform architect. Built scalable systems at Fortune 500 companies.', 'color' => 'bg-gray-800'],
            ['name' => 'Anna Lim',      'role' => 'Head of Operations',        'initials' => 'AL', 'bio' => 'Operations expert who ensures every service delivery meets FixFinder\'s quality promise.', 'color' => 'bg-orange-500'],
            ['name' => 'David Cruz',    'role' => 'Head of Growth',            'initials' => 'DC', 'bio' => 'Growth strategist who scaled FixFinder from 0 to 10,000 customers in under 18 months.', 'color' => 'bg-green-600'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($team as $member)
            <div class="group bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-200">
                <div class="{{ $member['color'] }} h-36 flex items-center justify-center">
                    {{-- Replace this div with an <img> tag when you have team photos --}}
                    <div class="w-20 h-20 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white text-2xl font-extrabold tracking-wide">
                        {{ $member['initials'] }}
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="font-bold text-gray-900 text-base">{{ $member['name'] }}</h4>
                    <p class="text-xs font-medium text-blue-700 mt-0.5 mb-3">{{ $member['role'] }}</p>
                    <p class="text-xs text-gray-500 leading-relaxed mb-4">{{ $member['bio'] }}</p>
                    <div class="flex items-center gap-2 pt-3 border-t border-gray-100">
                        <a href="#" class="w-7 h-7 bg-gray-100 hover:bg-blue-700 hover:text-white rounded-lg flex items-center justify-center transition-colors text-gray-600" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/>
                            </svg>
                        </a>
                        <a href="#" class="w-7 h-7 bg-gray-100 hover:bg-blue-400 hover:text-white rounded-lg flex items-center justify-center transition-colors text-gray-600" aria-label="Twitter">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0016 2a4.48 4.48 0 00-4.48 4.48 4.6 4.6 0 00.12 1.02A12.73 12.73 0 013 3.19a4.48 4.48 0 001.39 5.99 4.45 4.45 0 01-2.03-.56v.06a4.48 4.48 0 003.59 4.39 4.5 4.5 0 01-2.02.08 4.48 4.48 0 004.18 3.11A9 9 0 012 19.54a12.73 12.73 0 006.88 2.02c8.27 0 12.79-6.85 12.79-12.79 0-.19 0-.39-.01-.58A9.14 9.14 0 0023 6.07a8.93 8.93 0 01-2.6.71A4.52 4.52 0 0023 3z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-14 text-center">
            <p class="text-gray-500 mb-4">Want to join the team? We're always looking for talented people.</p>
            <a href="#" class="inline-flex items-center gap-2 border-2 border-blue-700 text-blue-700 hover:bg-blue-700 hover:text-white font-semibold px-7 py-3 rounded-lg transition-colors duration-200">
                View Open Positions
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- ============================================================
     CALL TO ACTION SECTION
============================================================ --}}
<section class="bg-blue-700 py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">
            Ready to Find Your Fix?
        </h2>
        <p class="text-blue-100 text-base mb-8 max-w-xl mx-auto">
            Join thousands of customers who trust FixFinder for fast, reliable, and professional service — every time.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#solutions" class="inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
                Get Started Today
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="#about" class="inline-flex items-center gap-2 bg-white bg-opacity-10 hover:bg-opacity-20 border border-white border-opacity-30 text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
                Learn More About Us
            </a>
        </div>
    </div>
</section>

@endsection

