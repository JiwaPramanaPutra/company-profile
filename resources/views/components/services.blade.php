<section id="services" class="py-16 md:py-20 lg:py-24 bg-gray-50 dark:bg-slate-900/50 relative">
    <!-- Decorative -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-50/50 dark:bg-blue-900/10 rounded-full blur-3xl pointer-events-none -mr-40 -mt-40"></div>

    <x-ui.container class="relative z-10">
        <x-ui.section-title 
            titleKey="home.services.title" 
            subtitleKey="home.services.subtitle"
            class="scroll-reveal"
        >
            <span x-text="t('home.services.description')">{{ __('home.services.description') }}</span>
        </x-ui.section-title>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            @foreach(config('company.services') as $index => $service)
                <x-ui.card class="p-8 flex flex-col h-full scroll-reveal delay-{{ ($index % 3 + 1) * 100 }}">
                    <!-- Icon -->
                    <div class="w-14 h-14 bg-blue-50 dark:bg-slate-800 rounded-xl flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-6 border border-blue-100 dark:border-slate-700">
                        @if($service['icon'] === 'network')
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                        @elseif($service['icon'] === 'cable')
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        @elseif($service['icon'] === 'wifi')
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" /></svg>
                        @elseif($service['icon'] === 'shield')
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        @elseif($service['icon'] === 'server')
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg>
                        @elseif($service['icon'] === 'activity')
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        @endif
                    </div>

                    <!-- Content -->
                    <h3 class="text-xl font-display font-bold text-gray-900 dark:text-white mb-3">
                        <span x-text="lang === 'id' ? '{{ $service['title_id'] }}' : '{{ $service['title_en'] }}'"></span>
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 flex-grow">
                        <span x-text="lang === 'id' ? '{{ $service['desc_id'] }}' : '{{ $service['desc_en'] }}'"></span>
                    </p>

                    <!-- Key Benefits -->
                    <div class="mb-8 flex-grow">
                        <!-- ID Version -->
                        <ul class="space-y-2" x-show="lang === 'id'" style="display: none;">
                            @php
                                $benefits_id = $service['benefits_id'];
                                $visible_id = array_slice($benefits_id, 0, 4);
                                $hidden_count_id = count($benefits_id) - 4;
                            @endphp
                            @foreach($visible_id as $benefit)
                                <li class="flex items-start gap-2.5 text-sm text-gray-700 dark:text-gray-300">
                                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    <span class="leading-relaxed">{{ $benefit }}</span>
                                </li>
                            @endforeach
                            @if($hidden_count_id > 0)
                                <li class="text-xs font-semibold tracking-wide text-slate-500 dark:text-slate-400 mt-4 pt-4 border-t border-slate-200 dark:border-slate-700">
                                    +{{ $hidden_count_id }} Layanan Lainnya
                                </li>
                            @endif
                        </ul>

                        <!-- EN Version -->
                        <ul class="space-y-2" x-show="lang === 'en'" style="display: none;">
                            @php
                                $benefits_en = $service['benefits_en'];
                                $visible_en = array_slice($benefits_en, 0, 4);
                                $hidden_count_en = count($benefits_en) - 4;
                            @endphp
                            @foreach($visible_en as $benefit)
                                <li class="flex items-start gap-2.5 text-sm text-gray-700 dark:text-gray-300">
                                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    <span class="leading-relaxed">{{ $benefit }}</span>
                                </li>
                            @endforeach
                            @if($hidden_count_en > 0)
                                <li class="text-xs font-semibold tracking-wide text-slate-500 dark:text-slate-400 mt-4 pt-4 border-t border-slate-200 dark:border-slate-700">
                                    +{{ $hidden_count_en }} More Services
                                </li>
                            @endif
                        </ul>
                    </div>

                    <!-- Action -->
                    <a href="#contact" class="inline-flex items-center text-sm font-semibold text-blue-600 dark:text-cyan-400 hover:text-blue-700 dark:hover:text-cyan-300 transition-colors mt-auto group">
                        <span x-text="t('home.services.learn_more')">{{ __('home.services.learn_more') }}</span>
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </a>
                </x-ui.card>
            @endforeach
        </div>
    </x-ui.container>
</section>
