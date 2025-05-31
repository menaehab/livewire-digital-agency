@extends('front.master')
@section('title', 'testimonial-page')
@section('content')
    @include('front.partials.header', ['title' => 'Testimonial'])
    <!-- Testimonial Start -->
    @include('front.partials.testimonial')
    <!-- Testimonial End -->
@endsection
