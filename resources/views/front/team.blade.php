@extends('front.master')
@section('title', 'team-page')
@section('content')
    @include('front.partials.header', ['title' => 'Team'])
    <!-- Team Start -->
    @include('front.partials.team')
    <!-- Team End -->
@endsection
