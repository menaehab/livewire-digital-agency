@extends('admin.master')

@section('services-active', 'active')
@section('title', 'services')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Services</h4>
        <livewire:admin.services.service-create />
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.services.service-table />
                </div>
            </div>
        </div>
        <livewire:admin.services.service-update />
        <livewire:admin.services.service-delete />
        <livewire:admin.services.service-show />
    </div>
@endsection
