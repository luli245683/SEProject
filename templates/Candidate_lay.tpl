    {include file="header.tpl"}

<body class="mini-navbar">
    <div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    


        <div class="wrapper wrapper-content animated fadeInRight">

            <div id="Candidate_info_area">
            {include file='Candidate_info.tpl'}
            </div>


            
           <div class="row">

     
                <div class="col-lg-12">
                    <div id="Candidate_Article_area">
                            {include file='Candidate_Article.tpl'}
 
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

    {literal}
    <style>
    .social_img_comment{
        width: 25px;
        height: 25px;
        margin-right: 10px;
    }


    </style>
    {/literal}
    {literal}
    <script>
     $(document).ready(function(){
        //var Candidate_Name = $('#Candidate_Name').val();
        //console.log($('#Candidate_Name'));
        
        //console.log($('#Candidate_ID').val());
        //console.log('{/literal}{$candicate_info}{literal}');
      //  start_reply_Article();

        start_Article();

        
    });

     function insert_praise($article_praise){


        $.get('Candidate_lay.php' , {act:'insert_praise' , praise_ins : $article_praise} , function(data){

                var result = JSON.parse(data);
                if(result.is_success == '1'){
                    toastr.success(result.message+'success');
                }
                else
                    toastr.error(result.message);   
           
        });
            start_Article();

     }
     function delete_praise($article_praise){


        $.get('Candidate_lay.php' , {act:'delete_praise' , praise_del : $article_praise} , function(data){
                var result = JSON.parse(data);
                if(result.is_success == '1'){
                    toastr.success(result.message+'success');
                }
                else
                    toastr.error(result.message);   
           
        });

            start_Article();

     }
     // function start_Candidate(){
     //    var Candidate_Name = $('#Candidate_Name').text();
     //    $.get('Candidate_lay.php' , {act:'start_Candidate' , Candidate_Name : Candidate_Name} , function(data){//user_id前端丟到後端 
     //       $('#Candidate_info_area').html(data);//這作法是可以控制Candidate_info_area區塊 讓他變data裡的tpl
     //    });
     // }

     function start_Article(){
        
        $.get('Candidate_lay.php' , {act:'start_Article' , Candidate_Name : '{/literal}{$smarty.get.Candidate_Name}{literal}'} , function(data){
            //console.log(data);
            $('#Candidate_Article_area').html(data);

        });
     }

     function insert_comment($article_id){
            
            var comment="#comment_text_"+""+$article_id;
            var comment_val=$(comment).val();
            /*console.log(comment);
            console.log($(comment).val());*/
            $.get('Candidate_lay.php' , {act:'insert_comment' , comment_val : comment_val  , article_id: $article_id} , function(data){
                var result = JSON.parse(data);
                if(result.is_success == '1'){
                    toastr.success(result.message+'success');
                    $(comment).val();
                }
                else
                    toastr.error(result.message);

        });
            start_Article();

     }
    /*function start_reply_Article(){
        var Candidate_ID=$('#Candidate_ID').val();
        console.log(Candidate_ID);
        $.get('Candidate_lay.php' , {act:'start_reply_Article' , Candidate_ID : Candidate_ID} , function(data){
            console.log(data);
            //$('#Candidate_Article_area').html(data);
            //console.log(data);
        });
     }*/



    </script>
    {/literal}
</body>

</html>
