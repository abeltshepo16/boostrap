<!DOCTYPE html>
<html lang="en">
<head>
  <title>Noobie Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link re="stylesheet" href="style/css.css">
   <style>
  /* Make the image fully responsive */
  *{box-sizing:border-box;outline:none !important;}
  body { 
    width:100%;
  padding:0px;
  margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
  overflow-x:hidden;
}
  .container-fluid {
    width: 100%;
    padding-right: 5px;
    padding-left: 5px;
    margin-right: auto;
    margin-left: auto;
}
  .H1{
    font-family:monospace ;
    font-style:normal;
    color:green;
    text-align: center;
  }
  .bg-text{
  background-color: rgb(76,175,80); 
  background-color: rgba(0,0,0, 0.5); 
  color: green;
  font-weight: bold;
  font-size:20px;
  border: 1px solid rgba(250,250,250, 0.4);
  position: absolute;
  left: 50%;
  bottom: -20%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 18px;
  text-align: center;
  word-spacing: 2px;
  letter-spacing: 2px;
  height:300px;
      
  }

  
  .nav{
    transform: translate(80%,-20%);
    
  }
  .nav-tabs {
    border-bottom: 1px solid #dee2e6;
    width: 40%;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: green;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
.nav-link {
    display: block;
    padding: .5rem 1rem;
}
a {
    color: green;
    text-decoration: none;
    background-color: transparent;
}

.navbar-light .navbar-nav .active>.nav-link:hover{
    color:blue;
}

.navbar-light .navbar-nav .nav-link{
    color:rgba(255,255,255,.8);
}
.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus{
    color: rgba(255,255,255.5);
}
.navbar-light .navbar-brand,
.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:visitted
{
    color:rgba(255,255,255,1);
    font-size:2.5rem;
    font-weight:600;
}

    .carousel-inner img {
     width: 100%;
      height: 80%;
  }
  .hs,.hc{
      text-align:center;
      text-decoration: underline;
  }
  
  hr{
   border-bottom:1px solid darkgrey;
   width:90%;
  }
  #contact{
      height:80vh;
  }
  form{
    transform: translate(2%,20%);
}
.cont-sec{
     transform: translate(12%,20%);
     margin:10px;
}
footer{
    background-color: cyan;
    font-family:sans-serif;
}
.single-footer-widget {
    transform: translate(50%,30%);
}
              .para {
    transform: translate(30%,0%);
}

icon-bar{
    width:100%;
}
 
.icon-bar a{
	display: inline-block;
	width: 53px;
	height: 65px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 50%;
        transform: translate(100%,-45%);
	font-size: 30px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
        padding:14px;
	margin-right: 21px;
	margin-bottom: 5px;
}

.icon-bar a:hover {
  background-color: blue;
}

.icon_title{
    text-align:center;
    margin-block-start: -3.33em;
    margin-block-end: 1.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-family:sans-serif;
}

@media  screen and (max-width: 425px) {
  .hm{
    float: none;
   text-align:left;
   width:100%;
        
  }
  .column {
    width: 100%;
  }
  .bg-text{
      width:80%;
      float:left;
      font-size:15px;
      transform:translate(-50%,50%);
      height:202px;
  }
  .text{
      font-size:12px;
      word-spacing:normal;
  }
  .hb{
      text-align: center;
      font-size:1.5rem;
      word-spacing:-5px;
  }
    form{
    transform: translate(0%,0%);
}
.single-footer-widget {
    transform: translate(0%,15%);
}
.para {
    display: block;
 transform: translate(0%,15%);
}
}

  </style>
</head>
<body>
        <div class="container-fluid col-lg-12 col-sm-12">
            <div class="container1">
        <h1 class="H1 col-lg-12 col-sm-6">BALOS ENTERPRICE</h1>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#services">SERVICES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#seeds">SEEDS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#community">COMMUNITY</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#contact">CONTACT</a>
    </li>
  </ul>
        </div> 
        </div>
    <div class="container-fluid mt-0 pt-0 bg-success "> 
  <!-- Tab panes -->
  <div class="tab-content ">
    <div id="home" class="container-fluid tab-pane active">
        
         
         <div class="bg-text col-lg-6">
         <h1 class="hb">GOING GREEN IS EASY</h1>
  <p class="text">Making the world greener is easy <br>one community at time.</p>
   <button class="greenbtn">ORDER SEEDS</button>
       </div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="agri-back.jpeg" alt="Los Angeles" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="agri-img5.jpeg" alt="Chicago" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="agri-main.jpeg" alt="New York" width="100%" height="500">
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
  </div>
</div>
    <div id="services" class="container-fluid tab-pane bg-light pb-5"><br>
      <h3 class="hs">SERVICES</h3>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
     <img src="agri-img2.jpeg" class="rounded" alt="Cinque Terre" width="420" height="336"> 
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
    <img src="agri-img3.jpeg" class="rounded" alt="Cinque Terre" width="420" height="336"> 
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
     <img src="agri-img1.jpeg" class="rounded" alt="Cinque Terre" width="420" height="336"> 
    </div>
  </div>
</div>
    </div>
    <div id="seeds" class="container-fluid tab-pane pb-5"><br>
      <div class="container-fluid">
<div class="row">
 <div class="col-sm-6">
  <img class="img-fluid" src="agri-img2.jpeg" alt="Chania" width="100%" height="345"> </div>
  <div class="col-sm-6">
           <h1 style="text-align:left">ABOUT US</h1>
    <div class="contents1">
      <h3>Lifting Community Needs</h3>
      <p class="par1">We started recognizing a need in our community .A local<br>pop-up market went out business during the recession and<br> left 2.5 acress of abandoned land .We envisioned a community<br> Balos garden where people could meet and share their love for<br> plants,gardening and helping the environment  
      </p>
    </div>
       <div class="contents1">
      <h3>Uniting Communities</h3>
      <p class="par2">Since 2001 ,our mission has been to bring the community <br>together .provide education on sustainable gardening practices.<br>and help  the environment  thrive.we're done this by <br>developing a space where people can have their own plots.<br>where others can work on shared plots and raising funds to<br> build greenhouse.We offer weekly classes on sustainability <br>practices composting and more so that the community can<br> take their skills to their home gardens.</p>
    </div>
  </div>
  
 </div>
</div>
    </div>
      <div id="seeds" class="container-fluid tab-pane bg-success pb-5"><br>
      <div class="container-fluid">
<div class="row">
 <div class="col-sm-6">
  <img class="img-fluid" src="agri-img5.jpeg" alt="Chania" width="100%" height="345"> </div>
  <div class="col-sm-6">
   
      <h1 style="text-align:left">Make a Difference</h1>
          <div class="contents2">
      <h3>Not For Profit</h3>
      <p class="par3">
          Our organization is always looking for new people that has a <br>
          green thumb or is looking to develop one As a non-profit<br>
          organization .we rely on our volunteers to help make our<br>
          spaces greener and our lives better!
      </p>
    </div>
       <div class="contents2">
      <h3>Support Your Community</h3>
      <p class="par4">
          We support communities that are looking to grow or develop<br>
          green spaces by selling materials and products from our<br>
          gardens .if you're interested in joining us or donating to our<br>
          programs.feel free to contact us!
      </p>
    </div>
       <div class="contents2">
      <h3>Want to Help?</h3>
      <p class="par5">
          We're always looking for volunteers for all kinds of roles in our<br>
          group,like program leaders.gardening help.fresh vegetables<br>
          and plant salespeople and more Anyone of any age can help<br>
      </p>
    </div>
  </div>
 </div>
</div>
      </div>
    <div id="community" class=" container-fluid bg-light col-lg-12 text-center p-5">
<div class="container-fluid">
<h1 class="hm">Community Calender</h1>
  <div class="row">
  <p class=" col-lg-12">Our community garden is open daily for your convenience (January - November).We offer classes<br>
      and tours on the weekends and community mixers on Friday nights.Space for most classes is <br>
      limited so please call or email to reserve your spot if you would like to teach a class or suggest<br>
      an event,please reach out!</p>
    <div class="col-sm-4 col-lg-2">
 <h6>Fri</h6>        
    <p>Sep</p>
     <p>6th</p>
    </div>
    <div class="col-sm-4 col-lg-6">
      <h4>Maintain Your Plot</h4>
    <p>Visit your plot anytime throughout the day to plant seeds maintain your<br>
        plant's growth  etc.We open early in the morning ...</p>
    </div>
    <div class="col-sm-4 col-lg-4">
     <h4>7:00AM-7:00PM</h4>
     <p>180 W Brits R152,South Africa</p>
    </div>
    <hr/>
    <div class="col-sm-4 col-lg-2">
      <h6>Fri</h6>
    <p>Sep</p>
     <p>6th</p>
    </div>
    <div class="col-sm-4 col-lg-6">
      <h4>Garden and Balos School Tours with Tshepo</h4>
   <p>Planning  a field trip?Sustainability and health education is important for <br>students of all ages visit our garden and see what we have grown...</p> 
    </div>
    <div class="col-sm-4 col-lg-4">
      <h4>7:00AM-7:00PM</h4>
     <p>180 W Brits R152,South Africa</p>      
    </div>
  </div>
</div>
</div>
      
 
    <div id="contact" class="container-fluid tab-pane bg-transparent  "><br>
        <h2 class="hc">CONTACT</h2>
<div class="container-fluid ">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 p-6">
  <form action="/action_page.php" class="needs-validation " novalidate>
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="form-group">
      <label for="lname">Lastname:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter lastname" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree to terms & conditions.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
  </form>
</div>

    
        <div class="cont-sec">
            <h2 class="h2-con">Volunteer Opportunities</h2>
    <p class="par1">
        You would be helping us dig plant,weed and grow the garden.Volunteers are <br>
        welcome during the week and are recommended to bring water,sunscreen,<br>
        comfortable clothing and close-toed shoes. 
    </p>
  
  <div class="par2">
    <h2>Light Construction</h2>
    Our community often share or have their own plots.We need assistance with <br>
    building and maintaining the construction of plots and other things in our <br>
    garden.
    </div>
    
  <div class="par3">
    <h2 class="h2">Classes</h2>
    <p>If you would like to teach a class feel free to send us your ideas.</p>
     </div>
    </div>
     </div> 
    </div>
    </div>
          <footer class="container-fluid footer-area bg-cyan p-2 p_120 col-sm-12"><br>    

            <div class="container-fluid">
                <div class="row footer-bottom d-flex justify-content-between bg-light-grey p-0">
                    <div class="col-lg-12 col-md-8 col-sm-12 footer-text-align-center m-0">
                        <p class="para">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Imagined by <a href="http://www.balos.co.za" target="_blank">Balos</a>
</p>
       
                        <div class="single-footer-widget contact_wd">
                            <h6 class="footer_title">ADDRESS</h6>
                            <p>73 juta street braamfontein, Johannesburg, Republic of South Africa 2001</p>
                            <a href="tel:+27 735231123">Contact:+27 735-231-123</a>
                            <a href="email:info@abedesigns.co.za">Email:info@abedesigns.co.za</a>
             
                              </div>
                    <div class="col-lg-6 col-md-6 footer-social">
                        <h5 class="icon_title">Find us here on:</h5>
                        <div class="icon-bar">
                       <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-youtube"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-instagram"></i></a>
                         <a href="#"><i class="fa fa-google"></i></a>
                          <a href="#"><i class="fa fa-whatsapp"></i></a>
                    </div>
                    </div>
                </div>
            </div>
            </div>
   </footer>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>
