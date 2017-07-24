<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashish Patel's Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="{{mix('/css/build.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
                <a target='_blank' title='linkedin' href=https://linkedin.com/in/ashishpatel0720 style="color:#006699"><i class="fa fa-linkedin-square fa-2x"></i></a>
                <a target='_blank' title='github' href=https://github.com/ashishpatel0720 style="color:#5d2973"><i class="fa fa-github fa-2x"></i></a>
                <a target='_blank' title='Facebook' href=https://facebook.com/ashishpatel0720 style="color:#3b5998"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a target='_blank' title='Email' href="mailto:ashishpatel0720@gmail.com" ><i class="fa fa-envelope-o fa-2x"></i></a>
                {{--<a target='_blank' title='Instagram' href=https://instagram.com/ashishpatel0720 style="color: #cd486b"><i class="fa fa-instagram fa-2x"></i></a>--}}
                <a target='_blank' title='stackoverflow' href=https://stackoverflow.com/users/6178783/ashish-patel style="color:#f48024"><i class="fa fa-stack-overflow fa-2x"></i></a>
                <a target='_blank' title='twitter' href=https://twitter.com/ashishpatel0720 style="color:#32cdfd"><i class="fa fa-twitter fa-2x"></i></a>
                <p><span class="icon"><i class="fa fa-code"></i></span> by <b><a target='_blank' href="//github.com/ashishpatel0720"
                  style="color:#ff7018">Ashish</a></b> in <span class="icon"><i class="fa fa-heart" style="color:#ff4d44"></i></span> with <br><a target='_blank' href="//laravel.com"><img src="/images/laravel-icon.png" ></a> <a target='_blank' href="//vuejs.org"><img src="/images/vue-icon.png"></a>.</p>
                  <p>Copyright &copy; 2017 <a target='_blank' href="//github.com/ashishpatel0720" >@ashishpatel0720</a> </p>
              </div>
          </header>
          <div class="wrapper">
            <div class="about" style="margin:-1.7em;">
                <router-view ></router-view>
            </div>
        </div>
    </div>
    <div class="wrapper" style="margin-top:0.5em;">
        <div class="about"  style="margin:-1.7em;">
            <div class="inner-item">
                <div class="our-clients" > <!--here represent toolbox-->
                    <h4>Skills</h4>
                    <div class="row items owl-carousel" id="owl-toolbox" >
                        <img src="/images/logo1.png" class="img-responsive" alt="" >
                        <img src="/images/logo2.png" title='VueJS' class="img-responsive" alt="">
                        <img src="/images/logo3.svg" class="img-responsive" alt="">
                        <img src="/images/logo4.png" class="img-responsive" alt="">
                        <img src="/images/logo5.png" class="img-responsive" alt="">
                        <img src="/images/logo6.png" class="img-responsive" alt="">
                        <img src="/images/logo7.png" class="img-responsive" alt="">
                        <img src="/images/logo8.png" class="img-responsive" alt="">
                        <img src="/images/logo9.png" class="img-responsive" alt="">
                        <img src="/images/logo10.png" class="img-responsive" alt="">
                        <img src="/images/logo11.png" class="img-responsive" alt="">
                        <img src="/images/logo12.png" class="img-responsive" alt="">
                        <img src="/images/logo13.png" class="img-responsive" alt="">
                        <!--<img src="/images/logo14.png" class="img-responsive" alt="">-->
                        <img src="/images/logo15.svg" class="img-responsive" alt="">
                        <img src="/images/logo16.png" class="img-responsive" alt="">
                        <img src="/images/logo1.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--TODO: why we have to use CDN here--}}
    <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    {{--<script src="/js/jquery.js"></script>--}}
    <script src="{{mix('/js/build.js')}}"></script>
    <script id="dsq-count-scr" src="//ashishpatel0720.disqus.com/count.js" async></script>
</body>
</html>