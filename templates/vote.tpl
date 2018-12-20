<!DOCTYPE html>
<html>
{include file="header.tpl"}



<body>
<div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    
        <div class="wrapper wrapper-content">
        <!-- <PUT CODE HERE> -->
            





            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <h4 class="text-center m">
                            近期開放的民意調查

                        </h4>
                        <div class="slick_demo_1">
                             {foreach from=$issue_list item=issue}
                            <div>
                                <div class="ibox-content">
                                    <h2> <a class="vote-title  alert  m-b-sm" style="margin: 0px;background-color: {$issue.color}">{$issue.IssueID}.{$issue.IssueName} </a></h2>

                                        <hr/>
  
                                    <ul class="stat-list">
                                        <li>
                                            <h2 class="no-margins">2,346</h2>
                                            <small>Total orders in period</small>
                                            <div class="stat-percent"><i class="fa fa-level-up text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 12%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
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
                                        </li>
             
                                    
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
                        {foreach from=$issue_list item=issue}
                        <div style="padding-right: 20px">
                            <div class="ibox-content " style="background-color: {$issue.color};  border-radius:25px;margin: 50px">
                                <div class="row">
                                    <h2 style="padding: 10px">投票{$issue.IssueID}<br><small>{$issue.IssueName}</small></h2>

                                    <hr/>

                                    <div class="col-md-8">
                                        {foreach from=$item_list item=item}
                                        {if $item.IssueID == $issue.IssueID}                                  
                                        <label> 
                                            <input class="Option_{$item.IssueID}" type="radio" name="{$item.IssueID}"  onclick="voting('{$item.OptionID}' , '{$item.IssueID}')"> 
                                            <i></i>{$item.context}</label>
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
<input class="Option_" type="radio"  >
<input class="Option_" type="radio"  >

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
