@extends('front.master')
@section('title', 'projects-page')
@section('content')
    @include('front.partials.header', ['title' => 'Projects'])
    <!-- Projects Start -->
    @include('front.partials.projects')
    <!-- Projects End -->
@endsection
