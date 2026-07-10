<section id="hero" class="hero-section" aria-label="Hero Section"
    x-data="{
        activeSlide: 0,
        swiperInstance: null,
    }"
    x-init="
        $nextTick(() => {
            swiperInstance = new Swiper($refs.swiperContainer, {
                modules: [
                    SwiperModules.EffectFade,
                    SwiperModules.Autoplay,
                    SwiperModules.Pagination,
                    SwiperModules.Navigation,
                    SwiperModules.Keyboard,
                    SwiperModules.A11y,
                ],
                effect: 'fade',
                fadeEffect: { crossFade: true },
                speed: 1000,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                loop: true,
                keyboard: { enabled: true, onlyInViewport: true },
                grabCursor: true,
                pagination: {
                    el: $refs.swiperPagination,
                    clickable: true,
                    type: 'bullets',
                },
                navigation: {
                    nextEl: $refs.swiperNext,
                    prevEl: $refs.swiperPrev,
                },
                a11y: {
                    prevSlideMessage: 'Previous slide',
                    nextSlideMessage: 'Next slide',
                    paginationBulletMessage: 'Go to slide @{{index}}',
                },
                on: {
                    slideChange: (swiper) => {
                        activeSlide = swiper.realIndex;
                    },
                },
            });
        });
    "
>

    {{-- Swiper Container --}}
    <div class="swiper hero-swiper" x-ref="swiperContainer">
        <div class="swiper-wrapper">

            {{-- ═══════════════════ SLIDE 1 ═══════════════════ --}}
            <div class="swiper-slide">
                {{-- Background Image + Overlay --}}
                <div class="hero-slide-bg">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1920&auto=format&fit=crop"
                         alt="{{ __('home.hero.image_alt_1') }}"
                         :alt="t('home.hero.image_alt_1')"
                         loading="eager" fetchpriority="high" />
                    <div class="hero-slide-overlay"></div>
                </div>

                {{-- Content --}}
                <div class="hero-slide-content-wrapper">
                    <div class="hero-content-container">
                        <div class="hero-text-block">
                            <div class="hero-slide-content opacity-0" style="--delay: 0.1s">
                                <span class="hero-eyebrow">
                                    <span x-text="t('home.hero.slide1.badge')">{{ __('home.hero.slide1.badge') }}</span>
                                </span>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.2s">
                                <h1 class="hero-heading">
                                    <span x-text="t('home.hero.slide1.title')">{{ __('home.hero.slide1.title') }}</span>
                                </h1>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.3s">
                                <p class="hero-paragraph">
                                    <span x-text="t('home.hero.slide1.description')">{{ __('home.hero.slide1.description') }}</span>
                                </p>
                            </div>

                            <div class="hero-slide-content opacity-0 hero-cta-group" style="--delay: 0.4s">
                                <a href="#services" class="hero-btn-primary">
                                    <span x-text="t('home.hero.slide1.cta_primary')">{{ __('home.hero.slide1.cta_primary') }}</span>
                                </a>
                                <a href="#contact" class="hero-btn-secondary">
                                    <span x-text="t('home.hero.slide1.cta_secondary')">{{ __('home.hero.slide1.cta_secondary') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════ SLIDE 2 ═══════════════════ --}}
            <div class="swiper-slide">
                <div class="hero-slide-bg">
                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1920&auto=format&fit=crop"
                         alt="{{ __('home.hero.image_alt_2') }}"
                         :alt="t('home.hero.image_alt_2')"
                         loading="lazy" />
                    <div class="hero-slide-overlay"></div>
                </div>

                <div class="hero-slide-content-wrapper">
                    <div class="hero-content-container">
                        <div class="hero-text-block">
                            <div class="hero-slide-content opacity-0" style="--delay: 0.1s">
                                <span class="hero-eyebrow">
                                    <span x-text="t('home.hero.slide2.badge')">{{ __('home.hero.slide2.badge') }}</span>
                                </span>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.2s">
                                <h2 class="hero-heading">
                                    <span x-text="t('home.hero.slide2.title')">{{ __('home.hero.slide2.title') }}</span>
                                </h2>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.3s">
                                <p class="hero-paragraph">
                                    <span x-text="t('home.hero.slide2.description')">{{ __('home.hero.slide2.description') }}</span>
                                </p>
                            </div>

                            <div class="hero-slide-content opacity-0 hero-cta-group" style="--delay: 0.4s">
                                <a href="#portfolio" class="hero-btn-primary">
                                    <span x-text="t('home.hero.slide2.cta_primary')">{{ __('home.hero.slide2.cta_primary') }}</span>
                                </a>
                                <a href="#contact" class="hero-btn-secondary">
                                    <span x-text="t('home.hero.slide2.cta_secondary')">{{ __('home.hero.slide2.cta_secondary') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════ SLIDE 3 ═══════════════════ --}}
            <div class="swiper-slide">
                <div class="hero-slide-bg">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?q=80&w=1920&auto=format&fit=crop"
                         alt="{{ __('home.hero.image_alt_3') }}"
                         :alt="t('home.hero.image_alt_3')"
                         loading="lazy" />
                    <div class="hero-slide-overlay"></div>
                </div>

                <div class="hero-slide-content-wrapper">
                    <div class="hero-content-container">
                        <div class="hero-text-block">
                            <div class="hero-slide-content opacity-0" style="--delay: 0.1s">
                                <span class="hero-eyebrow">
                                    <span x-text="t('home.hero.slide3.badge')">{{ __('home.hero.slide3.badge') }}</span>
                                </span>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.2s">
                                <h2 class="hero-heading">
                                    <span x-text="t('home.hero.slide3.title')">{{ __('home.hero.slide3.title') }}</span>
                                </h2>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.3s">
                                <p class="hero-paragraph">
                                    <span x-text="t('home.hero.slide3.description')">{{ __('home.hero.slide3.description') }}</span>
                                </p>
                            </div>

                            <div class="hero-slide-content opacity-0 hero-cta-group" style="--delay: 0.4s">
                                <a href="#contact" class="hero-btn-primary">
                                    <span x-text="t('home.hero.slide3.cta_primary')">{{ __('home.hero.slide3.cta_primary') }}</span>
                                </a>
                                <a href="#contact" class="hero-btn-secondary">
                                    <span x-text="t('home.hero.slide3.cta_secondary')">{{ __('home.hero.slide3.cta_secondary') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════ SLIDE 4 ═══════════════════ --}}
            <div class="swiper-slide">
                <div class="hero-slide-bg">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1920&auto=format&fit=crop"
                         alt="{{ __('home.hero.image_alt_4') }}"
                         :alt="t('home.hero.image_alt_4')"
                         loading="lazy" />
                    <div class="hero-slide-overlay"></div>
                </div>

                <div class="hero-slide-content-wrapper">
                    <div class="hero-content-container">
                        <div class="hero-text-block">
                            <div class="hero-slide-content opacity-0" style="--delay: 0.1s">
                                <span class="hero-eyebrow">
                                    <span x-text="t('home.hero.slide4.badge')">{{ __('home.hero.slide4.badge') }}</span>
                                </span>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.2s">
                                <h2 class="hero-heading">
                                    <span x-text="t('home.hero.slide4.title')">{{ __('home.hero.slide4.title') }}</span>
                                </h2>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.3s">
                                <p class="hero-paragraph">
                                    <span x-text="t('home.hero.slide4.description')">{{ __('home.hero.slide4.description') }}</span>
                                </p>
                            </div>

                            <div class="hero-slide-content opacity-0 hero-cta-group" style="--delay: 0.4s">
                                <a href="#services" class="hero-btn-primary">
                                    <span x-text="t('home.hero.slide4.cta_primary')">{{ __('home.hero.slide4.cta_primary') }}</span>
                                </a>
                                <a href="#contact" class="hero-btn-secondary">
                                    <span x-text="t('home.hero.slide4.cta_secondary')">{{ __('home.hero.slide4.cta_secondary') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════ SLIDE 5 ═══════════════════ --}}
            <div class="swiper-slide">
                <div class="hero-slide-bg">
                    <img src="https://images.unsplash.com/photo-1562408590-e32931084e23?q=80&w=1920&auto=format&fit=crop"
                         alt="{{ __('home.hero.image_alt_5') }}"
                         :alt="t('home.hero.image_alt_5')"
                         loading="lazy" />
                    <div class="hero-slide-overlay"></div>
                </div>

                <div class="hero-slide-content-wrapper">
                    <div class="hero-content-container">
                        <div class="hero-text-block">
                            <div class="hero-slide-content opacity-0" style="--delay: 0.1s">
                                <span class="hero-eyebrow">
                                    <span x-text="t('home.hero.slide5.badge')">{{ __('home.hero.slide5.badge') }}</span>
                                </span>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.2s">
                                <h2 class="hero-heading">
                                    <span x-text="t('home.hero.slide5.title')">{{ __('home.hero.slide5.title') }}</span>
                                </h2>
                            </div>

                            <div class="hero-slide-content opacity-0" style="--delay: 0.3s">
                                <p class="hero-paragraph">
                                    <span x-text="t('home.hero.slide5.description')">{{ __('home.hero.slide5.description') }}</span>
                                </p>
                            </div>

                            <div class="hero-slide-content opacity-0 hero-cta-group" style="--delay: 0.4s">
                                <a href="#contact" class="hero-btn-primary">
                                    <span x-text="t('home.hero.slide5.cta_primary')">{{ __('home.hero.slide5.cta_primary') }}</span>
                                </a>
                                <a href="#contact" class="hero-btn-secondary">
                                    <span x-text="t('home.hero.slide5.cta_secondary')">{{ __('home.hero.slide5.cta_secondary') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- ═══════════════════ BOTTOM CONTROLS ═══════════════════ --}}
    <div class="hero-controls">
        {{-- Previous Button --}}
        <button x-ref="swiperPrev" class="hero-control-btn" aria-label="Previous slide">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
        </button>

        {{-- Pagination Dots --}}
        <div x-ref="swiperPagination" class="hero-pagination"></div>

        {{-- Next Button --}}
        <button x-ref="swiperNext" class="hero-control-btn" aria-label="Next slide">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </button>
    </div>

</section>
