
{foreach from=$member_list item=member}
    <a class="col-xs-4" href="Candidate_lay.php?Candidate_Name={$member.name}&is_member=1">
        <div class="widget-head-color-box blue-bg p-lg text-center">
            
            <div class="m-b-md">
                
            <h2 class="font-bold no-margins">
                {$member.no}、{$member.name}
            </h2>

            </div>
            
            <div>
                <span>
                {if $member.sex == "1"}
                男
                {else}
                女
                {/if}
            </span> |
                <span>{$member.age}歲</span> |
                <span>{$member.paty_name}</span> 
            </div>
        </div>
        <div class="widget-text-box">
            <h4 class="media-heading">{$member.name}</h4>
            <p>出生地:{$member.birthplace}</p>
            <p>學歷:{$member.education}</p>
            <p>現任:{$member.current}</p>
        </div>
    </a>
{/foreach}
