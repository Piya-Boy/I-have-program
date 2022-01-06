<!-- Section-->
<section class="py-3">
    <div class="container px-4 px-lg-5 mt-3">
        <div class="row mb-3">
            <header class="h1 me-2">ใช้งาน
            <img src="asset/img/work.png" alt="" width="60">
        </header>
            <hr>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($work as $row) { ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top p-4" src="asset/img/<?php echo $row->img; ?>" alt="..."  />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder text-truncate">
                                <?php echo $row->file_name; ?></h5>
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="download_details?id=<?php echo $row->id; ?>">Download</a></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row mb-3">
            <header class="h1 me-2">เกมส์
            <img src="asset/img/game.png" alt="" width="60">
            </header>
            <hr>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($game as $row) { ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top p-4" src="asset/img/<?php echo $row->img; ?>" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder text-truncate"><?php echo $row->file_name; ?></h5>
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="download_details?id=<?php echo $row->id; ?>">Download</a></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- button for up -->
                <div class="row">
            <div class="col text-end">
                <a href="#top" class="btn btn-outline-dark mt-auto">
                    <i class="fas fa-arrow-up"></i>
                </a>
            </div>
    </div>
</section>