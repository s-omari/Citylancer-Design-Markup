<?php include 'template/head.php' ; ?>

<body>
<div id="wrap">
<div class="container">



    <!--header starts here -->
    <div class="header">
    	<div class="row">
        	<div class="span6 logo" id="logo">
            	<a href="index.php"><img src="assets/images/app/site_logo.png" alt="logo"  /></a>
            </div>
            <div class="span5 offset1 login_section" id="login-section-wrap">
            	<div id="login-section">
                    <a href="#" class="login every_active"><span>Login</span></a>
                    <span class="login-inner">
                        
                        <input class="input-small email" type="text" placeholder="Email">
                        <input class="input-small" type="password" placeholder="Password">
                        <a href="#" class="go_btn"><img src="assets/images/app/btn_search.png" alt="" /></a>
                        <a href="#" class="forget">Forget your username and password?</a>
                    </span>
                </div>
            </div>
        </div>
    
    </div>
    <!--header ends -->
    
    
    <!--main contents area starts here -->
    <div class="main">
    	<div class="signup_page" id="signup">
        	<div class="signup row" id="form">
            	
                <h2>Become a CityLancer , Control Your Life</h2>

        <?php include 'views/signup/social-media-signup.php' ?>


                <div class="signup_detail span8" id="signup_form">
                	 <span>Or Sign up using your email</span>
                        <input type="text" class="span3" placeholder="First name">
                    <input type="text" class="span3" placeholder="Last name"> 
                    <input type="text"  placeholder="Enter your email address" id="input01" class="signup-input" >
                    <input type="password" placeholder="Choose a password" id="input01" class="signup-input" >
                    <p>By signing up I agree to CityLancers <a href="#">Terms of service</a></p>
                    <p>
                    <a class="btn btn-primary" href="complete-profile.php">Sign me up!</a>
                    </p>
                </div>
            </div>
        </div>
</div><!-- END .main --> 

    
    
</div><!-- container ends-->
</div><!-- END #wrap --> 
<div id="clear-footer"></div>
<?php include 'template/footer.php' ; ?>  

</body>
</html>