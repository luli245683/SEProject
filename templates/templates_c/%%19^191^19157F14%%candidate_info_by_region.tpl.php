<?php /* Smarty version 2.6.19, created on 2018-12-23 19:11:38
         compiled from candidate_info_by_region.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<body  class="mini-navbar">
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
        <!-- <PUT CODE HERE> -->
            <div>
            <h1><b>市長</b></h1>
            </div>

            <div class="row">
                <?php $_from = $this->_tpl_vars['candidate_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['candidate_info']):
?>
                <a href="Candidate_lay.php?Candidate_Name=<?php echo $this->_tpl_vars['candidate_info']['name']; ?>
&is_member=0">
                    <div class="col-xs-4" >
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            
                            <div class="m-b-md">
                                
                            <h2 class="font-bold no-margins">
                                <?php echo $this->_tpl_vars['candidate_info']['no']; ?>
、<?php echo $this->_tpl_vars['candidate_info']['name']; ?>

                            </h2>
                                
                            </div>
                            
                            <div>
                                <span>
                                <?php if ($this->_tpl_vars['candidate_info']['sex'] == "'1"): ?>
                                男
                                <?php else: ?>
                                女
                                <?php endif; ?>
                                </span> |
                                <span><?php echo $this->_tpl_vars['candidate_info']['age']; ?>
歲</span> |
                                <span><?php echo $this->_tpl_vars['candidate_info']['paty_name']; ?>
</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading"><?php echo $this->_tpl_vars['candidate_info']['name']; ?>
</h4>
                            <p>出生地:<?php echo $this->_tpl_vars['candidate_info']['birthplace']; ?>
</p>
                            <p>學歷:<?php echo $this->_tpl_vars['candidate_info']['education']; ?>
</p>
                            <p>現任:<?php echo $this->_tpl_vars['candidate_info']['current']; ?>
</p>
                            <div class="text-right">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; endif; unset($_from); ?>
            </div>
            <hr style="border:0;background-color:#666666;height:1px;">
            <div>
            <h1><b>議員選區</b></h1>
            </div>

            <div class="row">
                <?php $_from = $this->_tpl_vars['electorate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['electorate']):
?>                
                    <a class="col-lg-3" onclick="get_member_by_electorate_id('<?php echo $this->_tpl_vars['electorate']['electorate']; ?>
')">
                        <div class="widget style1 blue-bg">                        
                            <div class="row vertical-align">
                                <div class="col-xs-9 text-right">                                
                                    <h2 class="font-bold"><?php echo $this->_tpl_vars['electorate']['electorate']; ?>
選區</h2>
                                    <?php $_from = $this->_tpl_vars['electorate']['TOWN']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['administrative']):
?>
                                    <h2 class="font-bold"><?php echo $this->_tpl_vars['administrative']['administrative_name']; ?>
</h2>
                                    <?php endforeach; endif; unset($_from); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; endif; unset($_from); ?>   
            </div>

            <hr id="123" style="border:0;background-color:#666666;height:1px; ">
                        
<!--             查詢選區:
            <input type="text" id="member_id_input" />
            <button id="submit" onclick="get_member_by_electorate_id()">確認</button> -->

            <div class="row" id="member_area" >
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "candidate_info_member_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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






<?php echo '
<script>
    $(document).ready(function(){

    });

    function get_member_by_electorate_id(electorate) {
        var electorate_id = "\'" +electorate;
        //console.log("'; ?>
<?php echo $_GET['province_id']; ?>
<?php echo '");
        $.get(\'candidate_info.php\',{act:\'update_member_list\',electorate_id:electorate_id , 
            province_id:"'; ?>
<?php echo $_GET['province_id']; ?>
<?php echo '" , county_id:"'; ?>
<?php echo $_GET['county_id']; ?>
<?php echo '"},function(data){
            console.log(data);
            $(\'#member_area\').html(data);
        });
    }


    
</script>
'; ?>

</body>
</html>