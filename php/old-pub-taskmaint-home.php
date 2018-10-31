<?php
$section = 'publishing';
$page_title = 'pub-taskmaint';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>


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
                    <div class="ng-view primary-content" style=""><h2><span ng-show="!isFeatured &amp;&amp; !pending" aria-hidden="false" class="">Tasks</span><span ng-show="pending" aria-hidden="true" class="ng-hide">Submitted Tasks</span><span ng-show="isFeatured" aria-hidden="true" class="ng-hide">Feature a Task</span></h2>
<a href="#/task" class="btn btn-success pull-right" ng-hide="pending || isFeatured" aria-hidden="false"><i class="icon-plus"></i>&nbsp;New Task</a>
<ul class="breadcrumb">
    <li><a href="#/">Publishing</a></li>
    <li ng-show="isFeatured" aria-hidden="true" class="ng-hide"><a href="#/featuredTasks">Featured</a></li>
    <li class="active"><span ng-show="!isFeatured &amp;&amp; !pending" aria-hidden="false" class="">Tasks</span><span ng-show="pending" aria-hidden="true" class="ng-hide">Submitted Tasks</span><span ng-show="isFeatured" aria-hidden="true" class="ng-hide">Feature a Task</span></li>
</ul>
<div alerts="" class="growl"><!----></div>
<div ng-show="!pending" aria-hidden="false" class="">
	<div class="row">
	    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9" role="search">
			<div class="form-group input-group">
				<input class="form-control ng-pristine ng-untouched ng-valid ng-empty" type="text" placeholder="Search for a Task" title="Search" ng-model="searchTerm" ng-enter="search()" aria-invalid="false">
				<span class="input-group-btn">
			    	<button class="btn btn-default" type="button" ng-click="search()">
			    		<span class="icon-search"></span>
						<span class="sr-only">search submit</span>
			    	</button>
			    </span>
	   		</div>
	    </div>
	    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" ng-show="pageData.publishers.length > 1" aria-hidden="false" style="">
		    <div class="form-group">
			    <select ng-model="publisherId" name="publisher" ng-options="publisher.publisherId as publisher.name for publisher in ::pageData.publishers" class="form-control ng-pristine ng-untouched ng-valid ng-empty" aria-invalid="false"><option value="" selected="selected">All Publishers</option><option label="AAAA Jeremy Test" value="number:4080">AAAA Jeremy Test</option><option label="AIT" value="number:1020">AIT</option><option label="dhdyer Test Publisher" value="number:3720">dhdyer Test Publisher</option><option label="Jeremy Walker" value="number:3740">Jeremy Walker</option><option label="One.IU Team" value="number:1000">One.IU Team</option><option label="Research Technologies" value="number:2840">Research Technologies</option><option label="SIS Test" value="number:3320">SIS Test</option><option label="Test Publisher" value="number:2480">Test Publisher</option><option label="Test Publisher 2" value="number:2741">Test Publisher 2</option><option label="Training Test" value="number:3600">Training Test</option></select>
	        </div>
	    </div>
    </div>
    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		<div class="form-group">
			    <select ng-model="categoryUniqueKey" name="category" ng-options="category.uniqueKey as category.name for category in ::pageData.categories" class="form-control ng-pristine ng-untouched ng-valid ng-empty" aria-invalid="false"><option value="" selected="selected">All Categories</option><option label="AAAA Jeremy Test" value="string:aaa-bbb">AAAA Jeremy Test</option><option label="Academic" value="string:classes">Academic</option><option label="Accounts" value="string:accounts">Accounts</option><option label="Administrative" value="string:employment">Administrative</option><option label="Admissions" value="string:admissions">Admissions</option><option label="Advising" value="string:advising">Advising</option><option label="Campus Life" value="string:campus-life">Campus Life</option><option label="Careers" value="string:careers">Careers</option><option label="category 2" value="string:class">category 2</option><option label="Category 3" value="string:test">Category 3</option><option label="Category awesome" value="string:catawesome">Category awesome</option><option label="Category Example" value="string:cat-example">Category Example</option><option label="category with role staff" value="string:staff-category">category with role staff</option><option label="Cool Category" value="string:coolcategory">Cool Category</option><option label="Delete This Because Of The Length" value="string:delete">Delete This Because Of The Length</option><option label="Dormatories" value="string:dormatories">Dormatories</option><option label="Employee Benefits" value="string:employee-benefits">Employee Benefits</option><option label="Empty" value="string:empty">Empty</option><option label="Faculty Services" value="string:faculty-services">Faculty Services</option><option label="Finances" value="string:finances">Finances</option><option label="Housing &amp; Dining" value="string:housing-dining">Housing &amp; Dining</option><option label="IT Services" value="string:it-services">IT Services</option><option label="Libraries" value="string:libraries">Libraries</option><option label="Payroll and Taxes" value="string:payroll">Payroll and Taxes</option><option label="Personal Information" value="string:personal-information">Personal Information</option><option label="Research" value="string:research">Research</option><option label="Role'd Up" value="string:roledup">Role'd Up</option><option label="Student Life and Activities" value="string:transportation">Student Life and Activities</option><option label="Tom's Category" value="string:tomcategory">Tom's Category</option><option label="Training" value="string:training">Training</option><option label="YTMND" value="string:ytmnd">YTMND</option><option label="Ὀδυσσέα Ἐλύτη" value="string:characterset">Ὀδυσσέα Ἐλύτη</option></select>
	        </div>
	    </div>
	    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		    <div class="form-group">
			    <select ng-model="status" name="status" class="form-control ng-pristine ng-untouched ng-valid ng-empty" aria-invalid="false">
		            <option value="" selected="selected">Any Status</option>
		            <!----><option ng-repeat="(key, value) in ::pageData.status" value="A" class="" style="">Active</option><!----><option ng-repeat="(key, value) in ::pageData.status" value="I" class="">Inactive</option><!---->
		            <option value="D">Draft</option>
		        </select>
	        </div>
	    </div>
	    
	    <div class="col-xs-12 col-md-4 col-lg-offset-3 col-lg-3">
	    	<div class="form-group">
			    <div class="pull-right form-control-static">
					<strong>Displaying Tasks 1 through 36 of 425</strong>
				</div>
				<div class="clearfix"></div>
			</div>
	    </div>
    </div>
</div>
<div ng-show="pending" aria-hidden="true" class="ng-hide">
	<strong class="pull-right">Displaying Tasks 1 through 36 of 425</strong>
	<div class="checkbox">
		<label>
			<input type="checkbox" ng-model="showDeclined" ng-change="loadTasks()" class="ng-pristine ng-untouched ng-valid ng-empty" aria-invalid="false">
			Show declined Tasks
		</label>
	</div>
</div>

<!----><table ng-if="taskListSize > 0" class="table table-hover table-condensed" style="">
    <thead>
        <tr>
            <th>Title (Application)</th>
            <th>Categories</th>
            <!----><th ng-if="pageData.roles.length > 0">Roles</th><!---->
            <!----><th ng-if="pageData.markets.length > 0">Campuses</th><!---->
            <th>Status</th>
            <!---->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                ¯\_(ツ)_/¯<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Campus Life<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/13827" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/13827" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20160512T0144515141-test.iu.edu0" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20160512T0144515141-test.iu.edu0" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20160512T0144515141-test.iu.edu0&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20160512T0144515141-test.iu.edu0&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                3D Digitizations<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Academic<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm" aria-hidden="false">Restore</button>
	            		<a ng-href="#/task/11922" ng-show="task.status != 'R'" class="btn btn-primary btn-sm ng-hide" href="#/task/11922" aria-hidden="true">Edit</a>
	            		<a ng-href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" class="btn btn-info btn-sm ng-hide" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" aria-hidden="true">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" class="btn btn-success btn-sm ng-hide" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" aria-hidden="true">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                3D Digitizations<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Campus Life<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/13441" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/13441" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20150626T1004257641-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20150626T1004257641-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20150626T1004257641-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20150626T1004257641-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                3D Stereoscopic Video Camera Rigs<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Research<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/13180" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/13180" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20141218T0853499621-test.iu.edu11" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141218T0853499621-test.iu.edu11" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20141218T0853499621-test.iu.edu11&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141218T0853499621-test.iu.edu11&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                404<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Academic<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/12782" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/12782" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20151112T1047087081-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20151112T1047087081-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20151112T1047087081-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20151112T1047087081-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                5 Upload<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Accounts<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/15960" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/15960" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20170414T0500171561-test.iu.edu0" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20170414T0500171561-test.iu.edu0" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20170414T0500171561-test.iu.edu0&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20170414T0500171561-test.iu.edu0&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                A<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Academic<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/15862" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/15862" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20170403T0150196471-test.iu.edu0" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20170403T0150196471-test.iu.edu0" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20170403T0150196471-test.iu.edu0&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20170403T0150196471-test.iu.edu0&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Accept or decline financial awards<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Finances<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="role in ::task.roles">Staff<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUPUI<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Inactive
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11960" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11960" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130930T0456163211-test.iu.edu2" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130930T0456163211-test.iu.edu2" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130930T0456163211-test.iu.edu2&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130930T0456163211-test.iu.edu2&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Account creation<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Accounts<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Faculty<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="role in ::task.roles">Staff<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm" aria-hidden="false">Restore</button>
	            		<a ng-href="#/task/11665" ng-show="task.status != 'R'" class="btn btn-primary btn-sm ng-hide" href="#/task/11665" aria-hidden="true">Edit</a>
	            		<a ng-href="#/featured?taskUid=20140128T0306398251-test.iu.edu6" class="btn btn-info btn-sm ng-hide" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20140128T0306398251-test.iu.edu6" aria-hidden="true">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20140128T0306398251-test.iu.edu6&amp;filter=ACTIVE" class="btn btn-success btn-sm ng-hide" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20140128T0306398251-test.iu.edu6&amp;filter=ACTIVE" aria-hidden="true">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Action List<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Administrative<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUB<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="market in ::task.markets">IUSB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11657" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11657" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20140722T0931119601-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20140722T0931119601-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20140722T0931119601-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20140722T0931119601-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Add/Remove User Access (University Graduate School)<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Accounts<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Faculty<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="role in ::task.roles">Staff<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUPUI<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11544" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11544" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20141002T0140039251-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141002T0140039251-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20141002T0140039251-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141002T0140039251-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Affiliate accounts<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Accounts<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUE<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11704" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11704" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20140128T0137433151-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20140128T0137433151-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20140128T0137433151-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20140128T0137433151-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                A jeremy&amp;reg;&amp;cent;&lt;p&gt;here&lt;br/&gt;&lt;/p&gt;<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">IT Services<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/17800" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/17800" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20140429T0718515951-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20140429T0718515951-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20140429T0718515951-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20140429T0718515951-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Alfresco Share<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Research<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11882" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11882" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20141218T1040597071-test.iu.edu17" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141218T1040597071-test.iu.edu17" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20141218T1040597071-test.iu.edu17&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141218T1040597071-test.iu.edu17&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Amend/Renew protocol<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (Kuali Coeus)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Research<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="category in ::task.categories">Administrative<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Faculty<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="role in ::task.roles">Staff<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/7900" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/7900" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20140606T0912171731-test.iu.edu3" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20140606T0912171731-test.iu.edu3" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20140606T0912171731-test.iu.edu3&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20140606T0912171731-test.iu.edu3&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Analysis and Software Delivery and Support<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Research<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="category in ::task.categories">Faculty Services<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/9466" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/9466" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20141218T0200480921-test.iu.edu11" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141218T0200480921-test.iu.edu11" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20141218T0200480921-test.iu.edu11&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141218T0200480921-test.iu.edu11&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                andrew test<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Academic<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11995" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11995" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20150804T0211063911-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20150804T0211063911-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20150804T0211063911-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20150804T0211063911-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Android Test Applications<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">IT Services<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/12141" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/12141" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20150831T0529528451-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20150831T0529528451-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20150831T0529528451-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20150831T0529528451-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                A New Task 3<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Administrative<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/12491" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/12491" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20151005T0142351741-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20151005T0142351741-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20151005T0142351741-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20151005T0142351741-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                another test<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (task)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Academic<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUK<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11546" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11546" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20140813T1015378851-test.iu.edu4" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20140813T1015378851-test.iu.edu4" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20140813T1015378851-test.iu.edu4&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20140813T1015378851-test.iu.edu4&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Appeal Housing Damage Charges<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (Damage Appeals)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Housing &amp; Dining<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11982" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11982" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20131007T1032537451-test.iu.edu16" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20131007T1032537451-test.iu.edu16" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20131007T1032537451-test.iu.edu16&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20131007T1032537451-test.iu.edu16&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Application Status<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11547" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11547" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130905T115912124test.uisapp2.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130905T115912124test.uisapp2.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130905T115912124test.uisapp2.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130905T115912124test.uisapp2.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for admission<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUS<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/8905" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/8905" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130907T030319539test.uisapp2.iu.edu14" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130907T030319539test.uisapp2.iu.edu14" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130907T030319539test.uisapp2.iu.edu14&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130907T030319539test.uisapp2.iu.edu14&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for admission<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUK<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/7922" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/7922" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130907T030023211test.uisapp2.iu.edu12" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130907T030023211test.uisapp2.iu.edu12" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130907T030023211test.uisapp2.iu.edu12&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130907T030023211test.uisapp2.iu.edu12&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for admission<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUN<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11545" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11545" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130907T025111971test.uisapp2.iu.edu10" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130907T025111971test.uisapp2.iu.edu10" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130907T025111971test.uisapp2.iu.edu10&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130907T025111971test.uisapp2.iu.edu10&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for admission<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUE<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/7920" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/7920" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130907T030203803test.uisapp2.iu.edu13" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130907T030203803test.uisapp2.iu.edu13" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130907T030203803test.uisapp2.iu.edu13&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130907T030203803test.uisapp2.iu.edu13&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for admission<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/7863" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/7863" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130907T024116259test.uisapp2.iu.edu8" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130907T024116259test.uisapp2.iu.edu8" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130907T024116259test.uisapp2.iu.edu8&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130907T024116259test.uisapp2.iu.edu8&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for admission<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUPUI<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/7923" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/7923" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130907T024600948test.uisapp2.iu.edu9" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130907T024600948test.uisapp2.iu.edu9" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130907T024600948test.uisapp2.iu.edu9&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130907T024600948test.uisapp2.iu.edu9&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for admission<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Admissions<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUSB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/7918" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/7918" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130907T025417355test.uisapp2.iu.edu11" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130907T025417355test.uisapp2.iu.edu11" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130907T025417355test.uisapp2.iu.edu11&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130907T025417355test.uisapp2.iu.edu11&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for a Housing RA or CUE Position<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (RA/CUE)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Housing &amp; Dining<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/9044" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/9044" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20131007T0938541771-test.iu.edu9" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20131007T0938541771-test.iu.edu9" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20131007T0938541771-test.iu.edu9&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20131007T0938541771-test.iu.edu9&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for graduation<span ng-show="!!task.applicationName" aria-hidden="true" class="ng-hide"> ()</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Academic<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Inactive
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/11614" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/11614" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20130926T0301572381-test.iu.edu3" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20130926T0301572381-test.iu.edu3" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20130926T0301572381-test.iu.edu3&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20130926T0301572381-test.iu.edu3&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for Housing, Incoming Students<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (New Housing)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Housing &amp; Dining<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/1683" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/1683" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20131007T0953292681-test.iu.edu11" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20131007T0953292681-test.iu.edu11" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20131007T0953292681-test.iu.edu11&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20131007T0953292681-test.iu.edu11&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Apply for Residence Hall Parking<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (RPS Parking Waitlist)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Housing &amp; Dining<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!----><span ng-repeat="role in ::task.roles">Student<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="false" class=""><!----><span ng-repeat="market in ::task.markets">IUB<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="true" class="ng-hide">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/1684" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/1684" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20131007T0947433271-test.iu.edu10" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20131007T0947433271-test.iu.edu10" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20131007T0947433271-test.iu.edu10&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20131007T0947433271-test.iu.edu10&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                Ask questions<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (AskIU)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">IT Services<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/8381" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/8381" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20131003T0344072041-test.iu.edu1" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20131003T0344072041-test.iu.edu1" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20131003T0344072041-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20131003T0344072041-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                A Task Delete<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (JW)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">Academic<span ng-show="!$last" aria-hidden="false" class="">, </span></span><!----><span ng-repeat="category in ::task.categories">Category 3<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	Active
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm ng-hide" aria-hidden="true">Restore</button>
	            		<a ng-href="#/task/16162" ng-show="task.status != 'R'" class="btn btn-primary btn-sm" href="#/task/16162" aria-hidden="false">Edit</a>
	            		<a ng-href="#/featured?taskUid=20150624T0414527351-test.iu.edu2" class="btn btn-info btn-sm" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20150624T0414527351-test.iu.edu2" aria-hidden="false">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20150624T0414527351-test.iu.edu2&amp;filter=ACTIVE" class="btn btn-success btn-sm" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20150624T0414527351-test.iu.edu2&amp;filter=ACTIVE" aria-hidden="false">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm" aria-hidden="false">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!----><!----><tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
            <td>
                a test<span ng-show="!!task.applicationName" aria-hidden="false" class=""> (JW)</span>
            </td>
            <td>
           		<!----><span ng-repeat="category in ::task.categories">IT Services<span ng-show="!$last" aria-hidden="true" class="ng-hide">, </span></span><!---->
           	</td>
           	<!----><td ng-if="pageData.roles.length > 0">
           		<!---->
           	</td><!---->
            <!----><td ng-if="pageData.markets.length > 0">
            	<span ng-show="task.markets.length > 0" aria-hidden="true" class="ng-hide"><!----></span>
            	<span ng-show="task.markets.length == 0" aria-hidden="false" class="">All Campuses</span>
            </td><!---->
            <td>
            	
            	<!---->
            	<!---->
            	<!---->
            </td>
            <!---->
            <td>
            	<!---->
            	<!---->
            	<!----><span ng-if="!pending &amp;&amp; !isFeatured">
	            	<!----><span ng-if="!pageData.pendingTaskIds[task.taskId]">
	            		<button ng-click="restoreTask(task)" ng-show="pageData.admin &amp;&amp; task.status == 'R'" class="btn btn-success btn-sm" aria-hidden="false">Restore</button>
	            		<a ng-href="#/task/12008" ng-show="task.status != 'R'" class="btn btn-primary btn-sm ng-hide" href="#/task/12008" aria-hidden="true">Edit</a>
	            		<a ng-href="#/featured?taskUid=20140411T0816365291-test.iu.edu1" class="btn btn-info btn-sm ng-hide" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20140411T0816365291-test.iu.edu1" aria-hidden="true">Feature</a>
	            		<a ng-href="#/reviews?taskUid=20140411T0816365291-test.iu.edu1&amp;filter=ACTIVE" class="btn btn-success btn-sm ng-hide" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20140411T0816365291-test.iu.edu1&amp;filter=ACTIVE" aria-hidden="true">View Reviews</a>
	                	<button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.tenantAdmin &amp;&amp; !pageData.admin &amp;&amp; task.versionStatus == 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remove</button>
	                	<button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
	                </span><!---->
	                <!---->
                </span><!---->
            </td>
        </tr><!----><!---->
    </tbody>
</table><!---->

<!---->
<!---->

<div class="form-group" ng-show="hasMore" aria-hidden="false" style="">
	<button class="btn btn-default btn-more" ng-click="loadNextPage()"><strong>See More</strong></button>
</div>

<div class="modal fade" id="deleteTaskDialog" tabindex="-1" role="dialog" aria-labelledby="deleteTaskLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h1 class="h4 modal-title" id="deleteTaskLabel">Confirm Task Deletion</h1>
			</div>
			<div class="modal-body">
				Are you sure you want to delete the Task ""?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-success" ng-click="deleteTask()">Yes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="removeTaskDialog" tabindex="-1" role="dialog" aria-labelledby="removeTaskLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h1 class="h4 modal-title" id="removeTaskLabel">Confirm Task Removal</h1>
			</div>
			<div class="modal-body">
				Are you sure you want to remove the Task ""?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-success" ng-click="removeTask()">Yes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="taskDetailsDialog" tabindex="-1" role="dialog" aria-labelledby="taskDetailsLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h1 class="h4 modal-title" id="taskDetailsLabel">Task Overview</h1>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<!----><img ng-if="taskData.task.imageSet == null &amp;&amp; (taskData.task.desktopImage.contentUrl == null || taskData.task.desktopImage.contentUrl.length == 0)" alt=""><!---->
						<!---->

						<!---->
						<!---->
					</div>
					<div class="col-sm-9 col-md-10">
						<h2 class="h3" style="margin:0;">&nbsp;<small><!---->&nbsp;<!----></small></h2>
						<!---->
						<span class="text-muted">
							<span ng-show="taskData.task.markets.length > 0" aria-hidden="true" class="ng-hide">(<!---->)</span>
            				<span ng-show="taskData.task.markets.length == 0" aria-hidden="true" class="ng-hide">(All Campuses)</span>
						</span>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<dl class="dl-horizontal">
							<dt>Task URL</dt>
							<dd style="word-break: break-all;"></dd>
							
							<dt>Status</dt>
							<dd><!----></dd>
							
							<dt>Open in new window</dt>
							<dd>No</dd>
							
							<dt>Publisher</dt>
							<dd></dd>
							
							<!---->
							<!---->
							
							<!---->
							<!---->
							
							<!---->
							<!---->
							
							<!---->
							<!---->
							
							<dt>Description</dt>
							<dd></dd>
							
							<dt>Version Number</dt>
							<dd></dd>
							
							<!---->
							<!---->
							
							<!----><dt ng-if="pageData.roles.length > 0" class="" style="">Roles</dt><!---->
							<!----><dd ng-if="pageData.roles.length > 0" class="">
								<!---->
	            				<span ng-show="taskData.task.roles.length == 0" aria-hidden="true" class="ng-hide">All Roles</span>
							</dd><!---->
							
							<dt>Categories</dt>
							<dd><!----></dd>
							
							<!---->
							<!---->
							
							<dt>Stat Recording Type</dt>
							<dd></dd>
							
							<!---->
							<!---->
							<!---->
							<!---->
						</dl>
					</div>
				</div>
				<ul class="nav nav-tabs">
				    <li class="active"><a href="#desktopImages" data-toggle="tab" eat-click="">Desktop</a></li>
				    <li><a href="#tabletImages" data-toggle="tab" eat-click="">Tablet</a></li>
				    <li><a href="#phoneImages" data-toggle="tab" eat-click="">Phone</a></li>
				</ul>
				
				<div class="tab-content">
				    <div class="tab-pane active" id="desktopImages">
				        <div class="well media-scroll">
							<div class="media-scroll-wrap">
								<!---->
							</div>
						</div>
				    </div>
				    <div class="tab-pane" id="tabletImages">
						<div class="well media-scroll">
							<div class="media-scroll-wrap">
								<!---->
							</div>
						</div>
					</div>
				    <div class="tab-pane" id="phoneImages">
				        <div class="well media-scroll">
							<div class="media-scroll-wrap">
								<!---->
							</div>
						</div>
				    </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="taskNotesDialog" tabindex="-1" role="dialog" aria-labelledby="taskNotesLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h1 class="h4 modal-title" id="taskNotesLabel">Task Notes Overview</h1>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<!----><img ng-if="noteData.task.imageSet == null &amp;&amp; (noteData.task.desktopImage.contentUrl == null || noteData.task.desktopImage.contentUrl.length == 0)" alt=""><!---->
						<!---->

						<!---->
						<!---->
					</div>
					<div class="col-sm-9 col-md-10">
						<h2 class="h3" style="margin:0;">&nbsp;<small><!---->&nbsp;<!----></small></h2>
						<!---->
						<span class="text-muted">
							<span ng-show="noteData.task.markets.length > 0" aria-hidden="true" class="ng-hide">(<!---->)</span>
            				<span ng-show="noteData.task.markets.length == 0" aria-hidden="true" class="ng-hide">(All Campuses)</span>
						</span>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<!---->
						<!---->
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <?php include('modal/pub-task-summary.php') ?>
    <?php include('modal/pub-task-summary-update.php') ?>
    <?php include('modal/pub-task-edit-selectversion.php') ?>
    <?php include('modal/pub-task-edit-deleteactionwarning.php') ?>
    <?php include('modal/pub-task-setnotlivedate.php') ?>
    <?php include('modal/pub-task-scheduleaction.php') ?>
    <?php include('modal/pub-task-setlivedate.php') ?>
    <?php include('modal/pub-task-edit-pendingwarning.php') ?>
    <?php include('modal/pub-task-setpendingreleasedate.php') ?>
    <?php include('modal/pub-task-edit-deletewarning.php') ?>
    <?php include('modal/pub-task-setpublishdate.php') ?>
    <?php include('modal/pub-task-previousschedule.php') ?>
    <?php include('modal/pub-task-viewscheduledaction.php') ?>
    <div class="modal fade" id="modal_publishdate1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Specify Publish Date</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label " for="api_account_type"> Publish Date Options </label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="2">
                                    I will manually release these changes when ready</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="3">
                                    Specify publish date </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 pubdate_widget3" id=""  style="display:none">
                            <label for="title" class="control-label">Publish Date</label>
                            <span class="help-block small"> Specify the date and time that you wish for these updates to be published.</span>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="counter-container">
                                        <input type="text" name="title" required="" countdown="" class="form-control picktime"  tabindex="0" aria-required="false" aria-invalid="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_publishdate2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Specify Publish Date</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label " for="api_account_type"> Publish Date Options </label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="1">
                                    Publish immediately upon admin approval</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="2">
                                    I will manually release these changes when ready</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="3">
                                    Specify publish date </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 pubdate_widget3" id=""  style="display:none">
                            <label for="title" class="control-label">Publish Date</label>
                            <span class="help-block small"> Specify the date and time that you wish for these updates to be published. Note that if this task is not reviewed for approval before this date, it will be published immediately upon approval.</span>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="counter-container">
                                        <input type="text" name="title" required="" countdown="" class="form-control picktime"  tabindex="0" aria-required="false" aria-invalid="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_cancelupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Cancel Task Updates</h4>
                </div>
                <div class="modal-body"> By canceling the submitted updates to this task, the original version of this task will remain unchanged and the new version will be discarded. Are you sure you would like to proceed? </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel Task Updates</button>
                </div>
            </div>
        </div>
    </div>
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
