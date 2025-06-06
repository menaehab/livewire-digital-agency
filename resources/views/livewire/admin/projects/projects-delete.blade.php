<div wire:ignore.self>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true" wire:ignore.self data-bs-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this project? This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-danger" wire:click="delete" wire:loading.attr="disabled">
                        <span wire:loading.remove>Delete</span>
                        <span wire:loading>Deleting...</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:initialized', () => {
        const deleteModal = document.getElementById('deleteModal');
        if (deleteModal) {
            const modal = new bootstrap.Modal(deleteModal);
            
            Livewire.on('showDeleteModal', () => {
                modal.show();
            });
            
            Livewire.on('hideDeleteModal', () => {
                modal.hide();
            });

            // Reset form when modal is closed
            deleteModal.addEventListener('hidden.bs.modal', function () {
                Livewire.dispatch('resetForm');
            });
        }
    });
</script>
@endpush
