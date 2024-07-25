<?php
session_start();
include("../../includes/header.php");
include("navbar.php");
include("../../config/connection.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crossfade Carousel</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #F1ECE7;
    }

    .storageTipsPrint {
        background: rgb(238, 174, 202);
        background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);

    }

    .carousel-item {
        transition: opacity 0.5s ease-in-out;
        opacity: 0;
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .carousel-item.active {
        opacity: 1;
        position: relative;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {

        color: #000;
        width: 2.5rem;
        height: 2.5rem;
    }

    .storageTipText {
        font-family: book antiqua;

        font-size: 19.5pt;
        text-align: center;
        padding: 15%;
        padding-top: 35%;
    }

    .carousel-inner {
        height: 400px !important;
        width: 800px !important;
        margin-left: 18%;
    }
</style>
<h1 class="text-center mt-2" style="margin-bottom:-20px">Storage Tips</h1>
<div class="text-center">
    <div id="textCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" style="height:400px !important; width:900px !important; margin-top:5%;">
            <?php

            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "fwms";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT `description` FROM storage_tip";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $active = true;
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="storageTipsPrint carousel-item <?php if ($active) {
                                                                    echo 'active';
                                                                    $active = false;
                                                                } ?>">
                        <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                            <p class="storageTipText text-center"><?php echo htmlspecialchars($row['description']); ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
            <a class="carousel-control-prev" href="#textCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#textCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('#textCarousel').carousel({
        interval: 3000,
        ride: 'carousel'
    });
</script>
</body>

</html>


<?php include('../../includes/footer.php') ?>