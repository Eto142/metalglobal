<!-- Deposit Success Modal -->
<div id="depositSuccessModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deposit Successful</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="modalMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>

    // JavaScript to handle form submission and show modal on success
document.getElementById('depositForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('/make-deposit', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Populate modal message
            document.getElementById('modalMessage').textContent = `${data.message} Transaction ID: ${data.data.transaction_id}`;
            // Show the modal
            $('#depositSuccessModal').modal('show');
        } else {
            alert('There was an issue with the deposit.');
        }
    })
    .catch(error => console.error('Error:', error));
});

</script>