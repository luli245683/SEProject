<?php /* Smarty version 2.6.19, created on 2018-12-22 14:55:32
         compiled from candidate_info_member_list.tpl */ ?>

<?php $_from = $this->_tpl_vars['member_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['member']):
?>
    <a class="col-xs-4" href="Candidate_lay.php?Candidate_Name=<?php echo $this->_tpl_vars['member']['name']; ?>
&is_member=1">
        <div class="widget-head-color-box blue-bg p-lg text-center">
            
            <div class="m-b-md">
                
            <h2 class="font-bold no-margins">
                <?php echo $this->_tpl_vars['member']['no']; ?>
、<?php echo $this->_tpl_vars['member']['name']; ?>

            </h2>

            </div>
            
            <div>
                <span>
                <?php if ($this->_tpl_vars['member']['sex'] == '1'): ?>
                男
                <?php else: ?>
                女
                <?php endif; ?>
            </span> |
                <span><?php echo $this->_tpl_vars['member']['age']; ?>
歲</span> |
                <span><?php echo $this->_tpl_vars['member']['paty_name']; ?>
</span> 
            </div>
        </div>
        <div class="widget-text-box">
            <h4 class="media-heading"><?php echo $this->_tpl_vars['member']['name']; ?>
</h4>
            <p>出生地:<?php echo $this->_tpl_vars['member']['birthplace']; ?>
</p>
            <p>學歷:<?php echo $this->_tpl_vars['member']['education']; ?>
</p>
            <p>現任:<?php echo $this->_tpl_vars['member']['current']; ?>
</p>
        </div>
    </a>
<?php endforeach; endif; unset($_from); ?>