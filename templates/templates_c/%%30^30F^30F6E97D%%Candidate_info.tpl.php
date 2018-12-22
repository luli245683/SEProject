<?php /* Smarty version 2.6.19, created on 2018-12-22 13:05:52
         compiled from Candidate_info.tpl */ ?>
<div class="row">
   <div class="col-lg-12">
        <div class="contact-box">
            
            <div class="col-sm-4">
                
                                        
                
            </div>
            <div class="col-sm-8">
                <div>
                    <h3><strong><div  id="Candidate_Name"><?php echo $this->_tpl_vars['candicate_info']['name']; ?>
</div></strong></h3>
                    <input id="Candidate_ID" type="text" value="US00022" style="display: none" />
                </div>
                <p>年齡：<?php echo $this->_tpl_vars['candicate_info']['age']; ?>
</p>
                <p>黨籍：<?php echo $this->_tpl_vars['candicate_info']['paty_name']; ?>
</p>
                <p>出生地 : <?php echo $this->_tpl_vars['candicate_info']['birthplace']; ?>
</p>
                <p>出生日期 : <?php echo $this->_tpl_vars['candicate_info']['birth']; ?>
</p>
                <p>教育程度 : <?php echo $this->_tpl_vars['candicate_info']['education']; ?>
</p>
            </div>
            <div class="clearfix"></div>
                
        </div>
    </div>

</div>    

           <div class="row m-b-lg m-t-lg">
                <div class="col-md-4">

                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    學歷
                                </h2>

                                <h4><?php echo $this->_tpl_vars['candicate_info']['Education']; ?>
</h4>

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

                                <h4><?php echo $this->_tpl_vars['candicate_info']['Experience']; ?>
</h4>

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

