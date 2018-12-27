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
                         <div id="voting_result_area">
                            {include file="voting_result.tpl"}
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
                
                var result = JSON.parse(data);
                console.log(result);
                var message =  JSON.parse(result.message);
                if(message.is_success == 1 ){
                    toastr.success(message.message , 'Success');
                    $('#voting_result_area').html(result.html);
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
                }
                else
                    toastr.error(message.message);
            });
        }
    </script>
    {/literal}
</body>
</html>