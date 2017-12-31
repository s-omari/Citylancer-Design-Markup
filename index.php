<?php include 'template/head.php' ; ?>

<body>
<div id="wrap">     
<div id="main" class="container">


<?php include 'template/header-offline.php' ; ?>
<?php // when user is logged in :----> include 'template/header-online.php' ; ?>

<div class="main">

<?php include 'template/search-bar.php' ; ?>

        
        
        <div class="heading">
        	<h1>Take Control<br /> of your work in <br/> Your Own 
                <span>City<img src="assets/images/app/in_heading_img.png" /></span>
            </h1>
        </div>


        <div class="home_content" id="home">
        	<div class="row">
        		<div class="span6 hire_talent">
                	
                    <a href="browse-freelancers.php"> Hire </a>
                    
                    <p>- Find reliable local talent for your project</p>
                    <p>- Meet the right provider before you hire!</p>
                    <p>- Support Work in you’r community</p>
                    <p>- Get local rates for you hard work.</p>
        		</div>
                    
                <div class="span6 start_working">
                    
                    <a href="browse-jobs.php"> Work </a>
                    
                    <p>- Have your work viewed by local clients</p>
                    <p>- Shine in your city</p>
                    <p>- Never be undersold</p>

                </div>
            </div>
        </div>
</div><!-- END .main --> 

    
    
    
    
</div><!-- container ends-->


</div> <!-- /#wrap -->

<div id="clear-footer"></div> 
<?php include 'template/footer.php' ; ?>

   
</body>
</html>