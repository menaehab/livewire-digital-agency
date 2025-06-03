@extends('admin.master')

@section('skills-active', 'active')
@section('title', 'skills')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Skills</h4>
        <livewire:admin.skills.skills-create />
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.skills.skills-table />
                </div>
            </div>
        </div>
        <livewire:admin.skills.skills-update />
        <livewire:admin.skills.skills-delete />
        <livewire:admin.skills.skills-show />
    </div>
@endsection
