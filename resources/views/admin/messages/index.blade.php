@extends('admin.master')

@section('messages-active', 'active')
@section('title', 'messages')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Messages</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <livewire:admin.messages.messages-table />
                </div>
            </div>
        </div>
        <livewire:admin.messages.messages-delete />
        <livewire:admin.messages.messages-show />
    </div>
@endsection
