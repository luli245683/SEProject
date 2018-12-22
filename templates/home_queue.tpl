<!DOCTYPE html>
<html>
{include file="header.tpl"}

  <!-- Demo scripts -->
<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet" type="text/css" />

{literal}
<style type="text/css">
    

  </style>
{/literal}
<body class="mini-navbar">
<div id="wrapper">
    {include file="menu.tpl"}
    <div id="page-wrapper" class="gray-bg">
    {include file="page_header.tpl"}    
        <div class="wrapper wrapper-content">
          <div class="container">

            <!-- Map html - add the below to your page -->
            <div class="jsmaps-wrapper" id="taiwan-map" style="height: 500px"></div>
            <!-- End Map html -->
          </div>
        </div>
    {include file="page_footer.tpl"}
    
    </div>  
</div>



 



  <link href="js/plugins/jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />
  <script src="js/plugins/jsmaps/jsmaps-libs.js" type="text/javascript"></script>
  <script src="js/plugins/jsmaps/jsmaps-panzoom.js"></script>
  <script src="js/plugins/jsmaps/jsmaps.min.js" type="text/javascript"></script>
  <script src="js/taiwan.js" type="text/javascript"></script>


{literal}
<script>
    $(document).ready(function() {
          $('#taiwan-map').JSMaps({
                map: 'taiwan',
                textAreaHeight: '300px',
                responsive : true,
                onStateClick: function(data) {                    
                      window.location.assign("candidate_info.php?province_id="+data.abbreviation);
                  }
              });
    });

    function get_candidate_info_by_province_id() {
        

        var province_id = "'" + $('#province_id_input').val();
        
        // $.get('candidate_info.php',{act:'update_candidate_info', province_id:province_id},function(data){
        //     console.log(data);    
            
        // });
        
        window.location.replace("candidate_info.php?province_id="+province_id);
        
    }
    // function get_user_by_id(){
    //     var user_id = $('#user_id_input').val();
    //     $.get('home_queue.php' , {act:'update_user_list' , user_id:user_id} , function(data){
            
    //         $('#user_area').html(data);
    //     });
    // }
</script>
{/literal}
</body>
</html>
