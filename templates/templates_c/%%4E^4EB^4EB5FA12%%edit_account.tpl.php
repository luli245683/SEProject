<?php /* Smarty version 2.6.19, created on 2018-12-23 19:19:52
         compiled from edit_account.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style>
.outborder{  
    background-color: white;
    height: 600px;
    width: 800px; 
    border : solid;
    border-width:0.5px;
    border-color: #DDDDDD;
    position: absolute;
    top:25%;
    left: 50%;
    margin-top: -100px;
    margin-left: -400px;
    border-radius:10px;
    padding-right: 50px;
    padding-left: 50px;

}
</style>
'; ?>

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
            <div class="wrapper wrapper-content" >
                <div class="outborder" >
                    <div style="text-align:center;font-size: 45px ">修改個人資料</div><br>
                    <div>
                        <table class="table table-hover">
                            <tbody>
                                <div id="info_area">

                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            Firstname
                                        </font></td>
                                        <td class="col-md-6" style="font-size: 25px">
                                            <input type="text" id="Firstname" value="<?php echo $this->_tpl_vars['list']['FirstName']; ?>
" class="form-control">
                                        </td>
                                        <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>

                                    </tr>

                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            Lastname
                                        </font></td>
                                        <td class="col-md-6" style="font-size: 25px">

                                         <input type="text" id="LastName" value="<?php echo $this->_tpl_vars['list']['LastName']; ?>
" class="form-control"></td>
                                         <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>

                                    </tr>
                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            Last Password
                                        </font></td>

                                        <td class="col-md-6" style="font-size: 25px">
                                            <input type="password" id="Last_Password" placeholder="Last Password" class="form-control" value="">
                                            <input type="hidden" id="sql_Password" value="<?php echo $this->_tpl_vars['list']['password']; ?>
">
                                        </td>
                                        <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>

                                    </tr>

                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            New Password
                                        </font></td>

                                        <td class="col-md-6" style="font-size: 25px">
                                            <input type="password" id="New_Password" placeholder="New Password" class="form-control" value="">
                                        </td>
                                        <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>

                                    </tr>

                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            Comfirm Password
                                        </font></td>

                                        <td class="col-md-6" style="font-size: 25px">
                                            <input type="password" id="Comfirm_Password" placeholder="Comfirm Password" class="form-control" value="">
                                        </td>
                                        <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>

                                    </tr>
                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            Phone
                                        </font></td>
                                        <td class="col-md-10" style="font-size: 25px;">
                                            <input type="text" id="Phone" value="<?php echo $this->_tpl_vars['list']['Phone']; ?>
" class="form-control"></td>

                                        </td>
                                        <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>




                                    </tr>
                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            Birth
                                        </font></td>
                                        <td class="col-md-6" style="font-size: 25px">
                                           <input type="text"  id="Birth" value ="<?php echo $this->_tpl_vars['list']['BirthDay']; ?>
" class="form-control"></td>

                                           <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>  
                                    </tr> 

                                    <tr>    

                                        <td class="col-md-2" style="font-size: 10px;padding-top: 15px;"> <font color="#AAAAAA">
                                            Email
                                        </font></td>
                                        <td class="col-md-6" style="font-size: 25px">
                                           <input type="email" id="Email"  value="<?php echo $this->_tpl_vars['list']['Email']; ?>
" class="form-control"></td>
                                           <td class="col-md-4" style="padding-top: 15px">
                                            <i class="fa fa-paint-brush"></i>
                                        </td>  
                                    </tr> 
                                </tbody>

                                <div> 
                                </table>
                                
                                <div >
                                    <div class="col-md-10 " >
                                     <button onclick="change_info()"  class="btn btn-primary pull-right">
                                        <span style="font-size: 20px">修改</span>
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button  class="btn btn-primary">
                                        <span style="font-size: 20px">取消</span>
                                    </button>
                                </div>
                                
                            </div>


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
    <!-- Toastr script -->
    <script src="js/plugins/toastr/toastr.min.js"></script>



    <?php echo '
    <script>
        $(document).ready(function() {


        });
        /*function start_info(){
            $.get(\'edit_account.php\',{},function(data)){



            };

        }*/
        function cu_click(){
            toastr.warning(\'Your confirm password is not equal to password!\');
        }

        function change_info(){

            var Last_Password=$(\'#Last_Password\').val();
            var check_Password=$(\'#sql_Password\').val();
            if(Last_Password!=check_Password)
             toastr.warning(\'Your Last_Password input wrong !\',\'ERROR\',);
            else{
            var new_password=$(\'#New_Password\').val();
            var Comfirm_password=$(\'#Comfirm_Password\').val();
            if(new_password != Comfirm_password)
                toastr.warning(\'Your confirm password is not equal to password!\',\'ERROR\',);
            else{

                var account_info={};
                account_info.FirstName=$(\'#Firstname\').val();
                account_info.password=$(\'#password\').val();
                account_info.Phone=$(\'#Phone\').val();
                account_info.password = new_password;
                account_info.LastName=$(\'#LastName\').val();
                account_info.Birth=$(\'#Birth\').val();
                account_info.Email=$(\'#Email\').val();
                console.log(account_info);
                $.get(\'edit_account.php\' , {act:\'change\',account_info:account_info} , function(data){
                    console.log(data);
                    var result = JSON.parse(data);
                    if(result.is_success == 1 ){
                        toastr.success(result.message , \'Success\')
                    }
                    else
                        toastr.error(result.message);
                });


            }
        }
    }
</script>
'; ?>

</body>
</html>