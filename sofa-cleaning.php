<!doctype html>
<html class="no-js" lang="en">
    <?php require_once('./view/_head.php'); ?>
    <body data-mobile-nav-style="classic">
        <?php require_once('./view/_header.php'); ?>

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url(./assets/images/services/sofa-cleaning-01.jpg)">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-5 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px">Sofa Cleaning</h1>
                        <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">Crystal-clear windows with streak-free, expert cleaning</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- start section -->  
        <section class="mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <?php require_once('./view/_services_shortcut.php'); ?>
                    </div>
                    <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h4 class="text-dark-gray fw-700 ls-minus-1px mb-20px d-block">Sofa Cleaning</h4>
                        <p>Refresh your living space with AL THABITAH's Sofa Cleaning Service. Our skilled team removes dirt, stains, and allergens from deep within the fabric, restoring your sofa's comfort and appearance. Using safe, professional-grade products and techniques, we ensure thorough cleaning without damaging delicate materials. Whether it’s fabric or leather, we treat your sofa with care, leaving it fresh, clean, and ready for you to relax. Experience a renewed level of comfort with AL THABITAH’s Sofa Cleaning Service today.</p>
                        <div class="cover-background p-7 border-radius-6px mb-60px md-mb-40px d-flex justify-content-end align-items-end sm-h-500px" style="background-image: url(./assets/images/services/sofa-cleaning-02.jpg)">
                            <div class="bg-white box-shadow-quadruple-large border-radius-4px w-50 lg-w-55 sm-w-100 overflow-hidden">
                                <div class="p-40px lg-p-25px last-paragraph-no-margin">
                                    <span class="fs-22 text-dark-gray fw-700 mb-10px d-block">Professional Cleaning</span>
                                    <p>Tailored solutions to meet your cleaning needs, ensuring spotless results every time.</p>
                                </div>
                                <div class="bg-base-color p-15px text-center">
                                    <a href="contact-us.php" class="text-dark-gray text-dark-gray-hover fw-600"><i class="feather icon-feather-mail me-10px"></i>Talk with our team</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-dark-gray fw-700 mb-40px lg-mb-30px d-block">Benefits of working with us</h4>
                        <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">
                            <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span class="fw-600 text-dark-gray">Restored Comfort: </span>Enjoy a fresh, clean sofa that feels like new.</p>
                            <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span class="fw-600 text-dark-gray">Stain Removal: </span>Get rid of stubborn stains without damaging your furniture.</p>
                            <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span class="fw-600 text-dark-gray">Deep Cleaning: </span>Eliminate embedded dirt and allergens for a healthier environment.</p>
                            <p class="p-30px mb-0"><span class="fw-600 text-dark-gray">Fabric Protection: </span>Gentle cleaning preserves the quality of your upholstery.</p>
                        </div>
                        <div class="row align-items-center g-0">
                            <div class="col-auto d-block d-sm-flex align-items-center text-center text-sm-start">
                                <div class="fw-500 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                                    <p>Save your time and effort spent for finding a solution. <a href="contact-us.php" class="text-decoration-line-bottom fw-700 text-dark-gray">Contact us now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <?php 
            require_once('./view/_footer.php'); 
            require_once('./view/_required_javascript.php'); 
        ?>
    </body>
</html>