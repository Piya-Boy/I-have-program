<?php

if ($_SESSION['levers'] != 'admin') {
    $this->session->set_flashdata('status', 'status');
    $this->session->set_flashdata('message', 'You must login first.');
    $this->session->set_flashdata('icon', 'error');
    redirect('index');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $title; ?></title>
    <!-- title icon -->
    <link rel="icon" href="<?php echo 'asset/img/' . $_SESSION['img']; ?>" type="image">

    <link href="asset/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.8/dist/sweetalert2.min.css">
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class=" shadow-lg bg-dark" id="sidebar-wrapper">
            <a class="text-decoration-none" href="">
                <div class="sidebar-heading border-bottom bg-dark text-light   shadow-lg">
                    <img src="asset/img/admin.png" class="avatar img-fluid rounded-circle me-2" alt="Charles Hall" />
                    <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>
                </div>
            </a>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action active list-group-item-light p-3" aria-current="page" href="admin"><i class="fas fa-tachometer  me-2"></i>Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="admin_dow_list"><i class="fas fa-edit me-2"></i>Download List</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="admin_types"><i class="fas fa-edit me-2"></i>Types</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top  shadow-lg">
                <div class="container-fluid">
                    <button type="button" class="btn btn-light" id="sidebarToggle"><span class="fas fa-align-left fa-2x"></span></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ">
                            <li class="nav-item dropdown me-3">
                                <a class="nav-link" href="#" id="contact" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="position-relative">
                                        <i class="far fa-bell nav-icon"></i>
                                        <span class="indicator text-dark"><?php echo $data; ?></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end  shadow-lg mt-3 mb-3" aria-labelledby="contact">
                                    <?php foreach ($fetch_contact as $row) { ?>
                                        <a class="dropdown-item mt-2 mb-2" href="admin_contact?id=<?php echo $row['id']; ?>">
                                            <?php echo $row['name']; ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="Menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="flex-shrink-0">
                                        <img src="<?php
                                                    if ($_SESSION['img'] != '') {
                                                        echo 'asset/img/' . $_SESSION['img'];
                                                    } else {
                                                        echo 'asset/img/admin.png';
                                                    }
                                                    ?>" class="avatar img-fluid rounded me-1" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end shadow-lg mt-3 mb-2" aria-labelledby="Menu">
                                    <a class="dropdown-item" href="admin_profile?id=<?php echo $_SESSION['id']; ?>"><i class="fas fa-user-circle me-3"></i>My
                                        Profile</a>
                                    <a class="dropdown-item" href="logout"><i class="fas fa-sign-in-alt me-3"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Loader -->
            <div class="loads">
                <div class="loader">
                  <span>Loading...</span>
                </div>
              </div>