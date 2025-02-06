<?php include 'header.php'; ?>


<!--[endlocalize]-->
<main id="main">

    <!-- Page Layout -->

    <!-- Hero Module -->
    <div class="mod_hero banner viewport " data-s3-module>
        <div class="wrapper">
            <div class="media">
                <picture class="background">
                    <img src="images/login.png" alt="">
                </picture>
                <!-- <ul class="partial_breadcrumb" data-s3-partial>
                    <li><a href="../index.html" role="link" aria-label="Breadcrumbs to help navigate the user">Home</a>
                    </li>
                    <li><a href="index.html" role="link" aria-label="Breadcrumbs to help navigate the user">Newsletter
                            Sign Up</a></li>
                </ul> -->
            </div>
            <div class="row">
                <div class="inner">
                    <h1 class="heading">Welcome Back! <br> Log In to Learn & Grow</h1>

                    </ul> <a class="arrow-link" href="#book-now">BOOK A LESSON NOW</a>
                </div>
            </div>
        </div>


    </div>
    <!-- Newsletter Form Module -->
    <div class="mod_newsletter_form " data-s3-module>
        <div class="wrapper">
            <div class="row">
                <div class="content">
                    <h2 class="login">Log In</h2>
                    <!-- <p>Sign up to our newsletter here. Sign up to our newsletter here. Sign up to our newsletter
                        here.</p> -->
                </div>

                <div class="partial_form" data-s3-partial>


                    <form id="form_newsletter" class="s3-form" method="post" action="https://imagesmedspa.com/validate/"
                        data-abide="" enctype="multipart/form-data" novalidate>
                        <div class="fields">
                            <div class="field-row col1 hidden-row">
                                <div class="field hidden">
                                    <input type="hidden" name="subject" id="newsletter_subject"
                                        value="Newsletter Sign Up Form">
                                </div>
                            </div>
                            <div class="field-row col1 hidden-row">
                                <div class="field hidden">
                                    <input type="hidden" name="redirect" id="newsletter_redirect"
                                        value="/contact/thank-you/">
                                </div>
                            </div>
                            <div class="field-row col1">
                                <div class="field email">
                                    <label for="newsletter_email">Email*</label>
                                    <small>This field is required.</small>
                                    <input type="email" size="50" name="email" id="newsletter_email" value="" required
                                        aria-required="true" placeholder="Email*">
                                </div>
                            </div>
                            <!-- <div class="field-row col1">
                                <div class="field text">
                                    <label for="newsletter_first_name">First Name*</label>
                                    <small>This field is required.</small>
                                    <input type="text" size="50" name="first_name" id="newsletter_first_name" value=""
                                        required aria-required="true" placeholder="First Name*">
                                </div>
                            </div> -->
                            <br>
                            <div class="field-row col1">
                                <div class="field text">
                                    <label for="newsletter_last_name">Password*</label>
                                    <small>This field is required.</small>
                                    <input type="text" size="50" name="last_name" id="newsletter_last_name" value=""
                                        required aria-required="true" placeholder="Password*">
                                </div>
                            </div>
                            <div class="field-row col1">
                                <div class="field checkbox follow-up">
                                    <small>This field is required.</small>
                                    <div class="field-item checkbox-item">
                                        <input type="checkbox"
                                            id="newsletter_by_completing_this_form_you_are_giving_us_permission_to_followup_by_phone_email_or_text"
                                            name="by_completing_this_form_you_are_giving_us_permission_to_followup_by_phone_email_or_text"
                                            value="Yes" required aria-required="true">
                                        <label
                                            for="newsletter_by_completing_this_form_you_are_giving_us_permission_to_followup_by_phone_email_or_text">By
                                            completing this form, you are giving us permission to follow-up by phone,
                                            email, text. </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field-row col1">
                                <div class="field checkbox follow-up">
                                    <small>This field is required.</small>
                                    <div class="field-item checkbox-item">
                                       
                                        <label
                                            for="newsletter_by_completing_this_form_you_are_giving_us_permission_to_followup_by_phone_email_or_text">If
                                            you don’t have an account please <a href="sign-up.php"> Signup </a> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input id="newsletter_recaptchaV3" name="g-recaptcha-response-v3" type="hidden" />
                            <div id="newsletter_recaptchaV2" data-recaptcha></div>
                            <div id="newsletter_recaptcha" data-recaptcha-error>
                                <small>This field is required.</small>
                            </div>
                        </div> <input type="hidden" name="form_id" id="form_id" value="newsletter">
                        <input name="human_check" type="hidden">
                        <div class="submit-holder">
                            <div class="btn validate " id="validate_newsletter" tabindex="0">Login</div>
                         
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div> <!-- /Page Layout -->

</main>

<?php include 'footer.php'; ?>