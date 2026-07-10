<section id="contact" class="py-16 md:py-20 lg:py-24 bg-white dark:bg-slate-900">
    <x-ui.container>
        <div class="grid lg:grid-cols-2 gap-16">
            
            <!-- Left: Contact Info -->
            <div class="scroll-reveal">
                <x-ui.section-title 
                    titleKey="home.contact.title" 
                    subtitleKey="home.contact.subtitle"
                    alignment="left"
                >
                    <span x-text="t('home.contact.description')">{{ __('home.contact.description') }}</span>
                </x-ui.section-title>

                <div class="mt-12 space-y-8">
                    <!-- Address -->
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-slate-800 flex items-center justify-center text-blue-600 dark:text-cyan-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white mb-1" x-text="t('home.contact.office')">{{ __('home.contact.office') }}</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">{{ config('company.contact.address') }}</p>
                            <a href="{{ config('company.contact.maps_url') }}" target="_blank" rel="noopener noreferrer" class="inline-block mt-2 text-sm font-semibold text-blue-600 dark:text-cyan-400 hover:underline" x-text="t('home.contact.get_directions')">{{ __('home.contact.get_directions') }}</a>
                        </div>
                    </div>

                    <!-- Email & Phone -->
                    <div class="grid sm:grid-cols-2 gap-8">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-slate-800 flex items-center justify-center text-blue-600 dark:text-cyan-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white mb-1" x-text="t('home.contact.email')">{{ __('home.contact.email') }}</h4>
                                <a href="mailto:{{ config('company.contact.email') }}" class="text-gray-600 dark:text-gray-400 text-sm hover:text-blue-600 dark:hover:text-cyan-400 transition-colors">{{ config('company.contact.email') }}</a>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-slate-800 flex items-center justify-center text-blue-600 dark:text-cyan-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white mb-1" x-text="t('home.contact.phone')">{{ __('home.contact.phone') }}</h4>
                                <a href="tel:{{ str_replace(' ', '', config('company.contact.phone')) }}" class="text-gray-600 dark:text-gray-400 text-sm hover:text-blue-600 dark:hover:text-cyan-400 transition-colors">{{ config('company.contact.phone') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="flex gap-4 p-6 bg-gray-50 dark:bg-slate-800/50 rounded-2xl border border-gray-100 dark:border-slate-700">
                        <div class="w-12 h-12 rounded-xl bg-white dark:bg-slate-700 shadow-sm flex items-center justify-center text-blue-600 dark:text-cyan-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white mb-1" x-text="t('home.contact.hours')">{{ __('home.contact.hours') }}</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">{{ config('company.contact.business_hours') }}</p>
                            <p class="text-blue-600 dark:text-cyan-400 text-sm font-medium mt-1"><span x-text="t('home.contact.it_support')">{{ __('home.contact.it_support') }}</span>: {{ config('company.contact.emergency_hours') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Form (Alpine UI States) -->
            <div class="scroll-reveal delay-200">
                <x-ui.card class="p-8 sm:p-10" hover="false" x-data="{
                    form: { name: '', email: '', service: '', message: '' },
                    status: 'idle', // idle, submitting, success, error
                    errors: {},
                    validate() {
                        this.errors = {};
                        if (!this.form.name) this.errors.name = this.t('home.contact.error_required');
                        if (!this.form.email) {
                            this.errors.email = this.t('home.contact.error_required');
                        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.form.email)) {
                            this.errors.email = this.t('home.contact.error_email');
                        }
                        if (!this.form.message) this.errors.message = this.t('home.contact.error_required');
                        return Object.keys(this.errors).length === 0;
                    },
                    submit() {
                        if(!this.validate()) return;
                        
                        this.status = 'submitting';
                        
                        // Simulate API call
                        setTimeout(() => {
                            this.status = 'success';
                            this.form = { name: '', email: '', service: '', message: '' };
                            
                            // Reset back to idle after 5 seconds
                            setTimeout(() => this.status = 'idle', 5000);
                        }, 1500);
                    }
                }">
                    
                    <div x-show="status === 'success'" style="display: none;" class="h-full flex flex-col items-center justify-center py-12 text-center animate-fade-in">
                        <div class="w-20 h-20 bg-emerald-100 dark:bg-emerald-900/30 rounded-full flex items-center justify-center text-emerald-500 mb-6">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2" x-text="t('home.contact.success_title')">{{ __('home.contact.success_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400" x-text="t('home.contact.success_desc')">{{ __('home.contact.success_desc') }}</p>
                        <x-ui.button @click="status = 'idle'" variant="outline" class="mt-8">
                            <span x-text="t('home.contact.send_another')">{{ __('home.contact.send_another') }}</span>
                        </x-ui.button>
                    </div>

                    <form x-show="status !== 'success'" @submit.prevent="submit" class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"><span x-text="t('home.contact.form_name')">{{ __('home.contact.form_name') }}</span> <span class="text-rose-500">*</span></label>
                                <input type="text" id="name" x-model="form.name" :class="{'border-rose-300 focus:border-rose-500 focus:ring-rose-500': errors.name}" class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-slate-700 bg-gray-50 dark:bg-slate-900/50 text-gray-900 dark:text-white focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none" placeholder="{{ __('home.contact.form_name_placeholder') }}" :placeholder="t('home.contact.form_name_placeholder')">
                                <p x-show="errors.name" x-text="errors.name" class="mt-1.5 text-xs text-rose-500" style="display: none;"></p>
                            </div>
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"><span x-text="t('home.contact.form_email')">{{ __('home.contact.form_email') }}</span> <span class="text-rose-500">*</span></label>
                                <input type="email" id="email" x-model="form.email" :class="{'border-rose-300 focus:border-rose-500 focus:ring-rose-500': errors.email}" class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-slate-700 bg-gray-50 dark:bg-slate-900/50 text-gray-900 dark:text-white focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none" placeholder="{{ __('home.contact.form_email_placeholder') }}" :placeholder="t('home.contact.form_email_placeholder')">
                                <p x-show="errors.email" x-text="errors.email" class="mt-1.5 text-xs text-rose-500" style="display: none;"></p>
                            </div>
                        </div>

                        <!-- Service Interest -->
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" x-text="t('home.contact.form_service')">{{ __('home.contact.form_service') }}</label>
                            <select id="service" x-model="form.service" class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-slate-700 bg-gray-50 dark:bg-slate-900/50 text-gray-900 dark:text-white focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none appearance-none">
                                <option value="" x-text="t('home.contact.form_select')">{{ __('home.contact.form_select') }}</option>
                                @foreach(config('company.services') as $service)
                                    <option value="{{ $service['id'] }}" x-text="lang === 'id' ? '{{ $service['title_id'] }}' : '{{ $service['title_en'] }}'"></option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"><span x-text="t('home.contact.form_message')">{{ __('home.contact.form_message') }}</span> <span class="text-rose-500">*</span></label>
                            <textarea id="message" x-model="form.message" rows="4" :class="{'border-rose-300 focus:border-rose-500 focus:ring-rose-500': errors.message}" class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-slate-700 bg-gray-50 dark:bg-slate-900/50 text-gray-900 dark:text-white focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none resize-none" placeholder="{{ __('home.contact.form_placeholder') }}" :placeholder="t('home.contact.form_placeholder')"></textarea>
                            <p x-show="errors.message" x-text="errors.message" class="mt-1.5 text-xs text-rose-500" style="display: none;"></p>
                        </div>

                        <!-- Submit -->
                        <x-ui.button type="submit" variant="primary" class="w-full" size="lg" x-bind:disabled="status === 'submitting'">
                            <span x-show="status !== 'submitting'" x-text="t('home.contact.form_submit')">{{ __('home.contact.form_submit') }}</span>
                            <span x-show="status === 'submitting'" style="display: none;" class="flex items-center gap-2">
                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span x-text="t('home.contact.form_submitting')">{{ __('home.contact.form_submitting') }}</span>
                            </span>
                        </x-ui.button>
                    </form>

                </x-ui.card>
            </div>
            
        </div>
    </x-ui.container>
</section>
