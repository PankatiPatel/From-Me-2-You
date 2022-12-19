<?php

    $host = "imc.kean.edu";
    $username = "patpanka";
    $password = "1129006";
    $dbname = "2022F_patpanka";


    $conn = mysqli_connect($host, $username, $password, $dbname)
    or die ("<br> Connection error". mysqli_connect_error());
    
?>


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

  <title>Ninom</title>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
        /* Set the size of the div element that contains the map */
#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 58%;
  /* The width is the width of the web page */
}
.vendor_details
{
  border: 2px solid black;
  border-radius: 5px;
  margin: 18px;
    padding: 13px;
    width: 302px;
    display: inline-block;
}
.checked {
  color: orange;
}
        </style>
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
                  <a class="nav-link" href="products.php">Our Products </a>
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
  <h3>My Google Maps Demo</h3>

<form action="" method="post" id="ajax_call">
    <input type="text" name="zip_code" id="zip_code" >
    <input type="submit" name="submit" value="Search" />
        
</form> 

<div class="zip_data"> </div>


    <!--The div element for the map -->
    <div id="map"></div>

<br>
<br>

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


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCITvAwaO8sAMN_yeTX1UaBYWfCHwmbw60&callback=initMap&v=weekly"
      defer
    ></script>
</body>

</html>




<?php 
$query="select name, longitude , latitude from Vendor";
$count=0;
$result = mysqli_query($conn,$query);
$lat_lon = array();
while($row = mysqli_fetch_assoc($result)) {

    $lat_lon[$count]['name'] = $row["name"];
    $lat_lon[$count]['lat'] = $row["latitude"];
    $lat_lon[$count]['lng'] = $row["longitude"];
    
    // $lat_lon = array(
    //     $count => array($row["longitude"],$row["latitude"])
    // );

$count++;
}

$js_array = json_encode($lat_lon);





// print_r($js_array);

?>


<script>

// Initialize and add the map
function initMap() {
  // The location of Uluru
  
var arr = <?php echo $js_array; ?>;

var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < arr.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(arr[i].lat, arr[i].lng),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(arr[i].name);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
}


function setLocalStorage(arr) {

  
// var arr = <?php// echo $js_array; ?>;
var geocoder= new google.maps.Geocoder();
var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < arr.length; i++) {  
      
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(arr[i].lat, arr[i].lng),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(arr[i].name);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

  var address = document.getElementById('zip_code').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
    // if (customerMarker) customerMarker.setMap(null);
    //     customerMarker = new google.maps.Marker({
    //         map: map,
    //         position: results[0].geometry.location
    //     });
    // closest = findClosestN(results[0].geometry.location,10);
    //     // get driving distance
    //     closest = closest.splice(0,3);
    //     calculateDistances(results[0].geometry.location, closest,3);


  


      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
}


jQuery(document).ready(function(){

jQuery('#ajax_call').on('submit' , function(e){
  e.preventDefault();
  var address = document.getElementById('zip_code').value;
  $.ajax(
                {
                    url : 'ajax_res.php',
                    method: 'post',
                    data:{
                      action:"search_zip" ,
                      zip_code:address
                      },
                      dataType: 'JSON',
                    success: function(data)
                    {
                     
                     
                      
                      jQuery('.zip_data').empty();
                      jQuery('.zip_data').append(data.html);
                      setLocalStorage(JSON.parse(data.js_array));
                    }
                });


})

})


window.initMap = initMap;


    </script>