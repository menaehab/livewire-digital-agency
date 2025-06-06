@extends('admin.master')

@section('categories-active', 'active')
@section('title', 'categories')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Categories</h4>
        <livewire:admin.categories.categories-create />
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.categories.categories-table />
                </div>
            </div>
        </div>
        <livewire:admin.categories.categories-update />
        <livewire:admin.categories.categories-delete />
    </div>
@endsection
