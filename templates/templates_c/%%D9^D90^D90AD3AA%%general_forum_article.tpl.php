<?php /* Smarty version 2.6.19, created on 2018-12-20 23:25:23
         compiled from general_forum_article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'general_forum_article.tpl', 53, false),)), $this); ?>
<div class="social-feed-box">

    <div class="social-avatar">                           
        <div class="media-body">
            <h2>
               <?php echo $this->_tpl_vars['article']['Title']; ?>

            </h2>
            <small class="text-muted"><?php echo $this->_tpl_vars['article']['cdate']; ?>
 <p class="pull-right">by &nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['article']['FirstName']; ?>
<?php echo $this->_tpl_vars['article']['LastName']; ?>
</strong></p></small>
        </div>
    </div>
    <div class="social-body">
        <p>
            <?php echo $this->_tpl_vars['article']['Context']; ?>



        </p>

        <div class="btn-group">


            <?php if (count ( $this->_tpl_vars['article']['praise'] ) > 0): ?>
            <button class="btn btn-success btn-xs" id="praise_delete_<?php echo $this->_tpl_vars['article']['ArticleID']; ?>
" 
            onclick="delete_praise('<?php echo $this->_tpl_vars['article']['ArticleID']; ?>
')"><i class="fa fa-thumbs-up" ></i>收回讚 </button>

            <?php else: ?>
            <button class="btn btn-white btn-xs" id="praise_insert_<?php echo $this->_tpl_vars['article']['ArticleID']; ?>
" 
            onclick="insert_praise('<?php echo $this->_tpl_vars['article']['ArticleID']; ?>
')" ><i class="fa fa-thumbs-up"></i>讚 </button>
            <?php endif; ?>
            <button class="btn btn-white btn-xs" ><i class="fa fa-comments"></i>留言 </button>





        </div>
    </div>
    <div class="social-footer">

       <?php $_from = $this->_tpl_vars['article']['reply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reply']):
?>  

       <div class="social-comment">
        <a href="" class="pull-left">
            <div class="social_img_comment">
                <img alt="image" src="img/member.jpg">
            </div>
        </a>
        <div class="media-body">
            <a href="#">
                <?php echo $this->_tpl_vars['reply']['FirstName']; ?>
<?php echo $this->_tpl_vars['reply']['LastName']; ?>

            </a>
            <?php echo $this->_tpl_vars['reply']['Context']; ?>

            <br>
            <small class="text-muted"><?php echo ((is_array($_tmp=$this->_tpl_vars['reply']['Ra_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M")); ?>
</small>
        </div>
    </div>

    <?php endforeach; endif; unset($_from); ?>   


    <div class="social-comment">
        <a href="" class="pull-left">
            <div class="social_img_comment">
                <img alt="image" src="img/member.jpg">
            </div>
        </a>
        <div class="media-body">
            <textarea class="form-control" id="comment_text_<?php echo $this->_tpl_vars['article']['ArticleID']; ?>
">  </textarea>
            <button class="btn btn-white btn-xs pull-right" onclick="insert_comment('<?php echo $this->_tpl_vars['article']['ArticleID']; ?>
')">                                    <i class="fa fa-comments"></i> 留言送出</button>
        </div>
        <?php echo '
        <script type="text/javascript">
            $(\'#comment_text_'; ?>
<?php echo $this->_tpl_vars['reply']['ArticleID']; ?>
<?php echo '\').keypress(function(e) {
                if(e.which == 13) {
                    insert_comment(\''; ?>
<?php echo $this->_tpl_vars['reply']['ArticleID']; ?>
<?php echo '\');
                }
            });
        </script>
        '; ?>

    </div>

</div>

</div>