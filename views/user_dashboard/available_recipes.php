<?php
session_start();
include('../../config/connection.php');
include('../../includes/header.php');
include('../../core/functions.php');
include('navbar.php');
?>
<style>
    body {
        background-color: #F1ECE7;
    }
</style>
<h1 class="text-center mt-1 mb-4">Available Recipes</h1>
<p style="padding-left:5px; font-family:book antiqua; font-size:13pt">Keeping in view the available food inventory, following recipes are available. </p>

<form method="GET" action="" class="text-center mb-5">
    <input type="text" name="search" placeholder="Search recipes..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
    <button type="submit" class="btn btn-sm btn-outline-primary">Search</button>
</form>

<?php
$search = isset($_GET['search']) ? $_GET['search'] : '';
$dishes = array(
    "biryani",
    "pizza",
    "burger",
    "beefPulao",
    "shawarma",
    "qorma",
    "mixSalad",
    "vegSalad",
    "fruitSalad",
    "vegPulao",
    "mangoMilkShake",
    "cake",
    "pasta",
    "quinoaSalad",
    "sushi",
    "coffee",
    "scrambledEggs"
);
$rowCount = 0;
$columnCount = 0;
$found = false; 

foreach ($dishes as $dish) {
    if ($dish) {
        if ($search && stripos($dish, $search) === false) {
            continue; 
        }
        $query = "SELECT * FROM recipe WHERE recipe_name REGEXP '$dish'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $found = true; 
            if ($columnCount === 0) {
                echo "<div class='row' style='margin-left:1%'>";
            }
            while ($dish_data = mysqli_fetch_assoc($result)) {
                echo "<div class='card col-sm-4' style='margin:1%; margin-left:2%; height:11%; width:28%;  background-color: #E7F0DC;'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'><strong>" . ucfirst($dish) . "</strong></h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>Available</h6>";
                echo "<p class='card-text'>";
                echo "<strong>Cuisine: </strong>" . capitalise($dish_data['cuisine']) . "<br/>";
                echo "<strong>Meal Type: </strong>" . capitalise($dish_data['meal_type']) . "<br/>";
                echo "<strong>Cooking Time: </strong>" . capitalise($dish_data['cooking_time']) . " minutes </br>";
                echo "</p>";
                echo "<p class='text-center'>";
                echo "<a href='feedback.php' class='card-link btn btn-sm btn-success'>Rate Recipe</a>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
                $columnCount++;
                if ($columnCount % 3 === 0) {
                    echo "</div>";
                    $rowCount++;
                    $columnCount = 0;
                }
            }
        }
        mysqli_free_result($result);
    }
}

if ($columnCount > 0) {
    echo "</div>";
}

if (!$found) {
    echo "<p style='font-size:16pt' class='text-center text-danger'><i class='bi bi-emoji-grimace'></i><br/>Recipe not found</p>";
}
?>

<?php include('../../includes/footer.php') ?>