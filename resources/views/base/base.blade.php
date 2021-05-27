<?php
use TCG\Voyager\Models\Post;
$posts = TCG\Voyager\Models\Post::all();
?>


<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Levi Meslan</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- About-->
        <section class="about-section text-center" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">About Me</h2>
                        <p class="text-white-50">
                            Hi! My name is Levi Meslan and I'm 18 years old. I am still ways away from being an experienced programmer. But I still want to learn more about programming. Next to programming I like to game and listen to music.
                            <br><br>
                            My hard skills are:<br>PHP<br>HTML<br>CSS<br>Javascript.
                            <br><br>
                            My soft skills are: <br>Team Work<br>Adaptability
                        </p>
                    </div>
                </div>
        </section>

        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row">
                    @if (count($posts) > 0)
                        @foreach ($posts as $post)
                                <div class="col-md-4">
                                    <figure class="card card-product">
                                        <div class="img-wrap"><img src="{{$post->image}}"></div>
                                        <div class="info-wrap">
                                            <div class="rating-wrap">
                                                <div class="label-rating"><p style="color: #00000;">{{$post->title}}</p></div>
                                            </div> <!-- rating-wrap.// -->
                                        </div>
                                        <div class="bottom-wrap">
                                            <a href="{{$post->excerpt}}" class="btn btn-md" style="background-color: rgba(152, 4, 221, 0.9); margin-left: 20%">Go to project</a><!-- price-wrap.// -->
                                        </div> <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                @endforeach
                    @endif
                </div>

            

        <!-- Contact-->
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Location</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">Utrecht, The Netherlands</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <script language="javascript" type="text/javascript"> var pre = "levimeslan";
                                    document.write("<p><a href='mailto:" + pre + "@gmail.com'>" + pre + "@gmail.com</a></p>"); </script>
                                <noscript>Enable javascript to see my email!</noscript>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Linkedin</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="https://www.linkedin.com/in/levi-meslan-3917b9212/">Linkedin</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class= "copyright" style="text-align: center">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Levi Meslan All Rights Reserved</p>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
