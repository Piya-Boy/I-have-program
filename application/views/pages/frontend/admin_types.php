<div class="container-fluid ">
    <div class="row mb-5">
        <div class="col-xl-4 col-lg-12">
            <div class="card card-rounded shadow  mt-5">
                <div class="card-body">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-4">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_file_types">
                                <i class="fas fa-plus"></i> Add
                            </button>
                        </div>
                        <table class="
                    table table-dark table-hover table-responsive
                    text-center
                  " id="table1">
                            <thead>
                                <tr>
                                    <th class="col">#</th>
                                    <th class="col">File type</th>
                                    <th class="col">Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id = 1;
                                foreach ($file_types as $rows) { ?>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $rows['file_type']; ?></td>
                                        <td class="col">
                                            <button class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#edit_file_types<?php echo $rows['id']; ?>">
                                                <i class="fas fa-edit me-2"></i>Edit
                                            </button>
                                            <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#delete_file_types<?php echo $rows['id']; ?>">
                                                <i class="fas fa-trash-alt me-2"></i>Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card card-rounded shadow  mt-5">
                <div class="card-body">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-4">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_file_sizes">
                                <i class="fas fa-plus"></i> Add
                            </button>
                        </div>
                        <table class="
                    table table-dark table-hover table-responsive
                    text-center
                  " id="table2">
                            <thead>
                                <tr>
                                    <th class="col">#</th>
                                    <th class="col">File size</th>
                                    <th class="col">Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id = 1;
                                foreach ($file_sizes as $rows) { ?>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $rows['file_sizes']; ?></td>
                                        <td class="col">
                                            <button class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#edit_file_sizes<?php echo $rows['id']; ?>">
                                                <i class="fas fa-edit me-2"></i>Edit
                                            </button>
                                            <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#delete_file_sizes<?php echo $rows['id']; ?>">
                                                <i class="fas fa-trash-alt me-2"></i>Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card card-rounded shadow  mt-5">
                <div class="card-body">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-4">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_types">
                                <i class="fas fa-plus"></i> Add
                            </button>
                        </div>
                        <table class="
                    table table-dark table-hover table-responsive
                    text-center
                  " id="table3">
                            <thead>
                                <tr>
                                    <th class="col">#</th>
                                    <th class="col">Type</th>
                                    <th class="col">Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id = 1;
                                foreach ($type_name as $rows) { ?>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $rows['types']; ?></td>
                                        <td class="col">
                                            <button class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#edit_types<?php echo $rows['id']; ?>">
                                                <i class="fas fa-edit me-2"></i>Edit
                                            </button>
                                            <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#delete_types<?php echo $rows['id']; ?>">
                                                <i class="fas fa-trash-alt me-2"></i>Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add file types -->
<div class="modal fade" id="add_file_types" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">File types</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="was-validated" action="add_file_types" method="post">
                <div class="modal-body">
                    <div class="row ">
                        <div class="form-group">
                            <Label>File types</Label>
                            <input type="text" autocomplete="off" class="form-control" name="file_types" placeholder="File types" required="required">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add file sizes -->
<div class="modal fade" id="add_file_sizes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">File sizes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="was-validated" action="add_file_sizes" method="post">
                <div class="modal-body">
                    <div class="row ">
                        <div class="form-group">
                            <Label>File types</Label>
                            <input type="text" autocomplete="off" class="form-control" name="file_sizes" placeholder="File sizes" required="required">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add types -->
<div class="modal fade" id="add_types" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Types</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="was-validated" action="add_types" method="post">
                <div class="modal-body">
                    <div class="row ">
                        <div class="form-group">
                            <Label>Types</Label>
                            <input type="text" autocomplete="off" class="form-control" name="types" placeholder="Types" required="required">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit file types -->
<?php foreach ($file_types as $rows) { ?>
    <div class="modal fade" id="edit_file_types<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">File types</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="up_file_types" method="post">
                    <div class="modal-body">
                        <div class="row ">
                            <div class="form-group">
                                <Label>File types</Label>
                                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
                                <input type="text" autocomplete="off" class="form-control" name="file_types" value="<?php echo $rows['file_type']; ?>" placeholder="File types" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete -->
    <div class="modal fade" id="delete_file_types<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="delete_file_types" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
                        <h3 class="h3">Do you want to Delete ??</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Edit file sizes -->
<?php foreach ($file_sizes as $rows) { ?>
    <div class="modal fade" id="edit_file_sizes<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">File sizes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="up_file_sizes" method="post">
                    <div class="modal-body">
                        <div class="row ">
                            <div class="form-group">
                                <Label>File sizes</Label>
                                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
                                <input type="text" autocomplete="off" class="form-control" name="file_sizes" value="<?php echo $rows['file_sizes']; ?>" placeholder="File sizes" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete -->
    <div class="modal fade" id="delete_file_sizes<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="delete_file_sizes" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
                        <h3 class="h3">Do you want to Delete ??</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Edit types -->
<?php foreach ($type_name as $rows) { ?>
    <div class="modal fade" id="edit_types<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Types</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="up_types" method="post">
                    <div class="modal-body">
                        <div class="row ">
                            <div class="form-group">
                                <Label>Types</Label>
                                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
                                <input type="text" autocomplete="off" class="form-control" name="types" value="<?php echo $rows['types']; ?>" placeholder="Types" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete -->
    <div class="modal fade" id="delete_types<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="delete_types" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
                        <h3 class="h3">Do you want to Delete ??</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>