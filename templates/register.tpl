<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <!-- Text spinners style -->
    <link href="css/plugins/textSpinners/spinners.css" rel="stylesheet">
    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="gray-bg login-css">
    <div class="registerColumns animated fadeInDown">
        <div class="row registerPanel">
            <h2 class="font-bold">{$luli}</h2>
            
                <div class="row">
                    <div class="form-group col-md-8">
                        <form role="register_form" id="register_form">
                        <div class="row">
                            <div class="form-group col-md-6" >
                                <label >First Name *</label>
                                <input id="firstName" name="firstName" type="text" placeholder="First Name" class="form-control required valid" aria-required="true" aria-invalid="false">
                            </div>
                            <div class="form-group col-md-6" >
                                <label>Last Name *</label>
                                <input id="lastName" name="lastName" type="text" placeholder="Last Name" class="form-control required valid" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12" >
                                <label>Account*</label>
                                <input id="account" name="account" type="text" placeholder="Account" class="form-control required valid" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div id="pwd-container4">
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control example4" id="password" name="password" >
                                    </div>
                                </div>
                                <div class="form-group col-md-6" >
                                    <label>Confirm *</label>
                                    <input id="password_confirm" name="confirm" type="password" placeholder="Confirm" class="form-control required valid" aria-required="true" aria-invalid="false" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <span class="font-bold pwstrength_viewport_verdict4"></span>
                                    <span class="pwstrength_viewport_progress4"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6" >
                                <label>IDF *</label>
                                <input id="idf" name="idf" type="text" placeholder="ID Number" class="form-control required valid" aria-required="true" aria-invalid="false">
                            </div>
                            <div class="form-group col-md-6" >
                                <label>Email</label>
                                <input id="email" name="email" type="text" placeholder="email" class="form-control required valid" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6" id="data_1">
                                <label>Birth *</label>
                                <div class="input-group ">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="birthday"  id="birthday_selector" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group col-md-6" >
                                <label>Phone</label>
                                <input id="phone" name="phone" type="text" placeholder="phone" class="form-control required valid" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6" >
                             <label >County*</label>
                             <select data-placeholder="Choose a County..." class="chosen-select" id="county"  tabindex="2">
                                <option></option>
                                {foreach from=$county_list item=county}
                                {if $county.CountyCode != 'ALL'}
                                <option value="{$county.CountyCode}">{$county.CountyName}</option>
                                {/if}
                                {/foreach}
                            </select>
                            </div>
                            <div class="form-group col-md-6" >
                                <label >Region *</label>
                                <div id="area_region">
                                    <select data-placeholder="Choose a region..." class="chosen-select" id="region"  tabindex="2" >
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                        <div class="row">
                            <div class="col-md-8">

                            </div>

                            <div class="col-md-2">
                                <button class="ladda-button btn btn-warning" onclick="history.back()">Cancel</button>
                            </div>
                            <div class="col-md-2">
                                <button class="ladda-button btn btn-warning" onclick="submit_register_request()">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div style="height: 100px">

                        </div>

                        <div class="row">
                            <a data-gallery=""><img src="img/log-in.png" style="display: block ; margin: auto"></a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6 text-right" style="color: white">
           <small> Copyright by FORESEE © 2018</small>
       </div>
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
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Password meter -->
<script src="js/plugins/pwstrength/pwstrength-bootstrap.min.js"></script>
<script src="js/plugins/pwstrength/zxcvbn.js"></script>
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- Toastr script -->
<script src="js/plugins/toastr/toastr.min.js"></script>
<!-- Jquery Validate -->
<script src="js/plugins/validate/jquery.validate.min.js"></script>
{literal}
<script>
    $(document).ready(function(){
        // toastr.options = {
        //   "closeButton": true,
        //   "debug": false,
        //   "progressBar": true,
        //   "preventDuplicates": false,
        //   "positionClass": "toast-top-right",
        //   "showDuration": "400",
        //   "hideDuration": "1000",
        //   "timeOut": "1000",
        //   "extendedTimeOut": "1000",
        //   "showEasing": "swing",
        //   "hideEasing": "linear",
        //   "showMethod": "fadeIn",
        //   "hideMethod": "fadeOut"
        // }
        $("#account").keypress(function(event){
            var ew = event.which;
            if(ew == 32)
                return true;
            if(48 <= ew && ew <= 57)
                return true;
            if(65 <= ew && ew <= 90)
                return true;
            if(97 <= ew && ew <= 122)
                return true;
            return false;
        });
         $("#register_form").validate({
                 rules: {
                     firstName: {
                         required: true
                     },
                     lastName: {
                         required: true
                     },
                     account: {
                         required: true
                     },
                     password: {
                         required: true,
                         minlength: 8
                     },
                     confirm: {
                         required: true,
                         equalTo : "#password",
                         minlength: 8
                     },
                     idf: {
                         required: true,
                         maxlength: 10,
                         minlength: 10
                     },
                     email: {
                         required: false,
                         email: true
                     },
                     birthday: {
                         required: true,
                         date: true
                     },
                     phone: {
                        required: false
                     }

                 }
             });

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
           // Example 4
           var options4 = {};
           options4.ui = {
            container: "#pwd-container4",
            viewports: {
                progress: ".pwstrength_viewport_progress4",
                verdict: ".pwstrength_viewport_verdict4"
            }
        };
        options4.common = {
            zxcvbn: true,
            zxcvbnTerms: ['samurai', 'shogun', 'bushido', 'daisho', 'seppuku'],
            userInputs: ['#year', '#familyname']
        };
        $('.example4').pwstrength(options4);
        $('#county').select2();
        $("#region").select2();
        onchange_county();
        $('#county').on('select2:select', function (e) {
            onchange_county($('#county').val());
        });

        $('#birthday_selector').datepicker({
            dateFormat: 'yy-mm-dd' ,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true,

        });

    });

    function onchange_county(CountyCode){
        $('#region').remove();
        $('#area_region').html('<select data-placeholder="Choose a region..." class="chosen-select" id="region"  tabindex="2"><option></option></select>');
        $.get('register.php',{act:'get_region',CountyCode:CountyCode},function(data){      
            var options = JSON.parse(data); 
            $('#region').select2({
                data: options
            }); 
        });

    }

    function submit_register_request(){

        if($("#register_form").valid()){
            var password  = $('#password').val();
            var confirm_pass = $('#password_confirm').val();
            if(password != confirm_pass)
                toastr.warning('Your confirm password is not equal to password!','ERROR',);
            else{
                var register_info = {};
                register_info.FirstName = $('#firstName').val();
                register_info.LastName = $('#lastName').val();
                register_info.Account = $('#account').val();
                register_info.password = password;
                register_info.IDF = $('#idf').val();
                register_info.BirthDay = $('#birthday_selector').val();
                register_info.email = $('#email').val();
                register_info.Region = $('#region').val();
                register_info.phone = $('#phone').val();
                $.get('register.php' , {act:'register',register_info:register_info} , function(data){

                    var result = JSON.parse(data);
                    if(result.is_success == 1 ){
                        toastr.success(result.message , 'Success', 
                        {onHidden:function(){
                              window.location.replace("login.php");
                        }});
                        
                    }
                    else
                        toastr.error(result.message);
                });
            }
        }
        
        
    }
</script>
{/literal}
</body>

</html>
