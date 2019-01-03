<?php /* Smarty version 2.6.19, created on 2019-01-02 19:20:08
         compiled from general_forum.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'general_forum.tpl', 45, false),)), $this); ?>
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


                <div class="wrapper wrapper-content animated fadeInRight">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-content " style="padding: 20px ">
                                    
                                    <div class="input-group ">


                                        <a class="btn  btn-primary m-t-n-xs" href="general_article_search.php?CategoryCode=<?php echo $_GET['CategoryCode']; ?>
"><strong>搜尋</strong></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php if (is_access ( 'GUArticle' , 'publish' )): ?>
                                        <a class="btn  btn-primary m-t-n-xs" href="Candidate_issued_document.php?CategoryFrom=<?php echo $_GET['CategoryCode']; ?>
"><strong>發文</strong></a>
                                        <?php endif; ?> 

                                    </div>
                                 

                                 


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fh-breadcrumb" style="padding-left: 30px;">

                        <div class="row focus">
                            <div class="col-md-4 fh-column-custom" style="max-width: 100% !important;padding: 0px;">
                                <div class="full-height-scroll">
                                    <ul class="list-group elements-list" >
                                        <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                                        <li class="list-group-item " id="list_<?php echo $this->_tpl_vars['list']['ArticleID']; ?>
" style="border-left:6px solid #1c84c6">
                                            <a id="<?php echo $this->_tpl_vars['list']['ArticleID']; ?>
" onclick="get_article_by_id('<?php echo $this->_tpl_vars['list']['ArticleID']; ?>
')">
                                                <small class="pull-right text-muted"> <?php echo ((is_array($_tmp=$this->_tpl_vars['list']['cdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
</small>
                                                <strong><?php echo $this->_tpl_vars['list']['autor']; ?>
</strong>
                                                <div class="small m-t-xs">
                                                    <p>
                                                        <?php echo $this->_tpl_vars['list']['Title']; ?>

                                                    </p>
                                                    <p class="m-b-none">
                                                
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 full-height">
                                <div class="full-height-scroll white-bg border-left">
                                    <div class="element-detail-box">
                                        <div>
                                            <div id="article_area" class="tab-pane">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!---->
                        </div>
                    </div>
                </div>

                    <!--<?php echo $this->_tpl_vars['my_user_id']; ?>
-->

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

             </div>  

        </div>



            <script src="js/jquery-3.1.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
            <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>



            <script src="js/inspinia.js"></script>
            <script src="js/plugins/pace/pace.min.js"></script>

            <script src="js/plugins/iCheck/icheck.min.js"></script>

            <script src="js/plugins/toastr/toastr.min.js"></script>

<?php echo '

<script>
    $(document).ready(function(){
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "progressBar": true,
          "preventDuplicates": false,
          "positionClass": "toast-top-right",
          "showDuration": "400",
          "hideDuration": "1000",
          "timeOut": "700",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

    });
        $(document).keydown(function (e) {
            if (e.keyCode == 40) {
                
                var article_id = $(\'.active\').next(\'li\')[1].id.split(\'_\')[1];

               get_article_by_id(article_id);
            }
            if(e.keyCode == 38){
                var article_id = $(\'.active\').prev(\'li\')[0].id.split(\'_\')[1];  
                //console.log($(\'.active\').prev(\'li\')[2].id) ;            
               get_article_by_id(article_id);
            }
            // if(e.keyCode == 38){
            //     var article_id = $(\'.active\').prev(\'li\')[2].id.split(\'_\')[1];  
            //     //console.log($(\'.active\').prev(\'li\')[2].id) ;            
            //    get_article_by_id(article_id);
            // }
        });
    function get_article_by_id(article_id){
        $.get(\'general_forum.php\' , {act:\'get_article\' , article_id:article_id} , function(data){
            var result = JSON.parse(data);
            clear_all_active();
            $(\'#list_\'+article_id).addClass(\'active\');
            $(\'#article_area\').html(result.html);
        });
    }
    function insert_praise($article_id){


        $.get(\'Candidate_lay.php\' , {act:\'insert_praise\' , praise_ins : $article_id} , function(data){

                var result = JSON.parse(data);
                if(result.is_success == \'1\'){
                    toastr.success(result.message);
                }
                else
                    toastr.error(result.message);   
           
        });
        get_article_by_id($article_id);

     }
     function delete_praise($article_id){


        $.get(\'Candidate_lay.php\' , {act:\'delete_praise\' , praise_del : $article_id} , function(data){
                var result = JSON.parse(data);
                if(result.is_success == \'1\'){
                    toastr.success(result.message);
                }
                else
                    toastr.error(result.message);   
           
        });
        get_article_by_id($article_id);

     }
    function insert_comment($article_id){
            
            var comment="#comment_text_"+""+$article_id;
            var comment_val=$(comment).val();
            /*console.log(comment);
            console.log($(comment).val());*/
            $.get(\'Candidate_lay.php\' , {act:\'insert_comment\' , comment_val : comment_val  , article_id: $article_id} , function(data){
                var result = JSON.parse(data);
                if(result.is_success == \'1\'){
                    toastr.success(result.message+\'success\');
                    $(comment).val();
                }
                else
                    toastr.error(result.message);

        });
        get_article_by_id($article_id);
     }

     function clear_all_active(){
        $(\'.list-group-item\').removeClass(\'active\');
     }

     function comment(focus_id){
        console.log($("#"+focus_id));
        $("#"+focus_id).focus();
     }
</script>
'; ?>

</body>

</html>