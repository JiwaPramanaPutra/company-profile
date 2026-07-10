<section class="py-24 md:py-32 bg-slate-950">
    <x-ui.container>
        <!-- Header -->
        <div class="text-center max-w-[800px] mx-auto mb-20 scroll-reveal">
            <span class="text-[14px] font-semibold text-blue-500 uppercase tracking-[0.15em] mb-6 block" x-text="t('home.why_choose_us.subtitle')">
                {{ __('home.why_choose_us.subtitle') }}
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-[56px] font-display font-bold text-white leading-[1.15] mb-8">
                <span x-text="t('home.why_choose_us.title')">{{ __('home.why_choose_us.title') }}</span>
            </h2>
            <p class="text-lg md:text-xl text-slate-400 leading-relaxed max-w-[700px] mx-auto">
                <span x-text="t('home.why_choose_us.description')">{{ __('home.why_choose_us.description') }}</span>
            </p>
        </div>

        <!-- 3x2 Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1: Experienced Network Engineers -->
            <div class="group relative p-10 bg-slate-900 border border-slate-800 rounded-[20px] transition-all duration-300 hover:-translate-y-2 hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.4)] flex flex-col h-full scroll-reveal">
                <div class="w-14 h-14 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-400 group-hover:text-blue-500 group-hover:bg-blue-500/10 group-hover:border-blue-500/30 transition-colors duration-300 mb-8 shrink-0">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-bold text-white mb-5" x-text="t('home.why_choose_us.reason_1_title')">{{ __('home.why_choose_us.reason_1_title') }}</h3>
                <p class="text-[17px] text-slate-400 leading-relaxed group-hover:text-slate-300 transition-colors duration-300 flex-grow" x-text="t('home.why_choose_us.reason_1_desc')">{{ __('home.why_choose_us.reason_1_desc') }}</p>
            </div>

            <!-- Card 2: Enterprise Standard Installation -->
            <div class="group relative p-10 bg-slate-900 border border-slate-800 rounded-[20px] transition-all duration-300 hover:-translate-y-2 hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.4)] flex flex-col h-full scroll-reveal delay-100">
                <div class="w-14 h-14 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-400 group-hover:text-blue-500 group-hover:bg-blue-500/10 group-hover:border-blue-500/30 transition-colors duration-300 mb-8 shrink-0">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-bold text-white mb-5" x-text="t('home.why_choose_us.reason_2_title')">{{ __('home.why_choose_us.reason_2_title') }}</h3>
                <p class="text-[17px] text-slate-400 leading-relaxed group-hover:text-slate-300 transition-colors duration-300 flex-grow" x-text="t('home.why_choose_us.reason_2_desc')">{{ __('home.why_choose_us.reason_2_desc') }}</p>
            </div>

            <!-- Card 3: Fast Response -->
            <div class="group relative p-10 bg-slate-900 border border-slate-800 rounded-[20px] transition-all duration-300 hover:-translate-y-2 hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.4)] flex flex-col h-full scroll-reveal delay-200">
                <div class="w-14 h-14 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-400 group-hover:text-blue-500 group-hover:bg-blue-500/10 group-hover:border-blue-500/30 transition-colors duration-300 mb-8 shrink-0">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-bold text-white mb-5" x-text="t('home.why_choose_us.reason_3_title')">{{ __('home.why_choose_us.reason_3_title') }}</h3>
                <p class="text-[17px] text-slate-400 leading-relaxed group-hover:text-slate-300 transition-colors duration-300 flex-grow" x-text="t('home.why_choose_us.reason_3_desc')">{{ __('home.why_choose_us.reason_3_desc') }}</p>
            </div>

            <!-- Card 4: Custom Infrastructure Design -->
            <div class="group relative p-10 bg-slate-900 border border-slate-800 rounded-[20px] transition-all duration-300 hover:-translate-y-2 hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.4)] flex flex-col h-full scroll-reveal">
                <div class="w-14 h-14 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-400 group-hover:text-blue-500 group-hover:bg-blue-500/10 group-hover:border-blue-500/30 transition-colors duration-300 mb-8 shrink-0">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-bold text-white mb-5" x-text="t('home.why_choose_us.reason_4_title')">{{ __('home.why_choose_us.reason_4_title') }}</h3>
                <p class="text-[17px] text-slate-400 leading-relaxed group-hover:text-slate-300 transition-colors duration-300 flex-grow" x-text="t('home.why_choose_us.reason_4_desc')">{{ __('home.why_choose_us.reason_4_desc') }}</p>
            </div>

            <!-- Card 5: Complete Documentation -->
            <div class="group relative p-10 bg-slate-900 border border-slate-800 rounded-[20px] transition-all duration-300 hover:-translate-y-2 hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.4)] flex flex-col h-full scroll-reveal delay-100">
                <div class="w-14 h-14 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-400 group-hover:text-blue-500 group-hover:bg-blue-500/10 group-hover:border-blue-500/30 transition-colors duration-300 mb-8 shrink-0">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-bold text-white mb-5" x-text="t('home.why_choose_us.reason_5_title')">{{ __('home.why_choose_us.reason_5_title') }}</h3>
                <p class="text-[17px] text-slate-400 leading-relaxed group-hover:text-slate-300 transition-colors duration-300 flex-grow" x-text="t('home.why_choose_us.reason_5_desc')">{{ __('home.why_choose_us.reason_5_desc') }}</p>
            </div>

            <!-- Card 6: After-Sales Technical Support -->
            <div class="group relative p-10 bg-slate-900 border border-slate-800 rounded-[20px] transition-all duration-300 hover:-translate-y-2 hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.4)] flex flex-col h-full scroll-reveal delay-200">
                <div class="w-14 h-14 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-400 group-hover:text-blue-500 group-hover:bg-blue-500/10 group-hover:border-blue-500/30 transition-colors duration-300 mb-8 shrink-0">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-bold text-white mb-5" x-text="t('home.why_choose_us.reason_6_title')">{{ __('home.why_choose_us.reason_6_title') }}</h3>
                <p class="text-[17px] text-slate-400 leading-relaxed group-hover:text-slate-300 transition-colors duration-300 flex-grow" x-text="t('home.why_choose_us.reason_6_desc')">{{ __('home.why_choose_us.reason_6_desc') }}</p>
            </div>
        </div>
    </x-ui.container>
</section>
