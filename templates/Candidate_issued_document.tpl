    {literal}
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
{/literal}

{include file="header.tpl"}
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<body>
    <div id="wrapper">
        {include file="menu.tpl"}
        <div id="page-wrapper" class="gray-bg">
            {include file="page_header.tpl"}    


            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-sm-12 b-r">
                                        <h3 class="m-t-none m-b">候選人發文</h3>

                                        
                                            <div class="form-group"><label>標題</label> <input  placeholder="請輸入標題" class="form-control" id="Title_text"></div>
                                            <div class="form-group"><label>內文</label>
                                                <textarea class="my_input" id="Context_text"> </textarea> 
                                           </div>

                                            
                                           <button class="btn btn-sm btn-primary pull-right m-t-n-xs"  onclick="article_submit()"><strong>發文</strong></button>
                                            

                                    
                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>

               </div>



               <!--{$my_user_id}-->

           </div>
           {include file="page_footer.tpl"}

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

   {literal}
   <script>
       $(document).ready(function(){

       });
       function article_submit(){
            var Title_text = $('#Title_text').val();
            var Context_text = $('#Context_text').val();
            
             $.get('Candidate_issued_document.php' , {act:'article_submit' , Title_text : Title_text ,Context_text :Context_text} , function(data){
                console.log(data);
                var result = JSON.parse(data);
                if(result.is_success == '1'){
                    toastr.success(result.message+'success');
                    $(comment).val();
                }
                else
                    toastr.error(result.message);

       


             });


       }
    </script>
    {/literal}
</body>
</html>