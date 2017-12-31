<?php include 'template/head.php' ; ?>
<body>
<div class="container">

<?php include 'template/header-offline.php' ; ?>

    <div class="main">
            <?php include 'template/search-bar.php' ; ?>

        <div class="profile_page" id="profile contrator">
                <div class="row">
                    
                    <div class="profile_content span8" id="ad">
                        <?php include 'views/profile/freelancer-details.php' ; ?>   
                        
                    </div><!-- END .profile_content --> 

                    <?php include 'views/profile/sidebar.php' ;?>
                
                </div><!-- END .row --> 
        </div><!-- END .profile_page --> 

    </div><!-- END .main --> 

<?php include 'template/footer.php' ; ?>    
</div><!-- container ends-->

<?php include 'views/profile/complete-profile-modal.php' ; ?>

</body>
</html>