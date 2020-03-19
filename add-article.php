<?php include 'header.php';?>
        <section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="images/login.jpg">
            <div id="sub_header">
                <div class="container" id="sub_content">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Add Article</h1>
                            <div class="bread-crums">
                                <a href="#">Home</a>
                                <span class="bread-crums-span">&raquo;</span>
                                <span class="current">Add Article</span>
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
                    
                    <div class="col-md-8 col-md-offset-2">
                            
    
                        <div class="form-login white_bg">
                            <div class="main_title">
                                <h2 class="nomargin_top">Add Article</h2>
                                <hr class="divider">
                            </div>

                            <form action="#" method="post" id="addArticle">
                                <div class="form-group col-sm-12">
                                    <label for=""><strong>Blog Title</strong></label>
                                    
                                    <input type="text" id="Atitle" class="form-control required" name="Atitle" required>
                                </div>
                                <!-- <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="add-photo">
                                            <label class="icon-picture gray ">
                                                <span>Browse</span>
                                                <input type="file" name="image-file" id="picture" required="required">
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <label for=""><strong>Add Photo/video</strong></label>
                                       <br>
                                        <label class="imgUpload" for="files">
                                            <span class="btn-primary">
                                            <input id="files" type="file" multiple accept="image/*"/> Add Image</span> Add Image
                                        </label>
                                       
                                        <div id="result" ></div>
                                    </div>
                                </div>
                                
                                <div class="form-group col-sm-12">
                                    <label for=""><strong>Add Discription</strong></label>
                                    <textarea cols="100" id="area2" required="required" name="discription" style="width: 100%;"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-sm-12 tagsinput">
                                    <label for=""><strong>Add Tags</strong></label>
                                    
                                   <input type="text" id="category" required="required" class="form-control required" name="tags" data-role="tagsinput" />
                                </div>
                                <div class="form-group col-sm-12 select">
                                  <label for=""><strong>Select Categoty</strong></label>
                                  <select required class="form-control" id="sel1">
                                    <option value="" disabled selected hidden>Select Cetegory</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                  </select>

                                </div> 
                                <div class="clearfix"></div>                                              
                                
                            <div class="clearfix"></div>
                            <div class="mt30 col-sm-12 text-left">
                                <button type="submit" class="btn  btn-primary">Publish</button>
                            </div>
                            </form>
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
        bkLib.onDomLoaded(function() {
            new nicEditor({fullPanel : true}).panelInstance('area2');
        });

        $('.tagsinput input').on('itemAdded', function(event) {
            setTimeout(function(){
                $(">input[type=text]",".bootstrap-tagsinput").val("");
            }, 1);
        });
        
window.onload = function(){
        
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        var filesInput = document.getElementById("files");
        
        filesInput.addEventListener("change", function(event){
            
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                
                //Only pics
                if(!file.type.match('image'))
                  continue;
                
                var picReader = new FileReader();
                
                picReader.addEventListener("load",function(event){
                    
                    var picFile = event.target;
                    
                    var div = document.createElement("div");
                    div.className = "col-sm-4 positionReletive";
                    
                    div.innerHTML = "<div class='thumbnailbox'><img class='thumbnail' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/></div><a onClick='remove(this);' class='remove-field'><i class='fa fa-times'></i></a>";
                    
                    output.insertBefore(div,null);      
                    
                });
                
                
                 //Read the image
                picReader.readAsDataURL(file);
            }                               
           
        });
    }
    else
    {
        console.log("Your browser does not support File API");
    }
}

function remove(e) {
    e.parentNode.parentNode.removeChild(e.parentNode);
        // $(this).parent().remove();
    document.getElementById("files").value = "";
 };
    setForm('addArticle');
</script>