<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Unicare Biomedical</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css\css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .panel{
    border-radius: 20px;
}
.panel img{
  height: 250px;
}
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 20px;
  }
  .thumbnail img {
    width: 100%;
    height: 200px;
    margin-bottom: 20px;
      border-top-left-radius: 20px;
    border-top-right-radius: 20px;
  }

  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
   
    border-radius:20px ;
        transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0,0.2);
  }
  .panel-footer .btn:hover {
   
    background-color:#fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
     border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  .footer{
      border-top-right-radius: 100px;

  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform:translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform:translateY(0%);
    }
  }
  @media screen and (max-width:768px) {
    .col-sm-4 {
      text-align:center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width:480px) {
    .logo{
      font-size:150px;
    }
  }
  .product{
    border-radius:20px;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRODUCT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">
  <div class="col-12 col-sm-12 col-md-12  col-lg-12">
<div class="jumbotron text-center">
<h1>Unicare Biomedical</h1><p>We specialize in Biomedical Trader
,Service Providern
Supplier,
Distributor</p> 
  </div>
</div>
</div>
<!-- Container (About Section) -->
<div id="about" class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company</h2><br>
      <h4>Basic Information
Nature of Business  Manufacturer Additional Business Trader Service Provider Supplier Distributor Company CEO Jayesh Ukani Total Number of Employees Upto 10 People Year of Establishment 2010 Legal Status of Firm  Individual - Proprietor</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong></p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>we have 100+ laboratry customer</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>unicare biomedical is certfied company</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>we work hard and posible to solve all  problem</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4 city">
      <div class="thumbnail">
        <img src="image/city3.jpg" alt="surat">
        <p><strong>surat</strong></p>
        <p>surat</p>
      </div>
    </div>
    <div class="col-sm-4 city">
      <div class="thumbnail">
        <img src="image/city1.jpg" alt="vadodara" >
        <p><strong>vadodara</strong></p>
        <p>vadodara</p>
      </div>
    </div>
    <div class="col-sm-4 city">
      <div class="thumbnail">
        <img src="image/city2.jpg" alt="bharuch" >
        <p><strong>bharuch</strong></p>
        <p>bharuch</p>
      </div>
    </div>
  </div><br>
  
 <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>viren donga, krishna Lab, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>ankit vasava, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Good and fast service provider  company"<br><span>shaymbhai desai, shaymlab commenr box</span></h4>
      </div>
    </div>

 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Product</h2>
 
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12 ">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Cell Counter Reagents</h4>
        </div>
        <div class="panel-body">
          <img src="image/product.jpeg" width="100%" height="350" >
        </div>
          <div class="panel-footer">
          <h4>Cell Counter Reagents</h4>
          
          
        </div>     
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12 ">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Nihon Kohden Reagents</h4>

        </div>
         <div class="panel-body">
          <img src="image/product1.jpeg" width="100%" height="350" >
        </div>
         <div class="panel-footer">
          <h4>Nihon Kohden Reagents</h4>
          
          
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>ABX Micro 60 Reagents</h4>
        </div>
         <div class="panel-body">
          <img src="image/product3.jpeg" width="100%" height="350" >
        </div>
       <div class="panel-footer">
          <h4>ABX Micro 60 Reagents</h4>
          
          
        </div>
      </div>      
    </div>    
  </div>
</div>
<div class="row slideanim container-fluid"">
    <div class="col-sm-4 col-xs-12 ">

      <div class="panel  panel-default text-center">
        <div class="panel-heading">
          <h4>Mindray Heamatology Analysers</h4>
        </div>
        <div class="panel-body">
          <img src="image/product4.jpeg" width="100%" height="350" >
        </div>
             <div class="panel-footer">
          <h4>Mindray Heamatology Analysers Reagents
</h4>
          
          
        </div>  
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12 ">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Erma PCE - 210 Reagents</h4>

        </div>
         <div class="panel-body">
          <img src="image/product4.jpeg" width="100%" height="350" >
        </div>
         <div class="panel-footer">
          <h4>Erma  PCE - 210 Reagents</h4>
          
          
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>KX 21 Laboratory Reagents</h4>
        </div>
         <div class="panel-body">
          <img src="image/product4.jpeg" width="100%" height="350" >
        </div>
      <div class="panel-footer">
          <h4>KX 21 Laboratory Reagents</h4>
          
          
        </div>
      </div>      
    </div>    
  </div>
</div>


<div id="contact" class=" footer container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Plot no 36,Shubham industries-3, saniya hemad, Puna Simada Road, Yogi Chowk, Surat-394210, Gujarat, India </p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9979354571</p>
      <p><span class="glyphicon glyphicon-envelope"></span>unicarebiomedical@yahoo.in</p>

    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <form action="connection.php" class="reg" method="post">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" class="reg">Send</button>
        </div>
      </div>
</form>
    </div>
  </div>
</div>




<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
     <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 
</footer>

<script>
$(document).ready(function(){
  
  $(".navbar a, footer a[href='#myPage']").on('click',function(event) {
   
    if (this.hash !== "") {
      
      event.preventDefault();

     
      var hash = this.hash;

   
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
