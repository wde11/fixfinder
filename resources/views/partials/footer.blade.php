<footer class="bg-stone-900 text-stone-400">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- Top row: brand left, social icons right --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6 mb-8">

            {{-- Brand --}}
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-amber-700 rounded-lg flex items-center justify-center text-white font-bold text-sm shrink-0">FF</div>
                <span class="text-lg font-bold text-white">Fix<span class="text-orange-400">Finder</span></span>
            </div>

            {{-- Social Icons --}}
            <div class="flex items-center gap-3 shrink-0">
                <a href="#" class="w-9 h-9 bg-stone-800 hover:bg-amber-700 rounded-lg flex items-center justify-center transition-colors" aria-label="Facebook">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                </a>
                <a href="#" class="w-9 h-9 bg-stone-800 hover:bg-amber-700 rounded-lg flex items-center justify-center transition-colors" aria-label="Twitter">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0016 2a4.48 4.48 0 00-4.48 4.48 4.6 4.6 0 00.12 1.02A12.73 12.73 0 013 3.19a4.48 4.48 0 001.39 5.99 4.45 4.45 0 01-2.03-.56v.06a4.48 4.48 0 003.59 4.39 4.5 4.5 0 01-2.02.08 4.48 4.48 0 004.18 3.11A9 9 0 012 19.54a12.73 12.73 0 006.88 2.02c8.27 0 12.79-6.85 12.79-12.79 0-.19 0-.39-.01-.58A9.14 9.14 0 0023 6.07a8.93 8.93 0 01-2.6.71A4.52 4.52 0 0023 3z"/></svg>
                </a>
                <a href="#" class="w-9 h-9 bg-stone-800 hover:bg-amber-700 rounded-lg flex items-center justify-center transition-colors" aria-label="LinkedIn">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                </a>
            </div>

        </div>


    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-stone-500">
            <span>&copy; {{ date('Y') }} FixFinder. All rights reserved.</span>
            <div class="flex items-center gap-5">
                <a href="#" class="hover:text-stone-300 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-stone-300 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>

</footer>
