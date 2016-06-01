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
<script>
    $(document).ready(function() {
        $(".togglebrowse").click(function() {
            $(".browsecat-panel").slideToggle("slow");
			$( ".app-header .well" ).toggleClass( "open" );
        });
        $(".dropdown-toggle").click(function() {
            $(".browsecat-panel").slideUp("slow");
			$( ".app-header .well" ).removeClass( "open" );
        });
        $('#thesearchbox').keydown(function() {
            tmpval = $(this).val();
            if (tmpval == '') {

                $("#cleartext").css({"display": "none"});
            } else {
                $("#cleartext").css({"display": "block"});
            }
        });
        $("#cleartext").click(function() {
            $("#cleartext").hide();
            $("#thesearchbox").val("");
			$("#thesearchbox").focus();
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
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 brand"> <a class="logo" href="SD-home.php" id="sidebar_logo" tabindex="0"> <img alt="clear all search filters and return to the home page" src="../img/oneiu-logo.png" class="hidden-xs hidden-sm"> <img alt="clear all search filters and return to the home page" src="../img/oneiu-logo-mobile.png" class="hidden-md hidden-lg">
                <h1><span class="sr-only">One.IU</span></h1></a> </div>
            <div class="col-xs-6 col-sm-6 hidden-md hidden-lg mobile-menu">
                <div class="pull-right"> <a href="#" class="btn btn-link launch-notifications"> <i class="icon-bell-alt"></i>     <div class="container-badge"><span class="badge">2</span></div><span class="sr-only">Announcements</span></a>
                    <button type="button" id="menu_button" class="btn btn-signin" tabindex="0"><span class="sr-only">Toggle menu</span><i class="icon-menu"></i></button>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 col-lg-9 search">
                <div class="well well-sm">
                    <form class="input-group mainsearch">
                        <div class="input-group-btn" style="display:" id="categoryfilter"> <a href="#" style="  margin-right: -2px;" class="btn btn-lg btn-default dropdown-toggle catfilter" data-toggle="dropdown" aria-expanded="false"> <span style="font-size:14px" id="asdf" class="hidden-xs hidden-sm">All Categories</span> <span class="caret"></span> </a>
                            <ul class="dropdown-menu catfilter-menu" role="menu" style="">
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getAll" href="#"><i class="icon-globe"></i>All Categories</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getAcademics"  href="#"><i class="icon-graduation-cap"></i>Academics</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getAccounts"  href="#"><i class="icon-lock-2"></i>Accounts</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getAdministrative"  href="#"><i class="icon-cog"></i>Administrative</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getAdmissions"  href="#"><i class="icon-login"></i>Admissions</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getCampus"  href="#"><i class="icon-leaf"></i>Campus Life</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getCareers"  href="#"><i class="icon-briefcase"></i>Careers</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getEmployee"  href="#"><i class="icon-stethoscope"></i>Employee Benefits</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getEnrollment"  href="#"><i class="icon-puzzle"></i>Enrollment</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getFaculty"  href="#"><i class="icon-users"></i>Faculty Services</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getFinances"  href="#"><i class="icon-money-1"></i>Finances</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getHousing"  href="#"><i class="icon-food"></i>Housing &amp; Dining</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getIT"  href="#"><i class="icon-monitor"></i>IT Services</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getLibraries"  href="#"><i class="icon-book"></i>Libraries</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getOrientation"  href="#"><i class="icon-compass-2"></i>Orientation</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getPayroll"  href="#"><i class="icon-money"></i>Payroll &amp; Taxes</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getPersonal"  href="#"><i class="icon-info-circled-1"></i>Personal Information</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getResearch"  href="#"><i class="icon-cubes"></i>Research</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getTraining"  href="#"><i class="icon-empire"></i>Training</a> </li>
                                <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class="getTransportation"  href="#"><i class="icon-bus"></i>Transportation</a> </li>
                            </ul>
                        </div>
                        <input type="text" class="form-control typeahead2 tt-query" autocomplete="off" spellcheck="false" placeholder="What would you like to do?" id="thesearchbox">
                        <div id="cleartext" style="display:none"> <i class="icon-cancel-squared" ></i></div>
                        <span class="input-group-btn">
                        <button onclick="location.href = 'SD-searchresults.php';" class="btn-mainsearch" type="button"><i class="icon-search-3"></i></button>
                        </span>
                    </form>
                    <div class="row hidden-xs hidden-sm">
                        <div class="col-xs-4">
                            <div class="browsecat"> <a href="#" class="togglebrowse"> <span>Browse Categories</span> <span class="caret"></span> </a>
                                <div class="browsecat-panel" style="display:none">
                                    <ul class="list-unstyled" role="menu">
                                        <li class="divider"></li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-globe"></i> All Categories</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-graduation-cap"></i> Academics</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-lock-2"></i> Accounts</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-cog"></i> Administrative</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-login"></i> Admissions</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-leaf"></i> Campus Life</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-briefcase"></i> Careers</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-stethoscope"></i> Employee Benefits</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-puzzle"></i> Enrollment</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-users"></i> Faculty Services</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-money-1"></i> Finances</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-food"></i> Housing &amp; Dining</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-monitor"></i> IT Services</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-book"></i> Libraries</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-compass-2"></i> Orientation</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-money"></i> Payroll &amp; Taxes</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-info-circled-1"></i> Personal Information</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-cubes"></i> Research</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-empire"></i> Training</a> </li>
                                        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12 clickable"><a role="menuitem" class=""  href="#"><i class="icon-bus"></i> Transportation</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8 text-right">
                            <div class="dropdown" id="market_select" aria-hidden="false"> <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">All&nbsp;IU Campuses&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="menuitem"><a href="#" tabindex="0">All IU Campuses</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IU Bloomington</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IU East</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IU Kokomo</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IU Northwest</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IU South Bend</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IU Southeast</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IUPUC</a></li>
                                    <li role="menuitem" class=""><a tabindex="-1" href="#">IUPUI</a></li>
                                </ul>
                            </div>
                            <div class="dropdown" id="role_select" aria-hidden="false"> <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"> <span class="">All Roles</span><span class="caret"></span> </a>
                                <ul class="dropdown-menu dropdown-menu-right checked-list" role="menu">
                                    <li role="menuitem" class=""> <a href="#" tabindex="0"> <i role="presentation" class="pull-right icon-ok ng-hide" aria-hidden="true"></i> <span>Faculty</span> </a> </li>
                                    <li role="menuitem" class=""> <a href="#" tabindex="0"> <i role="presentation" class="pull-right icon-ok ng-hide" aria-hidden="true"></i> <span>Staff</span> </a> </li>
                                    <li role="menuitem" class=""> <a href="#" tabindex="0"> <i role="presentation" class="pull-right icon-ok ng-hide" aria-hidden="true"></i> <span>Student</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
