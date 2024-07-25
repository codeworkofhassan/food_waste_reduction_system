<style>
  .danger-badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    background-color: #dc3545;
    color: #fff;
  }
</style>

<?php
function dd($data)
{
  echo "<pre style='background-color:black; color:yellow'>";
  var_dump($data);
  echo "</pre>";
  exit;
}

function calculateDaysUntilExpiry($expiryDate)
{
  $expiryTimestamp = strtotime($expiryDate);
  $currentTimestamp = time();
  $difference = $expiryTimestamp - $currentTimestamp;
  $daysUntilExpiry = floor($difference / (60 * 60 * 24));
  if ($daysUntilExpiry < 0) {
    echo "<span class='danger-badge'>Expired</span>";
  } else {
    return $daysUntilExpiry;
  }
}

function getExpiringFoodItems()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "fwms";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $threeDaysFromNow = date('Y-m-d', strtotime('+3 days'));
  $today = date('Y-m-d');
  $sql = "SELECT * FROM fooditem 
            WHERE expiry_date <= '$threeDaysFromNow' ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $foodItems = $result->fetch_all(MYSQLI_ASSOC);
  } else {
    $foodItems = [];
  }
  $conn->close();
  return $foodItems;
}

function returnStatus($date)
{
  $today = date('Y-m-d');
  $dateTimeToday = DateTime::createFromFormat('Y-m-d', $today);
  $dateTimeExpiry = DateTime::createFromFormat('Y-m-d', $date);
  if ($dateTimeToday > $dateTimeExpiry) {
    echo "Expired";
  }
}

function errorShow($var)
{
  echo "<pre style='background-color:black; color:red; font-size:15pt; padding-top:6px; padding-bottom:6px; padding-left:4px'><strong><span style='font-style:none'>Error:</span></strong> ";
  print_r($var);
  exit;
}

function basePath()
{
  return __DIR__ . '/../';
}

function getStandardDateFormat($date)
{
  $dateString = $date;
  $date = new DateTime($dateString);
  $formattedDate = $date->format('d-M-Y');
  return $formattedDate;
}

function getExpiryStatus($expiryDate)
{
  $expiryDateTime = new DateTime($expiryDate);
  $today = new DateTime();
  $interval = $expiryDateTime->diff($today);
  $daysUntilExpiry = $interval->days;
  if ($daysUntilExpiry < 0) {
    $status = "Expired";
  } elseif ($daysUntilExpiry > 0) {
    $status = "In Stock";
  } else {
    $status = "Near Expiry";
  }
  return $status;
}

function findQuantity(string $item): mixed
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "fwms";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $stmt = $conn->prepare("SELECT quantity FROM fooditem WHERE item_name REGEXP ? AND `expiry_date` > CURDATE()");
  $stmt->bind_param("s", $item);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row['quantity'];
  } else {
    return null;
  }
}

function capitalise($data)
{
  return ucfirst($data);
}
function generateRandomNumberString($length = 10)
{
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomDigit = rand(0, 9);
    $randomString .= $randomDigit;
  }
  return $randomString;
}
