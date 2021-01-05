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
    .Section Contact lazy-bg {
             text-align:center;
             margin: auto;
             margin-top: 200px;
    }
    #onfoot {
                background-color:#c3d5d5; 

            }
        /* For mobile phones: */
    [class*="col-"] {
      width: 100%;
    }

    @media only screen and (min-width: 600px) {
      /* For tablets: */
      .col-s-1 {width: 8.33%;}
      .col-s-2 {width: 16.66%;}
      .col-s-3 {width: 25%;}
      .col-s-4 {width: 33.33%;}
      .col-s-5 {width: 41.66%;}
      .col-s-6 {width: 50%;}
      .col-s-7 {width: 58.33%;}
      .col-s-8 {width: 66.66%;}
      .col-s-9 {width: 75%;}
      .col-s-10 {width: 83.33%;}
      .col-s-11 {width: 91.66%;}
      .col-s-12 {width: 100%;}
    }
    @media only screen and (min-width: 768px) {
      /* For desktop: */
      .col-1 {width: 8.33%;}
      .col-2 {width: 16.66%;}
      .col-3 {width: 25%;}
      .col-4 {width: 33.33%;}
      .col-5 {width: 41.66%;}
      .col-6 {width: 50%;}
      .col-7 {width: 58.33%;}
      .col-8 {width: 66.66%;}
      .col-9 {width: 75%;}
      .col-10 {width: 83.33%;}
      .col-11 {width: 91.66%;}
      .col-12 {width: 100%;}
    }        
        

  </style>



</head>




<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <img src="ho.png" alt="logo" style="width:40px;">
    </a>
  <div class="borderLeftRight">
    <!-- Brand -->
    <a class="navbar-brand" href="https://hovercraft4.herokuapp.com/"><strong>Hovercraft</strong></a>
  </div>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button> 

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="borderLeftRight">
            <a class="nav-link" href="#">Home</a>
          </div>
        </li>
        <li class="nav-item">
          <div class="borderLeftRight">
            <a class="nav-link" href="#contact">Contact</a>
          </div>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">About</a>
        <div class="dropdown-menu">
          <div class="borderLeftRight">
            <a class="dropdown-item" href="https://www.su.ac.th/th/index.php">Silpakorn University</a>
          </div>
          <div class="borderLeftRight">
            <a class="dropdown-item" href="http://www.sc.su.ac.th/index.php">Science, Silpakorn</a>
          </div>
          <div class="borderLeftRight">
            <a class="dropdown-item" href="https://www.cp.su.ac.th/">Department of Computing</a>
          </div>
          <div class="borderLeftRight">
            <a class="dropdown-item" href="https://www.cp.su.ac.th/curricula/Bachelor-of-Science-Program-in-Data-Science">DataScience</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Members
          </a>
          
        <div class="dropdown-menu">
          <div class="borderLeftRight">
            <a class="dropdown-item" href="ball1.html">Ball</a>
          </div>
          <br>
          <div class="borderLeftRight">
            <a class="dropdown-item" href="b.html">Bee</a>
          </div>
          <br>
          <div class="borderLeftRight">
            <a class="dropdown-item" href="jib.html">Jib</a>
          </div>
          <br>
          <div class="borderLeftRight">
            <a class="dropdown-item" href="phaii.html">Phai</a>
          </div>
        </div>
      </li>
      </ul>
    
  
    </div>

  
  
</nav>


<header class="header">
        <div class="container">
          <div class="header_area" >
    
            <h1>Welcome to <br>Hovercraft Group</h1>
            <h2>DS-WebTechnology 63</h2>
          </div> 
        </div>
    </header>
       <br>
     <h2>Members</h2>
    <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-s-6 col-6">
      
            <div class="card" style="width:300px">
                <img  class=img-fluid  src="p11.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Jiraphat Thongyoo</h4>
                <p class="card-text">620710040<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="ball1.html" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
            <div class="card" style="width:300px">
                <img  class=img-fluid  src="p33.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Apatsara Piromto</h4>
                <p class="card-text">620710162<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="jib.html" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
    </div>
    <div class="col-s-6 col-6">
      
            <div class="card" style="width:300px">
                <img class=img-fluid src="p22.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Phanthipha Makchiao</h4>
                <p class="card-text">620710161<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="b.html" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
            <div class="card" style="width:300px">
                <img  class=img-fluid src="p44.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Worapon Boontawee</h4>
                <p class="card-text">620710742<br>Data Science<br>SU76 SC48 DS2</p>
                <a href="phaii.html" class="btn btn-primary">See Profile</a>
                </div>
            </div>
      
      
    </div>
  </div>
</div>

<br>

<div class="container-fluid">
  <div class="card-deck">
    <div class="card">
      
      <div class="card-body">
       
        
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="R2.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">R</h5>
        <p class="card-text">STATISTICS FOR DATA SCIENCE<br>FOUNDATION OF DATA SCIENCE<br>DATA SCIENCE TOOLBOX<br>GETTING AND CLEANING DATA</p>
        
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="R2.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">R</h5>
        <p class="card-text">STATISTICS FOR DATA SCIENCE<br>FOUNDATION OF DATA SCIENCE<br>DATA SCIENCE TOOLBOX<br>GETTING AND CLEANING DATA</p>
        
      </div>
    </div>
    <div class="card">
      
      <div class="card-body">
        
        
      </div>
    </div>




  </div>   
</div>


<br>
<br>



<div class="container-fluid">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="R1.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">python</h5>
        <p class="card-text">COMPUTER PROGRAMMING <br>DATA STRUCTURE AND ALGORITHM<br>DATA SCIENCE TOOLBOX<br>BIG DATA PROCESSING</p>
        
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="R2.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">R</h5>
        <p class="card-text">STATISTICS FOR DATA SCIENCE<br>FOUNDATION OF DATA SCIENCE<br>DATA SCIENCE TOOLBOX<br>GETTING AND CLEANING DATA</p>
        
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="R3.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">SQL</h5>
        <p class="card-text">DATABASE SYSTEMS <br>DATA SCIENCE TOOLBOX<br><br><br></p>
        
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="R4.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">HTML CSS JS BOOTSTRAP</h5>
        <p class="card-text">WEB TECHNOLOGY<br><br><br><br></p>
        
      </div>
    </div>


  </div>   
</div>

<br>

<div class="container-fluid p-3 my-3 bg-dark text-white">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="s1.jpg" alt="ball" width="600" height="500">
            </div>
            <div class="carousel-item">
                <img src="s2.jpg" alt="bee" width="600" height="500">
            </div>
            <div class="carousel-item">
                <img src="s3.jpg" alt="jib" width="600" height="500">
            </div>
            <div class="carousel-item">
                <img src="s4.jpg" alt="phai" width="600" height="500">
            </div>
            <div class="carousel-item">
                <img src="s5.jpg" alt="phai" width="600" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

<br>
<!-- Contact -->
<div id="contact" class="Section Contact lazy-bg">
        <div class="Contact-Content" id="contact-section">
            <div class="Head-Row">
                <div class="Head-Column">
                <div class="Heading">
                        <h2><span class="Markdown"></span></h2>
                    </div>
                </div>
            </div>
        </div>   
</div>  
        
<div class="container-fluid" style="margin-top:30px">
  <div class="row">
    <div class="col-s-4 col-4">
      
        <div class="Contact-Row">
                <div class="Contact-Column-Social">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FScienceSilpakornUniversity&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
        </div> 
      
    </div>
    <div class="col-s-4 col-4">
                <div class="Contact-Column-Social">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcpsilpakorn&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div> 
      
      
    </div>
    <div class="col-s-4 col-4">
            <div class="Contact-Column-Social">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDSSCSU%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> 
            </div> 
      
    </div>
  </div>
</div>

<br>


<div id = "onfoot" class="container--fluid" >
      <br>
  <h5>Contact Group Us</h5>

  <p>
     <span><a data-toggle="tooltip" title="Follow on CPSU_Group" href="https://www.facebook.com/groups/CPSUTH"><i class="fab fa-facebook-square" style="color:rgb(255, 255, 255);font-size:72px"></i></a></span> 
     <span><a data-toggle="tooltip" title="Follow on DSSCSU_Group" href="https://www.facebook.com/groups/DSSCSU"><i class="fab fa-facebook-square" style="color:rgb(102, 179, 255);font-size:72px"></i></a></span> 
     <span><a data-toggle="tooltip" title="Follow on WebTechnology_Group" href="https://www.facebook.com/groups/2097980677004926"><i class="fab fa-facebook-square" style="color:rgb(0, 132, 255);font-size:72px"></i></a></span> 
  </p>
  <p class="float-right">
        <a href="#"><img src="up.png" alt="ball" width="50" height="50"></a>
  </p>
<br>
<br>
<br>
 
 
    
   

<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>

</body>

</html>

