<div class="my-3" wire:ignore.self>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
        Add Counter
    </button>

    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="submit" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Counter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" wire:model="name" id="name" class="form-control"
                                placeholder="Enter Name" />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col mb-3">
                            <label for="count" class="form-label">Count</label>
                            <input type="number" min="1"wire:model="count" id="count" class="form-control"
                                placeholder="Enter count" />
                            @error('count')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" wire:model="icon" id="icon" class="form-control"
                                placeholder="Enter icon" />
                            @error('icon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
