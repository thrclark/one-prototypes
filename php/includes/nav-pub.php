<style type="text/css">
.nav-side-menu .menu-list .menu-content a .icon-down-open-big {
	float: right;
	margin-right:10px;
	color:#999;
}

.nav-side-menu .menu-list .menu-content .collapsed a .icon-down-open-big {
	 -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
    transform: rotate(90deg);
	margin-top:-4px;
}

</style>
<nav>
    <div class="nav-side-menu">
        <div class="toggle-btn toggle-menu" data-toggle="collapse" data-target="#menu-content" style=""><span class="sr-only">menu</span> <i class="icon-menu"></i></div>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content">
                <li  data-toggle="collapse" data-target="#nav-publishing" class="collapsed"><a href="#">Tasks <i class="icon-down-open-big"></i></a>
                    <ul <?php if ($section == 'publishing') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-publishing">
                        <li <?php if ($page_title == 'pub-taskmaint') { echo 'class="active"'; } ?>><a href="pub-taskmaint-home.php">Maintain Tasks</a></li>
                        <li <?php if ($page_title == 'pub-taskcentermaint') { echo 'class="active"'; } ?>><a href="pub-taskcentermaint-home.php">Maintain Task Centers</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">Announcements</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">Task Support</a></li>
                        <li <?php if ($page_title == 'pub-taskcontacts') { echo 'class="active"'; } ?>><a href="pub-taskcontacts-home.php">Task Contacts</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">Shared Task Images</a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#nav-settings" class="collapsed"><a href="#">Filter <i class="icon-down-open-big"></i></a>
                    <ul <?php if ($section == 'settings') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-settings">
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#nav-data" class="collapsed"><a href="#">Data <i class="icon-down-open-big"></i></a>
                    <ul <?php if ($section == 'data') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-data">
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#nav-branding" class="collapsed"><a href="#">Branding <i class="icon-down-open-big"></i></a>
                    <ul <?php if ($section == 'branding') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-branding">
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#nav-advanced" class="collapsed"><a href="#">Advanced <i class="icon-down-open-big"></i></a>
                    <ul <?php if ($section == 'advanced') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-advanced">
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                        <li <?php if ($page_title == 'xxxxxxxxxxxxxxxxx') { echo 'class="active"'; } ?>><a href="xxxxxxxxxxxxxxxxx.php">asdfasdf</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
