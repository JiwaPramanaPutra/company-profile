<section id="about" class="relative min-h-[80vh] lg:min-h-screen flex items-center bg-slate-900 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1920&auto=format&fit=crop" 
             alt="IT Infrastructure" 
             class="w-full h-full object-cover animate-slow-zoom"
             loading="lazy" />
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>

    <x-ui.container class="relative z-10 w-full py-24 lg:py-0">
        <!-- Content Aligned Left on Desktop, Centered on Mobile -->
        <div class="scroll-reveal flex flex-col items-center lg:items-start text-center lg:text-left max-w-[700px] mx-auto lg:mx-0">
            
            <!-- Label -->
            <span class="text-[14px] font-semibold text-blue-400 uppercase tracking-[0.15em] mb-6 block" x-text="t('home.about.badge')">
                {{ __('home.about.badge') }}
            </span>
            
            <!-- Heading -->
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-white leading-[1.15] mb-8">
                <span x-text="t('home.about.title')">{{ __('home.about.title') }}</span>
            </h2>
            
            <!-- Description -->
            <p class="text-lg md:text-xl text-slate-300 leading-relaxed mb-12">
                <span x-text="t('home.about.description')">{{ __('home.about.description') }}</span>
            </p>
            
            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                <a href="#services" class="w-full sm:w-auto px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-semibold transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_20px_-6px_rgba(37,99,235,0.5)] flex items-center justify-center">
                    <span x-text="t('home.about.cta_primary')">{{ __('home.about.cta_primary') }}</span>
                </a>
                <a href="#contact" class="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/20 border border-white/10 hover:border-white/20 text-white rounded-xl font-semibold transition-all duration-300 hover:-translate-y-1 flex items-center justify-center">
                    <span x-text="t('home.about.cta_secondary')">{{ __('home.about.cta_secondary') }}</span>
                </a>
            </div>
            
        </div>
    </x-ui.container>
    
    <!-- Continuous Slow Zoom Animation -->
    <style>
        @keyframes slow-zoom {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .animate-slow-zoom {
            animation: slow-zoom 24s ease-in-out infinite;
        }
    </style>
</section>
