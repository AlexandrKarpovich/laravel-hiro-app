<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiro Agency Landing Page</title>
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/loader.js"></script>
</head>

<body>
<div class="hiro-loader"></div>

<header class="hiro-header" id="top">
    <nav>
        <div class="container">
            <div class="hiro-nav">
                <a href="/" class="nav-brand">
                    <img src="./images/logo.svg" alt="Hiro" class="logo">
                    <img src="./images/logo_white.svg" alt="Hiro" class="logo-white">
                </a>
                <button class="hiro-nav-popup-toggle">
                    <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Hiro" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="hiro-agency" transform="translate(-964.000000, -37.000000)" fill="#FFFFFF">
                                <g id="Menu" transform="translate(964.000000, 37.000000)">
                                    <g id="menu">
                                        <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="7.50795322" width="19.9609942" height="2.4951462"></rect>
                                        <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="14.9964327" width="19.9609942" height="2.4951462"></rect>
                                        <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="0.0194736842" width="19.9609942" height="2.4951462"></rect>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</header>
<div class="hiro-nav-popup-modal">
    <div class="hiro-nav-popup-modal-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 menu-wrapper">
                    <ul class="nav hiro-main-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#works" class="nav-link">Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 blog-posts text-white">
                    <h5 class="popup-blog-headng hiro-main-nav">
                        <a class="nav-link" href="/blog">Blog</a>
                    </h5>
                    <div class="media mb-4">
                        <img src="./images/Blog_small2.jpg" alt="blog" width="86px" class="img-fluid mr-4">
                        <div class="media-body align-self-end">
                            <h5 class="popup-blog-post-title">Ambitious <br> designs</h5>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <img src="./images/Blog_small1.jpg" alt="blog" width="86px" class="img-fluid mr-4">
                        <div class="media-body align-self-end">
                            <h5 class="popup-blog-post-title">The Collection <br> Cover Archive</h5>
                        </div>
                    </div>
                    <p><a href="/blog" class="text-white link-hover-fx text-decoration-none" class="font-weight-medium">View more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="contact-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 offset-lg-2 contact-page-content-wrapper wow fadeInLeft">
                <div class="contact-page-content">
                    <h4 class="contact-page-title">Lets Talk</h4>
                    <p class="contact-page-street-address">9010 Varna, Bulgaria, <br> Breeze Borough, <br> Saint Nicholas, 26</p>
                    <p class="mb-3">UK: +44 567 637 0000 <br> hey@costomarl.com</p>
                    <ul class="nav contact-social-links">
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="./images/twitter@1x.svg" alt="twitter">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="./images/linkedin@1x.svg" alt="linkedin">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="./images/facebook@1x.svg" alt="facebook">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="./images/behance@1x.svg" alt="behance">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="./images/medium@1x.svg" alt="medium">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 col-lg-4 contact-page-form-wrapper wow fadeInRight">
                <form action="/" method="post">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <input type="text" class="form-control" id="message" name="message" placeholder="Message">
                    </div>
                    <div>
                        <button class="btn" type="Submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<footer class="hiro-footer wow fadeInUp">
    <div class="container d-flex flex-wrap justify-content-lg-between align-items-center">
        <p class="mb-0 footer-text">© <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a> 2020. All rights reserved.</p>
        <nav class="footer-nav nav">
            <a href="#!" class="nav-link">Terms and Conditions</a>
            <a href="#!" class="nav-link">Privacy Policy</a>
            <a href="#!" class="nav-link">Cookie Policy</a>
        </nav>
    </div>
</footer>
<script src="./js/wow.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
<script>
    new WOW().init();
</script>
</body>

</html>
