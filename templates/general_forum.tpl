    {include file="header.tpl"}

    <body class="mini-navbar">
        <div id="wrapper">
            {include file="menu.tpl"}
            <div id="page-wrapper" class="gray-bg">
                {include file="page_header.tpl"}    


                <div class="wrapper wrapper-content animated fadeInRight">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-content " style="padding: 20px ">
                                    
                                    <div class="input-group ">


                                        <a class="btn  btn-primary m-t-n-xs" href="general_article_search.php?CategoryCode={$smarty.get.CategoryCode}"><strong>搜尋</strong></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        
                                        {if is_access('GUArticle' , 'publish')}
                                        <a class="btn  btn-primary m-t-n-xs" href="Candidate_issued_document.php?CategoryFrom={$smarty.get.CategoryCode}"><strong>發文</strong></a>
                                        {/if} 
                                        
                                    </div>
                                 

                                 


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fh-breadcrumb" style="padding-left: 30px;">

                        <div class="row focus">
                            <div class="col-md-4 fh-column-custom" style="max-width: 100% !important;padding: 0px;">
                                <div class="full-height-scroll">
                                    <ul class="list-group elements-list" >
                                        {foreach from=$article_list item=list}
                                        <li class="list-group-item " id="list_{$list.ArticleID}" style="border-left:6px solid #1c84c6">
                                            <a id="{$list.ArticleID}" onclick="get_article_by_id('{$list.ArticleID}')">
                                                <small class="pull-right text-muted"> {$list.cdate|date_format:"%Y/%m/%d"}</small>
                                                <strong>{$list.autor}</strong>
                                                <div class="small m-t-xs">
                                                    <p>
                                                        {$list.Title}
                                                    </p>
                                                    <p class="m-b-none">
                                                
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 full-height">
                                <div class="full-height-scroll white-bg border-left">
                                    <div class="element-detail-box">
                                        <div>
                                            <div id="article_area" class="tab-pane">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!---->
                        </div>
                    </div>
                </div>

                    <!--{$my_user_id}-->

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

<script>
    $(document).ready(function(){
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "progressBar": true,
          "preventDuplicates": false,
          "positionClass": "toast-top-right",
          "showDuration": "400",
          "hideDuration": "1000",
          "timeOut": "700",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

    });
        $(document).keydown(function (e) {
            if (e.keyCode == 40) {
                
                var article_id = $('.active').next('li')[1].id.split('_')[1];

               get_article_by_id(article_id);
            }
            if(e.keyCode == 38){
                var article_id = $('.active').prev('li')[0].id.split('_')[1];  
                //console.log($('.active').prev('li')[2].id) ;            
               get_article_by_id(article_id);
            }
            // if(e.keyCode == 38){
            //     var article_id = $('.active').prev('li')[2].id.split('_')[1];  
            //     //console.log($('.active').prev('li')[2].id) ;            
            //    get_article_by_id(article_id);
            // }
        });
    function get_article_by_id(article_id){
        $.get('general_forum.php' , {act:'get_article' , article_id:article_id} , function(data){
            var result = JSON.parse(data);
            clear_all_active();
            $('#list_'+article_id).addClass('active');
            $('#article_area').html(result.html);
        });
    }
    function insert_praise($article_id){


        $.get('Candidate_lay.php' , {act:'insert_praise' , praise_ins : $article_id} , function(data){

                var result = JSON.parse(data);
                if(result.is_success == '1'){
                    toastr.success(result.message);
                }
                else
                    toastr.error(result.message);   
           
        });
        get_article_by_id($article_id);

     }
     function delete_praise($article_id){


        $.get('Candidate_lay.php' , {act:'delete_praise' , praise_del : $article_id} , function(data){
                var result = JSON.parse(data);
                if(result.is_success == '1'){
                    toastr.success(result.message);
                }
                else
                    toastr.error(result.message);   
           
        });
        get_article_by_id($article_id);

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
        get_article_by_id($article_id);
     }

     function clear_all_active(){
        $('.list-group-item').removeClass('active');
     }

     function comment(focus_id){
        console.log($("#"+focus_id));
        $("#"+focus_id).focus();
     }
</script>
{/literal}
</body>

</html>
