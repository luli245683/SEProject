<?php /* Smarty version 2.6.19, created on 2018-12-10 16:48:24
         compiled from home_page.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body>
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
        <?php if (is_access ( 'TEST' , 'Edit' )): ?>
        <button type="button" class="btn btn-primary" id="btn_cu" onclick="cu_click()">Show Toast</button>
        <?php endif; ?>
        <?php if (is_access ( 'TEST' , 'Show' )): ?>
        <button type="button" class="btn btn-danger" id="btn_gu" >Show Toast</button>
        <?php endif; ?>
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
<!-- Toastr script -->
<script src="js/plugins/toastr/toastr.min.js"></script>



<?php echo '
<script>
    $(document).ready(function() {
        

    });

    function cu_click(){
        toastr.warning(\'Your confirm password is not equal to password!\');
    }
</script>
'; ?>

</body>
</html>