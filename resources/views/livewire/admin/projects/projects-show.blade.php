<div class="my-3" wire:ignore.self>
    <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Show Project</h5>
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
                            <label for="link" class="form-label">Link</label>
                            <input type="text" readonly wire:model="link" id="link" class="form-control"
                                placeholder="Enter Link" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="categoryName" class="form-label">Category</label>
                            <input type="text" readonly wire:model="categoryName" id="categoryName"
                                class="form-control" placeholder="Enter Category" />
                        </div>
                        <div class="col mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea readonly wire:model="description" id="description" class="form-control" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="image" class="form-label">Image</label>
                            <img src="{{ asset('storage/projects/' . $image) }}" alt="Image" class="img-fluid">
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
