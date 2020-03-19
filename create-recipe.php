<?php include 'header.php';?>
        <section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="images/add-recipe.jpg">
            <div id="sub_header">
                <div class="container" id="sub_content">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Create Recipe</h1>
                            <div class="bread-crums">
        						<a href="index.php">Home</a>
        						<span class="bread-crums-span">&raquo;</span>
        						<span class="current">Create Recipe</span>
        					</div><!-- End bread-crums -->
                        </div>
                    </div><!-- End row -->
                </div><!-- End container -->
            </div>
        </section>
        <!-- End SubHeader -->
        <div class="white_bg create-recipe">
            <div class="container margin_60">
                <div class="main_title">
                    <h2 class="nomargin_top">Create Recipe</h2>
                    <hr class="divider">
                </div>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="recipetitle">Recipe title</label>
                                <input type="text" id="recipetitle" class="form-control" placeholder="Recipe title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="8"></textarea>
                            </div>
                            <div class="row">
                                <div class="" id="textboxDiv">
                                    <div class="form-group after-add-more">
                                        <div class="col-sm-6">
                                            <input type="text" required="required" name="val1" name="addmore[]" class="form-control required" placeholder="Enter Here">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" required="required" name="val2" name="addmore[]" class="form-control required" placeholder="Enter Here">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 form-group">
                                        <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                    </div>
                                    <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
                                    <div class="copy-fields hide">
                                      <div class="form-group" style="clear: both;margin-top:10px">
                                        <div class="col-sm-6">
                                            <input type="text" required="required" name="val1" name="addmore[]" class="form-control required" placeholder="Enter Here">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" required="required" name="val2" name="addmore[]" class="form-control required" placeholder="Enter Here">
                                        </div>
                                        <div class="col-sm-2 form-group"> 
                                          <button class="btn btn-danger remove" type="button"><i class="fa fa-times"></i> Remove</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <aside class="col-md-4 sidebar sticky-sidebar">
                            <div class="theiaStickySidebar">
                                <div class="form-group">
                                    <div class="add-photo">
                                        <label class="icon-picture gray ">
                                            <span>Browse</span>
                                            <input type="file" name="image-file" id="picture">
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="preptime">Prep time</label>
                                    <input type="text" id="preptime" class="form-control" placeholder="Prep time">
                                </div>
                                <div class="form-group">
                                    <label for="cooktime">Cook time</label>
                                    <input type="text" id="cooktime" class="form-control" placeholder="Cook time">
                                </div>
                                <div class="form-group">
                                    <label for="numberofservings">Number of servings</label>
                                    <input type="text" id="numberofservings" class="form-control" placeholder="Number of servings">
                                </div>
                                <div class="form-group">
                                    <div class="recipe-button">
                                        <button type="button" class="btn button-more">Publish</button>
                                        <button type="button" class="btn button-more btn-save">Save</button>
                                        <button type="button" class="btn button-more btn-cancel">Cancel</button>
                                    </div>
                                </div>
                            </div>    
                        </aside>
                    </div>
                </form>
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