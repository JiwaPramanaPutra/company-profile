<section class="py-20 md:py-24 border-y border-gray-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-900 overflow-hidden"
    x-data="{
        initMarquee() {
            if (typeof window.Swiper === 'undefined') {
                setTimeout(() => this.initMarquee(), 100);
                return;
            }
            new window.Swiper(this.$refs.marqueeSlider, {
                modules: [window.SwiperModules.Autoplay, window.SwiperModules.FreeMode],
                slidesPerView: 1.2,
                spaceBetween: 16,
                loop: true,
                freeMode: true,
                speed: 4000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                breakpoints: {
                    480: { slidesPerView: 1.5, spaceBetween: 20 },
                    768: { slidesPerView: 3, spaceBetween: 24 },
                    1024: { slidesPerView: 4.5, spaceBetween: 32 },
                    1280: { slidesPerView: 5.5, spaceBetween: 32 }
                }
            });
        }
    }"
    x-init="initMarquee"
>
    <!-- Force linear transition for seamless marquee -->
    <style>
        .marquee-slider .swiper-wrapper {
            transition-timing-function: linear !important;
        }
    </style>

    <div class="max-w-[1920px] mx-auto">
        <div class="text-center scroll-reveal mb-12">
            <p class="text-sm font-semibold text-slate-400 uppercase tracking-widest">
                Industries We Serve
            </p>
        </div>

        <div class="swiper marquee-slider" x-ref="marqueeSlider" style="overflow: visible;">
            <div class="swiper-wrapper">
                
                @php
                    $industries = [
                        'Hotels & Resorts',
                        'Villas',
                        'Offices',
                        'Restaurants & Cafés',
                        'Schools & Universities',
                        'Hospitals & Clinics',
                        'Retail Stores',
                        'Warehouses',
                        'Government Offices',
                        'Commercial Buildings'
                    ];
                @endphp

                @foreach($industries as $industry)
                <div class="swiper-slide h-auto">
                    <div class="group flex flex-col items-center justify-center h-[180px] md:h-[200px] px-6 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-[20px] hover:bg-blue-600 hover:border-blue-500 dark:hover:bg-blue-600 dark:hover:border-blue-500 hover:scale-[1.03] hover:-translate-y-1.5 hover:shadow-[0_16px_40px_-10px_rgba(37,99,235,0.4)] transition-all duration-300 ease-out cursor-pointer select-none">
                        
                        <!-- Subtle Icon Placeholder -->
                        <div class="mb-4 text-slate-300 dark:text-slate-600 group-hover:text-blue-200 transition-colors duration-300">
                            <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1v1H9V7zm5 0h1v1h-1V7zm-5 4h1v1H9v-1zm5 0h1v1h-1v-1zm-5 4h1v1H9v-1zm5 0h1v1h-1v-1z" />
                            </svg>
                        </div>
                        
                        <!-- Large Bold Title -->
                        <h4 class="text-xl md:text-2xl font-display font-bold text-slate-800 dark:text-slate-100 group-hover:text-white transition-colors duration-300 text-center leading-tight">
                            {{ $industry }}
                        </h4>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
