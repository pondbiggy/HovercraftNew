<!doctype html>
<html lang="th">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hovercraft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="style.css">
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 50%;
    height: 50%;
  }
    body{
           text-align: center ;
           
        }
    .card {
             margin: auto;
            }
    .btn btn-primary{
             margin: auto;
             text-align: center ;
            }
    .carousel slide{
             margin: auto;
             text-align: center ;

            }
        

  </style>



</head>




<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
   <!-- Brand/logo -->
   <a class="navbar-brand" href="#">
    <img src="ho.png" alt="logo" style="width:40px;">
  </a>
  <!-- Brand -->
  <a class="navbar-brand" href="#"><strong>Hovercraft</strong></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Members
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Ball</a>
        <a class="dropdown-item" href="#">Bee</a>
        <a class="dropdown-item" href="#">Jib</a>
        <a class="dropdown-item" href="#">Phai</a>
      </div>
    </li>
    </ul>
  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
</nav>


<header class="header">
        <div class="container">
            <div class="header_area">
    
                <h1>Welcome to <br>Hovercraft Group</h1>
                <h2>DS-WebTechnology 63</h2>
            </div>
        </div>
    </header>

     <h2>Members</h2>
    <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
      
            <div class="card" style="width:300px">
                <img class="card-img-top" src="p11.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Jiraphat Thongyoo</h4>
                <p class="card-text">620710040<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
            <div class="card" style="width:300px">
                <img class="card-img-top" src="p33.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Apatsara Piromto</h4>
                <p class="card-text">620710162<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
    </div>
    <div class="col-sm-6">
      
            <div class="card" style="width:300px">
                <img class="card-img-top" src="p22.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Phanthipha Makchiao</h4>
                <p class="card-text">620710161<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
            <div class="card" style="width:300px">
                <img class="card-img-top" src="p44.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Worapon Boontawee</h4>
                <p class="card-text">620710742<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
      
    </div>
  </div>
</div>
            
       


  
<div class="container mt-3">
  <h2>Carousel Options</h2>
 
  <div id="myCarousel" class="carousel slide">
  
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li class="item1 active"></li>
    <li class="item2"></li>
    <li class="item3"></li>
    <li class="item4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="p11.jpg" alt="ball" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="p22.jpg" alt="bee" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="p33.jpg" alt="jib" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="p44.jpg" alt="phai" width="1100" height="500">
    </div>
    
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<script>
$(document).ready(function(){
  // Activate Carousel with a specified interval
  $("#myCarousel").carousel({interval: 30});
        
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>


</body>

</html>

