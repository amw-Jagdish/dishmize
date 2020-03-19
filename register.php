<?php include 'header.php';?>
        <section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="images/login.jpg">
            <div id="sub_header">
                <div class="container" id="sub_content">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>User Register</h1>
                            <div class="bread-crums">
        						<a href="#">Home</a>
        						<span class="bread-crums-span">&raquo;</span>
        						<span class="current">User Register</span>
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
                                <h2 class="nomargin_top">User Register</h2>
                                <hr class="divider">
                            </div>
                            <form action="#" method="post" id="register">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="add-photo">
                                            <label class="icon-picture gray ">
                                                <span>Browse</span>
                                                <input type="file" name="image-file" id="picture" required="required">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" id="fname" class="form-control required" placeholder="First Name" name="first_name" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" id="Lname" name="last_name" class="form-control required" placeholder="Last Name" required>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-sm-6">
                                    <input type="text" id="USRname" name="user_name"  class="form-control required" placeholder="Username" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" id="email" name="email"  class="form-control required" placeholder="Email Address">
                                </div> 
                                <div class="clearfix"></div>                                              
                                <div class="form-group col-sm-6">
                                    <input type="password" id="password" class="form-control required" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="password" equalto="#password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-6 text-left">
                                    <button type="submit" class="btn  btn-primary">Create Account</button>
                                    <br>
                                    <div class="form-group">
                                    <input name="check" type="checkbox" id="acceptTerm" class=" form-control required"><label for="acceptTerm"> I Accept the <a href="javascript:void();">Terms of Use</a></label>
                                    <label id="check-error" class="error" for="check" style="display: none;">This field is required.</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <i class="fa fa-question-circle"></i> <a href="login.html">Already Have Account</a>
                                </div>
                                
                            </form>
                            <div class="clearfix"></div>
                            <div class="login-social col-sm-12">
                                <div class="separator"><span>Or</span></div>
                                <em>Signin with your Social Networks</em>
                                <ul>
                                    <li class="fb-bg"><a href="#"><i class="fa fa-facebook"></i> Facebook Login</a></li>
                                    <li class="twi-bg"><a href="#"><i class="fa fa-twitter"></i> Twitter Login</a></li>
                                    <li class="g-bg"><a href="#"><i class="fa fa-google-plus"></i> Google+ Login</a></li>
                                </ul>
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
    <script type="text/javascript">
        setForm('register')
    </script>