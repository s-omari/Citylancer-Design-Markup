$(function (){

	//login button
	$('.login').click(function () {					
		
		if($(this).hasClass('every_active')){
			
			$('.login-inner').stop().animate ({left:'0'} ,500);
			$('.login').stop().animate ({left:'0'} ,500);
			$(this).removeClass('every_active');
			
		}
		else{
			$(this).addClass('every_active');
			$('.login-inner').stop().animate ({left:'327'} ,500);
			$('.login').stop().animate ({left:'327'} ,500);
		}
		
		return false;			
		
	});



 //searchbar 
	$('#searchCats a').click(function(){
	$('#currentSearchCat').html($(this).html()).trigger('click');
	 return false;
	});
	
	$('#jobs').click(function () {
		$('.input-prepend #appendedPrependedInput').css({'width':'727px'})
	});
	
	$('#freelancers').click(function () {
		$('.input-prepend #appendedPrependedInput').css({'width':'585'})
	});
	
	$('#portfolios').click(function () {
		$('.input-prepend #appendedPrependedInput').css({'width':'602'})
	});



//complete profile modals
$('#myskills-top-field').click(function () {
		$('.model-inner-link-top').trigger('click')
	});
	
	$('#searchCats a').click(function(){
		$('#currentSearchCat').html($(this).html()).trigger('click');
		return false;
	});
	
	$('#jobs').click(function () {
		$('.input-prepend #appendedPrependedInput').css({'width':'725px'})
	});
	
	$('#freelancers').click(function () {
		$('.input-prepend #appendedPrependedInput').css({'width':'676px'})
	});
	
	$('#portfolios').click(function () {
		$('.input-prepend #appendedPrependedInput').css({'width':'602'})
	});

	$('#skillSet a').click(function(){
		if($(this).hasClass('selected')){
			$(this).removeClass('selected');
			$('#skillSetView span:contains("'+$(this).html()+'")').remove();
		}else{
			$(this).addClass('selected');
			$('#skillSetView').append('<span>'+$(this).html() + ',' +'</span>');
		}
		return false;
	});
	
	$('#fieldSet a').click(function(){
		if($(this).hasClass('selected')){
			$(this).removeClass('selected');
			$('#fieldSetView span:contains("'+$(this).html()+'")').remove();
		}else{
			$(this).addClass('selected');
			$('#fieldSetView').append('<span>'+$(this).html() + ',' +'</span>');
		}
		return false;
	});
	
	$('#done').click(function () {
		var newText = $('#skillSetView span').text()
		
		$('#skills-field').val(newText)
		$('.close-subpopup').trigger('click')
	});
	$('#cancel').click(function () {
		$('.close-subpopup').trigger('click')
	});
	
	
	$('#done-field').click(function () {
		var newTextField = $('#fieldSetView span').text()
		$('#myskills-top-field').val(newTextField)
		$('#close-field').trigger('click')
	});
	$('#cancel-field').click(function () {
		$('.close-subpopup').trigger('click')
	});
	
	$('#showModal').trigger('click');
	
	$('#skills-field').click(function () {
		$('.model-inner-link').trigger('click');
	});
	//end complete profile modals

	


	//profile skills edit 
	$("ul.editOnClick").mouseover(function(event) {
		 var editIcon = $(event.target);
		editIcon.find("i.icon-edit-alt").show();
		//$(editable + "i.icon-edit-alt").show();
	});
	$("ul.editOnClick").mouseleave( function(event){
		$("ul.editOnClick").find("i.icon-edit-alt").hide();
	});



	//profile message box - resize on click , show send button
	$('textarea#messageBox').click( function(){
		$('textarea#messageBox').css("height", "200px");
		$('#message-box input').show();
		$('button#sendButton').show();
	});


	//edit  profile with x-editable

    $('#profileDetails').editable({
	    mode: 'inline',
	    type: 'textarea'
    });

    $('#profileSkills').editable({
	    mode: 'inline',
	    select2: {
	    	tokenSeparators: [",", " "]
	    } 
    });


    //profile map
    $('#showLocationMap').click(function(){
    	
    	$('#location-map').slideToggle();
    })


//jobs table settings for list.js
var options = {
  valueNames: [ 'title', 'job-excerpt'  ]
};

var jobsList = new List('jobsList', options);


///popover activation upon focus/hover on input
var showPopover = function () {
    $(this).popover('show');
}
, hidePopover = function () {
    $(this).popover('hide');
};

$('.PO-job-title').popover({
	title: 'Pick a title for the Job posting',
    content: 'Enter title for your job, try to make it descriptiove of the type of work you want done',
    trigger: 'manual'
})
.focus(showPopover)
.hover(showPopover, hidePopover);



$('.PO-job-description').popover({
	title: 'Descripe the job',
    content: 'Describe , thoroughly the the work required for this job, use attatchements and links if necessary',
    trigger: 'manual'
})
.focus(showPopover)
.hover(showPopover, hidePopover);

$('.PO-job-location').popover({
	title: '(optional)  where is this job taking place?',
    content: 'If your job has a specific location, let freelancers know where it is. Leave this empty if the job doesnt depend on a location',
    trigger: 'manual'
})
.focus(showPopover)
.hover(showPopover, hidePopover);




////////////////

document.getElementById('hourlyBox').onchange = function() {
    document.getElementById('hourlyRate').disabled = !this.checked;
};


document.getElementById('fixedBox').onchange = function() {
    document.getElementById('fixedRate').disabled = !this.checked;
};



////////////////




});






///

