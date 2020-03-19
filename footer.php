<footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="social_footer">
                            <h2>About Dishmize</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tok a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="social_footer contactDetails">
                            <h2>Need Help</h2>
                            <ul class="list-unslyled">
                                <li>#228, Lorem Ipsum is simply </li>
                                <!--<li>Phone: <a href="tel:+91 9999 999 999">+91 9999 999 999</a></li>-->
                                <li>Email: <a href="mailto:mail@dishmize.com">mail@dishmize.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="social_footer">
                            <h2>Follow Us</h2>
                            <ul class="list-inline socialNet">
                                <li class="fb"><a href="https://www.facebook.com/DishMize/" target="_blank" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="gp"><a href="https://www.instagram.com/dishmize/ " target="_blank" title=""><i class="fa fa-instagram"></i></a></li>
                                <li class="in"><a href="https://linkedin.com" target="_blank" title=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li class="tw"><a href="https://twitter.com/Dishmizer" target="_blank" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
            <div class="container">
                
                <div class="copyright">
                    <p class="pull-left">Copyright © <?php echo date('Y');?> Dishmize. All rights reserved</p>
                    <ul class="list-inline pull-right">
                        <li><a href="#" title="">Privacy Policy</a></li>
                        <li><a href="terms.php" title="">Terms & Conditions</a></li>
                        <li><a href="faq.php" title="">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </footer><!-- End Footer -->
    </div><!-- End wrap Page -->
    <!-- go-up -->
    <div class="go-up"><i class="fa fa-chevron-up"></i></div>
    <!-- End go-up -->
    
    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="js/ResizeSensor.min.js"></script>
    <script src="js/nicEdit.js"></script>
    <script src="js/theia-sticky-sidebar.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form.js"></script>
    <script src="js/bootstrap-tagsinput.js"></script>
    <script src="js/form-main.js"></script>

    
    <script src="js/custom.js"></script>
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

</body>
</html>