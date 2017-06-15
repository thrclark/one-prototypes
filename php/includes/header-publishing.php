<script>
$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
   
    
    //make status editable
    $('#status').editable({
        type: 'select',
        title: 'Select status',
        placement: 'bottom',
        value: 2,
        source: [
            {value: 1, text: 'status 1'},
            {value: 2, text: 'status 2'},
            {value: 3, text: 'status 3'}
        ]
        /*
        //uncomment these lines to send data on server
        ,pk: 1
        ,url: '/post'
        */
    });
	
	 $('#roles').editable({
	placement: 'bottom',
       pk: 1,
       limit: 3,
       source: [
        {value: 1, text: 'Student'},
        {value: 2, text: 'Staff'},
        {value: 3, text: 'Faculty'},
       ]
    }); 
	
	
	$('#campuses').editable({
		placement: 'bottom',
		showbuttons: false,
        source: [
            {value: 1, text: 'All Campuses'},
            {value: 2, text: 'IU Bloomington'},
			{value: 3, text: 'IU East'},
			{value: 4, text: 'IU Kokomo'},
			{value: 5, text: 'IU Northwest'},
			{value: 6, text: 'IU South Bend'},
			{value: 7, text: 'IU Southeast'},
			{value: 8, text: 'IUPUC Columbus'},
			{value: 9, text: 'IUPUI Indianapolis'}

        ]
       
    });    
	
	
	
});

</script>
<script>


$(function() {                       
  $(".clickable").click(function() {  
    $(".clickable").removeClass("active"); 
	$(this).addClass("active");      
  });
});

</script>

<header class="">
    <div class="container app-header " id="contain2">
        <div class="row">
            <div class="col-sm-6 col-xs-10 brand"> <a class="logo" href="store.php" id="sidebar_logo" tabindex="0"> <img alt="clear all search filters and return to the home page" src="../img/oneiu-logo.png" class="hidden-xs hidden-sm"> <img alt="clear all search filters and return to the home page" src="../img/oneiu-logo-mobile.png" class="hidden-md hidden-lg">
                <h1><span class="sr-only">One.IU</span></h1>
                </a> </div>
            <div class="col-sm-6 col-xs-2">
                <div class="dropdown navbar-text">
                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-link" style="padding-top:0px; padding-right:0px;"> <i class="icon-user-3 visible-xs-inline" aria-hidden="true"></i> <span class="hidden-xs">Hello, Tom </span><span class="caret"></span> </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
                        <li><a href="vfy-pub-home.php">Publishing</a></li>
                        <li><a href="vfy-admin-sysparam.php">Administration</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<script type='text/javascript'>
    $(window).load(function() {
        $('.checked-list a').click(function() {
            $(this).find('i').toggleClass('icon-ok')
        });
    });

     $(document).ready(function() {
        $("#role_allroles").click(function() {
            $('#role_faculty i, #role_staff i, #role_student i').addClass("icon-ok");
            //$(this).find('i').addClass('icon-ok')
        });
      
    });
</script> 
<script>
$(function() {                      
  $("#role_allroles").click(function() {  
    $("#role_allroles i").addClass("icon-ok");      
  });
});
</script> 
<script>

    $(document).ready(function() {
        
		
		
		if ( $( "#role_staff i" ).hasClass( "icon-ok" ) ) {
 
   //$("#writetext").text("asdf");
 
}

    });
	
	
	
	
</script> 
<script>
$(function () {
    $(".inline-dropdown-menu").click(function (e) {
        $(".inline-dropdown-menu-list").hide();
        $(this).find(".inline-dropdown-menu-list:first").toggle();

        e.preventDefault(); // Stop navigation
    });
});

$(document).click(function (e) {
    var container = $(".inline-dropdown-menu");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        $(".inline-dropdown-menu-list").hide();
    }
});


</script>