<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('admin-assets') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('admin-assets') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('admin-assets') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('admin-assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('admin-assets') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('admin-assets') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('admin-assets') }}/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('admin-assets') }}/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
    // Handle success message auto-hide
    document.addEventListener('DOMContentLoaded', function() {
        Livewire.hook('morph.updated', ({ el, component }) => {
            setTimeout(() => {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 3000);
        });

        // Initialize modals
        const initModals = () => {
            // Handle create modal
            const createModalEl = document.getElementById('createModal');
            if (createModalEl) {
                const createModal = new bootstrap.Modal(createModalEl);
                window.addEventListener('showCreateModal', () => createModal.show());
                window.addEventListener('hideCreateModal', () => createModal.hide());
            }

            // Handle update modal
            const updateModalEl = document.getElementById('updateModal');
            if (updateModalEl) {
                const updateModal = new bootstrap.Modal(updateModalEl);
                window.addEventListener('showUpdateModal', () => updateModal.show());
                window.addEventListener('hideUpdateModal', () => updateModal.hide());
            }

            // Handle delete modal
            const deleteModalEl = document.getElementById('deleteModal');
            if (deleteModalEl) {
                const deleteModal = new bootstrap.Modal(deleteModalEl);
                window.addEventListener('showDeleteModal', () => deleteModal.show());
                window.addEventListener('hideDeleteModal', () => deleteModal.hide());
            }

            // Handle show modal
            const showModalEl = document.getElementById('showModal');
            if (showModalEl) {
                const showModal = new bootstrap.Modal(showModalEl);
                window.addEventListener('showShowModal', () => showModal.show());
                window.addEventListener('hideShowModal', () => showModal.hide());
            }
        };

        // Initialize modals on page load
        initModals();

        // Re-initialize modals after Livewire updates
        document.addEventListener('livewire:update', initModals);
    });
</script>
