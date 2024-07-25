<?php
session_start();
include("../../includes/header.php");
include("navbar.php");
?>
<style>
    body {
        background-color: #F1ECE7;
    }

    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

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

    .profile-pic {
        display: inline-block;
        vertical-align: middle;
        width: 50px;
        height: 50px;
        overflow: hidden;
        border-radius: 50%;
    }

    .profile-pic img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .profile-menu .dropdown-menu {
        right: 0;
        left: unset;
    }

    .profile-menu .fa-fw {
        margin-right: 10px;
    }

    .toggle-change::after {
        border-top: 0;
        border-bottom: 0.3em solid;
    }

    .link {
        text-decoration: none;
        color: white
    }
</style>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-25">
        <div class="row justify-content-center align-items-center h-75">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    } ?>
                    <div class="card-body p-4 p-md-5">
                        <h1 class="text-center mt-2 mb-5">Feedback</h1>
                        <form action="../../backend/add_feedback.php" method="post">
                            <div class="row">
                                <div class="col-12 mb-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <select class="select form-control" name="feedback_type" required>
                                            <option selected>Select feedback type...</option>
                                            <option value="recipe_suggestions">Recipe Suggestions</option>
                                            <option value="storage_tips">Storage Tips</option>
                                            <option value="overall_ux">Overall User Experience</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="number" id="rating" name="rating" class="form-control form-control" placeholder="Rating" min="1" max="10" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-4 d-flex align-items-center">
                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <h6 class="mb-2 pb-1"><strong>Feedback: </strong></h6>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" cols="5" name="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 pt-2 text-center">
                                <input data-mdb-ripple-init class="btn btn-outline-info btn-lg" name="add_inventory" type="submit" value="Give Feedback" />
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('../../includes/footer.php') ?>