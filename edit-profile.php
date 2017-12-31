<?php include 'template/head.php' ; ?>
<body>


<div id="wrap">     

<div id="main" class="container">

<?php // include 'template/header-offline.php' ; ?>
<?php include 'template/header-online.php' ; ?>

    <div class="main">
            <?php include 'template/search-bar.php' ; ?>

            <?php // to be shown when a user signes up, and hasnt yet activated thier acccount
             // include 'views/profile/logged-in/activate-profile-notification.php' ; ?>




<div class="row" id="settings-page">
    
    <div class="span12">
        <div class="tabbable tabs-left">          
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#personal-information">Personal Information</a></li>
            <li><a data-toggle="tab" href="#contact-information">Contact Information</a></li>
            <li><a data-toggle="tab" href="#my-networks">My Networks</a></li>
            <li><a data-toggle="tab" href="#fields-and-skills">Fields and Experties</a></li>
            <li><a data-toggle="tab" href="#login-details">Login Details</a></li>
          </ul>

          <div class="tab-content">
            <?php include 'views/settings/personal-information.php' ;  ?>
            <?php include 'views/settings/contact-information.php' ;  ?>
            <?php include 'views/settings/my-networks.php' ;  ?>
            <?php include 'views/settings/fields-and-skills.php' ;  ?>
            <?php include 'views/settings/login-details.php' ;  ?>
          </div><!-- END .tab-content --> 

        </div> <!-- /tabbable -->
    </div><!-- END .profile_content --> 

</div><!-- END .row --> 


    </div><!-- END .main --> 

  
</div><!-- container ends-->


</div><!-- END #wrap --> 

<div id="clear-footer"></div>

<?php include 'template/footer.php' ; ?>  

</body>
</html>