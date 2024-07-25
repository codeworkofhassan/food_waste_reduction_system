<?php include("../../includes/header.php") ?>

<style>
  body{
    background-color: #F1ECE7;
  }
  .dropdown-item-no-padding {
    margin-right: -20px;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top d-flex justify-content-between"
  style="margin-bottom:10px !important">
  <div class="container-fluid">
    <a class="navbar-brand" href="user_dashboard.php"><em><strong> <img src="../../images/favicon.ico" alt=""
            style="height:30px; width:30px"> Food Waste Reduction System</strong></em></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav" style="margin-left:8% !important">
      <li class="nav-item">
        <a class="nav-link " aria-current="page" href="user_dashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_inventory.php">Inventory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
      <li class="nav-item" >
      <a class="nav-link" href="storage_tips.php">Storage Tips</a>
        </li>
        <li class="nav-item" >
      <a class="nav-link" href="available_recipes.php">Available Recipes</a>
        </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../../images/user.jpg" alt="User Avatar" width="40px" height="34px"
              class="rounded-circle">&nbsp;&nbsp; <?php echo $_SESSION['username'] ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item dropdown-item-no-padding" href="manage_profile.php">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item dropdown-item-no-padding text-danger" href="../../backend/logout.php">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav><br /><br/><br/><br/><br/>

<?php include ("../../includes/footer.php"); ?>