@extends('front.master')
@section('title', 'about-page')
@section('content')

    @include('front.partials.header', ['title' => 'About Us'])


    <!-- Feature Start -->
    @include('front.partials.feature')
    <!-- Feature End -->


    <!-- About Start -->
    @include('front.partials.about')
    <!-- About End -->


    <!-- Facts Start -->
    @include('front.partials.fact')
    <!-- Facts End -->


    <!-- Team Start -->
    @include('front.partials.team')
    <!-- Team End -->
@endsection
