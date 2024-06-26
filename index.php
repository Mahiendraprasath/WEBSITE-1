

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
  </style>
    <style>
  body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background1.jpeg');
            background-size: cover;
            color: #333;
        }

        header {
            background: #d4313d;
            text-align: center;
            color: white;
            padding: 20px;
        }
        .img-fluid{
          height:300px;
          width:100%;
        }
        </style>
</head>
<body>
  
  <img src="protect.png" alt="POLICE" class="img-fluid" width="800" height="200" >
      

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Home</a>
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
</nav>

  <div class="container mt-4">
    <center>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="slide1.png" class="d-block w-100" alt="Slide1.png">
          </div>
          <div class="carousel-item">
            <img src="slide2.png" class="d-block w-100" alt="Slide2.png">
          </div>
          <div class="carousel-item">
            <img src="slide3.png" class="d-block w-100" alt="Slide3.png">
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <img src="police.png"  width="400" height="400" alt="Police">
     
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>MAIN POLICE STATIONS</th>
            <th>MOBILE NUMBER</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> Pollachi
            WPS,Coimbatore-641301</td>
            <td>04259-227733</td>
          </tr>
          <tr>
            <td>Ambattur,West Chennai-625001</td>
            <td>044-23452798</td>
          </tr>
          <tr>
            <td>Sri.Meenakshi Amman Temple,Madurai-625001</td>
            <td>0452-2344007</td>
          </tr>
          <tr>
            <td>Sooramangalam,Salem-636005</td>
            <td>0427-244865</td>
          </tr>
        </tbody>
      </table>

      <h4>INCASE OF MEDICAL EMERGENCY</h4>
      <button><a href="madicine.php">CLICK ME</a></button>
      <br>
      <h4>INCASE OF FIRE EMERGENCY</h4>
      <button><a href="Fire.php">CLICK ME</a></button>
    </center>

    <h2>USE OF US</h2>
    <ol>
      <li>Register through online</li>
      <li>Don't hesitate to register</li>
      <li>User friendly</li>
    </ol>

    <h2>KEY FEATURES OF ONLINE COMPLAINT REGISTER</h2>
    <p>
      Accessibility: 24/7 Availability: The system is accessible at any time, allowing individuals to file complaints without needing to visit a police station physically.
      User-Friendly Interface: Designed to be intuitive and easy to use, even for those with limited technical skills.
      Registration Process:
      User Authentication: Users may need to create an account or authenticate their identity using personal information, OTP (One-Time Password) via SMS, or email verification.
      Complaint Form: Users fill out an online form with details of the incident, including date, time, location, description of the incident, and any evidence or witnesses.
      Types of Complaints:
      General Complaints: Non-urgent issues or grievances against individuals or organizations.
      FIR (First Information Report): Formal complaints about serious offenses that require immediate police intervention.
      Submission and Tracking:
      Submission Confirmation: After submitting the complaint, users receive a confirmation with a unique reference number.
      Tracking System: Users can track the status of their complaint using the reference number, receiving updates on the progress of their case.
      Security and Privacy:
      Data Protection: Ensures that the complainant's information is kept confidential and secure, complying with data protection laws.
      Encryption: Uses encryption to protect the data transmitted over the internet.
      Integration with Police Systems:
    </p>

    
  </div>
  
  <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>&copy; 2024 TN E-POLICE. The indian Police act,1861.</p>
</div>
</body>
</html>
