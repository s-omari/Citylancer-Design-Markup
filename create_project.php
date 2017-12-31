<?php include 'template/head.php' ; ?>
<body>

<div id="wrap">     
<div class="container">

<?php  // include 'template/header-offline.php' ; ?>
<?php   include 'template/header-online.php' ; ?>

    <div class="main">
            <?php // include 'template/search-bar.php' ; ?>


    	<div class="create_page_content">
            <div class="create_project clearfix">
            	<h1>Create Your Job Posting</h1>


                    <form>
<fieldset>
                        <h5>Job Title:</h5><br/>
                        <input name="job-title" class='input-xlarge PO-job-title' type='text' placeholder='job title' />

                        <br/>


                <label for="job-category">Category</label>
                <select class="span3"  name="job-category">

    
                    <option value="design-and-multimedia">
                       Design and Multimedia
                    </option>
    
                    <option value="programming-and-development">
                        Programming and development
                    </option>
    
                    <option value="writing-services">
                        Writing Services
                    </option>
                </select>

                <br/>



                        <h5>Describe your project:</h5><br/>   
                        <textarea id="job-description" placeholder="Job Description" class="input-xlarge PO-job-descroption" rows="3"></textarea>
</fieldset>

        
<fieldset>
                         <h5>Job Location:</h5><br/>

                        <span>City:</span><br/>
                        <input type="text" value="Toronto" class="PO-job-location" name="city">

</fieldset>

<fieldset>
                         <h5>Payment type</h5><br/>


                          <label for="yourBox" class="pull-left">
                              <input type="checkbox" id="hourlyBox" /> Hourly
                          </label>
                            $<input type="text"   id="hourlyRate" disabled /> /hr



                         <h6>and / or</h6><br/>



                          <label for="yourBox" class="pull-left">
                              <input type="checkbox" id="fixedBox" /> Fixed
                          </label>
                            $<input type="text"   id="fixedRate" disabled /> 
</fieldset>

<fieldset>
    <h5>Enter Your Contact information</h5>

    <label>First Name</label> 
    <input class="span3" placeholder="Your First Name" type="text">

    <label>Last Name</label>
    <input class="span3" placeholder="Your Last Name" type="text">

    <label>Email Address</label> 
    <input class="span3" placeholder="Your email address" type="text">

</fieldset>

                        <div class="clear-both"></div>

                        <button type="submit" class="priview">Preview Post</button> 


                    </form>
               


<!--    
                <?php // include 'views/create-project/add-attachments.php'; ?>   

                <div class="category_work">
                <?php // include 'views/create-project/category-and-skills.php' ?>                               	
                <?php // include 'views/create-project/payment-details.php' ?>
                </div>


 -->
            </div><!-- END .create_project --> 

              
        </div><!-- END .create_page_content --> 






  </div><!-- END .main --> 

  
</div><!-- container ends-->


</div><!-- END #wrap --> 

<div id="clear-footer"></div>

<?php include 'template/footer.php' ; ?>  


<script type="text/javascript">
$(function(){

    $('#skillSet a').click(function(){
        if($(this).hasClass('selected')){
            $(this).removeClass('selected');
            $('#skillSetView span:contains("'+$(this).html()+'")').remove();
        }else{
            $(this).addClass('selected');
            $('#skillSetView').append('<span>'+$(this).html()+'</span>');
        }
            
        return false;
    });
    
    $('#select01').change(function(){
        if($(this).val()!= ''){
            $('#select02').removeAttr('disabled');
        }
        if($(this).val()== 'select category'){
            $('#select02').attr('disabled', 'disabled');
        }
    });
    
// Show / hide form hints
    $('#input01, #job-description').focus(function(){
        $(this).next().fadeIn();
    });
    $('#input01, #job-description').blur(function(){
        $(this).next().fadeOut();
    });
    
    $('#select01, #spacific_skills').focus(function(){
        $(this).next().next().fadeIn();
    });
    $('#select01, #spacific_skills').blur(function(){
        $(this).next().next().fadeOut();
    });
    
    $('#spacific_skills').hover(function(){
        $(this).next().next().fadeIn();
    },function(){
        $(this).next().next().fadeOut();
    });
    
    $('#payments').hover(function(){
        $(this).prev().prev().fadeIn();
    },function(){
        $(this).prev().prev().fadeOut();
    });
    
    $('#locations').hover(function(){
        $(this).prev().fadeIn();
    },function(){
        $(this).prev().fadeOut();
    });
    
});
</script>



</body>
</html>


