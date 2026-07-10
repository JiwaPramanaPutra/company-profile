<section id="portfolio" class="py-16 md:py-20 lg:py-24 bg-white dark:bg-slate-900">
    <x-ui.container>
        <x-ui.section-title 
            titleKey="home.portfolio.title" 
            subtitleKey="home.portfolio.subtitle"
            class="scroll-reveal"
        >
            <span x-text="t('home.portfolio.description')">{{ __('home.portfolio.description') }}</span>
        </x-ui.section-title>

        <div class="grid md:grid-cols-2 gap-8 mt-16">
            @foreach(config('company.portfolio') as $index => $project)
                <div class="group relative bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 border border-gray-100 dark:border-slate-700/50 scroll-reveal flex flex-col h-full delay-{{ ($index % 2 + 1) * 100 }}">
                    <!-- Image Area -->
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <div class="absolute inset-0 bg-blue-900/20 group-hover:bg-transparent transition-colors z-10"></div>
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=800&auto=format&fit=crop" 
                             alt="{{ $project['title_en'] }}" 
                             :alt="lang === 'id' ? '{{ addslashes($project['title_id']) }}' : '{{ addslashes($project['title_en']) }}'"
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                             loading="lazy" />
                             
                        <!-- Category Tag -->
                        <div class="absolute top-4 left-4 z-20">
                            <span class="px-3 py-1 bg-white/90 dark:bg-slate-900/90 backdrop-blur-sm text-xs font-bold uppercase tracking-wider rounded-full text-blue-600 dark:text-cyan-400" x-text="lang === 'id' ? '{{ $project['category_id'] }}' : '{{ $project['category_en'] }}'">
                                {{ $project['category_en'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors" x-text="lang === 'id' ? '{{ addslashes($project['title_id']) }}' : '{{ addslashes($project['title_en']) }}'">
                            {{ $project['title_en'] }}
                        </h3>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-4 flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <span x-text="lang === 'id' ? '{{ addslashes($project['client_id']) }}' : '{{ addslashes($project['client_en']) }}'">{{ $project['client_en'] }}</span>
                        </p>
                        
                        <div class="space-y-3 pt-4 border-t border-gray-100 dark:border-slate-700">
                            <div>
                                <span class="text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider block mb-1"><span x-text="t('home.portfolio.problem')">{{ __('home.portfolio.problem') }}</span>:</span>
                                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-1" x-text="lang === 'id' ? '{{ addslashes($project['problem_id']) }}' : '{{ addslashes($project['problem_en']) }}'">{{ $project['problem_en'] }}</p>
                            </div>
                            <div>
                                <span class="text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider block mb-1"><span x-text="t('home.portfolio.result')">{{ __('home.portfolio.result') }}</span>:</span>
                                <p class="text-sm text-emerald-600 dark:text-emerald-400 line-clamp-1 font-medium" x-text="lang === 'id' ? '{{ addslashes($project['result_id']) }}' : '{{ addslashes($project['result_en']) }}'">{{ $project['result_en'] }}</p>
                            </div>
                        </div>

                        <!-- Technologies Used -->
                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach($project['technologies'] as $tech)
                                <span class="px-2.5 py-1 bg-gray-100 dark:bg-slate-700 text-xs font-medium text-gray-600 dark:text-gray-300 rounded-md">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="mt-12 text-center scroll-reveal delay-300">
            <x-ui.button variant="outline" href="#">
                <span x-text="t('home.portfolio.view_all')">{{ __('home.portfolio.view_all') }}</span>
            </x-ui.button>
        </div>
    </x-ui.container>
</section>
