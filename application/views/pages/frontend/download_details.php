<section class="py-3">
    <div class="container px-4 px-lg-5 mt-5 mb-5">
        <div class="card">
            <div class="row p-4">
                <div class="col-xl-6 col-lg-12 mb-3">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4><b><?php echo $row[0]->file_name;?></b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <img class="card-img rounded" height="500" src="asset/img/<?php echo $row[0]->img;?>" alt="" />
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Details</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <div class="col ">Version</div>
                                <div class="col text-end"><?php echo $row[0]->version;?></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col ">File Type</div>
                                <div class="col text-end"><?php echo $row[0]->file_type;?></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col ">File size</div>
                                <div class="col text-end"><?php echo $row[0]->file_size;?></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col ">Password</div>
                                <div class="col text-end"><?php if ($row[0]->password != '') {echo $row[0]->password;}else{echo '-';}?></div>
                            </div>
                        </div>
                        <div class="d-grid ">
                            <a class="btn btn-outline-success mt-5" href="<?php echo $row[0]->url;?>" type="button" target="_blank">Download Now <i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-8">
            <div class="card rounded">
              <div class="row p-2">
                <div class="text-center mt-4">
                  <h4><b><a class="text-decoration-none text-dark" href="report_dead_link">แจ้งลิ้งค์เสีย</a> | <a class="text-decoration-none text-dark" href="how_to_fix_link">วิธีแก้ลิ้งค์เกินโควต้า</a></b></h4>
                </div>
                <div class="text-center text-danger mt-4 mb-3">
                  <b><p>" This file is for trial/educational and non-commercial use only. "</p></b>
                  <b><p>" If you like this software Please Buy Genuine License from the Official Website or Reseller. "</p></b>
                <b><p class="mt-5">" ไฟล์นี้ใช้สำหรับทดลองใช้งาน/ศึกษา และไม่ใช้ในเชิงพาณิชย์ เท่านั้น "</p></b>
                  <b><p>" หากคุณชอบผลิตภัณฑ์นี้ กรุณาซื้อสัญญาอนุญาตจริงจากเว็บไซต์หรือตัวแทนจำหน่าย "</p></b>
                <bp></bp>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>