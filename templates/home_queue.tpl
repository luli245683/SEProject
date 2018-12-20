<!DOCTYPE html>
<html>
{include file="header.tpl"}

<body>
<div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    
        <div class="wrapper wrapper-content">
        <input type="text" id="user_id_input"/>
        <button id="submit" onclick="get_user_by_id()">submit</button>
        <div id="user_area">
        {include file="home_queue_user_table.tpl"}
        </div>
        </div>
    {include file="page_footer.tpl"}
    
    </div>  
</div>



 

    <!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>




{literal}
<script>
    $(document).ready(function() {

    });


    function get_user_by_id(){
        var user_id = $('#user_id_input').val();
        $.get('home_queue.php' , {act:'update_user_list' , user_id:user_id} , function(data){
            console.log(data);
            $('#user_area').html(data);
        });
    }
</script>
{/literal}
</body>
</html>
