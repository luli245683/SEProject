<?php /* Smarty version 2.6.19, created on 2018-12-26 13:16:35
         compiled from menu.tpl */ ?>
<nav class="navbar-default navbar-static-side " role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                       
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="font-size: 15px;color: white"><?php echo $_SESSION['user_name']; ?>
</strong>
                             
                      
                    </div>
                </li>
                <li >
                    <a href=""><i class="fa fa-users"></i> <span class="nav-label">General User</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li <?php if ($_SESSION['active_page'] == 'home_queue'): ?> class="active" <?php endif; ?>><a href="general_forum.php">Forum</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="fa fa-male"></i> <span class="nav-label">Candicate User</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li <?php if ($_SESSION['active_page'] == 'general_forum'): ?> class="active" <?php endif; ?>><a href="home_queue.php"><i class="fa fa-globe"></i>Home</a></li>
                        <li <?php if ($_SESSION['active_page'] == 'Candidate_assembly_article'): ?> class="active" <?php endif; ?>><a href="Candidate_assembly_article.php"><i class="fa fa-search"></i>Search</a></li>
                    </ul>
                </li>
                <li <?php if ($_SESSION['active_page'] == 'vote'): ?> class="active" <?php endif; ?>>
                    <a href="vote.php"><i class="fa fa-sort-numeric-asc"></i> <span class="nav-label">Voting </span><span class="label label-info pull-right">2</span></a>
                </li>
                <li class="landing_link <?php if ($_SESSION['active_page'] == 'edit_account'): ?> active <?php endif; ?> " >
                    <a target="_blank" href="edit_account.php"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span> </a>
                </li>
            </ul>

        </div>
    </nav>