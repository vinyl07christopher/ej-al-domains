<?php
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  $title = ucfirst(explode('.',$url)[0]);
  if ($title == ""){
    $title = " 2024";
  }
  else{
    $title = "| " . $title;
    
  }

  function active($currect_page){
    if($currect_page == $GLOBALS['url']){
      echo $GLOBALS['url'];
      echo ' active'; 
  }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>ICSCDS <?php echo $title; ?></title>
    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="shortcut icon" href="ICSCDS logo.png" type="image/png" />
    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img
            src="ICSCDS logo.png"
            alt="conf logo"
            style='background:#fffb'
            class="light px-2 rounded"
            
            height="50px"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars" style="color: #fff; font-size: 28px"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto me-0 text-center">
            <li class="nav-item"><a class="nav-link <?php active(''); ?>" href="./">Home</a></li>
        
            <li class="dropdown nav-item">
              <a class="nav-link" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="#">Conference Info <i class="fa-solid fa-angle-down ms-1"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="committee.php">Org. Committee</a></li>
            <li><a class="dropdown-item" href="cfp.php">Call for Papers</a></li>
            <li><a class="dropdown-item" href="keynote.php">Speakers</a></li>
  </ul>
</li>

<li class="dropdown nav-item">
              <a class="nav-link" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="#">Participants <i class="fa-solid fa-angle-down ms-1"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="submission.php">Submission</a></li>
            <li><a class="dropdown-item" href="publication.php">Publication</a></li>
            <li><a class="dropdown-item" href="registration.php">Registration</a></li>
            <li><a class="dropdown-item" href="venue.php">Venue</a></li>
            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
  </ul>
</li>


<li class="dropdown nav-item">
              <a class="nav-link" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="#">Downloads <i class="fa-solid fa-angle-down ms-1"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" target='_blank' href="ICSCDS2024.pdf">Brochure</a></li>
  </ul>
</li>

<li class="dropdown nav-item">
              <a class="nav-link" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="#">Publication History <i class="fa-solid fa-angle-down ms-1"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" target='_blank' href="https://ieeexplore.ieee.org/xpl/conhome/10104520/proceeding">ICSCDS 2023</a></li>
            <li><a class="dropdown-item" target='_blank' href="https://ieeexplore.ieee.org/xpl/conhome/9760735/proceeding">ICSCDS 2022</a></li>
  </ul>
</li>
  

           
        
          </ul>
        </div>
      </div>
    </nav>

    <?php
        if ($heading != ""){
      ?>
    <div class="title-header ">
      <h2 class="sectionHeading"><?php echo $heading; ?></h2>
    </div>
    <?php
        }
      ?>