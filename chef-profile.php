<?php include 'header.php';?>
        <section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="images/chef.jpg">
            <div id="sub_header">
                <div class="container" id="sub_content">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Chefs</h1>
                            <div class="bread-crums">
        						<a href="index.php">Home</a>
        						<span class="bread-crums-span">&raquo;</span>
        						<span class="current">Chef Name</span>
        					</div><!-- End bread-crums -->
                        </div>
                    </div><!-- End row -->
                </div><!-- End container -->
            </div>
        </section>
        <!-- End SubHeader -->
        <Section class="gray_bg">
            <div class="container margin_60">
                <div class="row">
                    <div class="my_account col-sm-3">
                        <div class="white_bg">
                            <figure>
                                <img src="images/autor.jpg" alt="">
                            </figure>
                            <div class="">
                                <h3>Anabelle Q.</h3> 
                            </div>
                        </div>
<!--                         <div class="text-center mar10">
                            <a href="" class="button-more">Add Recipe</a>
                            <a href="" class="button-more">Edit Profile</a>
                        </div> -->
                        <div class="text-center mar10">
                            <a href="" class="button-more" data-toggle="modal" data-target="#myModal"> Online Teaching </a>
                        </div>
                    </div>
                    
                    <div id="myModal" class="modal fade in" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Video Chat</h4>
                          </div>
                          <div class="modal-body">
                            
                            <video id="v"></video>
                            <canvas id="canvas" style="display:none;"></canvas>
                            <video id="v"></video>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="col-sm-9">
                        <nav class="tabs">
                            <ul>
                              <li class="active" rel="tab1">About Me</li>
                              <li rel="tab2">My Recipes</li>
                              <li rel="tab3">My Favorites</li>
                              <li rel="tab4">My Posts</li>
                            </ul>
                        </nav>
                        <div class="tab_container">
                          <h3 class="d_active tab_drawer_heading" rel="tab1">About Me</h3>
                          <div id="tab1" class="tab-content">
                            <div class="row">
                              <dl class="basic col-md-8">
                                <dt>Name</dt>
                                <dd>Anabelle Q.</dd>
                                <dt>Favorite cusine</dt>
                                <dd>Thai, Mexican</dd>
                                <dt>Favorite appliances</dt>
                                <dd>Blender, sharp knife</dd>
                                <dt>Favorite spices</dt>
                                <dd>Chilli, Oregano, Basil</dd>
                                <dt>Recipes submitted</dt>
                                <dd>9</dd>
                                <dt>Posts submitted</dt>
                                <dd>9</dd>
                              </dl>
                              
                              <div class="col-md-4">
                                <ul class="boxed gold">
                                  <li class="light"><a href="#"><i class="icon icon-themeenergy_crown"></i> <span>Had a best recipe</span></a></li>
                                  <li class="medium"><a href="#" ><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
                                  <li class="dark"><a href="#"><i class="icon  icon-themeenergy_medal-first-place"></i> <span>Added a first recipe</span></a></li>
                                  
                                  <li class="medium"><a href="#"><i class="icon icon-themeenergy_medal-8"></i> <span>Added 10-20 recipes</span></a></li>
                                  <li class="dark"><a href="recipes.php"><i class="icon icon-themeenergy_pencil"></i> <span>Wrote a blog post</span></a></li>
                                  <li class="light"><a href="recipes.php"><i class="icon icon-themeenergy_chat-bubbles"></i> <span>Wrote a comment</span></a></li>
                                  
                                  <li class="dark"><a href="recipes.php"><i class="icon icon-themeenergy_cup2"></i> <span>Won a contest</span></a></li>
                                  <li class="light"><a href="recipes.php"><i class="icon icon-themeenergy_share3"></i> <span>Shared a recipe</span></a></li>
                                  <li class="medium"><a href="#"><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- #tab1 -->
                          <h3 class="tab_drawer_heading" rel="tab2">My Recipes</h3>
                          <div id="tab2" class="tab-content">
                            <div class="entries row">
                              <!--item-->
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="entry white_bg">
                                    <figure>
                                        <img src="images/dish2.jpg" alt="">
                                        <figcaption><a href="single-recipes.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="shortDesc">
                                        <h4><a href="single-recipes.php">Thai fried rice with fruit and vegetables</a></h4>
                                        <ul class="list-inline star-rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="actions">
                                            <div class="rows">
                                                <div class="likes col-xs-6"><i class="fa fa-heart" aria-hidden="true"></i><a href="#">10</a></div>
                                                <div class="commented col-xs-6"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="entry white_bg">
                                    <figure>
                                        <img src="images/dish3.jpg" alt="">
                                        <figcaption><a href="single-recipes.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="shortDesc">
                                        <h4><a href="single-recipes.php">Thai fried rice with fruit and vegetables</a></h4> 
                                        <ul class="list-inline star-rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="actions">
                                            <div class="rows">
                                                <div class="likes col-xs-6"><i class="fa fa-heart" aria-hidden="true"></i><a href="#">10</a></div>
                                                <div class="commented col-xs-6"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="entry white_bg">
                                    <figure>
                                        <img src="images/dish2.jpg" alt="">
                                        <figcaption><a href="single-recipes.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="shortDesc">
                                        <h4><a href="single-recipes.php">Thai fried rice with fruit and vegetables</a></h4> 
                                        <ul class="list-inline star-rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="actions">
                                            <div class="rows">
                                                <div class="likes col-xs-6"><i class="fa fa-heart" aria-hidden="true"></i><a href="#">10</a></div>
                                                <div class="commented col-xs-6"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!--item-->
                            </div>
                          </div>
                          <!-- #tab2 -->
                          <h3 class="tab_drawer_heading" rel="tab3">My Favorites</h3>
                          <div id="tab3" class="tab-content">
                            <div class="entries row">
                                <!--item-->
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="entry white_bg">
                                    <figure>
                                        <img src="images/dish2.jpg" alt="">
                                        <figcaption><a href="single-recipes.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="shortDesc">
                                        <h4><a href="single-recipes.php">Thai fried rice with fruit and vegetables</a></h4>
                                        <ul class="list-inline star-rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="actions">
                                            <div class="rows">
                                               <div class="likes col-xs-6"><i class="fa fa-heart" aria-hidden="true"></i><a href="#">10</a></div>
                                                <div class="commented col-xs-6"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="entry white_bg">
                                    <figure>
                                        <img src="images/dish3.jpg" alt="">
                                        <figcaption><a href="single-recipes.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="shortDesc">
                                        <h4><a href="single-recipes.php">Thai fried rice with fruit and vegetables</a></h4> 
                                        <ul class="list-inline star-rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="actions">
                                            <div class="rows">
                                                <div class="likes col-xs-6"><i class="fa fa-heart" aria-hidden="true"></i><a href="#">10</a></div>
                                                <div class="commented col-xs-6"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="entry white_bg">
                                    <figure>
                                        <img src="images/dish2.jpg" alt="">
                                        <figcaption><a href="single-recipes.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="shortDesc">
                                        <h4><a href="single-recipes.php">Thai fried rice with fruit and vegetables</a></h4> 
                                        <ul class="list-inline star-rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="actions">
                                            <div class="rows">
                                                <div class="likes col-xs-6"><i class="fa fa-heart" aria-hidden="true"></i><a href="#">10</a></div>
                                                <div class="commented col-xs-6"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!--item-->
                            </div>
                          </div>
                          <!-- #tab3 -->
                          <h3 class="tab_drawer_heading" rel="tab4">My Posts</h3>
                          <div id="tab4" class="tab-content">
                            <div class="entries row">
                                <!--item-->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry white_bg">
                                        <figure>
                                            <img src="images/dish3.jpg" alt="">
                                            <figcaption><a href="blog_single.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                        </figure>
                                        <div class="shortDesc">
                                            <h4><a href="blog_single.php">Thai fried rice with fruit and vegetables</a></h4> 
                                            <ul class="list-inline star-rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <div class="actions">
                                                <div class="rows">
                                                    <div class="date col-xs-9"><i class="fa fa-calendar" aria-hidden="true"></i><a href="#"><span>22 July 2017</span></a></div>
                                                    <div class="commented col-xs-3"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                                </div>
                                                <div class="dishDisc">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry white_bg">
                                        <figure>
                                            <img src="images/dish2.jpg" alt="">
                                            <figcaption><a href="blog_single.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                        </figure>
                                        <div class="shortDesc">
                                            <h4><a href="blog_single.php">Thai fried rice with fruit and vegetables</a></h4> 
                                            <ul class="list-inline star-rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <div class="actions">
                                                <div class="rows">
                                                    <div class="date col-xs-9"><i class="fa fa-calendar" aria-hidden="true"></i><a href="#"><span>22 July 2017</span></a></div>
                                                    <div class="commented col-xs-3"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                                </div>
                                                <div class="dishDisc">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry white_bg">
                                        <figure>
                                            <img src="images/dish3.jpg" alt="">
                                            <figcaption><a href="blog_single.php"><i class="fa fa-eye"></i> <span>View recipe</span></a></figcaption>
                                        </figure>
                                        <div class="shortDesc">
                                            <h4><a href="blog_single.php">Thai fried rice with fruit and vegetables</a></h4> 
                                            <ul class="list-inline star-rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <div class="actions">
                                                <div class="rows">
                                                    <div class="date col-xs-9"><i class="fa fa-calendar" aria-hidden="true"></i><a href="#"><span>22 July 2017</span></a></div>
                                                    <div class="commented col-xs-3"><i class="fa fa-comment" aria-hidden="true"></i><a href="recipe.php#comments">27</a></div>
                                                </div>
                                                <div class="dishDisc">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--item-->
                              </div>
                              <!--//entries-->
                            </div>
                            <!-- #tab4 --> 
                          </div>
                        <!-- .tab_container -->
                        </div>      
                </div><!-- End row --> 
                
                
            </div><!-- End container -->
        </section><!-- End white_bg -->
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
