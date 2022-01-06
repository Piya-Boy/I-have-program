<div class="container-fluid ">
    <div class="card card-rounded shadow  mt-5">
        <div class="card-body">
            <div class="col-12">
                <div class="d-flex justify-content-end mb-4">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
                        <i class="fas fa-plus"></i> Add
                    </button>
                </div>
                <table class="
                    table table-dark table-hover table-responsive
                    text-center
                  " id="table">
                    <thead>
                        <tr>
                            <th class="col">#</th>
                            <th>Image</th>
                            <th>File Name</th>
                            <th class="col">Download</th>
                            <th class="col">File size</th>
                            <th class="col">File type</th>
                            <th>Password</th>
                            <th class="col">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = 1;
                        foreach ($fetch_all as $rows) { ?>
                        <tr>
                            <td><?php echo $id++; ?></td>
                            <td><img src="asset/img/<?php echo $rows['img']; ?>" width="100" height="50" /></td>
                            <td class="text-truncate" style="max-width: 100px;"><?php echo $rows['file_name']; ?></td>
                            <td><?php echo $rows['quantity']; ?></td>
                            <td><?php echo $rows['file_size']; ?></td>
                            <td><?php echo $rows['file_type']; ?></td>
                            <td><?php echo $rows['password']; ?></td>
                            <td class="col">
                                <button class="btn btn-warning mb-2" data-bs-toggle="modal"
                                    data-bs-target="#edit<?php echo $rows['id']; ?>">
                                    <i class="fas fa-edit me-2"></i>Edit
                                </button>
                                <button class="btn btn-danger mb-2" data-bs-toggle="modal"
                                    data-bs-target="#delete<?php echo $rows['id']; ?>">
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



<!-- Add -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-keyboard="true"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="was-validated" action="insert_download" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">File name</label>
                                <input type="text" name="file_name" autocomplete="off" value="" class="form-control"
                                    placeholder="File Name" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">Version</label>
                                <input type="text" name="version" autocomplete="off" value="" class="form-control" placeholder="Version"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">URL</label>
                                <input type="text" name="urls" autocomplete="off" value="" class="form-control" placeholder="URL: Mega, google Drive, OneDrive, TeraBox..."
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">Password</label>
                                <input type="text" name="password" autocomplete="off" value="" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">File size</label>
                                <input type="text" name="file_size" autocomplete="off" value="" class="form-control"
                                    placeholder="File size" required />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2">Size</label>
                            <select class="form-control" name="sizes">
                                <option selected>Choose</option>
                                <?php
			                    foreach($file_sizes as $result){?>
                                <option autocomplete="off" value="<?php echo $result['file_sizes']; ?>">
                                    <?php echo $result['file_sizes']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2">File type</label>
                            <select class="form-control" name="file_type">
                                <option selected>Choose</option>
                                <?php
			                    foreach($file_types as $result){?>
                                <option autocomplete="off" value="<?php echo $result['file_type']; ?>">
                                    <?php echo $result['file_type']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2">Type</label>
                            <select class="form-control" name="type_name">
                                <option selected>Choose</option>
                                <?php
			                    foreach($type_name as $result){?>
                                <option autocomplete="off" value="<?php echo $result['types']; ?>">
                                    <?php echo $result['types']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <input type="file" class="mt-2" autocomplete="off" value="" name="img" accept="image/*" />
                            </div>
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

<!-- Edit -->
<?php foreach ($fetch_all as $row) { ?>
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit me-2"></i>Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="was-validated" action="update_download" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-12">
                            <input type="hidden" name="id" autocomplete="off" value="<?php echo $row['id']; ?>" />
                            <div class="form-outline">
                                <label class="form-label mt-2">File name</label>
                                <input type="text" name="file_name" autocomplete="off" value="<?php echo $row['file_name']; ?>"
                                    class="form-control" placeholder="File Name" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">Version</label>
                                <input type="text" name="version" autocomplete="off" value="<?php echo $row['version']; ?>"
                                    class="form-control" placeholder="Version" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">URL</label>
                                <input type="text" name="urls" autocomplete="off" value="<?php echo $row['url']; ?>" class="form-control"
                                    placeholder="URL" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">Password</label>
                                <input type="text" name="password" autocomplete="off" value="<?php echo $row['password']; ?>" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label mt-2">file size</label>
                                <input type="text" name="file_size" autocomplete="off" value="<?php echo $row['file_size']; ?>"
                                    class="form-control" placeholder="File size" required />
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-2">Type</label>
                            <select class="form-control" name="type_name">
                                <option selected><?php echo $row['id_type'];?></option>
                                <?php
			                    foreach($type_name as $result){?>
                                <option autocomplete="off" value="<?php echo $result['types']; ?>">
                                    <?php echo $result['types']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-2">File type</label>
                            <select class="form-control" name="file_type">
                                <option selected><?php echo $row['file_type'];?></option>
                                <?php
			                    foreach($file_types as $result){?>
                                <option autocomplete="off" value="<?php echo $result['file_type']; ?>">
                                    <?php echo $result['file_type']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <input type="file" class=" mt-2" autocomplete="off" value="" name="new_img" accept="image/*" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <input type="hidden" name="old_img" autocomplete="off" value="<?php echo $row['img']; ?>">
                                <img src="asset/img/<?php echo $row['img']; ?>" width="100" height="">
                            </div>
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
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="was-validated" action="delete_download" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" autocomplete="off" value="<?php echo $row['id']; ?>" />
                    <h class="h3">Do you want to Delete ??</h>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php  } ?>