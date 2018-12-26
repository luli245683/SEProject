<?php /* Smarty version 2.6.19, created on 2018-12-26 15:48:38
         compiled from vote_publish_issue.tpl */ ?>
    <?php echo '
    <style>

    .my_input{
      width: 100%;
      height: 150px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      resize: none;

    }
    .my_button{
      margin-bottom: 5px;
      margin-top: 5px;
    }
  </style>
  '; ?>


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
            <div class="col-lg-6">
              <div class="ibox float-e-margins">

                <div class="ibox-content">
                  <div class="row">
                    <div class="col-sm-12 b-r">
                      <h3 class="m-t-none m-b">發佈議題</h3>

                     
                        <div class="form-group"><label>Issue Name</label> <input  placeholder="請輸入標題" class="form-control" name="IssueName" id="IssueName"></div>
                        <div class="form-group"><label>類別</label>
                          <select data-placeholder="Choose a category..." class="chosen-select" id="category"  >
                            <option value="01">交通</option>
                            <option value="02">民生</option>
                            <option value="03">國防</option>
                            <option value="04">政治</option>
                            <option value="05">經濟</option>
                            <option value="06">社會</option>
                          </select>
                        </div>
                        <div class="form-group"><label>顏色</label> <input type="text" class="form-control demo1" value="#5367ce" id="colorCode" /></div>
                        <div class="form-group"><label>選項</label>
                          <div id="item_area">
                            <div class="input-group m-b">
                             <span class="input-group-addon item_no" >1</span>
                              <input type="text"  class="form-control item_context" >
                            </div>


                           </div>
                         <button class="btn btn-primary" onclick="add_item()">add item</button>
                         <button class="btn btn-primary" onclick="publish_issue()">publish</button>
                       </div>
                     





                   </div>

                 </div>
               </div>
             </div>
           </div>

         </div>



         <!--<?php echo $this->_tpl_vars['my_user_id']; ?>
-->

       </div>
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

   <!--這一定要用-->
   <script src="js/plugins/steps/jquery.steps.min.js"></script>
   <script src="js/plugins/validate/jquery.validate.min.js"></script>
   <!-- Select2 -->
   <script src="js/plugins/select2/select2.full.min.js"></script>
   <!-- Jquery Validate -->
   <script src="js/plugins/validate/jquery.validate.min.js"></script>+
   <!-- Color picker -->
   <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

   <!-- Clock picker -->
   <script src="js/plugins/clockpicker/clockpicker.js"></script>
   <?php echo '
   <script>
    var item_no = 1;
     $(document).ready(function(){
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "progressBar": true,
          "preventDuplicates": false,
          "positionClass": "toast-top-right",
          "showDuration": "400",
          "hideDuration": "1000",
          "timeOut": "1000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
       $("#category").select2();
    

      $(\'.demo1\').colorpicker();
    });
     

     function add_item(){
      item_no++;
      $(\'#item_area\').append(\'<div class="input-group m-b"><span class="input-group-addon item_no" >\'+item_no+\'</span><input type="text"  class="form-control item_context"></div>\');
     }

     function get_item_context_array(){
      var result = [];
      var no = 1;

       $(\'.item_context\').each(function() {
          var tmp = {};

          tmp.item_no = no++;
          tmp.item_context = this.value;
          result.push(tmp);
      });

       return result;
     }
      

      function get_issue_context(){
        var result = {};
        result.IssueName = $(\'#IssueName\').val();
        result.CategoryID = $(\'#category\').val();
        result.colorCode = hexToRGB($(\'#colorCode\').val() , 0.2);
        result.IssueItem = get_item_context_array();
        return result;
      }


      function publish_issue(){
         var issue_info = get_issue_context();
         $.get(\'vote.php\' , {act : \'publish_issue\' , issue_info : issue_info} , function(data){
            var result = JSON.parse(data);
            if(result.is_success == 1 ){
                toastr.success(result.message , \'Success\', 
                {onHidden:function(){
                      window.location.assign("vote.php");
                }});
                
            }
            else
                toastr.error(result.message);
         });
      }

      function hexToRGB(hex, alpha) {
        var r = parseInt(hex.slice(1, 3), 16),
            g = parseInt(hex.slice(3, 5), 16),
            b = parseInt(hex.slice(5, 7), 16);

        if (alpha) {
            return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")";
        } else {
            return "rgb(" + r + ", " + g + ", " + b + ")";
        }
    }
  </script>
  '; ?>

</body>
</html>