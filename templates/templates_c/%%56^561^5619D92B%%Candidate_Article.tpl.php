<?php /* Smarty version 2.6.19, created on 2018-12-22 16:03:30
         compiled from Candidate_Article.tpl */ ?>
                    <?php $_from = $this->_tpl_vars['candicate_Article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>   

                    <div class="social-feed-box">

                        <div class="pull-right social-action dropdown">
                            <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu m-t-xs">
                                <li><a href="#">Config</a></li>
                            </ul>
                        </div>
                        <div class="social-avatar">                           
                            <div class="media-body">
                                <a href="#">
                                    <?php echo $this->_tpl_vars['article']['FirstName']; ?>
<?php echo $this->_tpl_vars['article']['LastName']; ?>
：<?php echo $this->_tpl_vars['article']['Title']; ?>

                                </a>
                                <small class="text-muted"><?php echo $this->_tpl_vars['article']['cdate']; ?>
</small>
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

                          


                                
                            </div>
                        </div>
                        <div class="social-footer">

                         <?php $_from = $this->_tpl_vars['article']['reply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reply']):
?>  
                   
                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <div class="social_img_comment">
                                    <img alt="image" src="images/<?php echo $_SESSION['user_name']; ?>
.jpg">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        <?php echo $this->_tpl_vars['reply']['FirstName']; ?>
<?php echo $this->_tpl_vars['reply']['LastName']; ?>

                                    </a>
                                        <?php echo $this->_tpl_vars['reply']['Context']; ?>

                                    <br>
                                    <small class="text-muted"><?php echo $this->_tpl_vars['reply']['Ra_date']; ?>
</small>
                                </div>
                            </div>
                            
                         <?php endforeach; endif; unset($_from); ?>   
                            

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <div class="social_img_comment">
                                    <img alt="image" src="images/<?php echo $_SESSION['user_name']; ?>
.jpg">
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
                    <?php endforeach; endif; unset($_from); ?>   