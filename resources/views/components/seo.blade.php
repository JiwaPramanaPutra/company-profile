@props([
    'title' => config('company.name') . ' - ' . config('company.tagline'),
    'description' => config('company.description'),
    'image' => asset('images/seo/og-image.jpg'),
    'type' => 'website'
])

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ $title }}">
<meta property="twitter:description" content="{{ $description }}">
<meta property="twitter:image" content="{{ $image }}">

<link rel="canonical" href="{{ url()->current() }}">

<!-- JSON-LD LocalBusiness Schema -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "LocalBusiness",
  "name": "{{ config('company.name') }}",
  "image": "{{ $image }}",
  "url": "{{ url('/') }}",
  "telephone": "{{ config('company.contact.phone') }}",
  "address": {
    "@@type": "PostalAddress",
    "streetAddress": "Jl. Teknologi Canggih No. 42",
    "addressLocality": "Denpasar",
    "addressRegion": "Bali",
    "addressCountry": "ID"
  },
  "openingHoursSpecification": {
    "@@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    "opens": "08:00",
    "closes": "17:00"
  },
  "sameAs": [
    "{{ config('company.social.linkedin') }}",
    "{{ config('company.social.instagram') }}",
    "{{ config('company.social.facebook') }}"
  ]
}
</script>
