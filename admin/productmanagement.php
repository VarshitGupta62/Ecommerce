<?php
session_start();
if (!isset($_SESSION['adminUsername'])) {
    header("Location: index.php");
}
include("inc/header.php");
?>

<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card card-body py-3">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-sm-flex align-items-center justify-space-between">
                        <h4 class="mb-4 mb-sm-0 card-title"> Add Product</h4>
                        <nav aria-label="breadcrumb" class="ms-auto">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">
                                    <button type="button" class="btn btn-rounded btn-secondary" data-bs-toggle="modal" data-bs-target="#product-modal">
                                        Add Product
                                    </button>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="datatables">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <h4 class="card-title mb-0">All Products</h4>
                            </div>
                            <div class="table-responsive" style="max-height: 400px; overflow-x: auto; overflow-y: auto;">
                                <table id="file_export" class="table table-striped table-bordered display">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Subcategory</th>
                                            <th>Product Name</th>
                                            <th>Old Price (₹)</th>
                                            <th>New Price (₹)</th>
                                            <th>Description</th>
                                            <th>Overview</th>
                                            <th>Offer</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="loadProductData">

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

<div class="modal fade" id="product-modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="exampleModalLabel1">Add Product</h4>
                <button type="button" class="btn-close addmodelclose" data-bs-dismiss="modal"></button>
            </div>
            <form id="productForm">
                <div class="modal-body">
                    <!-- Subcategory -->
                    <div class="mb-3">
                        <label for="subcategory-id" class="form-label">Subcategory</label>
                        <select name="subcategory_id" id="subcategory-id" class="form-control select2">
                            <!-- Dynamic options -->
                        </select>
                    </div>

                    <!-- Product Name -->
                    <div class="mb-3">
                        <label for="product-name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="product-name" class="form-control" required>
                    </div>

                    <!-- Old Price -->
                    <div class="mb-3">
                        <label for="old-price" class="form-label">Old Price (₹)</label>
                        <input type="text" name="p_old_price" id="old-price" class="form-control" required>
                    </div>

                    <!-- New Price -->
                    <div class="mb-3">
                        <label for="new-price" class="form-label">New Price (₹)</label>
                        <input type="text" name="p_new_price" id="new-price" class="form-control" required>
                    </div>

                    <!-- Product Description -->
                    <div class="mb-3">
                        <label for="product-description" class="form-label">Description</label>
                        <textarea name="p_description" id="product-description" class="form-control" rows="3" placeholder="Enter product description"></textarea>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="p_qty" id="quantity" class="form-control" required>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label for="product-image" class="form-label">Product Image</label>
                        <input type="file" name="p_image" id="product-image" class="form-control" required>
                    </div>

                    <!-- Overview -->
                    <div class="mb-3">
                        <label for="overview" class="form-label">Overview</label>
                        <input type="text" name="p_overview" id="overview" class="form-control" placeholder="Enter overview">
                    </div>

                    <!-- Offer -->
                    <div class="mb-3">
                        <label for="offer" class="form-label">Offer</label>
                        <input type="text" name="p_offer" id="offer" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="product-modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="exampleModalLabel1">Edit Product</h4>
                <button type="button" class="btn-close editmodelclose" data-bs-dismiss="modal"></button>
            </div>
            <form id="EditproductForm">
                <div class="modal-body">
                    <!-- Subcategory -->
                    <div class="mb-3">
                        <label for="subcategory-id" class="form-label">Subcategory</label>
                        <select name="new_subcategory_id" id="subcategory-id2" class="form-control select2  new_subcategory_id">
                            <!-- Dynamic options -->
                        </select>
                    </div>

                    <!-- Product Name -->
                    <div class="mb-3">
                        <label for="product-name" class="form-label">Product Name</label>
                        <input type="text" name="new_product_name" id="product-name" class="form-control new_product_name" required>
                    </div>

                    <!-- Old Price -->
                    <div class="mb-3">
                        <label for="old-price" class="form-label">Old Price (₹)</label>
                        <input type="text" name="new_p_old_price" id="old-price" class="form-control new_p_old_price" required>
                    </div>

                    <!-- New Price -->
                    <div class="mb-3">
                        <label for="new-price" class="form-label">New Price (₹)</label>
                        <input type="text" name="new_p_new_price" id="new-price" class="form-control new_p_new_price" required>
                    </div>

                    <!-- Product Description -->
                    <div class="mb-3">
                        <label for="product-description" class="form-label">Description</label>
                        <textarea name="new_p_description" id="product-description" class="form-control new_p_description" rows="3" placeholder="Enter product description"></textarea>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="new_p_qty" id="quantity" class="form-control new_p_qty" required>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label">Current Image</label> <!-- Show current About image -->
                        <div class="text-center">
                            <img src='' class="carouselImage img-fluid rounded border" alt='Image not found' id="currentAboutImage" style="max-height: 200px; width: auto;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="product-image" class="form-label">New Image</label>
                        <input type="file" name="new_p_image" id="product-image" class="form-control new_p_image" >
                    </div>

                    <!-- Overview -->
                    <div class="mb-3">
                        <label for="overview" class="form-label">Overview</label>
                        <input type="text" name="new_p_overview" id="overview" class="form-control new_p_overview" placeholder="Enter overview">
                    </div>

                    <!-- Offer -->
                    <div class="mb-3">
                        <label for="offer" class="form-label">Offer</label>
                        <input type="text" name="new_p_offer" id="offer" class="form-control new_p_offer">
                    </div>
                </div>

                <input type="hidden" name="productDataId" id="productDataId" >

                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary">Save Change</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("inc/footer.php"); ?>

<script>
    function loadSubcategories() {
        $.ajax({
            url: "query.php",
            type: 'POST',
            data: {
                loadSubcategories: 1
            },
            success: function(data) {
                $("#subcategory-id").html("<option value=''>Select Subcategory</option>" + data);
                $("#subcategory-id2").html("<option value=''>Select Subcategory</option>" + data);
            },
            error: function() {
                Swal.fire("Error!", "Failed to load subcategories.", "error");
            }
        });
    }

    function loadProductData() {
        $.ajax({
            url: "query.php",
            type: 'POST',
            data: {
                loadProductData: 1
            },
            success: function(data) {
                $('#loadProductData').html(data);
                // alert(data);
            }
        });
    }

    $("#productForm").on("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            url: "query.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                // alert(response);
                if (response == 1) {
                    $('#productForm').trigger("reset");
                    $('.addmodelclose').click();
                    Swal.fire("Success!", "Product added successfully.", "success");
                    loadProductData();
                } else {
                    Swal.fire("Error!", "Failed to add product.", "error");
                }
            },
            error: function() {
                Swal.fire("Error!", "An error occurred.", "error");
            }
        });
    });

    $(document).on("click", ".deleteProduct", function() {
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
                        deleteProductById: id,
                        deleteProductByImg: img
                    },
                    success: function(response) {
                        if (response == 1) {
                            Swal.fire("Deleted!", "Product deleted successfully.", "success");
                            loadProductData();
                        } else {
                            Swal.fire("Error!", "Failed to delete product.", "error");
                        }
                    },
                    error: function() {
                        Swal.fire("Error!", "An error occurred.", "error");
                    }
                });
            }
        });
    });

    $(document).on('click', '.loadEditForm', function() {
        let id = $(this).data('id');
        $.ajax({
            url: "query.php",
            type: "POST",
            data: {
                loadProductEditForm: id
            },
            success: function(response) {

                // alert("response is "+response);
                var data = JSON.parse(response);
                $('#currentAboutImage').attr('src', 'uploads/' + data.p_image); // Display current About image
                $('#productDataId').val(data.id);
                $('.new_subcategory_id').val(data.subcategory_id);
                $('.new_product_name').val(data.product_name);
                $('.new_p_old_price').val(data.p_old_price);
                $('.new_p_new_price').val(data.P_new_price);
                $('.new_p_description').val(data.p_description);
                $('.new_p_qty').val(data.p_qty);
                $('.new_p_overview').val(data.p_overview);
                $('.new_p_offer').val(data.p_offer);
            }
        });
    });

    $(document).on('change', '.form-check-input', function() {
        let categoryId = $(this).data('id');
        let newStatus = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: "query.php",
            type: "POST",
            data: {
                updateProductStatus: true,
                id: categoryId,
                status: newStatus
            },
            success: function(response) {
                if (response.trim() === "1") {
                    Swal.fire("Success!", "Category status updated successfully.", "success");
                } else {
                    Swal.fire("Error!", "Failed to update category status.", "error");
                }
            },
            error: function() {
                Swal.fire("Error!", "An error occurred while updating status.", "error");
            },
        });
    });

    $('#EditproductForm').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        // alert("button Click");
        $.ajax({
            url: "query.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                // alert(data);
                if (data == 1) {
                    alert("Updated Successfully");
                    $('#EditproductForm').trigger('reset');
                    $('.editmodelclose').click();
                    loadProductData();
                }else{
                    alert("Failed to update");
                }
            }
        });
    });

    loadSubcategories();
    loadProductData();
</script>