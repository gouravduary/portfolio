<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GOURAV DUARY</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--CUSTOM CSS -->
  <style>
    .main {
      height: 90vh;
      overflow: scroll;
    }

    .card img {
      margin-top: 12px;
    }
  </style>
</head>

<body>
  <!-- PHP -->
  <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gourav';
    $conn = mysqli_connect($hostname, $username, $password, $database);
      
    if ($_SERVER['REQUEST_METHOD']=='POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $msg = $_POST['msg'];

      $sql = "INSERT INTO `portfolio` (`name`,`email`, `msg`) VALUES ('$name','$email','$msg')";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Vola!</strong><span>Your message has been sent successfully.</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    }
  ?>
  <!-- PHP ENDS -->

  <!-- NAVBAR START -->
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm sticky-top">
    <a class="navbar-brand text-danger fw-bold ms-5" href="https://gouravduary.github.io">GOURAV DUARY</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#resume">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
  </nav>
  <!-- NAVBAR END -->

  <div class="main">

    <!-- HOME STARTS HERE -->
    <div id="home" class="container-fluid bg-danger d-flex align-items-center text-center" style="height: 90vh; width: 100%;">
      <div class="container text-white">
        <div class="container">
          <div class="display-6">Hey,</div>
          <div class="display-5">Myself <strong class="text-primary fw-bold">GOURAV DUARY</strong></div>
          <div class="h3">A <strong>Web Designer</strong></div>
          <a href="#contact"><button type="button" class="btn btn-primary bg-dark fw-bold">Hire Me!</button></a>
        </div>
      </div>
    </div>
    <!-- HOME ENDS HERE -->

    <!-- RESUME STARTS HERE -->
    <div id="resume"
      class="container-fluid bg-success py-3 d-flex flex-column align-items-center justify-content-center"
      style="height: 90vh; width:100%;">
      <div class="display-6 text-danger fw-bold mb-2">RESUME</div>
      <img src="resume.jpg" alt="Resume" class="img-fluid" style="height: 450px; width:360px;">
    </div>
    <!-- RESUME ENDS HERE -->

    <!-- PROJECTS START HERE -->
    <div id="projects" class="container-fluid bg-warning p-2">
      <div class="container-fluid">
        <div class="display-6 text-success fw-bold d-flex justify-content-center mb-2">PROJECTS</div>
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 justify-content-evenly gap-3">

          <div class="card">
            <img src="img.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PROJECT</h5>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, repudiandae.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>

          <div class="card">
            <img src="img2.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PROJECT</h5>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, repudiandae.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>

          <div class="card">
            <img src="img.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PROJECT</h5>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, repudiandae.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- PROJECTS ENDS HERE -->


    <!-- CONTACT START -->
    <div id="contact" class="container-fluid bg-dark pt-5" style="height:80vh;">
      <div class="container">
        <div class="display-6 text-warning fw-bold mb-2">CONTACT ME</div>
        <form method="post" action="index.php">
          <div class="mb-3">
            <label for="name" class="form-label text-white">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label text-white">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
          </div>
          <div class="mb-3">
            <label for="msg" class="form-label text-white">Message</label>
            <textarea class="form-control" id="msg" rows="3" placeholder="Enter your text..." name="msg"></textarea>
          </div>
          <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">Send Your Message</button>
          </div>
        </form>
      </div>
    </div>
    <!-- CONTACT END -->

  </div>
  <!-- main ends here -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>