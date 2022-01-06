<div class="row container-fluid py-5 d-flex justify-content-center">
    <div class="col-xl-6 col-md-12">
        <div class="card card-rounded shadow">
            <div class="row m-l-0 m-r-0 p-3">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center">
                        <div class="m-b-25">
                            <img src="asset/img/<?php echo $profile['img']; ?>" width="50" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#edit_profile"><i class="fas fa-edit text-dark mt-4"></i></a>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $profile['id']; ?>" />
                <div class="col-sm-8">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Email</p>
                                <h6 class="text-muted f-w-400"><?php echo $profile['username']; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Name</p>
                                <h6 class="text-muted f-w-400"><?php echo $profile['fname'] . ' ' . $profile['lname']; ?></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit profile -->
    <div class="modal fade" id="edit_profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="up_profile" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="form-outline">
                                <input type="hidden" name="id" value="<?php echo $profile['id']; ?>" />
                                    <label class="form-label mt-2">First Name</label>
                                    <input type="text" name="fname" value="<?php echo $profile['fname']; ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline">
                                    <label class="form-label mt-2">Last Name</label>
                                    <input type="text" name="lname" value="<?php echo $profile['lname']; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline">
                                    <label class="form-label mt-2">Email</label>
                                    <input type="text" name="username" value="<?php echo $profile['username']; ?>" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline">
                                    <label class="form-label mt-2">Reset password</label>
                                    <input type="hidden" name="old_pass" value="<?php echo $profile['password']; ?>" />
                                    <input type="password" name="new_pass" class="form-control" placeholder="New Password" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline">
                                    <input type="file" class=" mt-2" value="" name="new_profile" accept="image/*" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <input type="hidden" name="old_profile" value="<?php echo $profile['img']; ?>">
                                    <img src="asset/img/<?php echo $profile['img']; ?>" width="100" height="">
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