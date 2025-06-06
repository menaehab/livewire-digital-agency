<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class=""><input type="text" wire:model.live.debounce.200ms="search" placeholder="Search"
                    class="form-control mx-auto" style="max-width: 250px"></div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Count</th>
                            <th>Icon</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (count($counters))
                            @foreach ($counters as $counter)
                                <tr>
                                    <td>{{ $counter->name }}</td>
                                    <td>{{ $counter->count }}</td>
                                    <td>{{ $counter->icon }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('counterUpdate', {id: {{ $counter->id }}})"><i
                                                        class="bx bx-edit-alt me-1" data-bs-target="#updateModal"
                                                        data-bs-toggle="modal"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('counterDelete', {id: {{ $counter->id }}})"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">No Counters Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mx-auto" style="width: 95%">
                {{ $counters->links() }}
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
</div>
