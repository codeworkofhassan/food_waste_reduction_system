<?php
session_start();
include ('../core/functions.php');
include ('../includes/header.php');
if (isset($_SESSION['username'])) {
    header("location:../views/user_dashboard/user_dashboard.php");
}

?>
<style>
    body {
        background-color: #F1ECE7;
    }

    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }

</style>
<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="../images/banner.png" class="img-fluid rounded-image" alt="Banner">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h1 class="text-center mb-5" style="text-align:center !important">Login</h1>
                <form action="../backend/login_user.php" method="post">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="username" id="username" class="form-control form-control-lg"
                            placeholder="Enter your username" required />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-lg"
                            placeholder="Enter your password" required />
                    </div>

                    <div class="text-center text-lg-start mt-2 pt-2">
                        <div class="text-center">
                            <input type="submit" class="btn btn-success btn-lg" name="submit" value="Login"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                        </div>
                </form>
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="sign-up.php"
                        class="link-danger">Register</a></p>
            </div>
        </div>
    </div>
    </div>
</section>