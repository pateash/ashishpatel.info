<!DOCTYPE html>
<html>

<!-- Mirrored from www.craftedtheme.com/arne/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 09:18:55 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arnè</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="{{mix('/css/build.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- Latest compiled and minified JS -->
    <header>
        <div class="logo">
            <h3><a href="#">AP</a></h3>
        </div>
        @include("layouts.nav")
        <div class="social-icons">
            <ul>
                <li><a target="_blank" href="http://facebook.com/ashishpatel0720"><i class="fa fa-facebook"></i> </a></li>
                <li><a target="_blank" href="http://twitter.com/ashishpatel0720"><i class="fa fa-twitter"></i> </a></li>
                <li><a target="_blank" href="http://github.com/ashishpatel0720"><i class="fa fa-github"></i> </a></li>
                <li><a target="_blank" href="http://linkedin.com/ashishpatel0720"><i class="fa fa-linkedin"></i> </a></li>
            </ul>
            <p>Copyright &copy; 2017 <a href="//github.com/ashishpatel0720" >@ashishpatel0720</a> </p>
        </div>
    </header>
    <div class="wrapper">
        <div class="about">
            <img src="images/23.jpg" alt="">
            <router-view></router-view>
        </div>
    </div>
</div>
        <div class="wrapper" style="margin-top:0.5em;">
            <div class="about">
                <div class="inner-item">
                        <div class="our-clients" style="margin:0em;margin-top:-2em;"> <!--here represent toolbox-->
                            <h4>ToolBox</h4>
                            <div class="row items owl-carousel" id="owl-example2">
                                <img src="images/logo1.png" class="img-responsive" alt="">
                                <img src="images/logo2.png" class="img-responsive" alt="">
                                <img src="images/logo3.svg" class="img-responsive" alt="">
                                <img src="images/logo4.png" class="img-responsive" alt="">
                                <img src="images/logo5.png" class="img-responsive" alt="">
                                <img src="images/logo6.png" class="img-responsive" alt="">
                                <img src="images/logo7.png" class="img-responsive" alt="">
                                <img src="images/logo8.png" class="img-responsive" alt="">
                                <img src="images/logo9.png" class="img-responsive" alt="">
                                <img src="images/logo10.png" class="img-responsive" alt="">
                                <img src="images/logo11.png" class="img-responsive" alt="">
                                <img src="images/logo12.png" class="img-responsive" alt="">
                                <img src="images/logo13.png" class="img-responsive" alt="">
                                <!--<img src="images/logo14.png" class="img-responsive" alt="">-->
                                <img src="images/logo15.svg" class="img-responsive" alt="">
                                <img src="images/logo16.png" class="img-responsive" alt="">

                                <img src="images/logo1.png" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--TODO: why we have to use CDN here--}}
<script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<script src="{{mix('/js/build.js')}}"></script>
</body>
<!-- Mirrored from www.craftedtheme.com/arne/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 09:19:06 GMT -->
</html>