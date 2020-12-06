<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <style>
            section{
                position: relative;
                width: 100%;
                display:flex;
                justify-content: center;
                align-items:center;
                background:#fff;
            }
            section h3{
                max-width: 80%;
            }
            #ab{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #ab[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #ab[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #ser{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #ser[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #ser[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #p1{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #p1[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #p1[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #p2{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #p2[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #p2[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #p3{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #p3[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #p3[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #p4{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #p4[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #p4[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #p5{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #p5[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #p5[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #anti{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #anti[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #anti[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #con{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #con[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #con[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
            #conhead{
                font-size:1.2em;
                transition: 1s;
                opacity: 0;
            }
            #conhead[data-scroll="in"]{
                opacity: 1;
                transition-delay: 0.5s;    
            }
            #conhead[data-scroll="in"]::before{
                transform: scaleX(0);
                transition-delay: 0.5s;
            }
        </style>
        <style>
            .row{
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                flex-flow: wrap;    
            }

            @media screen and (max-width:1000px){
                .card{
                    width:40%;
                }
            }

            @media screen and (max-width:620px){
                .contain{
                    width:100%;
                }

                .card{
                    width:80%;
                }
            }

            .card{
                width:75%;
                background: #fff;
                border:1px solid #ccc;
                margin-bottom: 50px;
                transition: 0.3s;
            }

            .contain{
                width: 90%;
                margin: 50px auto;
            }

            .card-header{
                text-align: center;
                padding:50px 10px;
                background: linear-gradient(to right, #ff416c, #ff4b2b);
                color:#fff;
            }

            .card-body{
                padding:30px 20px;
                text-align: center;
                font-size: 18px;
            }
            .card:hover{
                transform: scale(1.05);
                box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
            }
        </style>
            
        <style>
            .navbar-toggler{
                width: 47px;
                height: 34px;
                background-color: transparent;
            }
            .navbar-toggler .line{  
                width: 100%;
                float: left;
                height: 2px;    
                background-color: #fff;
                margin-bottom: 5px;
            }
            .text1{
                position: relative;
                animation-name: text;
                animation-delay: 5s;
                animation-duration: 4s;
                animation-iteration-count: 3;
            }
             .text2{
                position: relative;
                animation-name: text;
                animation-delay: 5s;
                animation-duration: 4s;
                animation-iteration-count: 3;
            } 
            @keyframes text{
                0%{
                    color:black;
                    margin-left: 40px;
                }
                30%{
                    margin-left: 40px;
                }
                85%{
                    margin-left: 40px;
                }
            }
        </style>
        {{-- <style>
            .pani {
                width: 100%;
                height: 100px;
                background: #85C1E9;
                transition: width 3s;
                transition-delay: 1s;
            }
            .pani:hover{
                width: 300px;
            }
        </style> --}}
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="line"></span> 
                    <span class="line"></span> 
                    <span class="line"></span>
                </button>
                <h3 style="color:white">AFFEX ANTI PIRACY</h3>
                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about">about</a>
                        </li>
                      <li class="nav-item">
                          <a href="#service">service</a>
                      </li>
                        <li class="nav-item">
                            <a href="#contact">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header id="home">
            <div class="overlay">
                <div class="container">            
                  <div class="text-center">
                        <h2 class="text1">Movies, Shows, Songs, Vlogs, Tutorials</h2>
                        <h3 class="text2">We protect all types of video content.</h3>
                        <br><br><br><br><br>
                        <p><button><a href="#contact" class="text-uppercase">Get in touch</a></button></p>
                </div>
                </div>
            </div>
        </header>
        
        <div class="about-us" id="about">
            <section>
                <h3 class="aboutClass" style="font-size:300%;" id="ab">About</h3>
            </section>
            <div class="agency" id="agency">
                <div class="white-overlay">
                    <div class="container">
                        <p class="text-center" id="p1">Affex Anti Piracy has been helping video content creators/owners protect their copyrighted video content from pirates, counterfeiters and other illegal digital threats for over a decade.</p>
                        <p class="text-center" id="p2">We understand that as a video content creator/owner you may sell your content for generating revenue. However, you may find that your content is illegally being uploaded to YouTube resulting in potential clients not buying your content thereby reducing the revenue that can be generated.
                        </p>
                        <p class="text-center" id="p3">With over 10+ years of expertise in Antipiracy, we helped a manifold of video content creators/owners on YouTube protect the value of their premium content and retain their revenue.
                        </p>  
                    </div>
                </div>
            </div>
        </div>
        
        <div class="services" id="service">
            <section>
                <h3 class="serviceClass" style="font-size:300%;" id="ser">Services</h3>
            </section>
            <div class="agency" id="agency">
                <div class="white-overlay">
                    <div class="container">
                        {{-- <p class="text-center" id="p4">We believe in providing exceptional quality services by focusing on customer needs and continuous improvement.</p> --}}
                        {{-- <p class="text-center" id="p5">For that we invest in the most talented security professionals with advanced techical and legal expertise to ensure monitoring, takedown and removal of pirated video content.We continuously incorporate improvements by evaluating our solutions and strategies.</p> --}}
                        <p class="text-center" id="p4">We believe in providing exceptional services to our customers.</p>
                        <p class="text-center" id="p5">We stride for constant improvement through innovation. Our staff is highly professional and is well versed with advance technical knowledge and has legal expertise in monitoring and removal of pirated content. We continuously work on improving our solutions and strategies.</p>
                    </div>
                </div>
            </div>
            <h5 class="text-center" id="anti"> Anti-Piracy Protection Services:</h5>
            <img src="{{asset('Images/youtube.png')}}" alt="youtube icon" width="100" height="100" style="display: block;margin-left: auto;margin-right: auto;">
            <div class="contain">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h1>FINDING</h1>
                        </div>
                        <div class="card-body">
                            <p>Finding out any illegal or pirated versions of your video content.</p>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-header">
                            <h1>AUTOMATED SEARCHES</h1>
                        </div>
                        <div class="card-body">
                            <p>Searching the internet 24/7 a day.</p>
                        </div>
                    </div>
                {{-- </div>
            
                <div class="row">     --}}
                    <div class="card">
                        <div class="card-header">
                            <h1>GENERATING YOUTUBE DMCA REPORTS</h1>
                        </div>
                        <div class="card-body">
                            <p>Sending out DMCA reports for takedown and removal of pirated video content on Youtube right after finding the pirated versions.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h1>HANDALING COUNTER NOTICES</h1>
                        </div>
                        <div class="card-body">
                            <p>Handling false counter notice pop ups.</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
                
        {{-- <div class="statistics text-capitalize text-center font-weight-bold">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-umbrella-beach fa-3x"></i>
                        <h3>425</h3>
                        <p>Tourists</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-birthday-cake fa-3x"></i>
                        <h3>125</h3>
                        <p>years</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fa fa-home fa-3x"></i>
                        <h3>325</h3>
                        <p>cottages</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-glass-cheers fa-3x"></i>
                        <h3>120</h3>
                        <p>restaurants</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="contact" id="contact">
            <div class="violet-overlay">
                <div class="container">
                    <h2 class="text-center" style="font-size:300%;" id="con">Contact Us</h2>
                    <h4 class="text-center" id="conhead" style="color:white;height:10%">Tell us about your needs and retain your revenue.</h4>
                    <div class="contact-form">
                        <div class="container">
                            @if(session()->has('success'))
                                <div class="row">
                                     <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Success </strong>{{session()->get('success')}} ...
                                    </div>
                                </div>
                            @endif
                        </div>
                        <form action="{{url('sendmail')}}" method="POST">
                            @csrf
                            @error('name')
                                <label for="name" style="color:red">{{$message}}</label>
                            @enderror
                            <input type="text" placeholder="Name" id="name" name="name">
                            @error('email')
                                <label for="email" style="color:red">{{$message}}</label>
                            @enderror
                            <input type="email" placeholder="Email" id="email" name="email">
                            @error('phone')
                                <label for="phone" style="color:red">{{$message}}</label>
                            @enderror
                            <input type="number" placeholder="Phone" id="phone" name="phone">
                            @error('message')
                                <label for="message" style="color:red">{{$message}}</label>
                            @enderror
                            <textarea type="text" placeholder="Message" id="message" name="message"></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            {{-- <div class="container"> --}}
                {{-- <div class="row"> --}}
                    {{-- <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 style="text-align:center" class="text-uppercase">Contact us</h4>
                            <p class="address">
                                123 Second Street Fifth <br>
                                Avenue,<br>
                                Manhattan, New York<br>
                                +987 654 3210
                            </p>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">additional links</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-6 col-12">
                        <div class="item date">
                            <h4 class="text-uppercase">resent posts</h4>
                            <p><a href="#">01/03/2019</a></p>
                               <p><a href="#">08/05/2019</a></p>
                            <p><a href="#">01/03/2019</a></p>
                            <p><a href="#">08/05/2019</a></p>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">newsletter</h4>
                            <form>
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="copyright text-center">
                <p>Copyright 2019  Design by <a href="https://html.design">Free Html Templates</a></p>
            </div> --}}
        </footer>
        <script src="{{asset('js/scroll-out.js')}}"></script>
        <script>
            ScrollOut({
                targets: '#ab,#ser,#p1,#p2,#p3,#p4,#p5,#anti,#con,#conhead'
            })
        </script>
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script>
            $(function () {
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });

                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>
</html>