<!doctype html>
<html class="no-js" lang="en">
    <?php require_once('./view/_head.php'); ?>
    <body data-mobile-nav-style="classic">
        <?php require_once('./view/_header.php'); ?>

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url(./assets/images/title/title-booking.jpg)">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-5 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px">Services Booking</h1>
                        <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">Reliable cleaning for any space, big or small</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- start section -->
        <section class="mb-2">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-8 pe-50px md-pe-15px md-mb-50px xs-mb-35px">
                        <table class="table cart-products">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="alt-font fw-600">Services</th>
                                            <th scope="col" class="alt-font fw-600">Frequency</th>
                                            <th scope="col" class="alt-font fw-600">Duration</th>
                                            <th scope="col" class="alt-font fw-600">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td class="product-name">
                                                <a href="demo-decor-store-single-product.html" class="text-dark-gray fw-500 d-block lh-initial">Deep Cleaning</a> 
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                            <select class="form-control" id="deep-cleaning-frequency">
                                                            <option value="">--</option>
                                                            <option value="One Time">One Time</option>
                                                            <option value="Weekly">Weekly</option>
                                                            <option value="Monthly">Monthly</option>
                                                            <option value="Yearly">Yearly</option>
                                                            <option value="Every Other Week">Every Other Week</option>
                                                            <option value="Every 4 Weeks">Every 4 Weeks</option>
                                                        </select>
                                            </td> 
                                            <td class="product-quantity" data-title="Quantity">
                                            <select class="form-control" id="deep-cleaning-duration">
                                                            <option value="">--</option>
                                                            <option value="1">1 Hour</option>
                                                            <option value="2">2 Hours</option>
                                                            <option value="3">3 Hours</option>
                                                            <option value="4">4 Hours</option>
                                                            <option value="5">5 Hours</option>
                                                            <option value="6">6 Hours</option>
                                                            <option value="7">7 Hours</option>
                                                            <option value="8">8 Hours</option>
                                                        </select>
                                            </td> 
                                            <td class="product-subtotal" data-title="Total">$23.00</td> 
                                        </tr>
                                        <tr> 
                                            <td class="product-name">
                                                <a href="demo-decor-store-single-product.html" class="text-dark-gray fw-500 d-block lh-initial">Designer pot</a> 
                                                <span class="fs-14">Color: Brown</span>
                                            </td>
                                            <td class="product-price" data-title="Price">$35.00</td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <button type="button" class="qty-minus">-</button>
                                                    <input class="qty-text" type="text" id="2" value="1" aria-label="qty-text">
                                                    <button type="button" class="qty-plus">+</button>
                                                </div>
                                            </td> 
                                            <td class="product-subtotal" data-title="Total">$70.00</td> 
                                        </tr>
                                        <tr> 
                                            <td class="product-name">
                                                <a href="demo-decor-store-single-product.html" class="text-dark-gray fw-500 d-block lh-initial">Ceramic mug</a> 
                                                <span class="fs-14">Color: White</span>
                                            </td>
                                            <td class="product-price" data-title="Price">$15.00</td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <button type="button" class="qty-minus">-</button>
                                                    <input class="qty-text" type="text" id="3" value="1" aria-label="qty-text">
                                                    <button type="button" class="qty-plus">+</button>
                                                </div>
                                            </td> 
                                            <td class="product-subtotal" data-title="Total">$15.00</td> 
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-very-light-gray border-radius-6px p-50px lg-p-25px your-order-box">
                            <span class="fs-26 alt-font fw-600 text-dark-gray mb-5px d-block">Your order</span>
                            <table class="w-100 total-price-table your-order-table">
                                <tbody>
                                    <tr>
                                        <th class="w-60 lg-w-55 xs-w-50 fw-600 text-dark-gray alt-font">Service</th>
                                        <td class="fw-600 text-dark-gray alt-font">Total</td>
                                    </tr>
                                    <tr class="product">
                                        <td class="product-thumbnail" colspan="2">
                                            <a href="javascript:void(0);" class="text-dark-gray fw-500 d-block lh-initial">No orders found</a>
                                        </td>
                                    </tr>
                                    <!--<tr>
                                        <th class="w-50 fw-600 text-dark-gray alt-font">Subtotal</th>
                                        <td class="text-dark-gray fw-600">70.00 AED</td>
                                    </tr>
                                    <tr>
                                        <th class="w-50 fw-600 text-dark-gray alt-font">Service Fee</th>
                                        <td class="text-dark-gray fw-600">100.00 AED</td>
                                    </tr>
                                    <tr>
                                        <th class="w-50 fw-600 text-dark-gray alt-font">VAT</th>
                                        <td class="text-dark-gray fw-600">5%</td>
                                    </tr>-->
                                    <tr class="total-amount">
                                        <th class="fw-600 text-dark-gray alt-font">Total</th>
                                        <td data-title="Total">
                                            <h6 class="d-block fw-700 mb-0 text-dark-gray alt-font">0.00 AED</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="p-40px lg-p-25px bg-white border-radius-6px box-shadow-large mt-10px mb-30px sm-mb-25px checkout-accordion">
                                <div class="w-100" id="accordion-style-05">
                                    <!-- start tab content -->
                                    <div class="heading active-accordion">
                                        <label class="mb-5px">
                                            <input class="d-inline w-auto me-5px mb-0 p-0" type="radio" name="payment-option" checked="checked">
                                            <span class="d-inline-block text-dark-gray fw-500">Direct bank transfer</span>
                                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-style-05" href="#style-5-collapse-1"></a>
                                        </label> 
                                    </div>
                                    <div id="style-5-collapse-1" class="collapse show" data-bs-parent="#accordion-style-05">
                                        <div class="p-25px bg-very-light-gray mt-20px mb-20px fs-14 lh-24">
                                            <div class="row">
                                                <div class="col-12 mb-20px">
                                                    <label class="mb-10px">Card Number <span class="text-red">*</span></label>
                                                    <input class="form-control" type="text" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-20px">
                                                    <label class="mb-10px">Expiry Date <span class="text-red">*</span></label>
                                                    <input class="form-control" type="text" required>
                                                </div>
                                                <div class="col-6 mb-20px">
                                                    <label class="mb-10px">CCV <span class="text-red">*</span></label>
                                                    <input class="form-control" type="text" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab content -->
                                    <!-- start tab content -->
                                    <div class="heading active-accordion">
                                        <label class="mb-5px">
                                            <input class="d-inline w-auto me-5px mb-0 p-0" type="radio" name="payment-option"> 
                                            <span class="d-inline-block text-dark-gray fw-500">Cash</span> 
                                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-style-05" href="#style-5-collapse-3"></a>
                                        </label>
                                    </div>
                                    <div id="style-5-collapse-3" class="collapse" data-bs-parent="#accordion-style-05">
                                        <div class="p-25px bg-very-light-gray mt-20px mb-20px fs-14 lh-24">Pay with cash upon service.</div>
                                    </div>
                                    <!-- end tab content -->
                                </div> 
                            </div>
                            <p class="fs-14 lh-26">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a class="text-decoration-line-bottom text-dark-gray fw-500" href="#">privacy policy.</a></p>
                            <div class="position-relative terms-condition-box text-start d-flex align-items-center">
                                <label>
                                    <input type="checkbox" name="terms_condition" id="terms_condition3" value="1" class="terms-condition check-box align-middle">
                                    <span class="box fs-14 lh-24">I have agree to the website <a href="#" class="text-decoration-line-bottom text-dark-gray fw-500">terms and conditions.</a></span>
                                </label>
                            </div>
                            <a href="#" class="btn btn-base-color btn-extra-large btn-switch-text btn-round-edge btn-box-shadow w-100 text-transform-none mt-30px">
                                <span>
                                    <span class="btn-double-text" data-text="Place order">Place order</span>
                                </span>
                            </a>
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
        
        <script type="text/javascript" src="./assets/js/functions.js?v=" <?php echo rand(); ?>></script>
    </body>
</html>