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
                    </div>
                    
                    

                    <div class="col-sm-9">
                        <nav class="tabsBg">
                            <ul>
                              <li>About Me</li>
                              
                            </ul>
                        </nav>
                        <div class="tab_container">
                          <div id="tab1" class="tab-content EditForm">
                            <form name="editProfile" action="" id="editProfile">
                                <div class="form-group col-sm-6">
                                    <label for="fName">First Name</label>
                                    <input type="text"  class="form-control required" name="fName" id="fName">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="LName">Last Name</label>
                                    <input type="text"  class="form-control required" name="LName" id="LName">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="usrnm">Username</label>
                                    <input type="text" required="required" class="form-control required" name="usrnm" id="usrnm">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email id</label>
                                    <input type="text" required="required" class="form-control required" name="email" id="email">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="pwd">Password</label>
                                    <input type="password" required="required" class="form-control required" name="pwd" id="pwd">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="pwd">Confirm Password</label>
                                    <input type="password" required="required" class="form-control required" name="pwd2" id="pwd2">
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class=" col-sm-12" id="textboxDiv">
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

                                <div class="form-group col-sm-12">
                                    <label for="pwd">About me</label>
                                    <textarea name="" rows="5" name="about" class="form-control required"></textarea><br>
                                </div>
                                <div class="col-sm-6">
                                    <input type="submit" value="Submit" class="btn button-more"/>
                                </div>
                            </form>
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
<script> 
setForm('editProfile'); 
       $(document).ready(function() {

    //here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more").click(function(){ 
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
      });
//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove",function(){ 
          $(this).parents(".form-group").remove();
      });

    });
       
    </script>  