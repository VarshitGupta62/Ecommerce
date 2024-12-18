<?php
session_start();
if (!isset($_SESSION['adminUsername'])) {
    header("Location: index.php");
}
include("inc/header.php");
?>

<div class="body-wrapper">
    <div class="container-fluid">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="logo-tab" data-bs-toggle="tab" data-bs-target="#logo" type="button" role="tab" aria-controls="logo" aria-selected="true">About</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="favicon-tab" data-bs-toggle="tab" data-bs-target="#favicon" type="button" role="tab" aria-controls="favicon" aria-selected="false">Contact</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="productTabContent">
            <!-- Logo Tab -->
            <div class="tab-pane fade show active" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                <div class="card card-body py-3">
                    <form id="AboutSectiondata">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="about-title" class="form-label">Page Title</label>
                                <textarea name="about_title" id="footer-copyright" class="form-control footer_heading about_title" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Page Content</label>
                                <div class="mb-3">
                                    <div id="snow-editor-new" style="height: 300px;">
                                    </div>
                                </div>
                            </div>

                            <div class="email-repeater mb-3">
                                <div data-repeater-list="repeater-group">
                                    <div class="email-repeater2 mb-3">
                                        <label class="form-label">Page Images</label>
                                        <input type="file" name="about_images[]" class="form-control mb-3" multiple>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create="" class="btn btn-success hstack gap-6">
                                    Add More File
                                </button>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="favicon" role="tabpanel" aria-labelledby="favicon-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="datatables">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <h4 class="card-title mb-0">All Contact US</h4>
                                    </div>
                                    <div class="table-responsive" style="max-height: 400px; overflow-x: auto; overflow-y: auto;">
                                        <table id="data_show" class="table table-striped table-bordered display">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
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
    $(document).ready(function() {
        // Initialize Quill editor when the DOM is ready
        quillAdd = new Quill('#snow-editor-new', {
            theme: 'snow'
        });

        // Fetch and load existing data into the form
        $.ajax({
            url: "query.php",
            type: "POST",
            data: {
                loadAboutData: true
            },
            success: function(response) {
                var data = JSON.parse(response);

                // Populate form fields with the fetched data
                $("#footer-copyright").val(data.about_title);
                quillAdd.root.innerHTML = data.about_content;

                // Handle multiple images if available
                if (data.about_image) {
                    // Split the images string into an array of filenames
                    var images = data.about_image.split(',');
                    var imageHTML = '';

                    // Loop through each image and generate HTML
                    images.forEach(function(image) {
                        imageHTML += `
                    <div class="image-item mb-3" data-image="${image.trim()}">
                        <img src="uploads/${image.trim()}" alt="Page Image" style="width: 200px; height: 200px;" class="img-thumbnail">
                        <button type="button" class="btn btn-danger btn-sm delete-image" data-image="${image.trim()}">
                            Delete
                        </button>
                    </div>
                `;
                    });

                    // Append the generated image HTML to the target container
                    $(".email-repeater2").append(imageHTML);
                }
            },
            error: function() {
                Swal.fire("Error!", "Failed to fetch about section data.", "error");
            }
        });


        // Handle 'Add More File' button click
        // Handle 'Add More File' button click
        $("button[data-repeater-create]").on("click", function() {
            // Create a new file input element
            var newFileInput = `
        <div class="email-repeater2 mb-3">
            <label class="form-label">Page Images</label>
            <input type="file" name="about_images[]" class="form-control mb-3" multiple>
            <button type="button" class="btn btn-danger btn-sm" data-repeater-delete>Delete</button>
        </div>
    `;

            // Append the new file input to the repeater list
            $("div[data-repeater-list='repeater-group']").append(newFileInput);
        });

        // Handle file input delete button click
        $(document).on("click", "button[data-repeater-delete]", function() {
            $(this).closest(".email-repeater2").remove();
        });


        // Handle file input delete button click
        $(document).on("click", "button[data-repeater-delete]", function() {
            $(this).closest(".row").remove();
        });
    });

    $("#AboutSectiondata").on("submit", function(e) {
        e.preventDefault();

        let editorContent = quillAdd.root.innerHTML;
        let formData = new FormData(this);
        formData.append('about_content', editorContent);


        $.ajax({
            url: "query.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {

                // console.log(response);

                // alert(response);
                if (response == 1) {
                    // $("#AboutSectiondata").trigger("reset");
                    Swal.fire("Success!", "about section updated successfully.", "success");
                } else {
                    Swal.fire("Error!", "Failed to update about section.", "error");
                }
            },
            error: function() {
                Swal.fire("Error!", "An error occurred.", "error");
            }
        });
    });

    $(document).on("click", ".delete-image", function() {
        var imageName = $(this).data("image");
        var imageItem = $(this).closest(".image-item");

        Swal.fire({
            title: "Are you sure?",
            text: "This action will permanently delete the image.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "query.php",
                    type: "POST",
                    data: {
                        deleteImage: true,
                        imageName: imageName
                    },
                    success: function(response) {
                        // alert(response);
                        if (response == 1) {

                            Swal.fire("Deleted!", "The image has been deleted.", "success");
                        } else {
                            Swal.fire("Error!", "Failed to delete the image.", "error");
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