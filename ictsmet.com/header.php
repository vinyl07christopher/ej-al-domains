<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo ' active'; //class name in css 
  }
}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="ICTSM logo.png">

    <link rel="stylesheet" href="css/style.css" />

    <title>ICTSM 2023</title>
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light sticky-top ">
      <div class="container">
        <a href="#" class="navbar-brand p-0">
          <img src="Stamford_logo.png" alt="Stamford Logo" height=50px />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item ">
              <a class="nav-link <?php active(''); ?>" href="./">Home</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('committee.php'); ?>" href="committee.php">Committee</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('cfp.php'); ?>" href="cfp.php">Call for Papers</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('keynote.php'); ?>" href="keynote.php">Keynote</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('submission.php'); ?>" href="submission.php">Submission</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('publication.php'); ?>" href="publication.php">Publication</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('registration.php'); ?>" href="registration.php">Registration</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('venue.php'); ?>" href="venue.php">Venue</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link <?php active('contact.php'); ?>" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>