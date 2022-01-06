<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Download Program" />
    <meta name="description" content="Free Download Program" />
    <meta name="description" content="Download Program For Free" />
    <meta name="author" content="" />
    <link rel="icon" href="asset/img/logo.png" type="image">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.8/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="asset/css/style.css" rel="stylesheet" type="text/css">

</head>

<body id="top">
    <nav class="navbar navbar-expand-lg sticky-top shadow p-3 mb-3 navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index"><img src="asset/img/logo.png" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto ">
                    <li class="nav-item ">
                        <a class="nav-link" href="index">Home</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <ul class="navbar-nav me-auto  ">
                        <li class="nav-item me-3">
                            <a class="nav-icon text-decoration-none" href="#" data-bs-toggle="modal"
                                data-bs-target="#login">
                                <img src="asset/img/user.png" alt="" width="40">
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <form action="searching" method="GET">
                            <input type="text" name="search" id="search" class=" form-control" autocomplete="off"
                                placeholder="Search" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Model Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated" action="logins" method="post">
                    <div class="modal-body">
                        <div class="row mb-2">
                            <div class="form-group">
                                <Label class="mb-2">Username</Label>
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <Label class="mb-2 mt-2">Password</Label>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required="required">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Loader -->
    <div class="loads">
        <div class="loader">
            <span>Loading...</span>
        </div>
    </div>