<!DOCTYPE html>
<html>
{include file="header.tpl"}

<body>
<div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    
        <div class="wrapper wrapper-content">
        {if is_access('TEST','Edit')}
        <button type="button" class="btn btn-primary" id="btn_cu" onclick="cu_click()">Show Toast</button>
        {/if}
        {if is_access('TEST','Show')}
        <button type="button" class="btn btn-danger" id="btn_gu" >Show Toast</button>
        {/if}
        </div>
    {include file="page_footer.tpl"}
    
    </div>  
</div>



 

    <!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>
<!-- Toastr script -->
<script src="js/plugins/toastr/toastr.min.js"></script>



{literal}
<script>
    $(document).ready(function() {
        

    });

    function cu_click(){
        toastr.warning('Your confirm password is not equal to password!');
    }
</script>
{/literal}
</body>
</html>
