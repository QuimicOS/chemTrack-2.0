<!-- resources/views/invalidateLabel.blade.php -->


<?php $__env->startSection('title', 'Invalidate Label - ChemTrack'); ?>

<?php $__env->startSection('content'); ?>
<div class="text-center mb-4">
    <h1 class="display-5">Invalidate Label</h1>
    <hr class="my-4">
</div>

<div class="mb-4">
    <label for="labelID" class="form-label">Label ID</label>
    <input type="text" class="form-control w-50 mx-auto" id="labelID" placeholder="Enter Label ID">
</div>

<div class="mb-4">
    <label for="reason" class="form-label">Reason for Invalidation</label>
    <textarea class="form-control w-50 mx-auto" id="reason" rows="4" placeholder="Enter reason..."></textarea>
</div>

<div class="text-center">
    <button class="btn btn-outline-danger" onclick="showModal()">Invalidate</button>
</div>

<!-- Modal for Invalidation Confirmation -->
<div class="modal fade" id="invalidateModal" tabindex="-1" aria-labelledby="invalidateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="invalidateModalLabel">Confirm Invalidation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Label ID:</strong> <span id="modalLabelID"></span></p>
                <p><strong>Reason:</strong> <span id="modalReason"></span></p>
                <p>Are you sure you want to invalidate this label?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Confirm Invalidate</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showModal() {
        const labelID = document.getElementById('labelID').value;
        const reason = document.getElementById('reason').value;

        if (labelID === "" || reason === "") {
            alert("Please fill in both the Label ID and Reason before proceeding.");
            return;
        }

        document.getElementById('modalLabelID').textContent = labelID;
        document.getElementById('modalReason').textContent = reason;
        
        var modal = new bootstrap.Modal(document.getElementById('invalidateModal'));
        modal.show();
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.templateAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\orlan_t0jk0pf\Herd\practice\resources\views/invalidLabel.blade.php ENDPATH**/ ?>