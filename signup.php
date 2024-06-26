<?php
$registered = 0;
$userexists = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'server.php';
    $success_message = "";
    if (isset($_POST['username'], $_POST['dob'], $_POST['gender'], $_POST['phone'], $_POST['email'], $_POST['password'])) {
        $username = $_POST['username'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM table1 WHERE username='$username'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                $userexists = 1;
            } else {
               
                $sql = "INSERT INTO table1 (username, dob, gender, phone, email, password) VALUES ('$username', '$dob', '$gender', '$phone', '$email', '$password')";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    $registered = 1;
                    $success_message = "Sign up successful!";
                } else {
                    die(mysqli_error($con));
                }
            }
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
  </style>
</head>
<body>
  <img src="protect.png" alt="POLICE" class="img-fluid" width="1500" height="500">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="signup.php">Register</a>
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
          <a class="nav-link" href="index.php">Home</a>
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
</nav>


<?php
if ($userexists) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> User already exists.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
<?php
if (!empty($success_message)) { ?>
<div class="alert alert-success" role="alert">
<?php echo $success_message; ?>
</div>
<?php } ?>
<br><br>

<section id="signup" class="signup">
  <div class="container">
    <h2 class="text-center">Sign Up</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="signup.php" method="post" name="form2" onsubmit="return formValidation()">
          <div class="mb-3">
            <label for="username" class="form-label">Name</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob" id="dob" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" required>
                <label class="form-check-label" for="genderMale">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" required>
                <label class="form-check-label" for="genderFemale">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other" required>
                <label class="form-check-label" for="genderOther">Other</label>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Mobile Number</label>
            <input type="tel" class="form-control" name="phone" id="phone" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
            
          </div>
          <button type="submit" class="btn btn-primary">Sign Up</button>
          <br><br>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
    function togglePassword() {
      var passwordInput = document.getElementById("password");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    }
  </script>

  <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>&copy; 2024 TN E-POLICE. The indian Police act,1861.</p>
</div>

      </body>
      </html>