<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Jiwa Cyber Network — Professional local network infrastructure solutions for hotels, villas, offices, and businesses. LAN installation, WiFi optimization, structured cabling, and network maintenance." />
    <meta name="keywords" content="network engineering, LAN installation, WiFi optimization, structured cabling, network maintenance, IT infrastructure" />
    <meta name="author" content="Jiwa Cyber Network" />

    <title>Jiwa Cyber Network — Professional Local Network Infrastructure Solutions</title>

    {{-- Preconnect to Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- ===== NAVIGATION BAR ===== --}}
    <header class="navbar" id="navbar" role="banner">
        <div class="navbar-inner">
            {{-- Logo --}}
            <a href="#hero" class="navbar-logo" aria-label="Jiwa Cyber Network Home">
                <div class="navbar-logo-icon">
                    {{-- Network node icon --}}
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="3" fill="white"/>
                        <circle cx="4" cy="6" r="2" fill="white" opacity="0.7"/>
                        <circle cx="20" cy="6" r="2" fill="white" opacity="0.7"/>
                        <circle cx="4" cy="18" r="2" fill="white" opacity="0.7"/>
                        <circle cx="20" cy="18" r="2" fill="white" opacity="0.7"/>
                        <line x1="10" y1="10" x2="5.5" y2="7.5" stroke="white" stroke-width="1.2" opacity="0.5"/>
                        <line x1="14" y1="10" x2="18.5" y2="7.5" stroke="white" stroke-width="1.2" opacity="0.5"/>
                        <line x1="10" y1="14" x2="5.5" y2="16.5" stroke="white" stroke-width="1.2" opacity="0.5"/>
                        <line x1="14" y1="14" x2="18.5" y2="16.5" stroke="white" stroke-width="1.2" opacity="0.5"/>
                    </svg>
                </div>
                <span class="navbar-logo-text">Jiwa <span>Cyber</span> Network</span>
            </a>

            {{-- Desktop Navigation Menu --}}
            <ul class="navbar-menu" role="navigation" aria-label="Main Navigation">
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            {{-- CTA Button --}}
            <a href="#contact" class="btn-nav-contact">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                Contact Us
            </a>

            {{-- Mobile Menu Toggle --}}
            <button class="navbar-toggle" aria-label="Toggle Navigation Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    {{-- Mobile Menu Overlay --}}
    <div class="mobile-menu-overlay" id="mobileMenu">
        <nav aria-label="Mobile Navigation">
            <a href="#hero">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#contact">Contact</a>
            <a href="#contact" class="btn-nav-contact">Contact Us</a>
        </nav>
    </div>

    {{-- ===== HERO SECTION ===== --}}
    <section class="hero" id="hero" aria-label="Hero Section">

        {{-- Background Effects --}}
        <div class="hero-bg-grid" aria-hidden="true"></div>
        <div class="hero-bg-glow hero-bg-glow--1" aria-hidden="true"></div>
        <div class="hero-bg-glow hero-bg-glow--2" aria-hidden="true"></div>
        <div class="hero-bg-glow hero-bg-glow--3" aria-hidden="true"></div>

        {{-- Decorative Rings --}}
        <div class="hero-ring hero-ring--1" aria-hidden="true"></div>
        <div class="hero-ring hero-ring--2" aria-hidden="true"></div>

        {{-- Animated particles --}}
        <div class="hero-particles" aria-hidden="true">
            <div class="hero-particle"></div>
            <div class="hero-particle"></div>
            <div class="hero-particle"></div>
            <div class="hero-particle"></div>
            <div class="hero-particle"></div>
            <div class="hero-particle"></div>
            <div class="hero-particle"></div>
            <div class="hero-particle"></div>
        </div>

        {{-- Network SVG Lines --}}
        <div class="hero-network-lines" aria-hidden="true">
            <svg viewBox="0 0 1440 900" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="lineGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#2F80ED" stop-opacity="0.4"/>
                        <stop offset="100%" stop-color="#00C2FF" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
                <path d="M0,300 Q360,100 720,350 T1440,250" fill="none" stroke="url(#lineGrad)" stroke-width="1"/>
                <path d="M0,500 Q400,300 800,550 T1440,450" fill="none" stroke="url(#lineGrad)" stroke-width="0.8"/>
                <path d="M0,700 Q300,500 700,700 T1440,600" fill="none" stroke="url(#lineGrad)" stroke-width="0.6"/>
                <circle cx="720" cy="350" r="4" fill="#2F80ED" opacity="0.3"/>
                <circle cx="360" cy="200" r="3" fill="#00C2FF" opacity="0.25"/>
                <circle cx="1080" cy="300" r="3" fill="#2F80ED" opacity="0.2"/>
                <circle cx="200" cy="450" r="3" fill="#00C2FF" opacity="0.15"/>
                <circle cx="900" cy="550" r="4" fill="#2F80ED" opacity="0.2"/>
            </svg>
        </div>

        {{-- Hero Content Grid --}}
        <div class="hero-container">

            {{-- ===== LEFT SIDE ===== --}}
            <div class="hero-content">

                {{-- Premium Badge --}}
                <div class="hero-badge">
                    <span class="hero-badge-dot" aria-hidden="true"></span>
                    Professional Local Network Infrastructure Solutions
                </div>

                {{-- Main Headline --}}
                <h1 class="hero-headline">
                    Building <span class="highlight">Fast, Stable &amp; Reliable</span> Local Networks for Hotels, Villas, Offices, and Businesses.
                </h1>

                {{-- Subheadline --}}
                <p class="hero-subheadline">
                    Jiwa Cyber Network delivers professional network installation, WiFi optimization, structured cabling, troubleshooting, and maintenance services to help businesses achieve stable, secure, and high-performance connectivity.
                </p>

                {{-- CTA Buttons --}}
                <div class="hero-cta-group">
                    <a href="#contact" class="btn-primary" id="cta-consultation">
                        <span class="btn-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </span>
                        Free Consultation
                    </a>
                    <a href="#services" class="btn-secondary" id="cta-services">
                        <span class="btn-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </span>
                        Our Services
                    </a>
                </div>

                {{-- Trust Badges --}}
                <div class="hero-trust">
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon">
                            <svg viewBox="0 0 24 24">
                                <polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                            </svg>
                        </div>
                        <span>Fast Response</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <span>Free Site Survey</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <span>Workmanship Warranty</span>
                    </div>
                </div>

            </div>

            {{-- ===== RIGHT SIDE — Visual ===== --}}
            <div class="hero-visual">

                {{-- Main Image --}}
                <div class="hero-image-wrapper">
                    <img
                        src="{{ asset('images/hero-illustration.jpg') }}"
                        alt="Professional network engineer configuring server rack and structured cabling infrastructure"
                        loading="eager"
                        width="560"
                        height="420"
                    />
                </div>

                {{-- Floating Technology Cards --}}

                {{-- Card 1: Network Stable --}}
                <div class="floating-card floating-card--1">
                    <div class="floating-card-icon floating-card-icon--green">
                        <svg viewBox="0 0 24 24">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <div class="floating-card-text">
                        <span class="floating-card-label">Network Stable</span>
                        <span class="floating-card-value">Uptime 99.9%</span>
                    </div>
                </div>

                {{-- Card 2: Low Latency --}}
                <div class="floating-card floating-card--2">
                    <div class="floating-card-icon floating-card-icon--blue">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <div class="floating-card-text">
                        <span class="floating-card-label">Low Latency</span>
                        <span class="floating-card-value">&lt; 1ms Response</span>
                    </div>
                </div>

                {{-- Card 3: Secure Infrastructure --}}
                <div class="floating-card floating-card--3">
                    <div class="floating-card-icon floating-card-icon--purple">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                    </div>
                    <div class="floating-card-text">
                        <span class="floating-card-label">Secure Infrastructure</span>
                        <span class="floating-card-value">Enterprise Grade</span>
                    </div>
                </div>

                {{-- Card 4: Enterprise WiFi --}}
                <div class="floating-card floating-card--4">
                    <div class="floating-card-icon floating-card-icon--orange">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12.55a11 11 0 0 1 14.08 0"/>
                            <path d="M1.42 9a16 16 0 0 1 21.16 0"/>
                            <path d="M8.53 16.11a6 6 0 0 1 6.95 0"/>
                            <line x1="12" y1="20" x2="12.01" y2="20"/>
                        </svg>
                    </div>
                    <div class="floating-card-text">
                        <span class="floating-card-label">Enterprise WiFi</span>
                        <span class="floating-card-value">Full Coverage</span>
                    </div>
                </div>

                {{-- Card 5: 99.9% Connectivity --}}
                <div class="floating-card floating-card--5">
                    <div class="floating-card-icon floating-card-icon--cyan">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="floating-card-text">
                        <span class="floating-card-label">99.9% Connectivity</span>
                        <span class="floating-card-value">Always Connected</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

</body>
</html>
