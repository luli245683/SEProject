<?php /* Smarty version 2.6.19, created on 2018-12-12 18:57:34
         compiled from home_queue_user_table.tpl */ ?>
     
       <table>
        <thead>
            <th>Account</th>
            <th>Name</th>
        </thead>
        <tbody>
            <?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['user']['Account']; ?>
</td>
                <td><?php echo $this->_tpl_vars['user']['FirstName']; ?>
 , <?php echo $this->_tpl_vars['user']['LastName']; ?>
</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </tbody>
    </table>