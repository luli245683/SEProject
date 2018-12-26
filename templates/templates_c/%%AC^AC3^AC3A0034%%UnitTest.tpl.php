<?php /* Smarty version 2.6.19, created on 2018-12-25 22:11:27
         compiled from UnitTest.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<body class="mini-navbar">
<div id="wrapper">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="page-wrapper" class="gray-bg">
        
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Function Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="function_name" class="form-control">
                    </div>
                    <button class=" btn btn-sm btn-primary  "  onclick="testing()"><strong>Log in</strong></button>
                </div>
                <div id="testing_result_area">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "UnitTest_Result.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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



 
  <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- slick carousel-->
    <script src="js/plugins/slick/slick.min.js"></script>

        <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <!-- Toastr script -->
    <script src="js/plugins/toastr/toastr.min.js"></script>



<?php echo '
    <script>
        $(document).ready(function() {
              
          

        });

        function testing(){
            var function_name = $(\'#function_name\').val();
            $.get(\'UnitTest.php\' , {act:\'testing\' , function_name : function_name} , function(data){
                console.log(data);
                $(\'#testing_result_area\').html(data);
            });
        }
    </script>
    '; ?>

</body>
</html>