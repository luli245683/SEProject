<?php /* Smarty version 2.6.19, created on 2018-12-29 17:06:42
         compiled from Candidate_assembly_article.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
    <style>

    .cu-home{
        font-family:  Microsoft JhengHei ;
    }
    .custom{
        color: black;
        font-size: 15px;
    
    }
    .custom_block{
        font-size: 15px;        
        background-color: none;
        height: 32px;
        width: 120px;
        padding-left: 10px;
    }
    .article-option{
        background-color: white;
        padding: 20px;
        height: 100px;

    }
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
      
    <div class="article-option">
        <!--
        <div class="col-md-2">            
            <h4>文章分類</h4>
            <form >
                <select style="width: 150px ;height: 32px">
                    　<option value="popular">熱門文章</option>
                    　<option value="taffic">交通</option>
                    　<option value="g-b-relations">政商</option>
                    　<option value="live">生活</option>
                    　<option value="education">教育</option>
                    <option value="hate">黑特</option>
                    <option value="vote">選舉</option>

                </select>
            </form>      
        </div>
        -->
        <div class="col-md-4">
            <h4>關鍵字搜尋</h4>
            <div class="input-group" >
                <input  placeholder="Enter keyword" class="form-control" id="Search_Context"> <span class="input-group-btn"> 
                    <button type="button" class="btn btn-primary" onclick="article_search()">Search!
                    </button> 
                </span>
            </div>
        </div>
        <div class="col-md-2 pull-right" style="padding-top: 30px">

        <!--    <button type="button" class="btn btn-warning">收藏文章</button>-->
            <?php if (is_access ( 'Candidate' , 'Publish' )): ?>
            <button type="button" class="btn btn-info" onclick="go_Candidate_issued_document()">我要發文</button>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <!--
            <div class="ibox-title">
                <h1 style="text-align:center ;font-weight:bold;font-size: 40px">熱門文章</h1>

            </div>
            -->
            <div class="ibox-content">   


                <div id="Candidate_Article_area">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Candidate_Article.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   

                </div>                                                    
             <!--   <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>-->  
             
            </div>

        </div>
    </div>

        
</div>
        
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    </div>
  

    <!-- Peity -->


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
        $(document).ready(function() {
            
            start_Article();

          
        });

         function start_Article(){
            //var Candidate_ID=$(\'#Candidate_ID\').val();
            var CategoryCode = \''; ?>
<?php echo $_GET['CategoryCode']; ?>
<?php echo '\';
            if (CategoryCode == \'\'){
                $.get(\'Candidate_assembly_article.php\' , {act:\'start_Article\'} , function(data){
                
                    $(\'#Candidate_Article_area\').html(data);
                
                 });

            }else{
                 $.get(\'general_article_search.php\' , {act:\'start_Article\' , CategoryCode : CategoryCode } , function(data){
                    console.log(data);
                    $(\'#Candidate_Article_area\').html(data);
                    
                });
            }

         }


        function insert_praise($article_praise){

        $.get(\'Candidate_assembly_article.php\' , {act:\'insert_praise\' , praise_ins : $article_praise} , function(data){

                var result = JSON.parse(data);
                if(result.is_success == \'1\'){
                    toastr.success(result.message+\'success\');
                }
                else
                    toastr.error(result.message);   
           
        });
            start_Article();

        }


         function delete_praise($article_praise){


            $.get(\'Candidate_assembly_article.php\' , {act:\'delete_praise\' , praise_del : $article_praise} , function(data){
                    var result = JSON.parse(data);
                    if(result.is_success == \'1\'){
                        toastr.success(result.message+\'success\');
                    }
                    else
                        toastr.error(result.message);   
               
            });

                start_Article();

         }

        function insert_comment($article_id){
            
            var comment="#comment_text_"+""+$article_id;
            var comment_val=$(comment).val();
            /*console.log(comment);
            console.log($(comment).val());*/
            $.get(\'Candidate_assembly_article.php\' , {act:\'insert_comment\' , comment_val : comment_val  , article_id: $article_id} , function(data){
                var result = JSON.parse(data);
                if(result.is_success == \'1\'){
                    toastr.success(result.message+\'success\');
                    $(comment).val();
                }
                else
                    toastr.error(result.message);

        });
            start_Article();

     }
        function article_search(){
            var CategoryCode = \''; ?>
<?php echo $_GET['CategoryCode']; ?>
<?php echo '\';

            var Search_Context = $(\'#Search_Context\').val();
            if(CategoryCode == \'\'){

                
                $.get(\'Candidate_assembly_article.php\' , {act:\'article_search\' ,Search_Context : Search_Context} , function(data){

                   
                    $(\'#Candidate_Article_area\').html(data);
                });
                
            }else{
                $.get(\'general_article_search.php\' , {act:\'article_search\' ,Search_Context : Search_Context} , function(data){

                   
                    $(\'#Candidate_Article_area\').html(data);
                });
            }

    }
         function go_Candidate_issued_document(){
                location.replace("Candidate_issued_document.php");
    }

    </script>
    '; ?>

</body>
</html>