<?php
session_start();
if (!isset($_SESSION['adminUsername'])) {
    header("Location: index.php");
}
include("inc/header.php");
?>

<div class="body-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="datatables">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <h4 class="card-title mb-0">All Customers</h4>
                            </div>
                            <div class="table-responsive" style="max-height: 400px; overflow-x: auto; overflow-y: auto;">
                                <table id="data_show" class="table table-striped table-bordered display">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Zip code</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="loadCustomerData">

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 

<?php include("inc/footer.php"); ?>

<script>
    $(document).ready(function() {
        $('#data_show').DataTable({
            
            responsive: true,
            lengthMenu: [10, 25, 50, 100], // Options for the number of rows to show
            pageLength: 10 // Default number of rows displayed
        });
    });
</script>

<script>

    function loadCustomerData() {
        // alert("load function work");
        $.ajax({
            url: "query.php",
            type: 'POST',
            data: {
                loadCustomerData: 1
            },
            success: function(data) {
                // alert(data);
                $('#loadCustomerData').html(data);
            }
        });
    }
    loadCustomerData();

    $(document).on('change', '.form-check-input', function() {
        let categoryId = $(this).data('id');
        let newStatus = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: "query.php",
            type: "POST",
            data: {
                updateCustomerStatus: true,
                id: categoryId,
                status: newStatus
            },
            success: function(response) {
                if (response.trim() === "1") {
                    Swal.fire("Success!", "Customer status updated successfully.", "success");
                } else {
                    Swal.fire("Error!", "Failed to update Customer status.", "error");
                }
            },
            error: function() {
                Swal.fire("Error!", "An error occurred while updating status.", "error");
            },
        });
    });

    $(document).on("click", ".deleteCustomer", function() {
        let id = $(this).data("id");
        let img = $(this).data("deleteimg");

        Swal.fire({
            title: "Are you sure?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "query.php",
                    type: "POST",
                    data: {
                        deleteCustomerById: id,
                        deleteCustomerByImg: img
                    },
                    success: function(response) {
                        if (response == 1) {
                            Swal.fire("Deleted!", "Customer deleted successfully.", "success");
                            loadCustomerData();
                        } else {
                            Swal.fire("Error!", "Failed to delete Customer.", "error");
                        }
                    },
                    error: function() {
                        Swal.fire("Error!", "An error occurred.", "error");
                    }
                });
            }
        });
    });


    
</script>