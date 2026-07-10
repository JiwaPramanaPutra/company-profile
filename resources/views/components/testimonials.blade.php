<section id="testimonials" class="py-16 md:py-20 lg:py-24 bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-slate-800">
    <x-ui.container>
        <x-ui.section-title 
            titleKey="home.testimonials.title" 
            subtitleKey="home.testimonials.subtitle"
            class="scroll-reveal"
        >
            <span x-text="t('home.testimonials.description')">{{ __('home.testimonials.description') }}</span>
        </x-ui.section-title>

        <div class="grid md:grid-cols-3 gap-8 mt-16">
            @foreach(config('company.testimonials') as $index => $testimonial)
                <x-ui.card class="p-8 flex flex-col h-full scroll-reveal delay-{{ ($index % 3 + 1) * 100 }}">
                    <!-- Quote Icon -->
                    <div class="mb-6 text-blue-100 dark:text-blue-900/30">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>

                    <!-- Quote Text -->
                    <p class="text-gray-600 dark:text-gray-300 italic mb-8 flex-grow">
                        "<span x-text="lang === 'id' ? '{{ addslashes($testimonial['quote_id']) }}' : '{{ addslashes($testimonial['quote_en']) }}'">{{ $testimonial['quote_en'] }}</span>"
                    </p>

                    <!-- Author -->
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 rounded-full bg-gray-200 dark:bg-slate-700 overflow-hidden shrink-0">
                            <!-- Placeholder avatar -->
                            <div class="w-full h-full bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-slate-700 dark:to-slate-600 flex items-center justify-center text-blue-600 dark:text-cyan-400 font-bold font-display">
                                {{ substr($testimonial['name'], 0, 1) }}
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">{{ $testimonial['name'] }}</h4>
                            <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">{{ $testimonial['role'] }}, {{ $testimonial['company'] }}</p>
                        </div>
                    </div>
                </x-ui.card>
            @endforeach
        </div>
    </x-ui.container>
</section>
