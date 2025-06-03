@extends('admin.master')

@section('settings-active', 'active')
@section('title', 'settings')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Settings</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.settings.update-settings />
                </div>
            </div>
        </div>
    </div>
@endsection
