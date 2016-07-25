<style>
.app-header .dropdown-menu i[class*='icon-'] {
	margin-right: 10px;
}
.dropdown-menu .lead {
	margin-bottom: 10px;
	font-size: 14px;
}
.mainsearch .btn-group .catfilter {
	background: #ffffff;

background: -moz-linear-gradient(top,  #ffffff 0%, #e5e5e5 100%);

background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5));

background: -webkit-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);

background: -o-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);

background: -ms-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);

background: linear-gradient(to bottom,  #ffffff 0%,#e5e5e5 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 );


-webkit-box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.22);
-moz-box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.22);
box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.22);
z-index:1111;

	padding-left: 10px;
	padding-right: 10px;
	
}
</style>
<script>
    $(document).ready(function() {


        $(".getAll").click(function() {
            $("#asdf").text("All Categories");
            $('.typeahead2').attr('placeholder', 'Search All Categories');
        });
        $(".getAcademics").click(function() {
            $("#asdf").text("Academics");
            $('.typeahead2').attr('placeholder', 'Search Academics');
        });
        $(".getAccounts").click(function() {
            $("#asdf").text("Accounts");
            $('.typeahead2').attr('placeholder', 'Search Accounts');
        });
        $(".getAdministrative").click(function() {
            $("#asdf").text("Administrative");
            $('.typeahead2').attr('placeholder', 'Search Administrative');
        });
        $(".getAdmissions").click(function() {
            $("#asdf").text("Admissions");
            $('.typeahead2').attr('placeholder', 'Search Admissions');
        });
        $(".getCampus").click(function() {
            $("#asdf").text("Campus Life");
            $('.typeahead2').attr('placeholder', 'Search Campus Life');
        });
        $(".getCareers").click(function() {
            $("#asdf").text("Careers");
            $('.typeahead2').attr('placeholder', 'Search Careers');
        });
        $(".getEmployee").click(function() {
            $("#asdf").text("Employee Benefits");
            $('.typeahead2').attr('placeholder', 'Search Employee Benefits');
        });
        $(".getEnrollment").click(function() {
            $("#asdf").text("Enrollment");
            $('.typeahead2').attr('placeholder', 'Search Enrollment');
        });
        $(".getFaculty").click(function() {
            $("#asdf").text("Faculty Services");
            $('.typeahead2').attr('placeholder', 'Search Faculty Services');
        });
        $(".getFinances").click(function() {
            $("#asdf").text("Finances");
            $('.typeahead2').attr('placeholder', 'Search Finances');
        });
        $(".getHousing").click(function() {
            $("#asdf").text("Housing & Dining");
            $('.typeahead2').attr('placeholder', 'Search Housing & Dining');
        });
        $(".getIT").click(function() {
            $("#asdf").text("IT Services");
            $('.typeahead2').attr('placeholder', 'Search IT Services');
        });
        $(".getLibraries").click(function() {
            $("#asdf").text("Libraries");
            $('.typeahead2').attr('placeholder', 'Search Libraries');
        });
        $(".getOrientation").click(function() {
            $("#asdf").text("Orientation");
            $('.typeahead2').attr('placeholder', 'Search Orientation');
        });
        $(".getPayroll").click(function() {
            $("#asdf").text("Payroll & Taxes");
            $('.typeahead2').attr('placeholder', 'Search Payroll & Taxes');
        });
        $(".getPersonal").click(function() {
            $("#asdf").text("Personal Information");
            $('.typeahead2').attr('placeholder', 'Search Personal Information');
        });
        $(".getResearch").click(function() {
            $("#asdf").text("Research");
            $('.typeahead2').attr('placeholder', 'Search Research');
        });
        $(".getTraining").click(function() {
            $("#asdf").text("Training");
            $('.typeahead2').attr('placeholder', 'Search Training');
        });
        $(".getTransportation").click(function() {
            $("#asdf").text("Transportation");
			 $('.typeahead2').attr('placeholder', 'Search Transportation');

        });

    });
</script>
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
<header >
    <div class="container  app-header" style="padding-bottom:10px">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <h1><span class="sr-only">One.IU</span></h1>
            </div>
            <div class="col-xs-6 col-sm-6 hidden-md hidden-lg">
                <button type="button" id="menu_button" class="btn btn-signin pull-right" tabindex="0"><span class="sr-only">Toggle menu</span><i class="icon-menu"></i></button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="input-group mainsearch" > <span class="input-group-btn hidden-xs hidden-sm">
                    <div class="btn-group"> <a href="#" class="btn btn-lg btn-default dropdown-toggle catfilter" data-toggle="dropdown" aria-expanded="false"> <span style="font-size:14px" id="asdf">All Categories</span> <span class="caret"></span> </a>
                        <ul class=" dropdown-menu " role="menu" style="min-width:600px; padding-top:10px">
                            <li class="col-xs-4"><a role="menuitem" class="lead getAll"  href="#"><i class="icon-globe"></i>All Categories</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getAcademics"  href="#"><i class="icon-graduation-cap"></i>Academics</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getAccounts"  href="#"><i class="icon-lock-2"></i>Accounts</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getAdministrative"  href="#"><i class="icon-cog"></i>Administrative</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getAdmissions"  href="#"><i class="icon-login"></i>Admissions</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getCampus"  href="#"><i class="icon-leaf"></i>Campus Life</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getCareers"  href="#"><i class="icon-briefcase"></i>Careers</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getEmployee"  href="#"><i class="icon-stethoscope"></i>Employee Benefits</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getEnrollment"  href="#"><i class="icon-puzzle"></i>Enrollment</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getFaculty"  href="#"><i class="icon-users"></i>Faculty Services</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getFinances"  href="#"><i class="icon-money-1"></i>Finances</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getHousing"  href="#"><i class="icon-food"></i>Housing &amp; Dining</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getIT"  href="#"><i class="icon-monitor"></i>IT Services</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getLibraries"  href="#"><i class="icon-book"></i>Libraries</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getOrientation"  href="#"><i class="icon-compass-2"></i>Orientation</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getPayroll"  href="#"><i class="icon-money"></i>Payroll &amp; Taxes</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getPersonal"  href="#"><i class="icon-info-circled-1"></i>Personal Information</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getResearch"  href="#"><i class="icon-cubes"></i>Research</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getTraining"  href="#"><i class="icon-empire"></i>Training</a> </li>
                            <li class="col-xs-4"><a role="menuitem" class="lead getTransportation"  href="#"><i class="icon-bus"></i>Transportation</a> </li>
                        </ul>
                    </div>
                    </span>
                    <input type="text" class="form-control typeahead2 tt-query" autocomplete="off" spellcheck="false" placeholder="Search All Categories">
                    <span class="input-group-btn">
                    <button class="btn-mainsearch" type="button"><i class="icon-search-3"></i></button>
                    </span></div>
                <div style=" padding-top:7px" class="row hidden-xs hidden-sm">
                    <div class="col-xs-6" >
                        <div class="btn-group"> <a style=" color:#FFFFFF" href="#" data-toggle="dropdown" aria-expanded="false"> <span >Browse Categories</span> <span class="caret"></span> </a>
                            <ul class=" dropdown-menu " role="menu" style="min-width:600px; padding-top:10px">
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-globe"></i>All Categories</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-graduation-cap"></i>Academics</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-lock-2"></i>Accounts</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-cog"></i>Administrative</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-login"></i>Admissions</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-leaf"></i>Campus Life</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-briefcase"></i>Careers</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-stethoscope"></i>Employee Benefits</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-puzzle"></i>Enrollment</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-users"></i>Faculty Services</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-money-1"></i>Finances</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-food"></i>Housing &amp; Dining</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-monitor"></i>IT Services</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-book"></i>Libraries</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-compass-2"></i>Orientation</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-money"></i>Payroll &amp; Taxes</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-info-circled-1"></i>Personal Information</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-cubes"></i>Research</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-empire"></i>Training</a> </li>
                                <li class="col-xs-4"><a role="menuitem" class="lead"  href="SD-591-results7.php"><i class="icon-bus"></i>Transportation</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right" > <a style="color:#FFFFFF;" href="#" id="campuses" data-type="select" data-pk="1" data-value="" data-title="Select Campus" class="editable editable-click editable-open" data-original-title="" title="">All Campuses</a> <span class="caret" style="color:#FFFFFF"></span> <a style="color:#FFFFFF; margin-left:15px" href="#" id="roles" data-type="checklist" data-value="1,2,3" data-title="Select Role" class="editable editable-click editable-open" data-original-title="" title="">All Roles</a> <span class="caret" style="color:#FFFFFF"></span> </div>
                </div>
            </div>
            <div class="col-md-2 hidden-xs hidden-sm">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-signin">Sign In</button>
                    <button type="button" class="btn btn-signin dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/favorites"><i class="icon-heart"></i>My Favorites</a></li>
                        <li><a href=""><i class="icon-cog"></i>Preferences</a></li>
                        <li class="divider"></li>
                        <li><a href=""><i class="icon-comment"></i>Send Feedback</a></li>
                        <li><a href=""><i class="icon-info"></i>Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="navbar navbar-default hidden-sm hidden-xs" style="margin-bottom: 0;">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown " id="market_select"> <a href="" class="dropdown-toggle" data-toggle="dropdown">All&nbsp;IU Campuses&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a role="menuitem" href="#">All IU Campuses</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IU Bloomington</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IU East</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IU Kokomo</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IU Northwest</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IU South Bend</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IU Southeast</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IUPUC Columbus</a></li>
                        <li ><a role="menuitem" tabindex="-1" href="#" >IUPUI Indianapolis</a></li>
                    </ul>
                </li>
                <li class="dropdown " id="role_select"> <a href="" class="dropdown-toggle" data-toggle="dropdown"> <span class=" ng-binding">3 roles</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li > <a role="menuitem" href="#"> <i  role="presentation" class="pull-right icon-ok"></i> <span >Faculty</span></a></li>
                        <li > <a role="menuitem" href="#"> <i  role="presentation" class="pull-right icon-ok"></i> <span >Staff</span></a></li>
                        <li > <a role="menuitem" href="#"> <i  role="presentation" class="pull-right icon-ok"></i> <span >Student</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>--> 
</header>
