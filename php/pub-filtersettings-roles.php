<?php
$section = 'settings';
$page_title = 'pub-filtersettings-roles';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<style type="text/css">
.primary-content .tab-content .section-head .section-controls .btn {
	margin-top: 10px;
}
.tab-content .tab-pane {
	padding-top: 15px;
	border-bottom: none;
}
.tab-content {
	border-left: none;
	border-right: none;
}
.dropdown.dropdown-lg .dropdown-menu {
	margin-top: -35px;
	padding: 20px;
}
.input-group-btn .btn-group {
	display: flex !important;
}
.btn-group .btn {
	border-radius: 0;
	margin-left: -1px;
}
.btn-group .btn:last-child {
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
}
.btn-group .form-horizontal .btn[type="submit"] {
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}
.form-horizontal .form-group {
	margin-left: 0;
	margin-right: 0;
}
.form-group .form-control:last-child {
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}

@media screen and (min-width: 768px) {
#adv-search {
 width:;
	margin: 0 auto;
}
.dropdown.dropdown-lg {
	position: static !important;
}
.dropdown.dropdown-lg .dropdown-menu {
	max-width: 434px;
}
.dropdown.dropdown-lg .dropdown-menu {
	margin-top: -51px;
	padding: 20px;
	left: 14px;
}
}
.primary-content .tab-content .well .filter-list {
	margin-bottom: 15px;
	display: inline;
	padding-left: 30px;
	position: relative;
}
.primary-content .tab-content .well .filter-list:before {
	content: '';
	background: #ddd;
	position: absolute;
	height: 34px;
	width: 1px;
	top: -6px;
	left: 11px;
}
.primary-content .tab-content .well {
	margin-bottom: 5px;
	margin-top: 5px;
	padding-top: 5px;
	padding-bottom: 5px;
}
</style>
<style type="text/css">
.dropdown1 {
	position: static !important;
}
</style>
<style type="text/css">
.label1 {
	border-radius: 10px;
	background-color: #fff;
	color: #555;
	border: solid 1px #cccccc;
}
.label1 {
	color: #a94442;
	border: solid 1px #a94442;
}
.label.label-white .icon-circle {
	font-size: 8px;
	color: #2879ba;
}
</style>
<style>
/* Tabs panel */
.tabbable-panel {
}
/* Default mode */
.tabbable-line > .nav-tabs {
	border: none;
	margin: 0px;
}
.tabbable-line > .nav-tabs > li {
	margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
	border: 0;
	margin-right: 0;
	color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
	color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
	border-bottom: 4px solid #eeeeee;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
	border: 0;
	background: none !important;
	color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
	color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
	margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
	border-bottom: 4px solid #cccccc;
	position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
	border: 0;
	color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
	color: #404040;
}
.tabbable-line > .tab-content {
	margin-top: -3px;
	background-color: #fff;
	border: 0;
	border-top: 1px solid #eee;
	padding-bottom: 15px;
	padding-top: 0px;
}
.portlet .tabbable-line > .tab-content {
	padding-bottom: 0;
}
.taskmeta {
	width: 100%
}
.taskmeta hr {
	margin: 0px;
	border-top: 1px solid #ddd;
}
</style>
<?php include('includes/scripts.php') ?>
</head>
<body id="top" class="view-admin">
<div class="wrapper">
    <?php include('includes/mobile-sidebar.php') ?>
    <?php include('includes/header-brand.php') ?>
    <?php include('includes/header-publishing.php') ?>
    <div class="main-content container" role="main">
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-pub.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <div class="row section-head">
                            <div class="col-xs-12 col-sm-9 section-header">
                                <div class="taskmaint-preview">
                                    <div class="taskmaint-preview-content">
                                        <h2 class="taskmaint-preview-content-title">Roles</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12  col-sm-3 text-right"> <a href="pub-taskcontacts-new.php" class="btn btn-xs btn-default pull-right"><i class="icon-plus-2"></i>New Role</a> </div>
                        </div>
                        <hr>
                        <section>
                            <table class="table table-hover table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tag Name</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">Student</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Faculty</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Staff</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <?php include('modal/pub-task-contacts.php') ?>
    <script>
    $(document).ready(function() {
        $(".nextpage").click(function() {
            $("#page1,#footer1").hide();
            $("#page2,#footer2").show();
        });

    });
</script> 
    <script>
    $(document).ready(function() {
        $(".taskmeta").hide();
        $(".task-details-triggerview").on('click', function() {
            $(this).next(".taskmeta").fadeToggle();
            $(this).children(".icon-angle-right").toggleClass("icon-angle-down");
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $('#showdetails1, #showdetails2,#showdetails3').change(function() {
            if (this.checked)
                $(".taskmeta").show();
            else
                $(".taskmeta").hide();
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $("#showdetails1, #showdetails2,#showdetails3").click(function() {
            $(".icon-angle-right").toggleClass("icon-angle-down");
        });
    });
</script> 
    <script type='text/javascript'>
     $(function() {
                $('.picktime').datetimepicker();
            });
            
     </script> 
    <script>
    $(document).ready(function() {
		$(".declined").hide();
        $('#toggledeclined').click(function() {
            if ($(this).is(':checked')) {
                $(".declined").show();
            } else {
                $(".declined").hide();
            }
        });
    });
</script> 
    <script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
    <script>
    $(document).ready(function() {
        $('.icon-cancel-circled').on("click", function() {
            $(this).parents('span').fadeOut();
        });
		
		$(".apply_filter").click(function(){
    $("#filter_tags .label.label-white").show();
});


      
    });
</script> 
    <script>


$(document).ready(function() {
    $('#table1, #table2').DataTable( {
        "paging":   false,
		"bFilter":   false,
        "info":     false,
    } );
} );


</script> 
</div>
</body>
</html>
