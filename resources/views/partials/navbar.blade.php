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
                {{-- Logo placeholder: replace this img tag with your actual logo --}}
                <div class="w-10 h-10 bg-amber-700 rounded-lg flex items-center justify-center text-white font-bold text-lg select-none">
                    FF
                </div>
                <span class="text-xl font-bold text-stone-900 tracking-tight">Fix<span class="text-amber-700">Finder</span></span>
            </a>

            {{-- Desktop Navigation (right-aligned) --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#home"            class="nav-link text-sm font-medium text-stone-700 hover:text-amber-700">Home</a>
                <a href="#about"           class="nav-link text-sm font-medium text-stone-700 hover:text-amber-700">About</a>
                <a href="#solutions"       class="nav-link text-sm font-medium text-stone-700 hover:text-amber-700">Solutions</a>
                <a href="#vision-mission"  class="nav-link text-sm font-medium text-stone-700 hover:text-amber-700">Vision &amp; Mission</a>
                <a href="#team"            class="nav-link text-sm font-medium text-stone-700 hover:text-amber-700">Team</a>
            </div>

            {{-- Mobile Menu Button --}}
            <button
                @click="open = !open"
                class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors"
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
            <a href="#home"           @click="open=false" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-stone-700 hover:bg-amber-50 hover:text-amber-700 transition-colors">Home</a>
            <a href="#about"          @click="open=false" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-stone-700 hover:bg-amber-50 hover:text-amber-700 transition-colors">About</a>
            <a href="#solutions"      @click="open=false" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-stone-700 hover:bg-amber-50 hover:text-amber-700 transition-colors">Solutions</a>
            <a href="#vision-mission" @click="open=false" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-stone-700 hover:bg-amber-50 hover:text-amber-700 transition-colors">Vision &amp; Mission</a>
            <a href="#team"           @click="open=false" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-stone-700 hover:bg-amber-50 hover:text-amber-700 transition-colors">Team</a>

        </div>
    </div>
</nav>
