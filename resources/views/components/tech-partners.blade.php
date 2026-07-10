<section class="pt-16 md:pt-20 lg:pt-24 pb-12 md:pb-16 overflow-hidden" style="background-color: #0B1220;">
    <style>
        @keyframes tech-marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .tech-marquee-track {
            display: flex;
            width: max-content;
            animation: tech-marquee 35s linear infinite;
        }
        .tech-marquee-area:hover .tech-marquee-track {
            animation-play-state: paused;
        }
        .tech-logo {
            filter: grayscale(0.2);
            opacity: 0.7;
            transition: all 300ms ease;
            height: 44px;
            width: auto;
            object-fit: contain;
        }
        .tech-logo:hover {
            opacity: 1;
            filter: grayscale(0);
            transform: translateY(-4px) scale(1.05);
        }
    </style>

    <!-- Section Header -->
    <div class="max-w-[1280px] mx-auto px-6">
        <div class="text-center scroll-reveal">
            <!-- Title -->
            <h2 class="text-[36px] md:text-[48px] font-bold tracking-tight text-white leading-[1.15] mb-6">
                Technologies We Use
            </h2>

            <!-- Description -->
            <p class="text-gray-400 text-base md:text-lg leading-[1.8] max-w-[720px] mx-auto">
                We use trusted technologies and industry-proven products to deliver reliable, secure, and scalable IT infrastructure solutions.
            </p>
        </div>
    </div>

    <!-- Spacer -->
    <div class="h-[60px]"></div>

    <!-- Logo Marquee -->
    <div class="w-full relative tech-marquee-area scroll-reveal delay-100">
        <!-- Gradient Fade Edges -->
        <div class="absolute inset-y-0 left-0 w-20 md:w-40 z-10 pointer-events-none" style="background: linear-gradient(to right, #0B1220, transparent);"></div>
        <div class="absolute inset-y-0 right-0 w-20 md:w-40 z-10 pointer-events-none" style="background: linear-gradient(to left, #0B1220, transparent);"></div>

        <div class="tech-marquee-track">
            @for ($i = 0; $i < 2; $i++)
                @foreach(config('company.tech_partners') as $partner)
                    <div class="flex-shrink-0 flex items-center justify-center px-8 md:px-16" title="{{ $partner['name'] }}" x-data="{ imageFailed: false }">
                        <img src="{{ asset($partner['logo']) }}"
                             alt="{{ $partner['name'] }}"
                             class="tech-logo cursor-default"
                             loading="lazy"
                             x-show="!imageFailed" 
                             x-on:error="imageFailed = true">
                             
                        <span x-show="imageFailed" style="display: none;" 
                              class="font-semibold text-[24px] text-white">
                            {{ $partner['name'] }}
                        </span>
                    </div>
                @endforeach
            @endfor
        </div>
    </div>
</section>
