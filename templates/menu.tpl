<nav class="navbar-default navbar-static-side " role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                       
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="font-size: 15px;color: white">{$smarty.session.user_name}</strong>
                             
                      
                    </div>
                </li>
                <li >
                    <a href=""><i class="fa fa-users"></i> <span class="nav-label">General User</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li {if $smarty.session.active_page == 'home_queue'} class="active" {/if}><a href="general_forum.php">Forum</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="fa fa-male"></i> <span class="nav-label">Candicate User</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li {if $smarty.session.active_page == 'general_forum'} class="active" {/if}><a href="home_queue.php">Home</a></li>
                    </ul>
                </li>
                <li {if $smarty.session.active_page == 'vote'} class="active" {/if}>
                    <a href="vote.php"><i class="fa fa-sort-numeric-asc"></i> <span class="nav-label">Voting </span><span class="label label-info pull-right">2</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="landing.html"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span> <span class="label label-warning pull-right">NEW</span></a>
                </li>
            </ul>

        </div>
    </nav>