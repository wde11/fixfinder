@extends('layouts.app')

@section('title', 'FixFinder — Find the Fix. Fast.')

@section('content')

{{-- ============================================================
     HERO / HOME SECTION
============================================================ --}}
<section id="home" class="pt-18 bg-stone-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- Left: Copy --}}
            <div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-stone-900 leading-tight mb-6">
                    Find the Fix.<br/>
                    <span class="text-amber-700">Fast &amp; Reliable.</span>
                </h1>

                <p class="text-lg text-stone-500 leading-relaxed mb-8 max-w-lg">
                    FixFinder connects you with skilled professionals to solve your home, business, and tech problems — quickly, affordably, and without the hassle.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#solutions"
                       class="inline-flex items-center gap-2 bg-amber-700 hover:bg-amber-800 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors duration-200">
                        Explore Solutions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#about"
                       class="inline-flex items-center gap-2 border-2 border-stone-300 hover:border-amber-700 text-stone-700 hover:text-amber-700 font-semibold px-7 py-3.5 rounded-lg transition-colors duration-200">
                        Learn More
                    </a>
                </div>
            </div>

            {{-- Right: Animated Hard Hat (React) --}}
            <div class="relative hidden lg:flex items-center justify-center">
                <div id="hard-hat-animation"></div>
            </div>

        </div>
    </div>

    {{-- Wave divider --}}
    <div class="text-stone-100">
        <svg viewBox="0 0 1440 60" fill="currentColor" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12">
            <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z"/>
        </svg>
    </div>
</section>


{{-- ============================================================
     ABOUT SECTION
============================================================ --}}
<section id="about" class="bg-stone-50 py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">About Us</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                Who is <span class="text-amber-700">FixFinder</span>?
            </h2>
            <p class="text-stone-500 text-base leading-relaxed">
                We are a technology-driven platform that bridges the gap between customers and qualified service professionals — making repairs and solutions accessible to everyone.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div>
                <h3 class="text-2xl font-bold text-stone-900 mb-4">Our Story</h3>
                <p class="text-stone-500 leading-relaxed mb-4">
                    FixFinder was born out of frustration — the kind every homeowner and business owner knows: waiting days for a technician, overpaying for mediocre service, and never knowing who's really showing up at your door.
                </p>
                <p class="text-stone-500 leading-relaxed mb-6">
                    Our founders set out to build a smarter, safer, and more transparent platform where verified professionals meet customers who need help — right now, not next week. FixFinder is currently in development with a growing network of skilled experts.
                </p>
                <ul class="space-y-3">
                    @foreach ([
                        'Verified and background-checked professionals',
                        'Real-time booking and service tracking',
                        'Transparent pricing — no hidden fees',
                        'Available 7 days a week, including holidays',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 bg-amber-700 rounded-full flex items-center justify-center mt-0.5 shrink-0">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-stone-700 text-sm">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     SOLUTIONS SECTION
============================================================ --}}
<section id="solutions" class="bg-stone-50 py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">Our Solutions</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                What We <span class="text-amber-700">Fix</span> For You
            </h2>
            <p class="text-stone-500 text-base leading-relaxed">
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
            <div class="group bg-white border border-stone-200 rounded-2xl p-7 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
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
                <h3 class="text-base font-bold text-stone-900 mb-2 group-hover:text-amber-700 transition-colors">{{ $solution['title'] }}</h3>
                <p class="text-sm text-stone-500 leading-relaxed">{{ $solution['desc'] }}</p>
                <div class="mt-5 pt-4 border-t border-stone-100">
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-semibold text-amber-700 hover:text-amber-900 transition-colors">
                        Learn More
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-14 bg-amber-800 rounded-2xl p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h3 class="text-xl font-bold text-white mb-1">Need something else?</h3>
                <p class="text-amber-200 text-sm">Tell us your problem and we'll match you with the right expert.</p>
            </div>
            <a href="#" class="shrink-0 inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-400 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors">
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
<section id="vision-mission" class="bg-white py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">Vision &amp; Mission</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                What <span class="text-amber-700">Drives</span> Us
            </h2>
            <p class="text-stone-500 text-base leading-relaxed">
                Our vision and mission guide every decision we make — from the professionals we onboard to the features we build.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-14">

            {{-- Vision --}}
            <div class="bg-amber-800 rounded-2xl p-8 sm:p-10 text-white">
                <div class="w-14 h-14 bg-white bg-opacity-15 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold mb-4">Our Vision</h3>
                <p class="text-amber-100 leading-relaxed text-base">
                    To become the most trusted and accessible service platform in Southeast Asia — a world where no problem goes unfixed, and every skilled professional has the opportunity to thrive.
                </p>
            </div>

            {{-- Mission --}}
            <div class="bg-stone-50 border border-stone-200 rounded-2xl p-8 sm:p-10 shadow-sm">
                <div class="w-14 h-14 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold text-stone-900 mb-4">Our Mission</h3>
                <p class="text-stone-500 leading-relaxed text-base mb-6">
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
                        <span class="text-stone-700 text-sm">{{ $item }}</span>
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
                    ['label' => 'Integrity',     'desc' => 'We act with honesty in every interaction.',    'bg' => 'bg-amber-800',  'text' => 'text-white'],
                    ['label' => 'Excellence',    'desc' => 'We hold every job to the highest standard.',   'bg' => 'bg-stone-900',  'text' => 'text-white'],
                    ['label' => 'Speed',         'desc' => 'We respect your time and move with urgency.',  'bg' => 'bg-orange-500', 'text' => 'text-white'],
                    ['label' => 'Accessibility', 'desc' => 'Quality service should be for everyone.',      'bg' => 'bg-stone-100',  'text' => 'text-stone-900'],
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
<section id="team" class="bg-stone-50 py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4 uppercase tracking-wide">Our Team</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                Meet the <span class="text-amber-700">People</span> Behind FixFinder
            </h2>
            <p class="text-stone-500 text-base leading-relaxed">
                A dedicated team of builders, operators, and problem-solvers working every day to make FixFinder the best in its class.
            </p>
        </div>

        @php
        $team = [
            ['name' => 'Maria Santos',  'role' => 'Chief Executive Officer',  'initials' => 'MS', 'bio' => 'Serial entrepreneur with 12+ years in operations and tech startups across Southeast Asia.', 'color' => 'bg-amber-800'],
            ['name' => 'Carlos Reyes',  'role' => 'Chief Technology Officer',  'initials' => 'CR', 'bio' => 'Full-stack engineer and platform architect. Built scalable systems at Fortune 500 companies.', 'color' => 'bg-stone-800'],
            ['name' => 'Anna Lim',      'role' => 'Head of Operations',        'initials' => 'AL', 'bio' => 'Operations expert who ensures every service delivery meets FixFinder\'s quality promise.', 'color' => 'bg-orange-600'],
            ['name' => 'David Cruz',    'role' => 'Head of Growth',            'initials' => 'DC', 'bio' => 'Growth strategist with extensive experience in marketplace and platform businesses.', 'color' => 'bg-stone-600'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($team as $member)
            <div class="group bg-white border border-stone-200 rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-200">
                <div class="{{ $member['color'] }} h-36 flex items-center justify-center">
                    {{-- Replace this div with an <img> tag when you have team photos --}}
                    <div class="w-20 h-20 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white text-2xl font-extrabold tracking-wide">
                        {{ $member['initials'] }}
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="font-bold text-stone-900 text-base">{{ $member['name'] }}</h4>
                    <p class="text-xs font-medium text-amber-700 mt-0.5 mb-3">{{ $member['role'] }}</p>
                    <p class="text-xs text-stone-500 leading-relaxed mb-4">{{ $member['bio'] }}</p>
                    <div class="flex items-center gap-2 pt-3 border-t border-stone-100">
                        <a href="#" class="w-7 h-7 bg-stone-100 hover:bg-amber-700 hover:text-white rounded-lg flex items-center justify-center transition-colors text-stone-600" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/>
                            </svg>
                        </a>
                        <a href="#" class="w-7 h-7 bg-stone-100 hover:bg-stone-600 hover:text-white rounded-lg flex items-center justify-center transition-colors text-stone-600" aria-label="Twitter">
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
            <p class="text-stone-500 mb-4">Want to join the team? We're always looking for talented people.</p>
            <a href="#" class="inline-flex items-center gap-2 border-2 border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white font-semibold px-7 py-3 rounded-lg transition-colors duration-200">
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
<section class="bg-stone-900 py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">
            Ready to Find Your Fix?
        </h2>
        <p class="text-stone-400 text-base mb-8 max-w-xl mx-auto">
            FixFinder is being built to connect you with skilled professionals for fast, reliable service. Stay tuned for our launch.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#solutions" class="inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-400 text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
                Explore Solutions
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="#about" class="inline-flex items-center gap-2 bg-white bg-opacity-10 hover:bg-opacity-20 border border-white border-opacity-30 text-black font-semibold px-8 py-3.5 rounded-lg transition-colors">
                Learn More About Us
            </a>
        </div>
    </div>
</section>

@endsection

