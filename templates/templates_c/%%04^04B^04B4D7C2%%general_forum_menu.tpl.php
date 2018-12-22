<?php /* Smarty version 2.6.19, created on 2018-12-20 20:20:55
         compiled from general_forum_menu.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body class="mini-navbar">
<?php echo '
<style type="text/css">

img{opacity:0.5} 
img:hover{opacity:1} 

</style>
'; ?>

<div id="wrapper">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="page-wrapper" class="gray-bg">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    
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
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    </div>  
</div>



 

    <!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>




<?php echo '
<script>
    $(document).ready(function() {

    });
</script>
'; ?>

</body>
</html>