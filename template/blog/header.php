<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CityLancer Blog</title>

        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/blog-style.css" />

        <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/ie.css" />
        <![endif]-->

        <!--[if lte IE 6]>
        <script src="js/belated.js" type="text/javascript"></script>
        <![endif]-->

        <script type="text/javascript" src="assets/js/jquery1.js"></script>
        <script type="text/javascript" src="assets/js/widgets.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>

    </head>

    <body>

        <div id="wrap">

            <div id="blog-header">
                <h1> <a href="blog.php">CityLancer</a></h1>

                <div class="blog-search-box">
                    <div class="input-prepend input-append">
                        <span class="btn-group blog-btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span id="currentSearchCat">Blog</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" id="searchCats">
                                <li><a href="#" id="jobs">Jobs</a></li>
                                <li><a href="#" id="freelancers">Freelancers</a></li>
                                <li><a href="#" id="portfolios">Portfolios</a></li>
                            </ul>
                        </span>
                        <input type="text" class="blog-seacrh-bar" style="margin-right: -3px" />
                        <button class="btn find-button" type="button"><i class="icon-search"></i></button>
                    </div>
                </div>

                <?php include 'views/blog/menubar.php'; ?>
            </div> 