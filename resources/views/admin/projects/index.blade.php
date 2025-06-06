@extends('admin.master')

@section('projects-active', 'active')
@section('title', 'projects')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Projects</h4>
        <livewire:admin.projects.projects-create />
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.projects.projects-table />
                </div>
            </div>
        </div>
        <livewire:admin.projects.projects-update />
        <livewire:admin.projects.projects-delete />
        <livewire:admin.projects.projects-show />
    </div>
@endsection
