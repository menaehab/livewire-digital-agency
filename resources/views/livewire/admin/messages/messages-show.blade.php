<div class="my-3" wire:ignore.self>
    <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Show Message</h5>
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
                            <label for="email" class="form-label">Email</label>
                            <input type="text" readonly wire:model="email" id="email" class="form-control"
                                placeholder="Enter Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" readonly wire:model="subject" id="subject" class="form-control"
                                placeholder="Enter Subject" />
                        </div>
                        <div class="col mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" readonly wire:model="status" id="status" class="form-control"
                                placeholder="Enter Status" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="messageText" class="form-label">Message</label>
                            <textarea readonly wire:model="messageText" id="messageText" class="form-control" rows="5"
                                placeholder="Enter Message"></textarea>
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
