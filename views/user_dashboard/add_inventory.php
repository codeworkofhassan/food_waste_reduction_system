<?php
session_start();
include ("../../includes/header.php");
include ("../../includes/footer.php");
include ("../../config/connection.php");
include ("../../core/functions.php");
include ("navbar.php");

?>
<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
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
<h1 class="text-center mt-5">Inventory Management</h1>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-75">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <?php 
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        } ?>
                <div class="text-end mt-4 mb-0">
                            <button class="btn btn-sm btn-dark">
                                <a href="view_inventory.php" class="link" style="font-style:italic">View Available Inventory </a>
                            </button>&nbsp;&nbsp;
                        </div>
                    <div class="card-body p-4 p-md-5">

                        <h3 class="mb-4 text-center" style="margin-top:-5%">Add Inventory</h3>
                       
                        <form action="../../backend/add_inventory.php" method="post">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <?php 
                                    $sku=generateRandomNumberString();
                                    ?>
                                    <div class="input-group mb-1">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <input type="text" id="sku" name="sku" class="form-control form-control"
                                            style="font-style:italic"
                                            placeholder="Item ID (this will be automatically generated)..."
                                            value="<?php echo $sku ?>"  />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="item_name" name="item_name"
                                            class="form-control form-control" placeholder="Food item name..."  required/>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="number" id="quantity" name="quantity"
                                            class="form-control form-control" placeholder="Quantity..."  required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <h6 class="mb-2 pb-1"><strong>Expiry Date: </strong></h6>
                                            <input id="expiry_date" name="expiry_date" class="form-control" type="date" placeholder="Enter expiry date..." required/>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class=""><strong>Storage Location</strong> </h6>
                                    <select class="select form-control" name="storage_location" required>
                                        <option selected>Select storage branch...</option>
                                        <option value="rwp_branch">Rawalpindi Branch</option>
                                        <option value="lhr_branch">Lahore Branch</option>
                                        <option value="mtn_branch">Multan Branch</option>
                                        <option value="khi_branch">Karachi Branch</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 pt-2 text-center">
                                <input data-mdb-ripple-init class="btn btn-outline-info btn-lg" name="add_inventory" type="submit"
                                    value="Add item" />
                            </div>
                        </form>
                        <div class="mt-4 mb-0 text-end">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-qr-code-scan"></i> Add item using QR code
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('../../includes/footer.php') ?>