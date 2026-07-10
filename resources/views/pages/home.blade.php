@extends('layouts.app')

@section('title', config('company.name') . ' — ' . config('company.tagline'))
@section('meta_description', config('company.description'))

@section('content')
    <!-- Main Hero -->
    <x-hero />

    <!-- Trust & Credibility -->
    <x-trusted-by />

    <!-- Core Information -->
    <x-about />
    <x-stats />

    <!-- Offerings -->
    <x-services />
    
    <!-- Coverage & Partners -->
    <x-service-area />
    <x-tech-partners />

    <!-- Workflow -->
    <x-process />

    <!-- Social Proof -->
    <x-portfolio />
    <x-testimonials />

    <!-- Conversion & Support -->
    <x-faq />
    <x-emergency-support />
    <x-contact />
@endsection
