<?php include 'template/head.php' ; ?>

<body>

<div id="wrap">     
<div class="container">


<?php include 'template/header-online.php' ; ?>


<div class="main">

<?php include 'template/search-bar.php' ; ?>

        
        

<div class="my-citylancer">
                          
    <ul class="nav nav-tabs">

      <li class="active"><a data-toggle="tab" href="#my-jobs">Jobs</a></li>
      <li class="last"><a data-toggle="tab" href="#my-proposals">Proposals</a></li>

    </ul><!-- END tab titles --> 


    <div class="tab-content">
      
      <div id="my-jobs" class="tab-pane active">
          
          <?php // include 'views/jobs/job-list.php' ?>

<div id="jobsList">
  
  

  <div class="list-toolbar">

    <div class="btn-group pull-right">
    <a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#">
    Sort by
    <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
    <li><a href="#">date</a></li>
    <li><a href="#">views</a></li>
    <li><a href="#">activity</a></li>
    <li>
    <a class="sort" data-sort="title">
      Sort by title
    </a></li>
    </ul>
    
    </div><!-- END .btn-group /sort by  --> 


    <div class="btn-group">
    <a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#">
    All Jobs
    <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
    <li><a href="#">My Jobs</a></li>
    <li><a href="#">Favorites</a></li>
    <li><a href="#">Invitations / Offers</a> </li>
    <li><a href="#">Proposed to</a> </li>
    </ul>

    </div><!--END .btn-group / filter--> 


  <input class="search" type="text" placeholder="filter jobs" />



    </div><!-- END .list-toolbar --> 


    <ul class="list">
   

      <li>
      <div  class="job-info" >
        
        <h4 class="title">
          <a href="job-posting.php">Create wordpress site for home business</a>
        </h4>
                <p class="job-excerpt">
                  sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip.
                </p>
             
              <p class="item-footer">
              Posted: Sept 16th, 2012 at 4:20 pm
              <b>|</b> 39 days left
              </p><!-- END .footer --> 



      </div><!-- END .job-info --> 


          <ul class="horiz-list pull-right">  
            <li>
              <a  data-toggle="tab" href="#job-proposals" >3 proposals</a>
            </li>
            <li class="seperator">|</li>
            <li>
              <a href="#"><i class="icon-edit"></i> </a>
            </li>
            <li class="seperator">|</li>
            <li>
              <a href="#"><i class="icon-eye-5"></i></a>
            </li>
            <li class="seperator">|</li>
            <li>
              <a href="#"><i class="icon-trash"></i> </a>
            </li>
          </ul>



      </li><!-- END job post --> 



      <li>
      <div  class="job-info" >
        
        <h4 class="title">
          <a href="job-posting.php">Design a template for IPad app</a>
        </h4>
                <p class="job-excerpt">
                  Consectetur adipisiciet dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip..
                </p>
             
              <p class="item-footer">
              Posted: Sept 6th, 2012 at 1:19 pm
              <b>|</b> 39 days left
              </p><!-- END .footer --> 



      </div><!-- END .job-info --> 


          <ul class="horiz-list pull-right">  
            <li>
              <a  data-toggle="tab" href="#job-proposals" >2 proposals</a>
            </li>
            <li class="seperator">|</li>
            <li>
              <a href="#"><i class="icon-edit"></i> </a>
            </li>
            <li class="seperator">|</li>
            <li>
              <a href="#"><i class="icon-eye-5"></i></a>
            </li>
            <li class="seperator">|</li>
            <li>
              <a href="#"><i class="icon-trash"></i> </a>
            </li>
          </ul>



      </li><!-- END job post --> 




  
  </div><!-- END jobsList --> 



      </div><!-- END my-jobs tab --> 


      <div id="my-proposals" class="tab-pane">
        <h2>My Proposals</h2>

      </div>

      
      <div id="job-proposals" class="tab-pane">
          <?php include 'views/jobs/job-proposals.php' ?>
     
     
      </div><!-- END job-proposals tab --> 


    </div><!-- END tab-content --> 
</div><!-- END .my-citylancer --> 




</div><!-- END .main --> 

</div><!-- container ends-->

</div> <!-- /#wrap -->

<div id="clear-footer"></div> 
<?php include 'template/footer.php' ; ?>

</body>
</html>