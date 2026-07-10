<section class="pt-20 pb-10 bg-slate-50 dark:bg-slate-950 border-y border-slate-200 dark:border-slate-800 overflow-hidden"
    x-data="{
        initSwiper() {
            if (typeof window.Swiper === 'undefined') {
                setTimeout(() => this.initSwiper(), 100);
                return;
            }
            new window.Swiper(this.$refs.featureSlider, {
                modules: [window.SwiperModules.FreeMode, window.SwiperModules.Mousewheel, window.SwiperModules.A11y],
                slidesPerView: 'auto',
                spaceBetween: 16,
                grabCursor: true,
                freeMode: {
                    enabled: true,
                    momentum: true,
                    momentumBounce: false,
                },
                mousewheel: {
                    forceToAxis: true,
                },
                breakpoints: {
                    768: { spaceBetween: 24 },
                    1024: { spaceBetween: 32 }
                }
            });
        }
    }"
    x-init="initSwiper"
>
    <x-ui.container class="max-w-[1400px]">
        
        <!-- Section Header -->
        <div class="max-w-[1200px] mx-auto text-center mb-16 scroll-reveal">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 dark:bg-blue-900/30 border border-blue-100 dark:border-blue-800/50 mb-5">
                <span class="text-[11px] md:text-xs font-bold uppercase tracking-wider text-blue-700 dark:text-blue-400" x-text="t('home.features.badge')">{{ __('home.features.badge') }}</span>
            </div>
            
            <!-- Heading -->
            <h2 class="text-[40px] md:text-[56px] lg:text-[64px] leading-[1.1] font-display font-extrabold text-slate-900 dark:text-white tracking-tight mb-6 max-w-[720px] mx-auto text-balance">
                <span x-text="t('home.features.title')">{{ __('home.features.title') }}</span>
            </h2>
            
            <!-- Description -->
            <p class="text-[18px] leading-[1.7] text-slate-500 dark:text-slate-400 text-balance max-w-[760px] mx-auto">
                <span x-text="t('home.features.description')">{{ __('home.features.description') }}</span>
            </p>
        </div>

        <div class="swiper !overflow-visible scroll-reveal delay-100" x-ref="featureSlider">
            <div class="swiper-wrapper">
                
                <!-- Card 1: Experienced Network Engineers -->
                <div class="swiper-slide !w-[300px] md:!w-[340px] lg:!w-[400px] !h-auto">
                    <div class="group flex flex-col h-full pt-10 px-9 pb-10 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-[32px] hover:bg-slate-50 dark:hover:bg-slate-800 hover:border-blue-500 dark:hover:border-blue-500 hover:shadow-[0_16px_40px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_16px_40px_-10px_rgba(0,0,0,0.4)] hover:-translate-y-[6px] transition-all duration-300 ease-out select-none cursor-grab active:cursor-grabbing">
                        
                        <!-- Title -->
                        <h3 class="text-[24px] lg:text-[28px] leading-[1.3] font-display font-bold text-slate-900 dark:text-white tracking-tight mb-6 transition-colors duration-300 break-words">
                            <span x-text="t('home.features.card_1_title')">{{ __('home.features.card_1_title') }}</span>
                        </h3>

                        <!-- Description -->
                        <p class="text-[16px] leading-[1.7] text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-white/90 font-medium transition-colors duration-300 w-full text-balance">
                            <span x-text="t('home.features.card_1_desc')">{{ __('home.features.card_1_desc') }}</span>
                        </p>
                    </div>
                </div>

                <!-- Card 2: Enterprise Standard Installation -->
                <div class="swiper-slide !w-[300px] md:!w-[340px] lg:!w-[400px] !h-auto">
                    <div class="group flex flex-col h-full pt-10 px-9 pb-10 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-[32px] hover:bg-slate-50 dark:hover:bg-slate-800 hover:border-blue-500 dark:hover:border-blue-500 hover:shadow-[0_16px_40px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_16px_40px_-10px_rgba(0,0,0,0.4)] hover:-translate-y-[6px] transition-all duration-300 ease-out select-none cursor-grab active:cursor-grabbing">
                        
                        <h3 class="text-[24px] lg:text-[28px] leading-[1.3] font-display font-bold text-slate-900 dark:text-white tracking-tight mb-6 transition-colors duration-300 break-words">
                            <span x-text="t('home.features.card_2_title')">{{ __('home.features.card_2_title') }}</span>
                        </h3>

                        <p class="text-[16px] leading-[1.7] text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-white/90 font-medium transition-colors duration-300 w-full text-balance">
                            <span x-text="t('home.features.card_2_desc')">{{ __('home.features.card_2_desc') }}</span>
                        </p>
                    </div>
                </div>

                <!-- Card 3: Fast Response -->
                <div class="swiper-slide !w-[300px] md:!w-[340px] lg:!w-[400px] !h-auto">
                    <div class="group flex flex-col h-full pt-10 px-9 pb-10 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-[32px] hover:bg-slate-50 dark:hover:bg-slate-800 hover:border-blue-500 dark:hover:border-blue-500 hover:shadow-[0_16px_40px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_16px_40px_-10px_rgba(0,0,0,0.4)] hover:-translate-y-[6px] transition-all duration-300 ease-out select-none cursor-grab active:cursor-grabbing">
                        
                        <h3 class="text-[24px] lg:text-[28px] leading-[1.3] font-display font-bold text-slate-900 dark:text-white tracking-tight mb-6 transition-colors duration-300 break-words">
                            <span x-text="t('home.features.card_5_title')">{{ __('home.features.card_5_title') }}</span>
                        </h3>

                        <p class="text-[16px] leading-[1.7] text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-white/90 font-medium transition-colors duration-300 w-full text-balance">
                            <span x-text="t('home.features.card_5_desc')">{{ __('home.features.card_5_desc') }}</span>
                        </p>
                    </div>
                </div>

                <!-- Card 4: Custom Infrastructure Design -->
                <div class="swiper-slide !w-[300px] md:!w-[340px] lg:!w-[400px] !h-auto">
                    <div class="group flex flex-col h-full pt-10 px-9 pb-10 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-[32px] hover:bg-slate-50 dark:hover:bg-slate-800 hover:border-blue-500 dark:hover:border-blue-500 hover:shadow-[0_16px_40px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_16px_40px_-10px_rgba(0,0,0,0.4)] hover:-translate-y-[6px] transition-all duration-300 ease-out select-none cursor-grab active:cursor-grabbing">
                        
                        <h3 class="text-[24px] lg:text-[28px] leading-[1.3] font-display font-bold text-slate-900 dark:text-white tracking-tight mb-6 transition-colors duration-300 break-words">
                            <span x-text="t('home.features.card_3_title')">{{ __('home.features.card_3_title') }}</span>
                        </h3>

                        <p class="text-[16px] leading-[1.7] text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-white/90 font-medium transition-colors duration-300 w-full text-balance">
                            <span x-text="t('home.features.card_3_desc')">{{ __('home.features.card_3_desc') }}</span>
                        </p>
                    </div>
                </div>

                <!-- Card 5: Complete Documentation -->
                <div class="swiper-slide !w-[300px] md:!w-[340px] lg:!w-[400px] !h-auto">
                    <div class="group flex flex-col h-full pt-10 px-9 pb-10 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-[32px] hover:bg-slate-50 dark:hover:bg-slate-800 hover:border-blue-500 dark:hover:border-blue-500 hover:shadow-[0_16px_40px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_16px_40px_-10px_rgba(0,0,0,0.4)] hover:-translate-y-[6px] transition-all duration-300 ease-out select-none cursor-grab active:cursor-grabbing">
                        
                        <h3 class="text-[24px] lg:text-[28px] leading-[1.3] font-display font-bold text-slate-900 dark:text-white tracking-tight mb-6 transition-colors duration-300 break-words">
                            <span x-text="t('home.features.card_6_title')">{{ __('home.features.card_6_title') }}</span>
                        </h3>

                        <p class="text-[16px] leading-[1.7] text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-white/90 font-medium transition-colors duration-300 w-full text-balance">
                            <span x-text="t('home.features.card_6_desc')">{{ __('home.features.card_6_desc') }}</span>
                        </p>
                    </div>
                </div>

                <!-- Card 6: After-Sales Technical Support -->
                <div class="swiper-slide !w-[300px] md:!w-[340px] lg:!w-[400px] !h-auto">
                    <div class="group flex flex-col h-full pt-10 px-9 pb-10 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-[32px] hover:bg-slate-50 dark:hover:bg-slate-800 hover:border-blue-500 dark:hover:border-blue-500 hover:shadow-[0_16px_40px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_16px_40px_-10px_rgba(0,0,0,0.4)] hover:-translate-y-[6px] transition-all duration-300 ease-out select-none cursor-grab active:cursor-grabbing">
                        
                        <h3 class="text-[24px] lg:text-[28px] leading-[1.3] font-display font-bold text-slate-900 dark:text-white tracking-tight mb-6 transition-colors duration-300 break-words">
                            <span x-text="t('home.features.card_4_title')">{{ __('home.features.card_4_title') }}</span>
                        </h3>

                        <p class="text-[16px] leading-[1.7] text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-white/90 font-medium transition-colors duration-300 w-full text-balance">
                            <span x-text="t('home.features.card_4_desc')">{{ __('home.features.card_4_desc') }}</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </x-ui.container>
</section>
