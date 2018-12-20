<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                       
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="font-size: 15px;color: white">{$smarty.session.user_name}</strong>
                             
                      
                    </div>
                </li>
                <li class="active">
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li {if $smarty.session.active_page == 'home_queue'} class="active" {/if}><a href="home_queue.php" >Queue</a></li>
                        <li {if $smarty.session.active_page == 'home_page'} class="active" {/if}><a href="home_page.php">Home</a></li>
                    </ul>
                </li>

                <li>
                    <a href="vote.php"><i class="fa fa-sort-numeric-asc"></i> <span class="nav-label">Voting </span><span class="label label-info pull-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li>
            </ul>

        </div>
    </nav>