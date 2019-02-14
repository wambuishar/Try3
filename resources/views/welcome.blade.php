<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KINKY</title>
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/hover.css') }}">
        <style>
        .footer {
        position: ;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
        height: 200px;
        }
        @font-face {
        font-family: 'mukta';
        src: url('/Fonts/Mukta-Bold.ttf');
        }
        @font-face {
        font-family: 'dancing';
        src: url('/Fonts/DancingScript-Bold.ttf');
        }
        #connect{
        font-size: 20px;
        font-family: 'mukta';
        color: white;
        margin-top: 20px;
        }
        #learn{
        font-size: 20px;
        font-family: 'mukta';
        color: white;
        margin-top: 20px;
        }
        #about{
        font-size: 20px;
        font-family: 'mukta';
        color: white;
        margin-top: 20px;
        }
        #socialmedia{
        display: table-row;
        }
        #zoom {
        padding: 50px;
        
        transition: transform .2s; /* Animation */
        
        
        margin: 0 auto;
        }
        #zoom:hover {
        transform: scale(1.1  ); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        </style>
    </header>
    
    <main class="container-fluid" >
        <nav class="container-fluid navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div id="header" style="color: white; font-family: 'dancing'; font-size: 25px; margin-left: 40px; margin-top: 20px; z-index: 200;">
                    <p>KINKYCURLYGAL</p>
                </div>
                <ul class="navbar-nav " style="margin-left: auto; margin-right: auto;" >
                    <li class="nav-item active">
                        <a class="nav-link" href="home">For you <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="explore">Expore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="braid">Lives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                    
                    <li class="my-auto">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: black;border-color: black; border-radius: 50%; ">
                        <img src="{{ asset('svg/user.png') }}" width="20" height="20"></button>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="container-fluid">
            <div class="row w-100" style="height: 1100px;">
                <div id="demo" class="carousel slide w-100" data-ride="carousel" style="position: absolute;" >
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('image/bobobo.png') }}"  ;>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/bobobo.png') }}" ; >
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/bobobo.png') }}" ;>
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
                
                <div id="natural" style="color: white; font-family: 'mukta'; font-size:40px; margin-top: 200px; margin-left: -100px; z-index: 200" >
                    <p>NATURALLY</p>
                </div>
                <div id="kinky" style="color: white; font-family: 'mukta'; font-size:20px; margin-top: 250px; margin-left: -200px;  z-index: 200" >
                    <p>Kinky Curly Coily Me!</p>
                </div>
            </div>
            <div id="trend" style="height: 70px; font-size:30px; color: black; font-family: 'Mukta'; margin-top: -570px; padding-left: 30px; ">
                <p>TRENDING HAIR STYLES</p>
            </div>
            <div class="row p-2" style=" height: 700px; position: relative; margin-top: 10px; ">
                <div class="col-lg-3 text-center">
                    
                    <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                        
                    </div>
                </div>
                
                <div class="col-lg-3 text-center">
                    
                    <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                        
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    
                    <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                        
                    </div>
                </div>
                
                <div class="col-lg-3 text-center">
                    
                    <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row p-2" style=" height: 700px; position: relative; margin-top: -120px; ">
            <div class="col-lg-3 text-center">
                
                <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                    
                </div>
            </div>
            <div class="col-lg-3 text-center">
                
                <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                    
                </div>
            </div>
            <div class="col-lg-3 text-center">
                
                <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                    
                </div>
            </div>
            <div class="col-lg-3 text-center">
                
                <div id="zoom" class="card h-75" data-toggle="modal" data-target="#viewmodal">
                    
                </div>
            </div>
        </div>
        <div id="trend" style="height: 70px; font-size:30px; color: black; font-family: 'Mukta';  padding-left: 30px; margin-top: -140px; ">
            <p>RECOMMENDED FOR YOU</p></div>
            <div  class="row p-2" style=" height: 700px; position: relative; margin-top: 10px; ">
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('image/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('imag/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('imag/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('imag/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-2" style=" height: 700px; position: relative; margin-top: -120px; ">
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('imag/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('imag/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('imag/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card h-75 ">
                        <div class="hvrbox">
                            <img src="{{ asset('imag/bhbh.jpg') }}"; height="520px;" width="450px;" class="hvrbox-layer_bottom">
                            <div class="hvrbox-layer_top hvrbox-layer_scale">
                                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div id="trend" style="height: 70px; font-size:30px; color: black; font-family: 'Mukta';  padding-left: 30px; margin-top: -140px; ">
                <p>PEOPLE YOU FOLLOW</p></div>
                <div class="row p-2" style=" height: 700px; position: relative; margin-top: 10px; ">
                    <div class=" col-lg-3 text-center">
                    <div class="card h-75"><img src="{{ asset('image/sha.jpg') }}"; height="385px;"></span>
                    <div class="card h-75">
                        <div style="margin-top: 10px; font-size: 30px;"></div>
                        <div style="margin-left: -200px; margin-top: 20px;">
                            
                        </div>
                        <div style="margin-top: -20px; margin-left: -30px;"></div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class=" col-lg-3 text-center" >
                <div class="card h-75"><img src="{{ asset('image/4c2.jpg') }}"; height="385px;">
                    <div class="card h-75">
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center" >
                <div class="card h-75"><img src="{{ asset('image/hahaha.jpg') }}"; height="385px;">
                    <div class="card h-75">
                        
                        
                    </div></div>
                    
                </div>
                <div class=" col-lg-3 text-center" >
                    <div class="card h-75"><img src="{{ asset('image/trans3.jpg') }}"; height="385px;">
                        <div class="card h-75">
                            
                        </div></div>
                        
                    </div>
                </div>
            </div>
            <div class="row p-2" style=" height: 700px; position: relative; margin-top: -120px; ">
                <div class="col-lg-3 text-center">
                    <div class="card h-75"><img src="{{ asset('image/background.jpg') }}"; height="385px;">
                    </div>
                </div>
                <div class="col-lg-3 text-center" >
                    <div class="card h-75"></div>
                </div>
                <div class=" col-lg-3 text-center" >
                    <div class="card h-75">
                    </div>
                </div>
                <div class=" col-lg-3 text-center" >
                    <div class="card h-75">
                    </div>
                    
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content " style="background-color: black;">
                            <h4 class="modal-title" style="margin-left: auto;margin-right: auto; color: white; "> Hi there! please sign in</h4>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                
                                <br>
                                <div style="color: white;margin-right: 170px;" >
                                    <ul class="nav nav-tabs">
                                        <li id="btn_login" class="nav-item active">
                                            <span class="nav-link" style="cursor: pointer;">Login</span>
                                        </li>
                                        <li id="btn_reg" class="nav-item">
                                            <span class="nav-link" style="cursor: pointer;">Register</span>
                                        </li>
                                    </ul>
                                </div>
                                
                                
                                
                            </div>
                            <div id="login_modal" class="modal-body">
                                
                                <form action="/loginme" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group" style="color: white;">
                                        <label>User name</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                        
                                    </div>
                                    <div class="form-group" style="color: white;">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" style="color: black;background-color: white;">Login</button>
                                    
                                </form>
                            </div>
                            <div id="register_modal" class="modal-body">
                                
                                <form action="/register" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group" style="color: white;">
                                        <label>User Name</label>
                                        <input type="text"class="form-control"  name="username"  placeholder="Username">
                                    </div>
                                    <div class="form-group" style="color: white;">
                                        <label>Email </label>
                                        <input type="text" class="form-control" name="email"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group" style="color: white;">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button type="submit" style="color: black;background-color: white;">Register</button>
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="viewmodal" role="dialog"  ">
                    <div class="modal-dialog modal-lg modal-dialog-centered " style=" max-width: 60%;" >
                        <div class="modal-content">
                            <div class="row" style="height: 75%">
                                <div class="col-lg-8" style="">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset('images/didi.jpg') }}"; alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('images/mama.jpg') }}"; alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('images/sha.jpg') }}"; alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4" style="">
                                    <div class="card h-100">
                                        
                                        <div class="container-fluid" style="width: 100%; margin: 0;">
                                            <div class="row" style="width: 100%; border-bottom: ridge; margin: 0;">
                                                <div class="col-sm-4" style="">
                                                    <div style="background-color: grey; width: 80px; height: 80px; border-radius: 50%; margin-top: 5px; margin-bottom:5px;"></div>
                                                </div>
                                                <div class="col-sm-8" style="">
                                                    <div style="margin-left: 20px;margin-top: 40px;">Wambui_sha</div>
                                                </div>
                                            </div>
                                            <div class="main" style="border-bottom: ridge;">
                                                <div class="bio" style="margin-top: 10px;"> user_name ...Caption</div>
                                                <div class="lastcomment" style="margin-bottom:100%;">user_name ....comment</div>
                                            </div>
                                            <div class="row" style="border-bottom: ridge; height: 10% ;">
                                                <div class="col-lg-6"><button style="border:none;background-color: white; margin-top:15%"><span><b>527</b></span><span> Likes</span><br><img src="{{ asset('images/like.svg') }}" style="width: 50px;height: 20px; margin-top: 5px;"></button></div>
                                                <div class="col-lg-6"><button style="border:none;background-color: white; margin-top:15%;margin-left:-30px;"><span><b>            527 </b></span><span> Comments</span><br><img src="{{ asset('images/chat.png') }}" style="width: 20px;height: 20px; margin-top: 5px;"></button></div>
                                                
                                            </div>
                                            <div class="comment" style="margin-top: 5px;">
                                                <textarea placeholder="Add a comment...." style="border: hidden; margin-top: 10px; width: 100% "></textarea>
                                            </div>
                                        </div>
                                        <div class="scroll" style="position: absolute;margin-top: 130%">

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </main>
            <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
            <script type="text/javascript">
            $(function() {
            var mobileScreenTreshold = 1024;
            $(".hvrbox").click(function(e) {
            if($(window).width() <= mobileScreenTreshold) {
            if($(this).hasClass("active")) {
            $(this).removeClass("active");
            } else {
            e.preventDefault();
            $(this).addClass("active");
            }
            } else {
            $(this).removeClass("active");
            }
            });
            // by default
            $('#login_modal').show();
            $('#register_modal').hide();
            $('#btn_login').click(function (e) {
            $('#login_modal').show();
            $('#register_modal').hide();
            });
            $('#btn_reg').click(function (e) {
            $('#register_modal').show();
            $('#login_modal').hide();
            });
            });
            </script>
        </main>
        <footer >
            <div class="footer">
                <div class="row">
                    <div class="col-sm-4" style="margin-top: 20px;font-family: 'dancing'">
                        <div> <h3>CONNECT</h3></div>
                        <div style="font-size: 20px;"> <h5>Email: curlystands@gmail.com</h5></div>
                        <div id="socialmedia">
                            <ul style="list-style: none; margin-left:130px;" class="d-flex">
                                <li style="background-image: url(svg/facebook.svg); width: 40px; height: 40px;" onclick="window.open('https://www.facebook.com/Curlystrands-356839041805064/', '_blank')">
                                    <i class="fa fa-stack-overflow"></i>
                                </li>
                                <li style="background-image: url(svg/instagram.svg);width: 40px; height: 40px;margin-left: 10px;"onclick="window.open('https://www.instagram.com/', '_blank')"><i class="fa fa-twitter"></i></li>
                                <li style="background-image: url(svg/pinterest.svg);width: 40px; height: 40px;margin-left: 10px;"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li style="background-image: url(svg/twitter.svg);width: 40px; height: 40px;margin-left: 10px;"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-top: 20px; font-family: 'dancing'">
                        <div > <h3>LEARN</h3>
                            <div id="learn">
                                <p>Hair Care</p>
                                <p>Hair review</p>
                                <p>What is my hair type?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-top: 20px; font-family: 'dancing'">
                        <div><h3>ABOUT</h3>
                            <div id="about" style="font-family: 'dancing'">
                                <p>Our Story</p>
                            </div></div>
                        </div>
                    </div>
                </div>
            </footer>
            
        </html>