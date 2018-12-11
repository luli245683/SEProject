<!DOCTYPE html>
<html>
{include file='header.tpl'}
<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>



<body class="fixed-sidebar no-skin-config full-height-layout">

<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- menu bar -->
		{include file='menu.tpl'}
    </nav>
    <div id="page-wrapper" class="gray-bg">
		<!-- page header -->
        {include file='page_header.tpl'}
        <div class="wrapper wrapper-content animated fadeInLeft" >
				<div class="ibox-content">
            <div class="row">
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name </th>
                        <th>Phone </th>
                        <th>Address</th>
                        <th>Completed </th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    {foreach from=$queue_list item=list}
                    <tr>
                        <td>{$list.order_id}</td>
                        <td>{$list.user_name}</td>
                         <td>{$list.user_phone}</td>
                        <td>{$list.user_address}</td>
                        <td>{$list.bag_status}</td>                        
                        <td>30%</td>
                        <td>{$list.time_start|date_format:"%D %I:%M %p "}</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    {/foreach}                
                    </tbody>
                </table>
            </div>

        </div>
		</div>
    </div>
</div>



<script>
{literal}
$(document).ready(function(){
	
});

{/literal}
</script>
</body>

</html>
