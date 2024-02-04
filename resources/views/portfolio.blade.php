@include('layouts.head')
<style>
    .h_gallery_item .g_img_item img {
        height: 300px; /* Adjust the height as needed */
        object-fit: cover; /* Maintain aspect ratio and cover the container */
    }
</style>


<body>

    <!--================Header Menu Area =================-->
    @include('layouts.menu')
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Portfolio</h2>
                        <div class="page_link">
                            <a href="{{url('/')}}">Home</a>
                            <a href="{{url('/portfolio')}}">Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Home Gallery Area =================-->
    <section class="home_gallery_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>My Projects</h2>
                <p></p>
            </div>
            <!--        <div class="isotope_fillter">
                    <ul class="gallery_filter list">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <li data-filter=".brand"><a href="#">Vector</a></li>
                        <li data-filter=".manipul"><a href="#">Raster</a></li>
                        <li data-filter=".creative"><a href="#">UI/UX</a></li>
                        <li data-filter=".design"><a href="#">Printing</a></li>
                    </ul>
                </div>  -->
        </div>
        <div class="container">
            <div class="gallery_f_inner row imageGallery1">
                <div class="col-lg-4 col-md-6 col-sm-6 brand manipul design print">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/harri.jpg" alt="">
                            <a class="light alt="></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="https://harrisonnganga.github.io/Portfolio/">Portfolio</a></h4>
                            <p>Previous portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 brand manipul creative">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/gallery/fashion finder.jpg" alt="">
                            <a class="light"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="#">Clothes recommendation</a></h4>
                            <p>Web Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/gallery/modern design.jpg" alt="">
                            <a class="light"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="#">Modern Interior Design</a></h4>
                            <p>Interior Design</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div style="padding: 50px;" style="text-align: center;">
            <h2 style="text-align: center;" class="more_btn">
                <center>See more on my GitHub</center>
            </h2>
            <center><a href="#" class="main_btn">My GitHub Handle</a></center>
        </div>
        </div>
        <div class="more_btn">
            <a href="{{url('/contact')}}" class="main_btn">Let's Talking</a>
        </div>
        </div>
    </section>
    <!--================End Home Gallery Area =================-->

    <!--================Footer Area =================-->
    @include('layouts.footer')
    <!--================End Footer Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>