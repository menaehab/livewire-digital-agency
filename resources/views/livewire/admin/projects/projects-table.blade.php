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
                            <th>Image</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (count($projects))
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->image }}</td>
                                    <td>{{ $project->category->name }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('projectShow', {id: {{ $project->id }}})"><i
                                                        class="bx bx-show me-1" data-bs-target="#showModal"
                                                        data-bs-toggle="modal"></i>
                                                    Show</a>
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('projectUpdate', {id: {{ $project->id }}})"><i
                                                        class="bx bx-edit me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('projectDelete', {id: {{ $project->id }}})"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">No Projects Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mx-auto" style="width: 95%">
                {{ $projects->links() }}
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
</div>
