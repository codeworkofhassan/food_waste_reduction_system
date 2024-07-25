<?php include ("../includes/header.php") ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Waste Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body{
        background-color:#F1ECE7;
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
</head>

<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Sign up</h3>
            <form action="../backend/create_user.php" method="post">
              <div class="row">
                <div class="col mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                      </div>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username you want...">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="f_name" name="f_name" class="form-control form-control" placeholder="Enter your first name..." required />
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="l_name" name="l_name" class="form-control form-control" placeholder="Enter your last name..." required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div data-mdb-input-init class="form-outline datepicker w-100">
                  <h6 class="mb-2 pb-1">Date of Birth: </h6>
                    <input id="dob" name="dob" class="form-control" type="date" placeholder="Enter date of birth..." required />
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male"  />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="female"  />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div data-mdb-input-init class="form-outline">
                    <input type="email" id="email" name="email" class="form-control form-control" placeholder="Enter email address" required/>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div data-mdb-input-init class="form-outline">
                    <input type="password" id="password" name="password" class="form-control form-control" placeholder="Enter password"  required/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <h6 class="">Dietary Preferences </h6>
                  <select class="select form-control" name="dietary_preference" required>
                    <option value="none" selected>None</option>
                    <option value="vegetarian">Vegetarian</option>
                    <option value="non_veg">Non-Veg</option>
                    <option value="gluten_free">Gluten Free</option>
                    <option value="dairy_free">Dairy Free</option>
                    <option value="ketogenic">Ketogenic</option>
                  </select>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                <h6 class="">Allergy (if any) </h6>
                  <select class="select form-control" name="allergy_info" required>
                    <option value="none">None</option>
                    <option value="egg_allergy">Egg Allergy</option>
                    <option value="lactose_intolerance">Lactose Intolerance</option>
                    <option value="wheat_allergy">Wheat allergy</option>
                  </select>
                </div>
              </div>
              <div class="mt-4 pt-2 text-center">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Sign up" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>