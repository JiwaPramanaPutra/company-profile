<section id="faq" class="py-16 md:py-20 lg:py-24 bg-gray-50 dark:bg-slate-900 border-t border-gray-100 dark:border-slate-800" x-data="{ activeFaq: null }">
    <x-ui.container class="max-w-4xl">
        <x-ui.section-title 
            titleKey="home.faq.title" 
            subtitleKey="home.faq.subtitle"
            class="scroll-reveal"
        >
            <span x-text="t('home.faq.description')">{{ __('home.faq.description') }}</span>
        </x-ui.section-title>

        <div class="mt-16 space-y-4 scroll-reveal delay-200">
            @foreach(config('company.faq') as $index => $item)
                <div class="bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 rounded-xl overflow-hidden shadow-sm transition-all duration-300"
                     :class="{ 'ring-2 ring-blue-500/20 border-blue-500/30': activeFaq === {{ $index }} }">
                    
                    <button @click="activeFaq = activeFaq === {{ $index }} ? null : {{ $index }}" 
                            class="w-full text-left px-6 py-4 flex items-center justify-between focus:outline-none focus-visible:bg-gray-50 dark:focus-visible:bg-slate-700"
                            :aria-expanded="activeFaq === {{ $index }}">
                        <span class="font-bold text-gray-900 dark:text-white pr-8">
                            <span x-text="lang === 'id' ? '{{ addslashes($item['q_id']) }}' : '{{ addslashes($item['q_en']) }}'">{{ $item['q_en'] }}</span>
                        </span>
                        
                        <!-- Plus/Minus Icon -->
                        <span class="shrink-0 w-8 h-8 rounded-full bg-gray-100 dark:bg-slate-700 flex items-center justify-center text-blue-600 dark:text-cyan-400 transition-transform duration-300"
                              :class="{ 'rotate-180 bg-blue-100 dark:bg-blue-900/30': activeFaq === {{ $index }} }">
                            <svg x-show="activeFaq !== {{ $index }}" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                            <svg x-show="activeFaq === {{ $index }}" style="display: none;" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" /></svg>
                        </span>
                    </button>
                    
                    <div x-show="activeFaq === {{ $index }}" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         style="display: none;">
                        <div class="px-6 pb-5 text-gray-600 dark:text-gray-400 text-sm leading-relaxed border-t border-gray-100 dark:border-slate-700/50 pt-4 mt-2">
                            <span x-text="lang === 'id' ? '{{ addslashes($item['a_id']) }}' : '{{ addslashes($item['a_en']) }}'">{{ $item['a_en'] }}</span>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </x-ui.container>
</section>
