<?php /* Smarty version 2.6.19, created on 2018-12-26 14:50:58
         compiled from vote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'vote.tpl', 48, false),)), $this); ?>
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
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    
        <div class="wrapper wrapper-content">
        <!-- <PUT CODE HERE> -->
            





            <div class="row">
                <?php if ($_SESSION['role'] == 'administrator'): ?>
                <a class="btn  btn-primary m-t-n-xs" href="vote.php?act=publish"><strong>Publish Issue</strong></a>
                <?php endif; ?>
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <h4 class="text-center m">
                            近期開放的民意調查

                        </h4>
                        <div class="slick_demo_1">
                            <?php $this->assign('index', 1); ?>
                            <?php $_from = $this->_tpl_vars['ans_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['issue']):
?>
                            <div>
                                <div class="ibox-content">
                                    <h2> <a class="vote-title  alert  m-b-sm" style="margin: 0px;background-color: <?php echo $this->_tpl_vars['issue']['color']; ?>
"><?php echo $this->_tpl_vars['index']; ?>
.<?php echo $this->_tpl_vars['issue']['IssueName']; ?>
 </a></h2>
                                    <?php $this->assign('index', $this->_tpl_vars['index']+1); ?>
                                        <hr/>
                                     
                                        
                                      <ul class="stat-list">
                                            <?php $_from = $this->_tpl_vars['issue']['ItemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ans_count']):
?>
                                                <li>
                                                    <?php if ($this->_tpl_vars['issue']['Sum'] > 0): ?>
                                                    <?php $this->assign('persentage', $this->_tpl_vars['ans_count']['total']/$this->_tpl_vars['issue']['Sum']*100); ?>
                                                    <?php endif; ?>
                                                    <h2 class="no-margins" ><?php echo $this->_tpl_vars['ans_count']['total']; ?>
</h2>
                                                    <small><?php echo $this->_tpl_vars['ans_count']['context']; ?>
</small>
                                                    <div class="stat-percent"><?php echo ((is_array($_tmp=$this->_tpl_vars['persentage'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%<i class="fa fa-level-up text-navy"></i></div>
                                                    <div class="progress progress-mini">
                                                        <div style="width: <?php echo $this->_tpl_vars['persentage']; ?>
%;" class="progress-bar"></div>
                                                    </div>
                                                </li>
                                            <?php endforeach; endif; unset($_from); ?>
                       
                                         </ul>
                                  
                                 
                                        <!-- <li>
                                            <h2 class="no-margins ">4,422</h2>
                                            <small>Orders in last month</small>
                                            <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">9,180</h2>
                                            <small>Monthly income from orders</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </li> -->
             
                                    
                                </div>
                            </div>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">


                    <h4 class="text-center m">
                        以下開放投票
                    </h4>



                    <div class="slick_demo_2">
                        <?php $this->assign('index', 1); ?>
                        <?php $_from = $this->_tpl_vars['issue_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['issue']):
?>
                        <div style="padding-right: 20px">
                            <div class="ibox-content " style="background-color: <?php echo $this->_tpl_vars['issue']['color']; ?>
;  border-radius:25px;margin: 50px">
                                <div class="row">
                                    <h2 style="padding: 10px"><strong>民調<?php echo $this->_tpl_vars['index']; ?>
</strong><br><small><?php echo $this->_tpl_vars['issue']['IssueName']; ?>
</small></h2>
                                     <?php $this->assign('index', $this->_tpl_vars['index']+1); ?>
                                    <hr/>

                                    <div class="col-md-8">
                                        <?php $this->assign('item_index', 1); ?>
                                        <?php $_from = $this->_tpl_vars['item_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                        <?php if ($this->_tpl_vars['item']['IssueID'] == $this->_tpl_vars['issue']['IssueID']): ?> 
                                        <div><label><?php echo $this->_tpl_vars['item_index']; ?>
.&nbsp;&nbsp;&nbsp;</label>
                                             <?php $this->assign('item_index', $this->_tpl_vars['item_index']+1); ?>
                                            <label> 
                                                <input class="Option_<?php echo $this->_tpl_vars['item']['IssueID']; ?>
" type="radio" name="<?php echo $this->_tpl_vars['item']['IssueID']; ?>
"  onclick="voting('<?php echo $this->_tpl_vars['item']['IssueItemID']; ?>
' , '<?php echo $this->_tpl_vars['item']['IssueID']; ?>
')"> 
                                                <i></i><?php echo $this->_tpl_vars['item']['context']; ?>

                                            </label>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; unset($_from); ?>
                             
                             
                        
                    </div>
                </div>
            </div>

<!--         <table>
            <thead>
                <th>VotingID</th>
                <th>Answer</th>
                <th>UserID</th>
                <th>IssueID</th>
            </thead>
            <tbody>
                <?php $_from = $this->_tpl_vars['voting_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['voting']):
?>
                <tr>
                    <td><?php echo $this->_tpl_vars['voting']['VotingID']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['voting']['Answer']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['voting']['UserID']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['voting']['IssueID']; ?>
</td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            </tbody>

        </table>   -->


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
              
            $(\'.slick_demo_1\').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: \'.slick_demo_2\'
            });

            $(\'.slick_demo_2\').slick({

                slidesToShow: 3,
                slidesToScroll: 5,
                asNavFor: \'.slick_demo_1\',
                dots: true,
                centerMode: true,
                focusOnSelect: true
            });

        });

        function voting(IssueItemID ,IssueID){
            console.log(IssueID);
            $.get(\'vote.php\' , {act:\'voting\' , issueitem_id : IssueItemID , IssueID:IssueID} , function(data){
                console.log(data);
                var result = JSON.parse(data);
                if(result.is_success == 1 ){
                    toastr.success(result.message , \'Success\');
                    
                }
                else
                    toastr.error(result.message);
            });
        }
    </script>
    '; ?>

</body>
</html>