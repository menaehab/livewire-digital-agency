@extends('admin.master')

@section('subscribers-active', 'active')
@section('title', 'subscribers')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Subscribers</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.subscribers.subscribers-table />
                </div>
            </div>
        </div>
        <livewire:admin.subscribers.subscribers-delete />
    </div>
@endsection
