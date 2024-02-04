
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand custom-logo" href="{{url('/')}}">Harrison</a>
                <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/service')}}">Services</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="{{url('/elements')}}">Elements</a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/single-blog')}}">Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navLinks = document.querySelectorAll('.navbar-nav.menu_nav li.nav-item a.nav-link');

        navLinks.forEach(function(link) {
            link.addEventListener('mouseover', function() {
                link.style.color = '#000';
                link.style.fontSize = '90%';
            });

            link.addEventListener('mouseout', function() {
                if (!link.classList.contains('clicked')) {
                    link.style.color = ''; // Reset to the default color if not clicked
                    link.style.fontSize = '';
                }
            });

            link.addEventListener('click', function() {
                // Reset styles for all links
                navLinks.forEach(function(otherLink) {
                    otherLink.style.color = '';
                    otherLink.classList.remove('clicked');
                });

                // Set styles for the clicked link
                link.style.color = '#000'; // Change to your desired clicked color
                link.style.fontSize = '110%';
                link.classList.add('clicked');
            });
        });

    });
</script>