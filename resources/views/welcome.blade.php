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
                    <span class="text-primary">Fast &amp; Reliable.</span>
                </h1>

                <p class="text-lg text-stone-500 leading-relaxed mb-8 max-w-lg text-justify">
                    FixFinder connects you with skilled professionals to tackle your home, business, and tech problems. Fast, affordable, and straightforward.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#solutions"
                       class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-semibold px-7 py-3.5 transition-colors duration-200">
                        Explore Solutions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#about"
                       class="inline-flex items-center gap-2 border-2 border-stone-300 hover:border-amber-700 text-stone-700 hover:text-amber-700 font-semibold px-7 py-3.5 transition-colors duration-200">
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
            <span class="inline-block bg-primary-light text-primary text-xs font-semibold px-3 py-1.5 mb-4 uppercase tracking-wide">About Us</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                Who is <span class="text-primary">FixFinder</span>?
            </h2>
            <p class="text-stone-500 text-base leading-relaxed text-justify">
                We are a technology-driven platform connecting homeowners with qualified service professionals, so that getting a repair done is no longer a headache.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div>
                <h3 class="text-2xl font-bold text-stone-900 mb-4">Our Story</h3>
                <p class="text-stone-500 leading-relaxed mb-4 text-justify">
                    FixFinder started from a simple frustration that every homeowner and business owner knows: waiting days for a technician, overpaying for average work, and having no idea who's actually walking through the door.
                </p>
                <p class="text-stone-500 leading-relaxed mb-6 text-justify">
                    Our founders set out to build something better: a smarter, safer platform where verified professionals connect with homeowners who need help today, not next week. FixFinder is currently in development with a growing network of skilled experts.
                </p>
                <ul class="space-y-3">
                    @foreach ([
                        'Verified and background-checked professionals',
                        'Real-time booking and service tracking',
                        'Transparent pricing with no hidden fees',
                        'Available 7 days a week, including holidays',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 bg-primary rounded-full flex items-center justify-center mt-0.5 shrink-0">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-stone-700 text-sm">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Right: About animation --}}
            <div class="hidden lg:flex items-center justify-center">
                <div id="about-animation"></div>
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
            <span class="inline-block bg-primary-light text-primary text-xs font-semibold px-3 py-1.5 mb-4 uppercase tracking-wide">Our Solutions</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                What We <span class="text-primary">Fix</span> For You
            </h2>
            <p class="text-stone-500 text-base leading-relaxed text-justify">
                From everyday repairs to complex installations, FixFinder covers every corner of your life and business.
            </p>
        </div>

        @php
        $solutions = [
            ['title' => 'Home Repair & Maintenance', 'desc' => 'Got a leaky faucet, broken tile, or a wall that needs patching? Our pros tackle all standard home repair jobs quickly and cleanly.',           'color' => 'blue',   'icon' => 'home'],
            ['title' => 'Electrical Services',        'desc' => 'From new outlet installations to full panel upgrades, our licensed electricians handle every job safely and up to code.',                     'color' => 'yellow', 'icon' => 'bolt'],
            ['title' => 'Plumbing Solutions',         'desc' => 'Whether it is a stubborn pipe or a complete bathroom overhaul, our certified plumbers get everything flowing smoothly again.',               'color' => 'cyan',   'icon' => 'water'],
            ['title' => 'Appliance Repair',           'desc' => 'AC acting up? Refrigerator on the fritz? Our certified technicians diagnose and fix your appliances the right way, the first time.',          'color' => 'green',  'icon' => 'appliance'],
            ['title' => 'IT & Tech Support',          'desc' => 'Slow network, busted computer, or a smart-home device that stopped cooperating? We set it up, troubleshoot it, and get you back online.',     'color' => 'purple', 'icon' => 'tech'],
            ['title' => 'Business Maintenance',       'desc' => 'Your commercial space should never slow your business down. We offer scheduled maintenance contracts to keep everything running smoothly.',    'color' => 'orange', 'icon' => 'business'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($solutions as $solution)
            <div class="group bg-white border border-stone-200 p-7 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
                <div class="w-12 h-12 mb-5 flex items-center justify-center
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
                <h3 class="text-base font-bold text-stone-900 mb-2 group-hover:text-primary transition-colors">{{ $solution['title'] }}</h3>
                <p class="text-sm text-stone-500 leading-relaxed text-justify">{{ $solution['desc'] }}</p>
                <div class="mt-5 pt-4 border-t border-stone-100">
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:text-primary-dark transition-colors">
                        Learn More
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-14 bg-stone-900 p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h3 class="text-xl font-bold text-white mb-1">Need something else?</h3>
                <p class="text-primary-light text-sm">Tell us your problem and we'll match you with the right expert.</p>
            </div>
            <a href="#" class="shrink-0 inline-flex items-center gap-2 bg-accent hover:bg-accent-dark text-white font-semibold px-7 py-3.5 transition-colors">
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
            <span class="inline-block bg-primary-light text-primary text-xs font-semibold px-3 py-1.5 mb-4 uppercase tracking-wide">Vision &amp; Mission</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                What <span class="text-primary">Drives</span> Us
            </h2>
            <p class="text-stone-500 text-base leading-relaxed text-justify">
                Our vision and mission shape every decision we make, from the professionals we bring on board to the features we ship.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-14">

            {{-- Vision --}}
            <div class="bg-stone-50 border border-stone-200 p-8 sm:p-10 shadow-sm">
                <div class="w-14 h-14 bg-orange-100 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold text-stone-900 mb-4">Our Vision</h3>
                <p class="text-stone-500 leading-relaxed text-base text-justify">
                    To become the most trusted service platform in Davao City, where every problem gets solved and every skilled professional gets the chance to grow.
                </p>
            </div>

            {{-- Mission --}}
            <div class="bg-stone-50 border border-stone-200 p-8 sm:p-10 shadow-sm">
                <div class="w-14 h-14 bg-orange-100 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold text-stone-900 mb-4">Our Mission</h3>
                <p class="text-stone-500 leading-relaxed text-base mb-6 text-justify">
                    To simplify access to professional services by building a platform that is safe, transparent, and powered by technology, so that skilled professionals and homeowners can find each other faster and with greater confidence.
                </p>
                <ul class="space-y-3">
                    @foreach ([
                        'Make professional services accessible nationwide',
                        'Empower skilled workers with fair, consistent work',
                        'Build a culture of trust, speed, and quality',
                    ] as $item)
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 bg-accent rounded-full flex items-center justify-center mt-0.5 shrink-0">
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
                    ['label' => 'Integrity',     'desc' => 'We act with honesty in every interaction.',   'bg' => 'bg-primary-dark', 'text' => 'text-white'],
                    ['label' => 'Excellence',    'desc' => 'We hold every job to the highest standard.',  'bg' => 'bg-stone-800',    'text' => 'text-white'],
                    ['label' => 'Speed',         'desc' => 'We respect your time and move with urgency.', 'bg' => 'bg-accent',       'text' => 'text-white'],
                    ['label' => 'Accessibility', 'desc' => 'Quality service should be for everyone.',     'bg' => 'bg-stone-600',    'text' => 'text-white'],
                ] as $value)
                <div class="{{ $value['bg'] }} {{ $value['text'] }} p-6 text-center">
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
            <span class="inline-block bg-primary-light text-primary text-xs font-semibold px-3 py-1.5 mb-4 uppercase tracking-wide">Our Team</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mb-4">
                Meet the <span class="text-primary">People</span> Behind FixFinder
            </h2>
            <p class="text-stone-500 text-base leading-relaxed text-justify">
                A dedicated team of builders, operators, and problem-solvers working every day to make FixFinder the best in its class.
            </p>
        </div>

        @php
        $team = [
            ['name' => 'Justin Philip H. Aurelio', 'role' => 'Chief Executive Officer',  'initials' => 'JA', 'photo' => 'justin.jpg',  'bio' => 'Vision, team coordination, final decision-making, and pitching.',                                             'color' => 'bg-primary-dark', 'linkedin' => '#', 'facebook' => 'https://www.facebook.com/jaypiiieeeismee', 'github' => 'https://github.com/JPAURELIO1', 'show_linkedin' => false, 'show_github' => true],
            ['name' => 'Renz Xaviery O. Pastrana', 'role' => 'Chief Technology Officer',  'initials' => 'RP', 'photo' => 'renz.jpg',    'bio' => 'Technical feasibility, software/hardware architecture, and UIC Server deployment.',                               'color' => 'bg-stone-800',    'linkedin' => '#', 'facebook' => 'https://www.facebook.com/renz.pastrana.16',  'github' => 'https://github.com/rxaviery', 'show_linkedin' => false, 'show_github' => true],
            ['name' => 'Troy Wendell G. Peralta',  'role' => 'Chief Marketing Officer',   'initials' => 'TP', 'photo' => 'troy.jpg',    'bio' => 'User research, field work, customer validation, and UI/UX feedback.',                                                'color' => 'bg-accent',       'linkedin' => 'https://ph.linkedin.com/in/troy-wendell-p-0757552a7', 'facebook' => 'https://www.facebook.com/wrldwarz',          'github' => 'https://github.com/wde11', 'show_linkedin' => true,  'show_github' => true],
            ['name' => 'Wam B. Ausan',             'role' => 'IP & Admin',                'initials' => 'WA', 'photo' => null,          'bio' => 'IP Disclosure logs, financial feasibility, and Weekly Progress Report (WPR) compliance.',                                   'color' => 'bg-stone-600',    'linkedin' => '#', 'facebook' => 'https://www.facebook.com/wausann',           'github' => '', 'show_linkedin' => false, 'show_github' => false],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($team as $member)
            <div class="group bg-white border border-stone-200 overflow-hidden hover:shadow-lg transition-all duration-200">
                <div class="{{ $member['color'] }} h-36 flex items-center justify-center">
                    @if($member['photo'])
                        <img src="{{ Vite::asset('resources/images/' . $member['photo']) }}"
                             alt="{{ $member['name'] }}"
                             class="w-20 h-20 rounded-full object-cover object-top ring-2 ring-white/30">
                    @else
                        <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center text-white text-2xl font-extrabold tracking-wide">
                            {{ $member['initials'] }}
                        </div>
                    @endif
                </div>
                <div class="p-6">
                    <h4 class="font-bold text-stone-900 text-base">{{ $member['name'] }}</h4>
                    <p class="text-xs font-medium text-primary mt-0.5 mb-3">{{ $member['role'] }}</p>
                    <p class="text-xs text-stone-500 leading-relaxed mb-4 text-justify">{{ $member['bio'] }}</p>
                    <div class="flex items-center gap-2 pt-3 border-t border-stone-100">
                        @if($member['show_linkedin'])
                        <a href="{{ $member['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="w-7 h-7 bg-stone-100 hover:bg-amber-700 hover:text-white flex items-center justify-center transition-colors text-stone-600" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/>
                            </svg>
                        </a>
                        @endif
                        <a href="{{ $member['facebook'] }}" target="_blank" rel="noopener noreferrer" class="w-7 h-7 bg-stone-100 hover:bg-stone-600 hover:text-white flex items-center justify-center transition-colors text-stone-600" aria-label="Facebook">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.884v2.25h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/>
                            </svg>
                        </a>
                        @if($member['show_github'])
                        <a href="{{ $member['github'] }}" target="_blank" rel="noopener noreferrer" class="w-7 h-7 bg-stone-100 hover:bg-stone-900 hover:text-white flex items-center justify-center transition-colors text-stone-600" aria-label="GitHub">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- <div class="mt-14 text-center">
            <p class="text-stone-500 mb-4">Want to join the team? We're always looking for talented people.</p>
            <a href="#" class="inline-flex items-center gap-2 border-2 border-primary text-primary hover:bg-primary hover:text-white font-semibold px-7 py-3 transition-colors duration-200">
                View Open Positions
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div> -->

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
        <p class="text-stone-400 text-base mb-8 max-w-xl mx-auto text-justify">
            FixFinder is being built to connect you with skilled professionals for fast, reliable service. Stay tuned for our launch.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#solutions" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-dark text-white font-semibold px-8 py-3.5 transition-colors">
                Explore Solutions
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="#about" class="inline-flex items-center gap-2 bg-white bg-opacity-10 hover:bg-opacity-20 border border-white border-opacity-30 text-black font-semibold px-8 py-3.5 transition-colors">
                Learn More About Us
            </a>
        </div>
    </div>
</section>

@endsection

