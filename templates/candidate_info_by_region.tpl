<!DOCTYPE html>
<html>
{include file="header.tpl"}



<body  class="mini-navbar">
<div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    
        <div class="wrapper wrapper-content">
        <!-- <PUT CODE HERE> -->
            <div>
            <h1><b>市長</b></h1>
            </div>

            <div class="row">
                {foreach from=$candidate_info_list item=candidate_info}
                <a href="Candidate_lay.php?Candidate_Name={$candidate_info.name}&is_member=0">
                    <div class="col-xs-4" >
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            
                            <div class="m-b-md">
                                
                            <h2 class="font-bold no-margins">
                                {$candidate_info.no}、{$candidate_info.name}
                            </h2>
                                
                            </div>
                            
                            <div>
                                <span>
                                {if $candidate_info.sex == "'1"}
                                男
                                {else}
                                女
                                {/if}
                                </span> |
                                <span>{$candidate_info.age}歲</span> |
                                <span>{$candidate_info.paty_name}</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">{$candidate_info.name}</h4>
                            <p>出生地:{$candidate_info.birthplace}</p>
                            <p>學歷:{$candidate_info.education}</p>
                            <p>現任:{$candidate_info.current}</p>
                            <div class="text-right">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                            </div>
                        </div>
                    </div>
                </a>
                {/foreach}
            </div>
            <hr style="border:0;background-color:#666666;height:1px;">
            <div>
            <h1><b>議員選區</b></h1>
            </div>

            <div class="row">
                {foreach from=$electorate_list item=electorate}                
                    <a class="col-lg-3" onclick="get_member_by_electorate_id('{$electorate.electorate}')">
                        <div class="widget style1 blue-bg">                        
                            <div class="row vertical-align">
                                <div class="col-xs-9 text-right">                                
                                    <h2 class="font-bold">{$electorate.electorate}選區</h2>
                                    {foreach from=$electorate.TOWN item=administrative}
                                    <h2 class="font-bold">{$administrative.administrative_name}</h2>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </a>
                {/foreach}   
            </div>

            <hr id="123" style="border:0;background-color:#666666;height:1px; ">
                        
<!--             查詢選區:
            <input type="text" id="member_id_input" />
            <button id="submit" onclick="get_member_by_electorate_id()">確認</button> -->

            <div class="row" id="member_area" >
            {include file="candidate_info_member_list.tpl"}
            </div>


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






{literal}
<script>
    $(document).ready(function(){

    });

    function get_member_by_electorate_id(electorate) {
        var electorate_id = "'" +electorate;
        //console.log("{/literal}{$smarty.get.province_id}{literal}");
        $.get('candidate_info.php',{act:'update_member_list',electorate_id:electorate_id , 
            province_id:"{/literal}{$smarty.get.province_id}{literal}" , county_id:"{/literal}{$smarty.get.county_id}{literal}"},function(data){
            console.log(data);
            $('#member_area').html(data);
        });
    }


    
</script>
{/literal}
</body>
</html>
