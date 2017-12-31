<a href="#completeProfileModal" data-toggle="modal" id="showModal"></a>
<div id="completeProfileModal" class="modal hide fade" style="display: none;">
    <div class="modal-header">
        <h3 style="text-align:left;">Complete Your Profile</h3>
    </div>

    <div class="profile" id="profile">

    <form class="form-horizontal">
<fieldset>


<div class="control-group">
  <label class="control-label" for="phone">First name</label>
  <div class="controls">
    <input class="input-medium search-query" type="text" >
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="phone">Last name</label>
  <div class="controls">
 
        <input class="input-medium search-query" type="text">
    
  </div>
</div>
        



<!-- Phone number input-->
<div class="control-group">
  <label class="control-label" for="phone">Phone number</label>
  <div class="controls">
    <input type="text" data-mask="999-999-9999"  placeholder="Enter your phone number" class="input-large" >
    
  </div>
</div>




<select class="span3" data-provide="typeahead" data-items="4">
      <option>Toronto</option>
      <option>Vancouver</option>
      <option>Calgary</option>
      <option>Victoria</option>

</select>



<!-- Select City -->
<div class="control-group">
  <label class="control-label" for="city">City</label>
  <div class="controls">
    <select id="city" name="city" class="input-large">
      <option>Toronto</option>
      <option>Vancouver</option>
      <option>Calgary</option>
      <option>Victoria</option>
    </select>
  </div>
</div>


        <input id="myskills-top-field" class="input-xlarge" type="text" placeholder="Fields">
        <input id="skills-field" class="input-xlarge" type="text" placeholder="Skills">
        
        <button class="btn btn-success" href="#">View My profile</button>

        <a href="#myskills" data-toggle="modal" class="model-inner-link"><span>model</span></a>
        <a href="#myskills-top" data-toggle="modal" class="model-inner-link-top"><span>model</span></a>
    </div>




</fieldset>
</form>


</div><!-- END #completeProfileModal --> 
    
<?php include 'views/profile/fields-modal.php' ; ?>
<?php include 'views/profile/skills-modal.php' ; ?>
   
