<?php

include("inc/header.php");


?>





<!-- -------------------------------------------- -->
<!-- Welcome Card -->
<!-- -------------------------------------------- -->
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card card-body py-3">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-sm-flex align-items-center justify-space-between">
                        <h4 class="mb-4 mb-sm-0 card-title"> Add Category</h4>
                        <nav aria-label="breadcrumb" class="ms-auto">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">
                                    <button type="button" class="btn btn-rounded btn-secondary" data-bs-toggle="modal" data-bs-target="#samedata-modal" data-bs-whatever="@mdo">
                                        Add Category
                                    </button>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- start Basic Area Chart -->
        <div class="row">
            <div class="col-lg-12 ">


                <div class="datatables">
                    <!-- start File export -->
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <h4 class="card-title mb-0">All Category</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Category Name</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td>Delete</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
        <!-- end Basic Area Chart -->
    </div>
</div>


<!---------------------------------- model for add Product -------------------------------->


<div class="modal fade" id="samedata-modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="exampleModalLabel1">
                    New message
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="">
                    <div class="mb-3">
                        <label for="recipient-name" class="">Category Name:</label>
                        <input type="text" name="category_name" class="form-control" id="recipient-name1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-danger-subtle text-danger " data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-secondary">
                    Add
                </button>
            </div>
        </div>
    </div>
</div>





<?php

include("inc/footer.php");

?>