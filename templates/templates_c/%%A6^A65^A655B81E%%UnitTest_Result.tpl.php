<?php /* Smarty version 2.6.19, created on 2018-12-25 22:18:30
         compiled from UnitTest_Result.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'print_r', 'UnitTest_Result.tpl', 3, false),)), $this); ?>
<?php echo $this->_tpl_vars['total']; ?>

<pre class="m-t-sm">
<?php echo print_r($this->_tpl_vars['result']); ?>

</pre>