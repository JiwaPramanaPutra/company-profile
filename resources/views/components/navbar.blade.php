<nav class="fixed top-0 left-0 w-full z-50 transition-all duration-300"
     :class="{ 'glass-effect h-16 md:h-[72px]': scrolled, 'bg-transparent h-16 md:h-[72px] lg:h-20': !scrolled }">
    <div class="w-full h-full flex flex-col justify-center">
        <x-ui.container>
            <div class="flex items-center justify-between">
                <!-- Logo (Left) -->
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3 group relative z-50 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg p-1 transition-transform duration-200 hover:-translate-y-0.5" aria-label="Jiwa Cyber Network Home">
                    <div class="relative flex items-center justify-center w-10 h-10 rounded-lg bg-gradient-to-br from-blue-600 to-cyan-500 text-white shadow-sm overflow-hidden">
                        <svg class="w-6 h-6 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-bold tracking-tight text-gray-900 dark:text-white leading-none">Jiwa Cyber</span>
                        <span class="text-[10px] font-semibold text-blue-600 dark:text-cyan-400 uppercase tracking-widest mt-0.5">Network</span>
                    </div>
                </a>

                <!-- Desktop Menu (Center) -->
                <div class="hidden lg:flex flex-1 items-center justify-center gap-10">
                    <a href="#about" class="text-sm font-semibold text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-cyan-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded px-2 py-1" x-text="t('navbar.about')">{{ __('navbar.about') }}</a>
                    <a href="#services" class="text-sm font-semibold text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-cyan-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded px-2 py-1" x-text="t('navbar.services')">{{ __('navbar.services') }}</a>
                    <a href="#portfolio" class="text-sm font-semibold text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-cyan-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded px-2 py-1" x-text="t('navbar.portfolio')">{{ __('navbar.portfolio') }}</a>
                    <a href="#testimonials" class="text-sm font-semibold text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-cyan-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded px-2 py-1" x-text="t('navbar.testimonials')">{{ __('navbar.testimonials') }}</a>
                </div>

                <!-- Actions (Right) -->
                <div class="hidden lg:flex flex-shrink-0 items-center gap-4">
                    
                    <!-- Language Switcher -->
                    <button @click="toggleLang()" class="flex items-center justify-center gap-2 h-10 px-3 rounded-lg border border-gray-200 dark:border-slate-700 hover:bg-gray-50 dark:hover:bg-slate-800 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm hover:shadow" aria-label="Toggle language">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300" x-text="lang === 'id' ? 'ID' : 'EN'"></span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                        </svg>
                    </button>

                    <!-- Theme Toggle -->
                    <button @click="toggleTheme()" class="flex items-center justify-center w-10 h-10 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-slate-800 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm hover:shadow border border-transparent dark:border-slate-700" aria-label="Toggle Dark Mode">
                        <!-- Sun Icon -->
                        <svg x-show="theme === 'dark'" style="display: none;" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <!-- Moon Icon -->
                        <svg x-show="theme === 'light'" style="display: none;" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>

                    <x-ui.button href="#contact" variant="primary" size="sm">
                        <span x-text="t('navbar.contact')">{{ __('navbar.contact') }}</span>
                    </x-ui.button>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 relative z-50 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-slate-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200" aria-label="Toggle menu" :aria-expanded="mobileMenuOpen.toString()">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" style="display: none;" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </x-ui.container>
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         @click.away="mobileMenuOpen = false"
         class="lg:hidden absolute top-full left-0 w-full bg-white dark:bg-slate-900 border-b border-gray-200 dark:border-slate-800 shadow-xl"
         style="display: none;">
        
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="#about" @click="mobileMenuOpen = false" class="block px-4 py-3 text-base font-semibold text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-800 rounded-lg" x-text="t('navbar.about')">{{ __('navbar.about') }}</a>
            <a href="#services" @click="mobileMenuOpen = false" class="block px-4 py-3 text-base font-semibold text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-800 rounded-lg" x-text="t('navbar.services')">{{ __('navbar.services') }}</a>
            <a href="#portfolio" @click="mobileMenuOpen = false" class="block px-4 py-3 text-base font-semibold text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-800 rounded-lg" x-text="t('navbar.portfolio')">{{ __('navbar.portfolio') }}</a>
            <a href="#testimonials" @click="mobileMenuOpen = false" class="block px-4 py-3 text-base font-semibold text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-800 rounded-lg" x-text="t('navbar.testimonials')">{{ __('navbar.testimonials') }}</a>
            
            <div class="h-px bg-gray-200 dark:bg-slate-800 my-4 mx-4"></div>
            
            <div class="flex items-center justify-between px-4 py-2">
                <button @click="toggleLang()" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-100 dark:bg-slate-800 text-gray-900 dark:text-white font-medium w-full justify-center">
                    <span x-text="t('navbar.language')"></span>
                </button>
            </div>
            
            <div class="flex items-center justify-between px-4 py-2">
                <button @click="toggleTheme()" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-100 dark:bg-slate-800 text-gray-900 dark:text-white font-medium w-full justify-center">
                    <span x-text="theme === 'dark' ? t('navbar.theme.light') : t('navbar.theme.dark')"></span>
                </button>
            </div>

            <div class="px-4 mt-4">
                <x-ui.button href="#contact" variant="primary" class="w-full" @click="mobileMenuOpen = false">
                    <span x-text="t('navbar.contact')">{{ __('navbar.contact') }}</span>
                </x-ui.button>
            </div>
        </div>
    </div>
</nav>
