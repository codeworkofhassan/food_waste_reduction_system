<?php
session_start();
include ("../../config/connection.php");
include ("../../includes/header.php");
include ("../../includes/footer.php");
include ("navbar.php");
$userID = $_SESSION['user_id'];
?>
<?php
$getUser = "SELECT * FROM users WHERE user_id = $userID";
$gotUser = mysqli_query($connect, $getUser);
if (mysqli_num_rows($gotUser) > 0) {
    while ($rows = mysqli_fetch_assoc($gotUser)) {
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

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-25">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <?php
            if (isset($_SESSION['message'])){
              echo $_SESSION['message'];
              unset($_SESSION['message']);
            }
            ?>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Manage Profile</h3>
            <form action="../../backend/update_profile.php" method="post">
              <div class="row">
                <div class="col mb-4">
                  <div data-mdb-input-init class="form-outline">
                  <label for=""><strong>Username</strong></label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                      </div>
                      <input type="hidden" name="user_id" id="user_id" value="<?php echo $rows['user_id'] ?>">
                      <input type="text" class="form-control" id="username" name="username" value="<?php echo $rows['username'] ?>">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <label for=""><strong>First Name</strong></label>
                    <input type="text" id="f_name" name="f_name" class="form-control form-control" value="<?php echo $rows['f_name'] ?>" />
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline" style="margin-left:4%">
                  <label for=""><strong>Last Name</strong></label>
                    <input type="text" id="l_name" name="l_name" class="form-control form-control" value="<?php echo $rows['l_name'] ?>"  />
                  </div>
                </div>
              </div>
              <div class="row"> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div data-mdb-input-init class="form-outline">
                  <label for=""><strong>Email Address</strong></label>
                    <input type="email" id="email" name="email" class="form-control form-control" value="<?php echo $rows['email'] ?>" />
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div data-mdb-input-init class="form-outline">
                  <label for=""><strong>Password</strong></label>
                    <input type="password" id="password" name="password" class="form-control form-control" value="<?php echo $rows['password'] ?>" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <h6 class=""><strong>Dietary Preferences </strong></h6>
                  <select class="select form-control" name="dietary_preference" value="" >
                    <option value="<?php echo $rows['dietary_preference'] ?>" selected>
                    <?php
                    switch ($rows['dietary_preference']) {
                      case 'vegetarian':
                        echo "Vegetarian";
                        break;
                      case 'gluten_free':
                        echo "Gluten Free";
                        break;
                      case 'dairy_free':
                        echo "Dairy Free";
                        break;
                      case 'low_carb';
                        echo "Low Carb";
                        break;
                      case 'ketogenic':
                        echo "Ketogenic";
                        break;
                      case 'non_veg':
                        echo "Non-Veg";
                        break;
                      case 'none':
                        echo "None";
                        break;
                      default:
                        echo '';
                        break;
                    }
                    ?>
                    </option>
                    <option value="none">None</option>
                    <option value="vegetarian">Vegetarian</option>
                    <option value="non_veg">Non-Veg</option>
                    <option value="gluten_free">Gluten Free</option>
                    <option value="dairy_free">Dairy Free</option>
                    <option value="ketogenic">Ketogenic</option>
                  </select>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                <h6 class=""><strong>Allergy (if any) </strong></h6>
                  <select class="select form-control" name="allergy_info" value="" >
                    <option value="<?php echo $rows['allergy_info'] ?>">
                    <?php 
                    switch($rows['allergy_info']){
                      case 'egg_allergy':
                        echo "Egg Allery";
                        break;
                      case 'lactose_intolerance':
                        echo "Lactose Intolerence";
                        break;
                      case 'wheat_allergy':
                        echo "Wheat Allergy";
                        break;
                      case 'soy_allergy':
                        echo "Soy Allergy";
                        break;
                      case 'none':
                        echo "None";
                        break;
                      default:
                        echo '';
                        break;
                    }
                    ?>
                  </option>
                    <option value="none">None</option>
                    <option value="egg_allergy">Egg Allergy</option>
                    <option value="lactose_intolerance">Lactose Intolerance</option>
                    <option value="wheat_allergy">Wheat allergy</option>
                  </select>
                </div>
              </div>
              <div class="mt-4 pt-2 text-center">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" name="update" value="Update"/>
              </div>
              <?php
              
              }
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