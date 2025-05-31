@extends('front.master')
@section('title', 'home-page')
@section('content')
    <!-- Hero Start -->
    @include('front.partials.header', ['title' => 'home'])
    <!-- Hero End -->
    <!-- Feature Start -->
    @include('front.partials.feature')
    <!-- Feature End -->


    <!-- About Start -->
    @include('front.partials.about')
    <!-- About End -->


    <!-- Facts Start -->
    @include('front.partials.fact')
    <!-- Facts End -->


    <!-- Service Start -->
    @include('front.partials.service')
    <!-- Service End -->


    <!-- Newsletter Start -->
    @include('front.partials.news-letter')
    <!-- Newsletter End -->


    <!-- Projects Start -->
    @include('front.partials.projects')
    <!-- Projects End -->


    <!-- Testimonial Start -->
    @include('front.partials.testimonial')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('front.partials.team')
    <!-- Team End -->
@endsection
