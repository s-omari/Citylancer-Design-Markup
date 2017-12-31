<?php include 'template/head.php' ; ?>

<body>

<div id="wrap">     
<div id="main" class="container">



        <?php include 'template/header-offline.php' ; ?>

        <div class="main">
            <div class="search_page_content">


                <?php include 'template/search-bar.php' ; ?>
                <?php include 'views/jobs/breadcrumbs.php' ; ?>   


                <div class="search_result">
                    <div class="row">
                 
                        <div class="span9" id="search_content">

                            <?php include 'views/jobs/query-result.php'; ?>
                            <?php //PH3 include 'views/jobs/sponsored-ads.php'; ?>

                            <div class="posts_wrap">
                                <div id="posts_detail">

                                <?php include 'views/jobs/job-post.php'; ?>

                                </div><!-- END #posts_detail --> 

                            </div><!-- END .posts_wrap --> 

                            <?php include 'views/app/signup-encouragement.php'; ?>
                            <?php include 'views/app/pagination.php'; ?>

                        </div><!-- END #search_content --> 

                    <?php include 'template/sidebar-jobs.php'; ?>

                    </div><!-- END .row --> 
                </div><!-- END .search_result -->

            </div><!-- END .search_page_content --> 
        </div><!-- END .main --> 

    
   
    
</div><!-- container ends-->

</div> <!-- /#wrap -->

<div id="clear-footer"></div> 
<?php include 'template/footer.php' ; ?>

</body>
</html>