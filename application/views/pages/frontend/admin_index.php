<section class="mt-3 mb-5">
    <!-- Page content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card card-rounded shadow mt-3">
                    <div class="card-body">
                        <div class="card card-rounded bg-warning">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Views</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            <?php echo number_format($count_ip);?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-rounded shadow mt-3">
                    <div class="card-body">
                        <div class="card card-rounded bg-danger">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Users</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            <?php echo number_format($count_user);?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-rounded shadow mt-3">
                    <div class="card-body">
                        <div class="card card-rounded bg-info">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large">
                                    <i class="fas fa-clipboard-list"></i>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">List</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            <?php echo number_format($list_download);?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-rounded shadow mt-3">
                    <div class="card-body">
                        <div class="card card-rounded bg-success">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large">
                                    <i class="fas fa-cloud-download-alt"></i>
                                </div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Download</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            <?php echo number_format($sum_downloads[0]->quantity);?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>