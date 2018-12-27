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