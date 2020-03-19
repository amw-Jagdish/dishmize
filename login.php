<?php include 'header.php';?>
        <section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="images/login.jpg" data-natural-width="1400" data-natural-height="500">
            <div id="sub_header">
                <div class="container" id="sub_content">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>User Login</h1>
                            <div class="bread-crums">
        						<a href="Index.php">Home</a>
        						<span class="bread-crums-span">&raquo;</span>
        						<span class="current">User Login</span>
        					</div><!-- End bread-crums -->
                        </div>
                    </div><!-- End row -->
                </div><!-- End container -->
            </div>
        </section>
        <!-- End SubHeader -->
        <div class="gray_bg">
            <div class="container margin_60">
                <div class="row">
                    <!-- <div class="col-md-6">
                        <div class="login-app">
                            <h3>WITH OUR APP, YOU CAN</h3>
                            <a href="#" target="_blank" class="btn btn-color1 solid small bdr-2 round mr-6">
                				<i class="fa fa-apple"></i> App Store
                			</a>
                            <a href="#" target="_blank" class="btn btn-color1 solid small bdr-2 round mr-6">
                				<i class="fa fa-android"></i> Google Play
                			</a>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-md-offset-3">
                            
    
                        <div class="form-login white_bg">
                            <div class="main_title">
                                <h2 class="nomargin_top">User Login</h2>
                                <hr class="divider">
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Username or Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <button type="submit" class="btn  btn-primary">SIGN IN</button>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <i class="fa fa-question-circle"></i> <a href="#">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                            <div class="login-social">
                                <div class="separator"><span>Or</span></div>
                                <em>Signin with your Social Networks</em>
                                <ul>
                                    <li class="fb-bg"><a href="#"><i class="fa fa-facebook"></i> Facebook Login</a></li>
                                    <li class="twi-bg"><a href="#"><i class="fa fa-twitter"></i> Twitter Login</a></li>
                                    <li class="g-bg"><a href="#"><i class="fa fa-google-plus"></i> Google+ Login</a></li>
                                </ul>
                            </div>
                            <div class="user-signup">
                                <i class="fa fa-user-plus"></i> Not a Member yet?  <a href="register.php">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div><!-- End container -->
        </div><!-- End white_bg -->
        <!-- newslatter -->
        <section class="newslatter">
            <div class="container">
                <div class="col-md-9">
                    <p>Stay Always Updated With us. Sign in with our newsletter</p>
                </div>
                <div class="col-md-3">
                <div class="subcribe">
                    <input type="text" class="form-control" placeholder="Your mail">
                    <a class="fa fa-paper-plane" href="javascript:void(0);"></a>
                </div>
                </div>
            </div>
        </section><!-- End newslatter -->
        <!-- Footer -->
        <?php include 'footer.php';?>