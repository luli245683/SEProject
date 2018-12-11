<!DOCTYPE html>
<html>

{include file='header.tpl'}
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<body class="fixed-sidebar no-skin-config full-height-layout">

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- menu bar -->
		{include file='menu.tpl'}
    </nav>

    <div id="page-wrapper" class="gray-bg">
		<!-- page header -->
        {include file='page_header.tpl'}
        <div class="wrapper wrapper-content animated fadeInRight">
		<h3 class="hideInMobile">{$smarty.session.patient.PatientName}&nbsp;,&nbsp;{$smarty.session.patient.PatientID}</h3>
        	<div class="wrapper wrapper-content">  
            	{if $CurrentMedication}                  
                <div class="row">
                	<div class="col-lg-12">
                    	<div class="ibox float-e-margins">
                        	<div class="ibox-title">
                                <h5><i class="fa fa-history"></i>&nbsp;&nbsp; Medications History</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content no-padding">
                                <ul class="list-group">
                                	{foreach from=$CurrentMedication item =current_medication}
                                    <li class="list-group-item" style="padding:10px 15px;">
                                    	<strong>{$current_medication.NameofDrugs}</strong><br/>
                                        <small><strong><i class="fa fa-dot-circle-o"></i> Dosage :</strong> {$current_medication.Dosage} / <strong><i class="fa fa-dot-circle-o"></i> Frequency :</strong> {$current_medication.Frequency}</small>
                                    </li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                  {/if}
                  <div class="row">
				  {foreach from=$OrderDrugs item=order_drugs key=date}
                    <div class="col-lg-12">
                    	<div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><i class="fa fa-medkit"></i> {$date}</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            	<th width="60%">Order Summary</th>
                                            	<th width="15%">Dosage</th>
                                                <th width="25%">Frequency</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											{foreach from=$order_drugs item=drugs}
                                            <tr>
                                                <td>{$drugs.OrderSummary}</td>
                                                <td>{$drugs.Dosage}</td>
                                                <td>{$drugs.Frequency}</td>
                                            </tr>
											{/foreach}
                                        </tbody>
                                    </table>
                                </div><!-- end feed-activity-list -->
                            </div><!-- end ibox-content -->
                        </div><!-- end ibox float-e-margins -->
                    </div><!-- end col-lg-12 -->
                 {/foreach}
                 {if !$CurrentMedication && !$OrderDrugs}
                 	<div class="col-lg-12">
                    	<div class="text-center animated fadeInRight">No Medication History</div>
                    </div>
                 {/if}
                </div>
        	</div>
        </div>
		<!-- page footer -->
        {include file='page_footer.tpl'}
        <!-- Start - Patient Sidebar -->
		<div id="right-sidebar">
            <div class="sidebar-container">
                <div class="sidebar-title sidebar-profile"><h3>Patient Profile</h3></div>
                <ul class="sidebar-list">
                	<li>
                        <strong>
                            <!--span class="label label-success pull-right">♂</span-->
                            <span class="label label-danger pull-right" style="margin-left:5px;">♀</span>
                            <span class="label label-primary pull-right">A+</span>
                        </strong>
                    	<h4>HERMIN ANGESTI</h4>
                        <p>
                        	<strong>Patient ID :</strong> 02339 / <strong>NRIC :</strong> X059965<br/>
                        	<strong>Age :</strong> 56<br/>
                        	<strong>Nationality :</strong> SINGAPOREAN<br/>
                        	<strong>Allergy :</strong> NIL
                        </p>
                	</li>
                    <li>
                    	<h4><i class="fa fa-phone"></i> Emergency Contacts</h4>
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>JUSTINA LIM</strong></div>
                            <div class="panel-body">
                                <strong>Relations : </strong>Daughter<br/>
                                <strong>Phone : </strong>No Data<br/>
                                <strong>Mobile : </strong>97497951<br/>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>LINDY LIM</strong></div>
                            <div class="panel-body">
                                <strong>Relations : </strong>Daughter<br/>
                                <strong>Phone : </strong>No Data<br/>
                                <strong>Mobile : </strong>92997301<br/>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<h4><i class="fa fa-bell"></i> Patient's Reminder</h4>
                        - 25% off Chemo Med & Facilities fee only.<br/>
                        * Blood test / scans not included.<br/><br/>
                        Insurance Claim approval , cheque reimbursement ,self collect do not mail cheque. Update Justina for claims approval
                    </li>
                </ul>
            </div>
		</div><!-- End - Patient Sidebar -->
    </div>
</div>
</body>

</html>
