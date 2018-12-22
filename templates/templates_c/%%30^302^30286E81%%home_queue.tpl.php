<?php /* Smarty version 2.6.19, created on 2018-12-21 22:35:40
         compiled from home_queue.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <!-- Demo scripts -->
<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet" type="text/css" />

<?php echo '
<style type="text/css">
    

  </style>
'; ?>

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
          <div class="container">

            <!-- Map html - add the below to your page -->
            <div class="jsmaps-wrapper" id="taiwan-map" style="height: 500px"></div>
            <!-- End Map html -->
          </div>
        </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    </div>  
</div>



 



  <link href="js/plugins/jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />
  <script src="js/plugins/jsmaps/jsmaps-libs.js" type="text/javascript"></script>
  <script src="js/plugins/jsmaps/jsmaps-panzoom.js"></script>
  <script src="js/plugins/jsmaps/jsmaps.min.js" type="text/javascript"></script>
  <script src="js/taiwan.js" type="text/javascript"></script>


<?php echo '
<script>
    $(document).ready(function() {
          $(\'#taiwan-map\').JSMaps({
                map: \'taiwan\',
                textAreaHeight: \'300px\',
                responsive : true,
                onStateClick: function(data) {                    
                      window.location.assign("candidate_info.php?province_id="+data.abbreviation);
                  }
              });
    });

    function get_candidate_info_by_province_id() {
        

        var province_id = "\'" + $(\'#province_id_input\').val();
        
        // $.get(\'candidate_info.php\',{act:\'update_candidate_info\', province_id:province_id},function(data){
        //     console.log(data);    
            
        // });
        
        window.location.replace("candidate_info.php?province_id="+province_id);
        
    }
    // function get_user_by_id(){
    //     var user_id = $(\'#user_id_input\').val();
    //     $.get(\'home_queue.php\' , {act:\'update_user_list\' , user_id:user_id} , function(data){
            
    //         $(\'#user_area\').html(data);
    //     });
    // }
</script>
'; ?>

</body>
</html>