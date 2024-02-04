@include('layouts.head')

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
                        <h2>Skills</h2>
                        <div class="page_link">
                            <a href="{{url('/')}}">Home</a>
                            <a href="{{url('/services')}}">Skills</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Feature Area =================-->
    <section class="feature_area white_feature p_120">
        <div class="container">
            <div class="main_title">
                <h2>my skills</h2>
                <p>Talent you have naturally. Skill is only developed by hours and hours and hours of beating on your craft.</p>
            </div>
            <div class="feature_inner row">

            <div class="col-lg-4 col-md-6">
				<div class="feature_item">
					<i class="flaticon-city"></i>
					<h4>Front End Developer</h4>
					<p>A Front-end Web Developer using HTML, CSS, JavaScript, Bootstrap and PHP !!</p>
				</div>
			</div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="flaticon-sketch"></i>
                        <h4>Open Source Developer</h4>
                        <p>An Open-source Contributor with good knowledge of Git and GitHub and some past contributions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="flaticon-sketch"></i>
                        <h4>Backend Developer</h4>
                        <p>A Back-end Web Developer using PHP,and SQL.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="flaticon-skyline"></i>
                        <h4>System Administration</h4>
                        <p>I have served as a System Administrator at <a href="https://www.learninglions.org/" style="color: blue; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='blue'">Learning Lions</a> for over years.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="flaticon-sketch"></i>
                        <h4>And Learning More...</h4>
                        <p>Skills make you rich, not theories</p>
                    </div>
                </div>
            </div>

            <div class="more_btn">
                <a href="https://github.com/" class="main_btn">My GitHub Handle</a>
            </div>

        </div>
    </section>
    <!--================End Feature Area =================-->



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