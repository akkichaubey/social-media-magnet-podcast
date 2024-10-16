<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body class="home">
    <!--Header Start-->
    <?php include("include/header.php"); ?>
    <!--Header End-->

    <!-- hero-banner -->
    <div class="banner inner-banner img-overlay" style="background-image: url('./assets/images/blog-inner.webp');">
        <div class="circle-shape" data-gsap="fadeRight">
            <img src="./assets/images/circle.webp">
        </div>
        <div class="container container-wide">
            <div class="banner-info">
                <h1 class="banner-title h1" data-gsap="fadeUp">Explore Our Podcast</h1>
                <div class="description" data-gsap="fadeUp" data-delay="0.2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-banner -->

    <div class="player-wrap pt-180">
        <div class="container">
            <h2 class="heading-46 pb-30" data-gsap="fadeUp">Now Playing</h2>
            <div class="player-box">
                <img src="./assets/images/player.jpg" alt="img" width="" height="">
            </div>
        </div>
    </div>

    <!-- other-podcasts -->
    <div class="other-podcasts pt-180 pb-120">
        <div class="container">
            <h2 class="heading-46 pb-30" data-gsap="fadeUp">Related Podcast</h2>
            <div class="podcasts-list">
                <ul>
                    <li>
                        <div class="podcast podcast--stl-1" data-gsap="fadeUp">
                            <div class="icon-box">
                                <button type="submit" class="btn-play">
                                    <svg class="icon" width="18" height="18">
                                        <use xlink:href="assets/images/svgsprit.svg#play-icon"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="podcast--info">
                                <h3>Viverra ut mattis sagittis id
                                    ut consequat litora imperdiet</h3>
                                <div class="author">
                                    By: <a href="#">Michelle Hummel</a>
                                </div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-md btn-black">Listen Now</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="podcast podcast--stl-1" data-gsap="fadeUp">
                            <div class="icon-box">
                                <button type="submit" class="btn-play">
                                    <svg class="icon" width="18" height="18">
                                        <use xlink:href="assets/images/svgsprit.svg#play-icon"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="podcast--info">
                                <h3>Viverra ut mattis sagittis id
                                    ut consequat litora imperdiet</h3>
                                <div class="author">
                                    By: <a href="#">Michelle Hummel</a>
                                </div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-md btn-black">Listen Now</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="podcast podcast--stl-1" data-gsap="fadeUp">
                            <div class="icon-box">
                                <button type="submit" class="btn-play">
                                    <svg class="icon" width="18" height="18">
                                        <use xlink:href="assets/images/svgsprit.svg#play-icon"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="podcast--info">
                                <h3>Viverra ut mattis sagittis id
                                    ut consequat litora imperdiet</h3>
                                <div class="author">
                                    By: <a href="#">Michelle Hummel</a>
                                </div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-md btn-black">Listen Now</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="podcast podcast--stl-1" data-gsap="fadeUp">
                            <div class="icon-box">
                                <button type="submit" class="btn-play">
                                    <svg class="icon" width="18" height="18">
                                        <use xlink:href="assets/images/svgsprit.svg#play-icon"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="podcast--info">
                                <h3>Viverra ut mattis sagittis id
                                    ut consequat litora imperdiet</h3>
                                <div class="author">
                                    By: <a href="#">Michelle Hummel</a>
                                </div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-md btn-black">Listen Now</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- other-podcasts -->

    <!--Footer Start-->
    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
    <!--Footer End-->
</body>

</html>