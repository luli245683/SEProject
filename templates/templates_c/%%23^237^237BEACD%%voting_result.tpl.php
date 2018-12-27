<?php /* Smarty version 2.6.19, created on 2018-12-27 20:09:27
         compiled from voting_result.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'voting_result.tpl', 19, false),)), $this); ?>
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