<?php
include 'includes/header.php';
$page = 'home';
?>


<main>

<section class="contact-us-banner">
    <h1 class="main-h">CONTACT US</h1>
</section>


<section class="contact">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="row">
                <div class="con-main">
                    <div class="con-ti text-center" data-aos="zoom-in-up" data-aos-delay="0" data-aos-duration="2000">
                        <h3>GET IN TOUCH WITH US</h3>
                        <p>Contact us We are available 24/7 Hours.</p>
                    </div>
                    <form action="" data-aos="zoom-in-down" data-aos-delay="0" data-aos-duration="2000">
                        <div class="col-12">
                            <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id=""
                                        aria-describedby="emailHelp" placeholder="Enter your name here">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id=""
                                        aria-describedby="emailHelp" placeholder="Enter your email address">
                                </div>
                            </div>
                            </div>
                            <!-- //Txt// -->
                            <div class="row">
                                <div class="col-12">
                                <div class="form-group">
                                    <label for="">Subject</label>
                                <textarea id=""  class="form-control" name="" rows="10" cols="50" placeholder="Write your message here"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="butt">
                                <button class="btn form-control">SUBMIT NOW</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>