<!DOCTYPE html>
<html>
{include file="header.tpl"}



<body class="mini-navbar">
<div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    
        <div class="wrapper wrapper-content">
        <!-- <PUT CODE HERE> -->
            





            <div class="row">
                {if $smarty.session.role == 'administrator'}
                <a class="btn  btn-primary m-t-n-xs" href="vote.php?act=publish"><strong>Publish Issue</strong></a>
                {/if}
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <h4 class="text-center m">
                            近期開放的民意調查

                        </h4>
                        <div class="slick_demo_1">
                            {assign var="index" value=1}
                            {foreach from=$ans_count item=issue}
                            <div>
                                <div class="ibox-content">
                                    <h2> <a class="vote-title  alert  m-b-sm" style="margin: 0px;background-color: {$issue.color}">{$index}.{$issue.IssueName} </a></h2>
                                    {assign var="index" value=$index+1}
                                        <hr/>
                                     
                                        
                                      <ul class="stat-list">
                                            {foreach from=$issue.ItemList item=ans_count}
                                                <li>
                                                    {if $issue.Sum > 0}
                                                    {assign var="persentage" value=$ans_count.total/$issue.Sum*100}
                                                    {/if}
                                                    <h2 class="no-margins" >{$ans_count.total}</h2>
                                                    <small>{$ans_count.context}</small>
                                                    <div class="stat-percent">{$persentage|string_format:"%.2f"}%<i class="fa fa-level-up text-navy"></i></div>
                                                    <div class="progress progress-mini">
                                                        <div style="width: {$persentage}%;" class="progress-bar"></div>
                                                    </div>
                                                </li>
                                            {/foreach}
                       
                                         </ul>
                                  
                                 
                                        <!-- <li>
                                            <h2 class="no-margins ">4,422</h2>
                                            <small>Orders in last month</small>
                                            <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">9,180</h2>
                                            <small>Monthly income from orders</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </li> -->
             
                                    
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">


                    <h4 class="text-center m">
                        以下開放投票
                    </h4>



                    <div class="slick_demo_2">
                        {assign var="index" value=1}
                        {foreach from=$issue_list item=issue}
                        <div style="padding-right: 20px">
                            <div class="ibox-content " style="background-color: {$issue.color};  border-radius:25px;margin: 50px">
                                <div class="row">
                                    <h2 style="padding: 10px"><strong>民調{$index}</strong><br><small>{$issue.IssueName}</small></h2>
                                     {assign var="index" value=$index+1}
                                    <hr/>

                                    <div class="col-md-8">
                                        {assign var="item_index" value=1}
                                        {foreach from=$item_list item=item}
                                        {if $item.IssueID == $issue.IssueID} 
                                        <div><label>{$item_index}.&nbsp;&nbsp;&nbsp;</label>
                                             {assign var="item_index" value=$item_index+1}
                                            <label> 
                                                <input class="Option_{$item.IssueID}" type="radio" name="{$item.IssueID}"  onclick="voting('{$item.IssueItemID}' , '{$item.IssueID}')"> 
                                                <i></i>{$item.context}
                                            </label>
                                        </div>
                                        {/if}
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/foreach}
                             
                             
                        
                    </div>
                </div>
            </div>

<!--         <table>
            <thead>
                <th>VotingID</th>
                <th>Answer</th>
                <th>UserID</th>
                <th>IssueID</th>
            </thead>
            <tbody>
                {foreach from=$voting_list item=voting}
                <tr>
                    <td>{$voting.VotingID}</td>
                    <td>{$voting.Answer}</td>
                    <td>{$voting.UserID}</td>
                    <td>{$voting.IssueID}</td>
                </tr>
                {/foreach}
            </tbody>

        </table>   -->


        </div>
    {include file="page_footer.tpl"}
    
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

        <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <!-- Toastr script -->
    <script src="js/plugins/toastr/toastr.min.js"></script>



{literal}
    <script>
        $(document).ready(function() {
              
            $('.slick_demo_1').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slick_demo_2'
            });

            $('.slick_demo_2').slick({

                slidesToShow: 3,
                slidesToScroll: 5,
                asNavFor: '.slick_demo_1',
                dots: true,
                centerMode: true,
                focusOnSelect: true
            });

        });

        function voting(IssueItemID ,IssueID){
            console.log(IssueID);
            $.get('vote.php' , {act:'voting' , issueitem_id : IssueItemID , IssueID:IssueID} , function(data){
                console.log(data);
                var result = JSON.parse(data);
                if(result.is_success == 1 ){
                    toastr.success(result.message , 'Success');
                    
                }
                else
                    toastr.error(result.message);
            });
        }
    </script>
    {/literal}
</body>
</html>