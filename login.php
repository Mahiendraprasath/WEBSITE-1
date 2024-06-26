<?php
session_start(); 

$logged = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'server.php'; 

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM table1 WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            echo "Login Successful";
            $logged = 1;
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['phone']=$phone;

           
          header('location:index2.php');
            
        }
         else {
            $invalid = 1;
        }
    }
}
?>
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
  h1, p {
    color: #FFFFFF;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  </style>
  <script>
function formValidation() {
    let x = document.forms["form1"]["phone"].value;
    if (x == "") {
        alert("Fill in the details");
        return false;
    }
}
function newFunction() {
    document.getElementById("Form1").reset();
}
</script>
</head>
<body>
<img src="protect.png" alt="POLICE" class="img-fluid" width="1500" height="500">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="login.php">Login</a>
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
          <a class="nav-link" href="index.php">Home</a>
        </li>
      </ul>
      <form class="d-flex ms-auto">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </nav>
<?php
if ($invalid) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> Invalid Credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

if ($logged) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congrats</strong> You are successfully Logged In.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
<section id="login" class="login">
  <div class="container">
    <h2 class="text-center">Login</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="login.php" method="post" id="Form1" name="form1" onSubmit="return formValidation()">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <p style="color: black;">New User? <a href="signup.php">Signup</a></p>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</section>
<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>&copy; 2024 TN E-POLICE. The indian Police act,1861.</p>
</div>
</body>
</html>
