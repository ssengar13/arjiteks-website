<?php
include_once "header.php";
include_once "database/connect.php";
?>
<style>
    #button {
        background: linear-gradient(118deg, #15283F, rgb(26 26 26 / 69%));
        box-shadow: 0 0 5px 1px rgba(115, 103, 240, 0.7);
        color: #fff;
        border-radius: 10px;
    }

    .feather-icon {
        margin-right: 10px;
        /* Adjust the margin as per your preference */
        width: 20px;
        /* Adjust the width as per your preference */
        height: 20px;
        /* Adjust the height as per your preference */
    }

    @keyframes rotateAnimation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .animated-icon {
        animation: rotateAnimation 2s linear infinite;
    }
</style>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">

                        <h2 class="content-header-title float-left mb-0"><?php if ($page == "") {
                                                                                echo "Dashboard";
                                                                            } else {
                                                                                echo ucfirst($page);
                                                                            } ?>
                        </h2>
                        <button class="btn btn-primary d-block d-sm-none" id="button" data-toggle="modal" data-target="#createExtensionModal" style="float:right;">Add Lead</button>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="?page=dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><?php if ($page == "") {
                                                                        echo "Dashboard";
                                                                    } else {
                                                                        echo ucfirst($page);
                                                                    } ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <button class="btn btn-primary" id="button" data-toggle="modal" data-target="#createExtensionModal">Add</button>
            </div>
        </div>
        <div class="content-body">
            <!-- Kick start -->
            <div class="card">
                <div class="card-header p-1 bg-primary">
                    <h4 class="card-title text-white"><i data-feather="list" class="feather-icon animated-icon"></i>Dashboard</h4>
                </div>
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>Title</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM blogs";
                                $res = mysqli_query($conn, $sql);

                                foreach ($res as $menu) {

                                    $id = $menu['id'];
                                    $heading1 = $menu['heading1'];
                                    $created_by = $menu['created_by'];
                                    $created_at = $menu['created_at'];
                                ?>
                                    <tr>
                                        <td><?php echo $menu['heading1']; ?></td>
                                        <td><?php echo $menu['created_by']; ?></td>
                                        <td><?php echo $menu['created_at']; ?></td>


                                        <td>
                                            <div class="btn-group" role="group" aria-label="Edit and Delete Buttons">
                                                <!-- <button data-toggle="modal" data-target="#viewExtensionModal<?php echo $i; ?>" class="btn btn-success mr-1 rounded" style="padding-left: 6px; padding-right: 4px; padding-top: 7px; padding-bottom: 8px; border-top-width: 1px; width: 39px; height: 34px;"><i class="fa fa-eye "></i></button> -->
                                                <button data-toggle="modal" data-target="#editExtensionModal<?php echo $id; ?>" class="btn btn-primary mr-1 rounded" style="padding-left: 6px; padding-right: 4px; padding-top: 7px; padding-bottom: 8px; border-top-width: 1px; width: 39px; height: 34px;">
                                                    <i class="fa fa-edit "></i></button>
                                                <button data-toggle="modal" data-target="#deleteExtensionModal<?php echo $id; ?>" class="btn btn-danger rounded" style="padding-left: 6px; padding-right: 4px; padding-top: 7px; padding-bottom: 8px; border-top-width: 1px; width: 39px; height: 34px;"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!--Edit Dashboard Modal -->

                                    <form method="post" action="database/submit.php" enctype="multipart/form-data">
                                        <div class="modal fade" id="editExtensionModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title text-white" id="exampleModalCenterTitle"><i data-feather="edit" class="feather-icon animated-icon"></i> Edit Blogs</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="heading1">Heading<span class="required text-danger">*</span></label>
                                                                    <input type="text" name="heading1" id="heading1" value="<?php echo $menu['heading1']; ?>" placeholder="Add Heading" required class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="para1">Paragraph<span class="required text-danger">*</span></label>
                                                                    <textarea name="para1" id="para1" placeholder="Add Description" required class="summernote form-control"><?php echo $menu['para1']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="bullets">Bullets <span class="required text-danger">*</span></label>
                                                                    <textarea name="bullets" id="bullets" placeholder="Add Description" required class="summernote form-control"><?php echo $menu['bullets']; ?></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="img">Image<span class="required text-danger">*</span></label>
                                                                    <input type="file" id="img" name="img" required class="form-control">
                                                                    <?php if (isset($menu['img']) && !empty($menu['img'])) : ?>
                                                                        <p>Current Image: <?php echo $menu['img']; ?></p>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="created_by">Created By<span class="required text-danger">*</span></label>
                                                                    <input type="text" id="created_by" value="<?php echo $menu['created_by']; ?>" name="created_by" required class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="created_by">Type<span class="required text-danger">*</span></label>
                                                                    <select name="type" class="form-control" id="type">
                                                                        <option value="Select" <?php echo ($selectedType == 'Select') ? 'selected' : ''; ?>>Select</option>
                                                                        <option value="Buisness" <?php echo ($selectedType == 'Buisness') ? 'selected' : ''; ?>>Buisness</option>
                                                                        <option value="Information Technology" <?php echo ($selectedType == 'Information Technology') ? 'selected' : ''; ?>>Information Technology</option>
                                                                        <option value="Security" <?php echo ($selectedType == 'Security') ? 'selected' : ''; ?>>Security</option>
                                                                        <option value="Telecommunications" <?php echo ($selectedType == 'Telecommunications') ? 'selected' : ''; ?>>Telecommunications</option>
                                                                        <option value="Software" <?php echo ($selectedType == 'Software') ? 'selected' : ''; ?>>Software</option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="tags">Tags<span class="required text-danger">*</span></label>
                                                                    <input type="text" id="tags" name="tags" value="<?php echo $menu['tags']; ?>" required class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="conclusion">Conclusion<span class="required text-danger">*</span></label>
                                                                    <textarea name="conclusion" id="conclusion" placeholder="Add Description" required class="summernote form-control"><?php echo $menu['conclusion']; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ">(<span class="text-danger">*</span>) Fields are Required.</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                                                        <button type="submit" class="btn btn-primary" name="edit_blog">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    <form method="post" action="database/submit.php" enctype="multipart/form-data">
                                        <div class="modal fade" id="deleteExtensionModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title text-white" id="exampleModalCenterTitle"><i data-feather="edit" class="feather-icon animated-icon"></i> Delete Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <p class="text-center mb-4">Are you sure you want to delete?</p>
                                                                    <div class="d-flex justify-content-center">
                                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                                        <button class="btn btn-primary mr-3" name="delete_modal">Yes</button>
                                                                        <button data-dismiss="modal" class="btn btn-primary">No</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="dashboard" method="post" enctype="multipart/form-data" action="database/submit.php">
    <div class="modal fade" id="createExtensionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalCenterTitle"><i data-feather="list" class="feather-icon animated-icon"></i>Add Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="heading1">Heading<span class="required text-danger">*</span></label>
                                <input type="text" name="heading1" id="heading1" placeholder="Add Heading" required class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="para1">Paragraph 1<span class="required text-danger">*</span></label>
                                <textarea name="para1" id="para1" placeholder="Add Description" required class="summernote form-control"></textarea>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="bullets">Bullets <span class="required text-danger">*</span></label>
                                <textarea name="bullets" id="bullets" placeholder="Add Description" required class="summernote form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="img">Image<span class="required text-danger">*</span></label>
                                <input type="file" id="img" name="img" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="created_by">Created By<span class="required text-danger">*</span></label>
                                <input type="text" id="created_by" name="created_by" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Type<span class="required text-danger">*</span></label>
                                <select name="type" class="form-control" id="type">
                                    <option value="Select">Select</option>
                                    <option value="Buisness">Buisness</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Security">Security</option>
                                    <option value="Telecommunications">Telecommunications</option>
                                    <option value="Software">Software</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tags">Tags<span class="required text-danger">*</span></label>
                                <input type="text" id="tags" name="tags" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="conclusion">Conclusion<span class="required text-danger">*</span></label>
                                <textarea name="conclusion" id="conclusion" placeholder="Add Description" required class="summernote form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <span class="text-muted ">(<span class="text-danger">*</span>) Fields are Required.</span>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="add_blog">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $('.summernote').summernote({
        placeholder: 'Add Description',
        tabsize: 2,
        height: 100
    });
</script>
<?php
include_once "footer.php";
?>