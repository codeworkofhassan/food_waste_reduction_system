<?php
session_start();
include ("../../includes/header.php");
include ("../../includes/footer.php");
include ("../../config/connection.php");
include ("../../core/functions.php");
include ("navbar.php");
$id=$_GET['id'];

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
    <div class="container py-5 h-25">
        <div class="row justify-content-center align-items-center h-75">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 text-center" style="margin-top:2%">Update Inventory</h3>
                        <form action="../../backend/update_item.php" method="post">
                            <?php
                            $query="SELECT * from fooditem WHERE item_id=$id";
                            $view_item_details=mysqli_query($connect,$query);
                            while($result=mysqli_fetch_assoc($view_item_details)){
                            ?>
                            <div class="row">
                                <div class="col-12 mb-4">
                                <input type="hidden" name="item_id" value="<?php echo $result['item_id']; ?>" />
                                    <?php 
                                    $sku=generateRandomNumberString();
                                    ?>
                                    <div class="input-group mb-1">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <input type="text" id="sku" name="sku" class="form-control form-control"
                                            style="font-style:italic"
                                            placeholder=""
                                            value="<?php echo $result['sku'] ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="item_name" name="item_name"
                                            class="form-control form-control" placeholder="Food item name..."  value="<?php echo $result['item_name'] ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="number" id="quantity" name="quantity"
                                            class="form-control form-control" placeholder="Quantity..." value="<?php echo $result['quantity'] ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <h6 class="mb-2 pb-1"><strong>Expiry Date: </strong></h6>
                                            <input id="expiry_date" name="expiry_date" class="form-control" type="date" placeholder="Enter expiry date..." value="<?php echo $result['expiry_date'] ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class=""><strong>Storage Location</strong> </h6>
                                    <select class="select form-control" name="storage_location">
                                        <option  value="<?php echo $result['storage_location'] ?>" selected>
                                            <?php                                            
                                                switch($result['storage_location']){
                                                    case 'rwp_branch':
                                                        echo "Rawalpindi Branch";
                                                        break;
                                                    case 'lhr_branch':
                                                        echo "Lahore Branch";
                                                        break;
                                                    case 'mtn_branch':
                                                        echo "Multan Branch";
                                                        break;
                                                    case 'khi_branch':
                                                        echo "Karachi Branch";
                                                        break;
                                                    default:
                                                        echo '';
                                                        break;                                                }
                                                ?>
                                        </option>
                                        <option value="rwp_branch">Rawalpindi Branch</option>
                                        <option value="lhr_branch">Lahore Branch</option>
                                        <option value="mtn_branch">Multan Branch</option>
                                        <option value="khi_branch">Karachi Branch</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 pt-2 text-center">
                                    <button class="btn btn-outline-primary" name="update_item" type="submit" value="Update Item">
                                       Update Item
                                    </button>
                            </div>
                        </form>
                        <?php
                    }
                    ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../../includes/footer.php') ?>