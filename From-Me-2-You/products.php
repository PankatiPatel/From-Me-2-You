
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Prodcuts</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Ninom
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="productCategory.php">Our Products </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.html">Testimonial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- fruit section -->

  <section class="fruit_section layout_padding">
    <div class="container">
        <hr>
        <?php  $vendor_id = $_GET['vendor_id'];  ?>
          <form method = 'GET' action = 'products.php'  >
          Search Keywords: <input type = "text" name = search > 
          Price Range: <input type="range" min="1" max="100" value = '' class="slider" name ="myRange">
          <input type = 'hidden' name = 'vendor_id' value = ' <?php echo $vendor_id;?>'>
          <input type = 'submit' value = 'Submit'>
    
          </form>
      </div>
    </div>
    <div class="container-fluid">

      <div class="fruit_container">
      <?php

            include ("dbconfig.php"); 
            date_default_timezone_set('America/New_York');


            $vendor_id = $_GET['vendor_id'];

         //   setcookie("vid", 'hell0',time()+ (60*100), "/"); 
            
 
            if(isset($_GET["search"]) AND isset($_GET["myRange"]))
            {
              $search = $_GET["search"];
              $range = $_GET["myRange"];
              $sql = "SELECT * FROM 2022F_patpanka.Product WHERE name LIKE CONCAT('%', '$search','%') AND sell_price BETWEEN 1 AND $range AND vendorId = '$vendor_id'";
              $result = mysqli_query($conn,$sql);
            }
            elseif(isset($_GET["search"]))
            {
              $search = $_GET["search"];
              $sql = "SELECT *  FROM 2022F_patpanka.Product WHERE name LIKE CONCAT('%', '$search','%') and vendorId = '$vendor_id'";
              $result = mysqli_query($conn,$sql);
            }
            elseif(isset($_GET["myRange"]))
            {
              $range = $_GET["myRange"];
              $sql = "SELECT *  FROM 2022F_patpanka.Product WHERE sell_price BETWEEN 1 AND $range and vendorId = '$vendor_id'";
              $result = mysqli_query($conn,$sql);
            }
            else
               $sql = "SELECT * FROM 2022F_patpanka.Product WHERE vendorId = '$vendor_id' ";
               $result = mysqli_query($conn,$sql);

                if($result)
                { 
                    while($row = mysqli_fetch_array($result))
                    {
                      $id = $row["productId"];
                      $name = $row["name"];
                      $desc = $row["description"];
                      $cost = $row["cost"];
                      $sell_price = $row["sell_price"];
                      $qty = $row["qty"];
                      $vendorId = $row["vendorId"];
                      $img = $row["img"];

            ?>
        <div class="box">
          <img src="images/<?php echo $img ?>" alt="">
          <div class="link_box">
            <h5>
              <?php echo $name ?>
            </h5>
            <a href="">
              Buy Now
            </a>
        </div>
        </div>
  
        <?php 
        }
      }
    else 
      echo "There is an issue"; ?>
      
  </section>



  <!-- end fruit section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          FROM-ME-2-YOU
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Find Locations
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">FROM-ME-2-YOU</a>
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>