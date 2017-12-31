<?php include 'template/head.php' ; ?>
<body>
<div id="wrap">
<div class="container">

<?php  // include 'template/header-offline.php' ; ?>
<?php   include 'template/header-online.php' ; ?>

    <div class="main">



            <?php include 'template/search-bar.php' ; ?>

            <?php // aler box , to be shown when a user signes up, and hasnt yet activated thier acccount through email:
              // include 'views/profile/logged-in/activate-profile-notification.php' ; ?>



        <div class="profile_page" id="public-profile">
                <div class="row">
                    
                    <div class="profile_content span8" id="ad">
                        <?php //  include 'views/profile/logged-in/freelancer-details.php' ; ?>	
                        <?php include 'views/profile/public-view/freelancer-details.php' ; ?> 

                        <?php //PH2  include 'views/profile/portfolio-samples.php' ; ?>
                        <?php // include 'views/profile/portfolio-samples2.php' ; ?>

                    </div><!-- END .profile_content --> 


                    

                    <?php   include  'views/profile/sidebar.php' ;?>
                    <?php // include 'views/profile/logged-in/sidebar.php' ;?>
                


                </div><!-- END .row --> 
        </div><!-- END .profile_page --> 

    </div><!-- END .main --> 

  
</div><!-- container ends-->
</div><!-- END #wrap --> 
<div id="clear-footer"></div>
<?php include 'template/footer.php' ; ?>  

</body>
</html>