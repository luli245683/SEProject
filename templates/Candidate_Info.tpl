<div class="row">
   <div class="col-lg-12" style="background-color: white; padding: 20px">

            
        <div class="col-sm-2">
            
               <img alt="image" src="images/{$candicate_info.name}.jpg" style="max-height: 100%; max-width: 100%">                      
            
        </div>
        <div class="col-sm-10">
            <div>
                <input id="Candidate_ID" type="text" style="display: none" />
                {if $smarty.session.user_name == $candicate_info.name && is_access('CUArticle' , 'publish')}
                <a class="btn  btn-primary pull-right m-t-n-xs" href="Candidate_issued_document.php"><strong>發文</strong></a>
                {/if}
            </div>
            <h3><strong><div  id="Candidate_Name">{$candicate_info.name}</div></strong></h3>
            <p>年齡：{$candicate_info.age}</p>
            <p>黨籍：{$candicate_info.paty_name}</p>
            <p>出生地 : {$candicate_info.birthplace}</p>
            <p>出生日期 : {$candicate_info.birth}</p>
            <p>教育程度 : {$candicate_info.education}</p>
        </div>
           
    </div>

</div>    
<!-- 
           <div class="row m-b-lg m-t-lg">
                <div class="col-md-4">

                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    學歷
                                </h2>

                                <h4>{$candicate_info.Education}</h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    經歷
                                </h2>

                                <h4>{$candicate_info.Experience}</h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="profile-info">
                        <strong>近期被討論次數</strong>
                        <h2 class="no-margins">206</h2>
                        
                        </div>
                </div>


           </div> 

 -->
