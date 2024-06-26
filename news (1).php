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
    <a class="navbar-brand" href="news.php">News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
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
</nav>
    <header>
        <h1>News</h1>
    </header>
    <div class="container">
        <section>
            <h2>Latest Updates</h2>

            <div class="news-item">
                <h3>Online Complaint System Launched Statewide</h3>
                <p>June 1, 2024</p>
                <p>We are excited to announce the statewide launch of the Police Online Complaint Register. This initiative aims to provide citizens with a more accessible and efficient way to report grievances and seek redressal.</p>
            </div>

            <div class="news-item">
                <h3>Enhanced Security Measures Implemented</h3>
                <p>May 15, 2024</p>
                <p>In our ongoing efforts to protect user data, we have implemented new security protocols to ensure the highest level of confidentiality and integrity for all complaints registered on our platform.</p>
            </div>

            <div class="news-item">
                <h3>Success Story: Rapid Resolution of Community Complaints</h3>
                <p>April 30, 2024</p>
                <p>Thanks to the efficiency of our online complaint system, a series of community complaints regarding noise pollution were resolved within days, showcasing the effectiveness and responsiveness of our team.</p>
            </div>

            <div class="news-item">
                <h3>Upcoming Feature: Real-Time Status Updates</h3>
                <p>April 15, 2024</p>
                <p>We are pleased to announce the upcoming addition of real-time status updates for all registered complaints. This feature will allow complainants to track the progress of their cases in real-time.</p>
            </div>

        </section>
    </div>
    <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>&copy; 2024 TN E-POLICE. The indian Police act,1861.</p>
</div>

</body>
</html>
