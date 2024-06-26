

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .img-fluid{
          height:300px;
          width:100%;
        }
  </style>
</head>
<body>
  <img src="protect.png" alt="POLICE" class="img-fluid" width="1500" height="500">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="news.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
      <form class="d-flex ms-auto">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </nav><br><br>
  <?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "server";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$victim_name = $_POST['name'];
$phone = $_POST['phone'];
$complaint = $_POST['complaint'];

$stmt = $conn->prepare("INSERT INTO table3 (name, phone, complaint) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("sss", $victim_name, $phone, $complaint);


 if ($stmt->execute()) {
    echo '<strong style="color: green; text-align: center; display: block; font-size: larger;">Your complaint registered successfully</strong>';
} else {
    echo "Error: " . $stmt->error;
} 

// Close connection
$stmt->close();
$conn->close();
?>

 
  <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>&copy; 2024 TN E-POLICE. The indian Police act,1861.</p>
  </div>
</body>
</html>
