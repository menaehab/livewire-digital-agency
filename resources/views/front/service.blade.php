@extends('front.master')
@section('title', 'service-page')
@section('content')
    @include('front.partials.header', ['title' => 'Service'])
    <!-- Service Start -->
    @include('front.partials.service')
    <!-- Service End -->
@endsection
