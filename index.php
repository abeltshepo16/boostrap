<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Tutorial Sample Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="sylesheet" type="text/css" href="style/css.css">
  <!--@import url('https://fonts.googleapis.com/css?family=Poppins:300,400,');-->
  <style>
      

*{
    outline:none !important;
}
body{
  font-family:'Poppins',san-serif;
  scroll-behaviour:smooth;
}

header{
    position:relative;
    z-index:1000000;
}

p{
  font-size:1.15rem;
}
.navbar{
  transition:0.5s;
background:transparent !important;  
}
.navbar.scrolled{
   background:#000 !important;
   transition: 0.5s;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-{
  color:#000;
background:#fff;  
    
}
.navbar-light .navbar-nav .active>.nav-link:hover{
    color:#000;
}

.navbar-light .navbar-nav .nav-link{
    color:rgba(255,255,255,.8);
}
.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus{
    color: rgba(255,255,255.1);
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
.banner{
    position:relative;
    top:0;
    width:100%;
    height:100vh;
    background: url(images/bannerbg.jpg);
    background-size: cover;
    margin-bottom: 0;
}
.banner:before,.sec2:before,.contact:before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:400px;
    background:linear-gradient(#000,transparent);
    pointer-events:none;
     
}

.banner:after,.sec2:after,.contact:after{
    content:'';
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    height:400px;
    background:linear-gradient(360deg,#000,transparent);
    pointer-events:none;    
}

.height100p{
    height:100vh;
}
.hl00{
    height:100%;
}
.contentBox{
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
    z-index:10;
}

.contentBox h1{
    font-weight: 800;
    color:#fff;
    text-transform:uppercase;
    font-size:5rem;
}

.contentBox p{
    color:#fff;
    font-size:1.3rem;
}

.sec1{
    padding:100px 0;
    background:#000;
}
.headerText h2{
    font-size:2.5rem;
}
.headerText {
color:#fff;    
}
.placeBox{
    position:relative;
    max-width:300px;
}
.placeBox .imgBx img{
    object-fit: cover;
    width:100%;
    height:100%;
}
.placeBox .content{
    position:absolute;
    width:100%;
    height:100%;
    display: flex;
    justify-content:baseline;
    align-items:flex-end;
}

.placeBox .content h3{
    position:relative;
    margin:0;
    padding:10px;
    background: rgba(0,0,0,0.95);
    color:#fff;
    font-size: 20px;
    font-weight:600;
    width:100%;
    text-align:center;
    
}

.placeBox .content h3 span{
    font-size:16px;
    font-weight:500;
}

.sec2{
    position:relative;
    background: url(images/banner2.jpg);
    background-size:cover;
    height:100vh;
}


.sec2 h2{
    font-weight:800;
    color:#fff;
    text-transform:uppercase;
    font-size: 4.5rem;
}

.btnD1{
    border:2px solid #fff;
    color:#000;
    background:#fff;
    border-radius:50px;
    padding: 15px 50px;
    font-size:1.15rem;
    outline:none;
    font-weight:500;
    margin-top:20px;
    
}
.blog{
    position:relative;
    padding:100px 0;
    background:#000;
}
.blogpost{
   position:relative;
   width:100%;
   margin-top:30px;
   background:#fff;
}

.blogpost .imgBx{
    height:400px;
}
.blogpost .imgBx img{
   width:100%;
   height:100%;
   object-fit:cover;
}

.blogpost .content{
    padding:15px;
}

.blogpost .content  h1{
    margin:0;
    padding:0;
    font-weight:600;
    font-size:1.5rem;
}

.btnD2,.btnD2:hover{
    background: #262626;
    color: #fff;
    border-radius:30px;
    padding:10px 20px;
    float:right;
}

.contact{
    position: relative;
    padding:100px 0;
    background: url(images/contactBg.jpg);
    background-size:cover;
    min-height: 100vh;
}
.contact form{
    z-index:1000;
    position:relative;
}

.contact .form-control{
    background:transparent;
    border:none;
    border-bottom:2px solid rgba(255,255,255,.2);
    height:50px;
    border-radius:0;
    background: rgba(0,0,0,.6);
    color:#fff;
    font-size:1.25rem;
}

.contact .form-control:focus,
.contact .form-control:hover{
    border:none;
    border-bottom:2px solid rgba(255,255,255,.1);
    box-shadow:none;
}

.contact .textarea{
    min-height:100px;
}

.contact .label{
    color:#fff;
    font-size: 1.25rem;
}
footer{
    background:#000;
    padding: 50px 0 0;
}

.sci{
    margin:0;
    padding:0;
    display:flex;
    justify-content:center;
    align-items:center;
}

.sci li{
    list-style:none;
    margin:0 20px;
}
.sci li a{
    color:#777;
    font-size:2em;
    transition: 0.5s;
}

.sci li a:hover{
    color:#fff;
}
.cpryt{
    color:#777;
    margin-top: 20px;
    text-align: center;
    
}
.cpryt a,.cpryt a:hover{
    color:#fff;
}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navabar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-mg-auto">
            <li class="nav-item ">
                <a class="nav-link" href="#home">Home<span class="sr-only">(current)</span></a>
            </li> 
             <li class="nav-item">
             <a class="nav-link" href="#explore">Explore>/a> 
                        </a>
             </li>
               <li class="nav-item">
                   <a class="nav-link" href="#adventure">Adventure</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#blog">Blog</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#contact">Contact</a>
               </li>
        </ul>
    </div>
    </div>
    </nav>
    </header>
    
    <div class="jumbotron.jumbotron-fluid height100p banner" id="home">
        <div class="container h100">
            <div class="contentBox h100">
                
            </div>
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modifiedjumbotron that occupies the entire horizontal space of its parent.</p>
            
        </div>
    </div>  
    <section class="sec1" id="explore">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText text-center">
                        <h2>explore the world</h2>
                        <p>the world is at stake god is angry at his creatures </p>
                    </div>
                    
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="placeBox">
                        <div class="imgBx">
                            <img src="images/img1." class="img-fluid">
                            
                        </div>
                        <div class="content">
                            <h3>Place Name<br><span>Country Name</span></h3>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="placeBox">
                        <div class="imgBx">
                            <img src="images/img1." class="img-fluid">
                            
                        </div>
                        <div class="content">
                            <h3>Place Name<br><span>Country Name</span></h3>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="placeBox">
                        <div class="imgBx">
                            <img src="images/img1." class="img-fluid">
                            
                        </div>
                        <div class="content">
                            <h3>Place Name<br><span>Country Name</span></h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="sec2" id="adventure">
        <div class="container h100">
            <div class="contentBox h100">
                <div>
                    <h1> adventure is everywhere</h1>
                    <p>the ipsum isnthe web designer of all times</p>
                    <a href="#" class="btn btnD1">Rea more..</a>
                </div>
            </div>
            
        </div>
    </section>
    <section class="blog" id ="blog">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText">
                        <h2>Our latest Post</h2>
                        <p>the ipsum isnthe web designer of all times</p>
                    </div> 
                </div>    
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="blogpost">
                        <div class="imgBx">
                      <img  src="images/img.1jpg" class="img-fluid">      
                        </div>
                        <div class="content">
                            <h1>tshepo blog</h1>
                            <p>the ipsum isnthe web designer of all times</p>
                        </div>
                    </div>
                </div>
                     <div class="col-sm-6">
                    <div class="blogpost">
                        <div class="imgBx">
                      <img  src="images/img.1jpg" class="img-fluid">      
                        </div>
                        <div class="content">
                            <h1>tshepo blog</h1>
                            <p>the ipsum isnthe web designer of all times</p>
                        </div>
                    </div>
                </div>
                     <div class="col-sm-6">
                    <div class="blogpost">
                        <div class="imgBx">
                      <img  src="images/img.1jpg" class="img-fluid">      
                        </div>
                        <div class="content">
                            <h1>tshepo blog</h1>
                            <p>the ipsum isnthe web designer of all times</p>
                            <a href="#" class="btn btnD2">Read More</a> 
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                     <div class="col-sm-6">
                    <div class="blogpost">
                        <div class="imgBx">
                      <img  src="images/img.1jpg" class="img-fluid">      
                        </div>
                        <div class="content">
                            <h1>tshepo blog</h1>
                            <p>the ipsum isnthe web designer of all times</p>
                            <a href="#" class="btn btnD2">Read More</a> 
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                     <div class="col-sm-6">
                    <div class="blogpost">
                        <div class="imgBx">
                      <img  src="images/img.1jpg" class="img-fluid">      
                        </div>
                        <div class="content">
                            <h1>tshepo blog</h1>
                            <p>the ipsum isnthe web designer of all times</p>
                            <a href="#" class="btn btnD2">Read More</a> 
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                     <div class="col-sm-6">
                    <div class="blogpost">
                        <div class="imgBx">
                      <img  src="images/img.1jpg" class="img-fluid">      
                        </div>
                        <div class="content">
                            <h1>tshepo blog</h1>
                            <p>the ipsum isnthe web designer of all times</p>
                            <a href="#" class="btn btnD2">Read More</a> 
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headerText text-center">
                        <h2>contact us</h2>
                        <p>thank for filling the form will get back to you</p>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="0ffset-sm-2 col-sm-8">
                    <form>
                      <div class="form-group">
                          <label>name</label> 
                          <input type="text" name="" class="" form-control="">
                </div>
                        <div class="form-group">
                          <label>Phone</label> 
                          <input type="text" name="" class="" form-control="">
                </div>
                        <div class="form-group">
                          <label>Email</label> 
                          <input type="text" name="" class="" form-control="">
                </div>
                        <div class="form-group">
                          <label>Message</label> 
                          <textarea class="form-control textarea" name=""></textarea>
                        </div> 
                        <div class="form-group text-center">
                            <button class="btn btnD1">Send</button>
                        </div>
                    </form>
            </div>
        </div> 
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="sci">
                        <li><a href="#"><i class="fa fa-facebook"></i></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul> 
                    <p class="cpryt">&copy copyright 2019 Nature | template by me tshepo</p>
                </div>
            </div>
        </div>
    </footer>
             
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<script type="text/javascript">
    $(document).scroll(function()){
        $('.navbar').toggleClass('scrolled',$(this)).
                scrollTop() > $('.navbar').height())
        
    }
</body>
</html>



