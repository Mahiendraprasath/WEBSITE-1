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
    <a class="navbar-brand" href="complaint.php">Register Complaint</a>
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
      </ul>
      <form class="d-flex ms-auto">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </nav><br><br>
  <section id="login" class="login">
    <div class="container">
      <h2 class="text-center">Register Your Complaint</h2>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form action="submit_complaint.php" method="post" id="Form1" name="form1" onSubmit="return formValidation()">
            <div class="mb-3">
              <label for="name" class="form-label">Victim's Name</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name="phone" id="phone" required>
            </div>
            <div class="mb-3">
              <label for="complaint" class="form-label">Enter Your Complaint</label>
              <input type="text" class="form-control" name="complaint" id="complaint" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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
