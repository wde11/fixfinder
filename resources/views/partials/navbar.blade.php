<nav
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled ? 'bg-white shadow-md' : 'bg-white'"
    class="fixed top-0 left-0 right-0 z-50 transition-shadow duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-18 py-4">

            {{-- Logo --}}
            <a href="#home" class="flex items-center gap-3 group">
                <img src="{{ Vite::asset('resources/images/fixfinderlogo.png') }}" alt="FixFinder Logo" class="w-16 h-16 object-contain">
                <span class="text-xl font-bold text-stone-900 tracking-tight">Fix<span class="text-primary">Finder</span></span>
            </a>

            {{-- Desktop Navigation (right-aligned) --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#home"            class="nav-link text-sm font-medium text-stone-700 hover:text-primary">Home</a>
                <a href="#about"           class="nav-link text-sm font-medium text-stone-700 hover:text-primary">About</a>
                <a href="#solutions"       class="nav-link text-sm font-medium text-stone-700 hover:text-primary">Solutions</a>
                <a href="#vision-mission"  class="nav-link text-sm font-medium text-stone-700 hover:text-primary">Vision &amp; Mission</a>
                <a href="#team"            class="nav-link text-sm font-medium text-stone-700 hover:text-primary">Team</a>
            </div>

            {{-- Mobile Menu Button --}}
            <button
                @click="open = !open"
                class="md:hidden p-2 text-gray-600 hover:bg-gray-100 transition-colors"
                aria-label="Toggle menu"
            >
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

        </div>
    </div>

    {{-- Mobile Dropdown Menu --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden border-t border-gray-100 bg-white shadow-lg"
    >
        <div class="px-4 py-3 flex flex-col gap-1">
            <a href="#home"           @click="open=false" class="block px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-primary-light hover:text-primary transition-colors">Home</a>
            <a href="#about"          @click="open=false" class="block px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-primary-light hover:text-primary transition-colors">About</a>
            <a href="#solutions"      @click="open=false" class="block px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-primary-light hover:text-primary transition-colors">Solutions</a>
            <a href="#vision-mission" @click="open=false" class="block px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-primary-light hover:text-primary transition-colors">Vision &amp; Mission</a>
            <a href="#team"           @click="open=false" class="block px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-primary-light hover:text-primary transition-colors">Team</a>

        </div>
    </div>
</nav>
