<div class="my-3" wire:ignore.self>
    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true" wire:ignore.self data-bs-backdrop="static">
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="submit" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Project</h5>
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
                            <label for="category_id" class="form-label">Category</label>
                            <select wire:model="category_id" id="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" wire:key="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" wire:model="image" id="image" class="form-control"
                                placeholder="Enter image" wire:loading.attr="disabled" />
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @if ($image)
                        <div class="row">
                            <div class="col mb-3">
                                <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" class="img-fluid">
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" wire:model="link" id="link" class="form-control"
                                placeholder="Enter link" />
                            @error('link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea wire:model="description" id="description" class="form-control" placeholder="Enter description"></textarea>
                            @error('description')
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

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            const updateModal = new bootstrap.Modal(document.getElementById('updateModal'));

            Livewire.on('showUpdateModal', () => {
                updateModal.show();
            });

            Livewire.on('hideUpdateModal', () => {
                updateModal.hide();
            });
        });
    </script>
@endpush
