@extends('admin.master')

@section('counters-active', 'active')
@section('title', 'counters')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Counters</h4>
        <livewire:admin.counters.counters-create />
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.counters.counters-table />
                </div>
            </div>
        </div>
        <livewire:admin.counters.counters-update />
        <livewire:admin.counters.counters-delete />
    </div>
@endsection
