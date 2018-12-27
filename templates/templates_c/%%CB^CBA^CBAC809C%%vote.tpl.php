<?php /* Smarty version 2.6.19, created on 2018-12-27 20:14:44
         compiled from vote.tpl */ ?>
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
                         <div id="voting_result_area">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "voting_result.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
                
                var result = JSON.parse(data);
                console.log(result);
                var message =  JSON.parse(result.message);
                if(message.is_success == 1 ){
                    toastr.success(message.message , \'Success\');
                    $(\'#voting_result_area\').html(result.html);
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
                }
                else
                    toastr.error(message.message);
            });
        }
    </script>
    '; ?>

</body>
</html>