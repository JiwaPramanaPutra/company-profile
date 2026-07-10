<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="{{ config('company.name') }}" />
    
    <x-seo />

    {{-- Preconnect to Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet" />

    {{-- Prevent Dark Mode FOUC --}}
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        const savedLang = localStorage.getItem('lang') || 'id';
        document.documentElement.lang = savedLang;
    </script>

    {{-- Translations for Alpine --}}
    <script>
        window.AppTranslations = {
            id: {
                navbar: @json(__('navbar', [], 'id')),
                home: @json(__('home', [], 'id')),
                footer: @json(__('footer', [], 'id')),
            },
            en: {
                navbar: @json(__('navbar', [], 'en')),
                home: @json(__('home', [], 'en')),
                footer: @json(__('footer', [], 'en')),
            }
        };
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body 
    x-data="{
        lang: localStorage.getItem('lang') || 'id',
        theme: localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'),
        scrolled: false,
        mobileMenuOpen: false,
        t(key) {
            const keys = key.split('.');
            let val = window.AppTranslations[this.lang];
            for (let k of keys) {
                if (val === undefined) break;
                val = val[k];
            }
            return val || key;
        },
        toggleTheme() {
            this.theme = this.theme === 'light' ? 'dark' : 'light';
        },
        toggleLang() {
            this.lang = this.lang === 'id' ? 'en' : 'id';
        },
        init() {
            this.$watch('lang', val => {
                localStorage.setItem('lang', val);
                document.documentElement.lang = val;
            });
            this.$watch('theme', val => {
                localStorage.setItem('theme', val);
                if (val === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            });
        }
    }"
    @scroll.window="scrolled = (window.pageYOffset > 50)"
    class="bg-white dark:bg-slate-900 text-gray-900 dark:text-white transition-colors duration-300 ease-in-out antialiased"
>
    
    <x-navbar />

    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-footer />

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/{{ config('company.contact.whatsapp') }}" 
       target="_blank" 
       rel="noopener noreferrer"
       x-show="!mobileMenuOpen"
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0 translate-y-8"
       x-transition:enter-end="opacity-100 translate-y-0"
       class="fixed bottom-6 right-6 z-40 flex items-center justify-center w-14 h-14 bg-[#25D366] text-white rounded-full shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group focus:outline-none focus:ring-2 focus:ring-[#25D366] focus:ring-offset-2"
       aria-label="{{ __('home.chat_whatsapp') }}" :aria-label="t('home.chat_whatsapp')">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        
        <!-- Tooltip -->
        <div class="absolute right-full mr-4 top-1/2 -translate-y-1/2 px-3 py-1.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm font-medium rounded-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none shadow-sm">
            <span x-text="t('home.whatsapp_tooltip')">{{ __('home.whatsapp_tooltip') }}</span>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 rotate-45 w-2 h-2 bg-gray-900 dark:bg-white"></div>
        </div>
    </a>

    <!-- Back to Top Button -->
    <button @click="window.scrollTo({top: 0, behavior: 'smooth'})" 
            x-show="scrolled" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-8"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-8"
            class="fixed bottom-24 right-6 z-40 p-3 bg-white dark:bg-slate-800 text-gray-600 dark:text-gray-300 rounded-xl shadow-md border border-gray-100 dark:border-slate-700 hover:bg-gray-50 dark:hover:bg-slate-700 hover:text-blue-600 dark:hover:text-cyan-400 transition-all focus:outline-none focus:ring-2 focus:ring-blue-500"
            aria-label="{{ __('home.back_to_top') }}" :aria-label="t('home.back_to_top')">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

</body>
</html>
