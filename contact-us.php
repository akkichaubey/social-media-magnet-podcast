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
            <div class="banner-info text-center mx-auto">
                <h1 class="banner-title h1" data-gsap="fadeUp">Contact Us</h1>
            </div>
        </div>
    </div>
    <!-- hero-banner -->

    <!-- blog -->
    <div class="contact-us pb-180">
        <div class="container">
            <div class="contact-form brd-30">
                <div class="form-title">
                    <h3 class="heading-34">Let’s get in touch</h3>
                    <p>Lorem ipsum odor amet, consectetuer adipiscing elit.</p>
                </div>
                <div class="form">
                    <div class="form-row">
                        <div class="col-50">
                            <div class="input-box">
                                <input type="text" placeholder="First name" class="form-control">
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="input-box">
                                <input type="text" placeholder="Last name" class="form-control">
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="input-box">
                                <input type="text" placeholder="Email address" class="form-control">
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="input-box">
                                <input type="text" placeholder="Phone number" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-box">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-box btn-wrap text-end">
                                <button type="submit" class="btn btn-md btn-secondary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog -->

    <!--Footer Start-->
    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
    <!--Footer End-->
</body>

</html>