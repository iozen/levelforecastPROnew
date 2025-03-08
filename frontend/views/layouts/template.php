<?php 


use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
<head>
	<!--    @Html.Partial("~/Views/Shared/title_meta.cshtml")-->
<meta charset="utf-8">
<title>Silicon | Multipurpose Business / Technology Template</title>

<!-- SEO Meta Tags-->
<meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
<meta name="keywords" content="bootstrap, business, creative agency, construction, services, e-commerce, shopping cart, mobile app showcase, multipurpose, shop, ui kit, marketing, seo, landing, html5, css3, javascript, gallery, slider, touch, creative">
<meta name="author" content="srbthemes">

<!-- Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Theme switcher (color modes) -->
<script src="template/assets/js/theme-switcher.js"></script>

<!-- Favicon and Touch Icons-->
<link rel="apple-touch-icon" sizes="180x180" href="template/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="template/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="template/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="template/assets/favicon/site.webmanifest">
<link rel="mask-icon" href="template/assets/favicon/safari-pinned-tab.svg" color="#6366f1">
<link rel="shortcut icon" href="template/assets/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#080032">
<meta name="msapplication-config" content="template/assets/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<!-- Vendor Styles-->
<link rel="stylesheet" media="screen" href="template/assets/vendor/boxicons/css/boxicons.min.css">

<!-- Main Theme Styles + Bootstrap-->
<link rel="stylesheet" media="screen" href="template/assets/css/theme.min.css">

<!-- Page loading styles -->
<style>
    .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
    }

    [data-bs-theme="dark"] .page-loading {
        background-color: #0b0f19;
    }

    .page-loading.active {
        opacity: 1;
        visibility: visible;
    }

    .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
    }

    .page-loading.active > .page-loading-inner {
        opacity: 1;
    }

    .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
    }

    [data-bs-theme="dark"] .page-loading-inner > span {
        color: #fff;
        opacity: .6;
    }

    .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
    }

    [data-bs-theme="dark"] .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
    }

    @@-webkit-keyframes spinner {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @@keyframes spinner {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>

<!-- Page loading scripts -->
<script>
    (function () {
        window.onload = function () {
            const preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
                preloader.remove();
            }, 1000);
        };
    })();
</script>

<!--@RenderSection("styles", required: false)-->

    <link rel="stylesheet" media="screen" href="template/assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="template/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="template/assets/vendor/lightgallery/css/lightgallery-bundle.min.css">
</head>
<body>

    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>

    <main class="page-wrapper">



		<!--@RenderBody()-->
		

<header class="header navbar navbar-expand-lg navbar-dark position-absolute navbar-sticky">
    <div class="container px-3">
        <a href="/" class="navbar-brand pe-3">
            <img src="template/assets/img/logo.svg" width="240px" >
            
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end bg-dark">
            <div class="offcanvas-header border-bottom border-light">
                <h5 class="offcanvas-title text-white">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

				<!--@Html.Partial("~/Views/Shared/header.cshtml")-->

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!--
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Landings</a>
        <div class="dropdown-menu p-0">
            <div class="d-lg-flex">
                <div class="mega-dropdown-column d-flex justify-content-center align-items-center rounded-3 rounded-end-0 px-0" style="margin: -1px; background-color: #f3f6ff;">
                    <img src="~/assets/img/landings.jpg" alt="Landings">
                </div>
                <div class="mega-dropdown-column pt-lg-3 pb-lg-4" style="--si-mega-dropdown-column-width: 15rem;">
                    <ul class="list-unstyled mb-0">
                        <li><a href="/" class="dropdown-item">Template Intro Page</a></li>
                        <li><a href="/landing/mobileappshowcasev1" class="dropdown-item">Mobile App Showcase v.1</a></li>
                        <li><a href="/landing/mobileappshowcasev2" class="dropdown-item">Mobile App Showcase v.2</a></li>
                        <li><a href="/landing/mobileappshowcasev3" class="dropdown-item">Mobile App Showcase v.3<span class="badge bg-success ms-2">New</span></a></li>
                        <li><a href="/landing/product" class="dropdown-item d-flex align-items-center">Product Landing</a></li>
                        <li><a href="/landing/saasv1" class="dropdown-item">SaaS v.1</a></li>
                        <li><a href="/landing/saasv2" class="dropdown-item">SaaS v.2</a></li>
                        <li><a href="/landing/saasv3" class="dropdown-item">SaaS v.3</a></li>
                        <li><a href="/landing/saasv4" class="dropdown-item">SaaS v.4</a></li>
                        <li><a href="/landing/saasv5" class="dropdown-item">SaaS v.5<span class="badge bg-success ms-2">New</span></a></li>
                    </ul>
                </div>
                <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                    <ul class="list-unstyled mb-0">
                        <li><a href="/landing/startup" class="dropdown-item d-flex align-items-center">Startup</a></li>
                        <li><a href="/landing/financial" class="dropdown-item">Financial Consulting</a></li>
                        <li><a href="/landing/onlinecourses" class="dropdown-item">Online Courses</a></li>
                        <li><a href="/landing/medical" class="dropdown-item">Medical</a></li>
                        <li><a href="/landing/softwaredevagencyv1" class="dropdown-item">Software Dev Agency v.1</a></li>
                        <li><a href="/landing/softwaredevagencyv2" class="dropdown-item">Software Dev Agency v.2</a></li>
                        <li><a href="/landing/softwaredevagencyv3" class="dropdown-item">Software Dev Agency v.3</a></li>
                        <li><a href="/landing/conference" class="dropdown-item">Conference</a></li>
                        <li><a href="/landing/digitalagency" class="dropdown-item">Digital Agency</a></li>
                        <li><a href="/landing/blog" class="dropdown-item">Blog Homepage</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
-->
	<!--
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Pages</a>
        <div class="dropdown-menu">
            <div class="d-lg-flex pt-lg-3">
                <div class="mega-dropdown-column">
                    <h6 class="px-3 mb-2">About</h6>
                    <ul class="list-unstyled mb-3">
                        <li><a href="/about/v1" class="dropdown-item py-1">About v.1</a></li>
                        <li><a href="/about/v2" class="dropdown-item py-1">About v.2</a></li>
                        <li><a href="/about/v3" class="dropdown-item py-1">About v.3</a></li>
                    </ul>
                    <h6 class="px-3 mb-2">Blog</h6>
                    <ul class="list-unstyled mb-3">
                        <li><a href="/blog/listwithsidebar" class="dropdown-item py-1">List View with Sidebar</a></li>
                        <li><a href="/blog/gridwithsidebar" class="dropdown-item py-1">Grid View with Sidebar</a></li>
                        <li><a href="/blog/listnosidebar" class="dropdown-item py-1">List View no Sidebar</a></li>
                        <li><a href="/blog/gridnosidebar" class="dropdown-item py-1">Grid View no Sidebar</a></li>
                        <li><a href="/blog/simplefeed" class="dropdown-item py-1">Simple Feed</a></li>
                        <li><a href="/blog/blogsingle" class="dropdown-item py-1">Single Post</a></li>
                        <li><a href="/blog/podcast" class="dropdown-item py-1">Podcast</a></li>
                    </ul>
                </div>
                <div class="mega-dropdown-column">
                    <h6 class="px-3 mb-2">Portfolio</h6>
                    <ul class="list-unstyled mb-3">
                        <li><a href="/portfolio/grid" class="dropdown-item py-1">Grid View</a></li>
                        <li><a href="/portfolio/list" class="dropdown-item py-1">List View</a></li>
                        <li><a href="/portfolio/slider" class="dropdown-item py-1">Slider View</a></li>
                        <li><a href="/portfolio/courses" class="dropdown-item py-1">Courses</a></li>
                        <li><a href="/portfolio/singleproject" class="dropdown-item py-1">Single Project</a></li>
                        <li><a href="/portfolio/singlecourse" class="dropdown-item py-1">Single Course</a></li>
                    </ul>
                    <h6 class="px-3 mb-2">Services</h6>
                    <ul class="list-unstyled mb-3">
                        <li><a href="/services/v1" class="dropdown-item py-1">Services v.1</a></li>
                        <li><a href="/services/v2" class="dropdown-item py-1">Services v.2</a></li>
                        <li><a href="/services/singlev1" class="dropdown-item py-1">Service Details v.1</a></li>
                        <li><a href="/services/singlev2" class="dropdown-item py-1">Service Details v.2</a></li>
                    </ul>
                </div>
                <div class="mega-dropdown-column">
                    <h6 class="px-3 mb-2">Pricing</h6>
                    <ul class="list-unstyled mb-3">
                        <li><a href="/portfolio/pricing" class="dropdown-item py-1">Pricing Page</a></li>
                    </ul>
                    <h6 class="px-3 mb-2">Contacts</h6>
                    <ul class="list-unstyled mb-3">
                        <li><a href="/contacts/v1" class="dropdown-item py-1">Contacts v.1</a></li>
                        <li><a href="/contacts/v2" class="dropdown-item py-1">Contacts v.2</a></li>
                        <li><a href="/contacts/v3" class="dropdown-item py-1">Contacts v.3</a></li>
                    </ul>
                    <h6 class="px-3 mb-2">Specialty</h6>
                    <ul class="list-unstyled">
                        <li><a href="/error/error404v1" class="dropdown-item py-1">404 Error v.1</a></li>
                        <li><a href="/error/error404v2" class="dropdown-item py-1">404 Error v.2</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
	-->
    <!--<li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-current="page">Account</a>
        <ul class="dropdown-menu">
            <li><a href="/account/details" class="dropdown-item">Account Details</a></li>
            <li><a href="/account/security" class="dropdown-item">Security</a></li>
            <li><a href="/account/notifications" class="dropdown-item">Notifications</a></li>
            <li><a href="/account/messages" class="dropdown-item">Messages</a></li>
            <li><a href="/account/saveditems" class="dropdown-item">Saved Items</a></li>
            <li><a href="/account/collections" class="dropdown-item">My Collections</a></li>
            <li><a href="/account/payment" class="dropdown-item">Payment Details</a></li>
            <li><a href="/account/signin" class="dropdown-item">Sign In</a></li>
            <li><a href="/account/signup" class="dropdown-item">Sign Up</a></li>
        </ul>
	</li>-->
    <li class="nav-item">
	<a href="<?= Url::to(['site/company'])?>" class="nav-link">Company</a>
    </li>
    <li class="nav-item">
        <a href="<?= Url::to(['site/products'])?>" class="nav-link">Products</a>
    </li>
</ul>

            </div>
            <div class="offcanvas-header border-top border-light">
                <a href="#!" class="btn btn-primary w-100" target="_blank" rel="noopener">
                    <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                    &nbsp;Get access
                </a>
            </div>
        </div>
        <div class="pe-lg-1 ms-auto me-4" data-bs-theme="dark">
            <div class="form-check form-switch mode-switch" data-bs-toggle="mode">
                <input type="checkbox" class="form-check-input" id="theme-mode">
                <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
                <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
            </div>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#!" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
			<!--          <i class="bx bx-cart fs-5 lh-1 me-1"></i>-->
            &nbsp; Get access
        </a>
    </div>
</header>


        <?= $content ?>


    <footer class="footer pt-5 pb-4 pb-lg-5">
        <div class="container pt-lg-4">
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                        <img src="template/assets/img/logo_footer.svg" width="240px">
                    </div>
                    <p class="fs-sm  mb-4">LevelForecast – Your Trusted Partner in Investment</p>

					<p class="pb-lg-3">Daily forecasts, market analysis, and price predictions powered by Artificial Intelligence, Machine Learning, and Neural Networks. Our platform delivers accurate insights into trends, levels, and forecasted ranges for Forex, Crypto, Metals, and more.</p>




                    <!--<form class="needs-validation" novalidate>
                        <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
                        <div class="input-group">
                            <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                            <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                            <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
					</form>-->
                </div>
                <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                    <div id="footer-links" class="row">
                        <div class="col-lg-4">
                            <h6 class="mb-2">
                                <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Useful Links</a>
                            </h6>
                            <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Features</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Integrations</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Our Clients</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Blog</a></li>
                                </ul>
                                <ul class="nav flex-column mb-2 mb-lg-0">
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Terms &amp; Conditions</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3">
                            <h6 class="mb-2">
                                <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Socials</a>
                            </h6>
                            <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column mb-2 mb-lg-0">
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                            <h6 class="mb-2">Contact Us</h6>
                            <a href="mailto:email@example.com" class="fw-medium">email@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
			LevelForecastPro  &copy; All rights reserved. 
            </p>
        </div>
    </footer>


    </main>


	<!--@RenderSection("footer", required: false)-->

    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>

	<!-- @RenderSection("scripts", required: false)-->
    <script src="template/assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="template/assets/vendor/rellax/rellax.min.js"></script>
    <script src="template/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="template/assets/vendor/lightgallery/lightgallery.min.js"></script>
    <script src="template/assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>

    <script src="template/assets/js/theme.min.js"></script>
</body>
</html>
