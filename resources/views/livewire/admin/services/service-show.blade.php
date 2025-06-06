<div class="my-3" wire:ignore.self>
    <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Show Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" readonly wire:model="name" id="name" class="form-control"
                                placeholder="Enter Name" />
                        </div>
                        <div class="col mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" readonly wire:model="icon" id="icon" class="form-control"
                                placeholder="Enter Icon" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea readonly wire:model="description" id="description" class="form-control" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
