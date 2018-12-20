<?php /* Smarty version 2.6.19, created on 2018-12-15 16:24:52
         compiled from login.tpl */ ?>
<!DOCTYPE html>
<html>

<head>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<body class="gray-bg login-css">


    <div class="loginColumns animated fadeInDown">

        <div class="row loginPanel">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to IN+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="">
                    <?php if (! $this->_tpl_vars['is_login']): ?>
                        <div class="login">
                            <img src="images/logo.png" height="100" width="100"/><br/><br/><br/>
                            <h3>Welcome to GOGOWASH</h3>             
                            <p>Login in. To see it in action.</p>
                            <form class="m-t" role="form" method="POST" action="login.php">
                                <div class="form-group">
                                    <input type="text" class="form-control username" placeholder="Username" name="userid" required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control password" placeholder="Password" name="userpw" required="">
                                </div>
                                <button type="submit" class="btn btn-primary block full-width m-b" name="act" value="login">Login</button>
                                <?php if (! empty ( $this->_tpl_vars['login_msg'] ) && ! $this->_tpl_vars['is_login']): ?><p style="color:red"><?php echo $this->_tpl_vars['login_msg']; ?>
</p><?php endif; ?>
                                <!--a href="#"><small>Forgot password?</small></a-->
                                <a class="pull-right" style=" text-decoration: underline;" href="register.php">Register</a>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
               
            </div>
            <div class="col-md-6 text-right" style="color: white">
               <small> Copyright by FORESEE © 2018</small>
            </div>
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

    <!-- Additional style only for demo purpose -->
 
<?php echo '
   <style>
        .slick_demo_2 .ibox-content {
            margin: 0 10px;
        }
    </style>
<script type="text/javascript">
     $(document).ready(function(){

            console.log(\''; ?>
<?php echo $this->_tpl_vars['test_console']; ?>
<?php echo '\');

        });
</script>
'; ?>

</body>

</html>
