<!DOCTYPE html>
<html>
{include file="header.tpl"}

<body class="mini-navbar">
{literal}
<style type="text/css">

img{opacity:0.5} 
img:hover{opacity:1} 

</style>
{/literal}
<div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-md-4 animated bounceIn catrgory" >
                    <div class="ibox float-e-margins" >                     
                        <a href="general_forum.php?act=Forumpage&CategoryCode=01">
                            <img  src="images/traffic.jpg" style="max-width: 100%;max-height: 100%;border-radius:25px;">
                        
                        <h1 class="text-center" ><strong>交通</strong></h1>   
                        </a>                   
                    </div>
                </div>
                <div class="col-md-4 animated bounceIn">
                    <div class="ibox float-e-margins" >                     
                        <a href="general_forum.php?act=Forumpage&CategoryCode=02">
                            <img  src="images/house.jpg" style="max-width: 100%;max-height: 100%;border-radius:25px;">
                        
                        <h1 class="text-center" ><strong>民生</strong></h1>   
                        </a>                   
                    </div>
                </div>
                <div class="col-md-4 animated bounceIn">
                    <div class="ibox float-e-margins" >                     
                        <a href="general_forum.php?act=Forumpage&CategoryCode=03">
                            <img  src="images/airplane.png" style="max-width: 100%;max-height: 100%;border-radius:25px;">
                        
                        <h1 class="text-center" ><strong>國防</strong></h1>   
                        </a>                   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animated bounceIn">
                    <div class="ibox float-e-margins" >                     
                        <a href="general_forum.php?act=Forumpage&CategoryCode=04">
                            <img  src="images/president.jpg" style="max-width: 100%;max-height: 100%;border-radius:25px;">
                        
                        <h1 class="text-center" ><strong>政治</strong></h1>   
                        </a>                   
                    </div>
                </div>
                <div class="col-md-4 animated bounceIn">
                    <div class="ibox float-e-margins" >                     
                        <a href="general_forum.php?act=Forumpage&CategoryCode=05">
                            <img  src="images/economics.jpg" style="max-width: 100%;max-height: 100%;border-radius:25px;">
                        
                        <h1 class="text-center" ><strong>經濟</strong></h1>   
                        </a>                   
                    </div>
                </div>
                <div class="col-md-4 animated bounceIn">
                    <div class="ibox float-e-margins" >                     
                        <a href="general_forum.php?act=Forumpage&CategoryCode=06">
                            <img  src="images/leesin.jpg" style="max-width: 100%;max-height: 100%;border-radius:25px;">
                        
                        <h1 class="text-center" ><strong>社會</strong></h1>   
                        </a>                   
                    </div>
                </div>
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
</script>
{/literal}
</body>
</html>
