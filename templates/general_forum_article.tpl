<div class="social-feed-box">

    <div class="social-avatar">                           
        <div class="media-body">
            <h2>
               {$article.Title}
            </h2>
            <small class="text-muted">{$article.cdate} <p class="pull-right">by &nbsp;&nbsp;&nbsp;&nbsp;<strong>{$article.FirstName}{$article.LastName}</strong></p></small>
        </div>
    </div>
    <div class="social-body">
        <p>
            {$article.Context}


        </p>

        <div class="btn-group">


            {if count($article.praise) > 0}
            <button class="btn btn-success btn-xs" id="praise_delete_{$article.ArticleID}" 
            onclick="delete_praise('{$article.ArticleID}')"><i class="fa fa-thumbs-up" ></i>收回讚 </button>

            {else}
            <button class="btn btn-white btn-xs" id="praise_insert_{$article.ArticleID}" 
            onclick="insert_praise('{$article.ArticleID}')" ><i class="fa fa-thumbs-up"></i>讚 </button>
            {/if}
            <button class="btn btn-white btn-xs" onclick="comment('comment_text_{$article.ArticleID}')"><i class="fa fa-comments"></i>留言 </button>





        </div>
    </div>
    <div class="social-footer">

       {foreach from=$article.reply item=reply}  

       <div class="social-comment">
        <a href="" class="pull-left">
            <div class="social_img_comment">
                <img alt="image" src="img/member.jpg">
            </div>
        </a>
        <div class="media-body">
            <a href="#">
                {$reply.FirstName}{$reply.LastName}
            </a>
            {$reply.Context}
            <br>
            <small class="text-muted">{$reply.Ra_date|date_format:"%Y/%m/%d %H:%M"}</small>
        </div>
    </div>

    {/foreach}   


    <div class="social-comment">
        <a href="" class="pull-left">
            <div class="social_img_comment">
                <img alt="image" src="img/member.jpg">
            </div>
        </a>
        <div class="media-body">
            <textarea class="form-control" id="comment_text_{$article.ArticleID}">  </textarea>
            <button class="btn btn-white btn-xs pull-right" onclick="insert_comment('{$article.ArticleID}')">                                    <i class="fa fa-comments"></i> 留言送出</button>
        </div>
        {literal}
        <script type="text/javascript">
            $('#comment_text_{/literal}{$reply.ArticleID}{literal}').keypress(function(e) {
                if(e.which == 13) {
                    insert_comment('{/literal}{$reply.ArticleID}{literal}');
                }
            });
        </script>
        {/literal}
    </div>

</div>

</div>