<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sargas: Employee</title>

  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.simplecolorpicker-glyphicons.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.css" />
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">


</head>
<style type="text/css">
  .margin-top-10{
    margin-top: 10px;
  }

  .input-group-lg > .form-control,
  .input-group-lg > .input-group-addon,
  .input-group-lg > .input-group-btn > .btn {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 6px;
  }
  select.input-group-lg > .form-control,
  select.input-group-lg > .input-group-addon,
  select.input-group-lg > .input-group-btn > .btn {
    height: 46px;
    line-height: 46px;
  }
  textarea.input-group-lg > .form-control,
  textarea.input-group-lg > .input-group-addon,
  textarea.input-group-lg > .input-group-btn > .btn,
  select[multiple].input-group-lg > .form-control,
  select[multiple].input-group-lg > .input-group-addon,
  select[multiple].input-group-lg > .input-group-btn > .btn {
    height: auto;
  }
  .input-group-sm > .form-control,
  .input-group-sm > .input-group-addon,
  .input-group-sm > .input-group-btn > .btn {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
  }
  select.input-group-sm > .form-control,
  select.input-group-sm > .input-group-addon,
  select.input-group-sm > .input-group-btn > .btn {
    height: 30px;
    line-height: 30px;
  }
  textarea.input-group-sm > .form-control,
  textarea.input-group-sm > .input-group-addon,
  textarea.input-group-sm > .input-group-btn > .btn,
  select[multiple].input-group-sm > .form-control,
  select[multiple].input-group-sm > .input-group-addon,
  select[multiple].input-group-sm > .input-group-btn > .btn {
    height: auto;
  }
  .input-group-addon,
  .input-group-btn,
  .input-group .form-control {
    display: table-cell;
  }
  .input-group-addon:not(:first-child):not(:last-child),
  .input-group-btn:not(:first-child):not(:last-child),
  .input-group .form-control:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
  .input-group-addon,
  .input-group-btn {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
  }
  .input-group-addon {
    padding: 10px 12px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .input-group-addon.input-sm {
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 3px;
  }
  .input-group-addon.input-lg {
    padding: 10px 16px;
    font-size: 18px;
    border-radius: 6px;
  }
  .input-group-addon input[type="radio"],
  .input-group-addon input[type="checkbox"] {
    margin-top: 0;
  }
  .input-group .form-control:first-child,
  .input-group-addon:first-child,
  .input-group-btn:first-child > .btn,
  .input-group-btn:first-child > .btn-group > .btn,
  .input-group-btn:first-child > .dropdown-toggle,
  .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
  .input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .input-group-addon:first-child {
    border-right: 0;
  }
  .input-group .form-control:last-child,
  .input-group-addon:last-child,
  .input-group-btn:last-child > .btn,
  .input-group-btn:last-child > .btn-group > .btn,
  .input-group-btn:last-child > .dropdown-toggle,
  .input-group-btn:first-child > .btn:not(:first-child),
  .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .input-group-addon:last-child {
    border-left: 0;
  } 

  .alert-danger,
  .alert-error {
    background-color: #f2dede;
    border-color: #eed3d7;
    color: #b94a48;
  } 

  .table td, .table th{
    padding: 0 !important;
  }
  .clock {
    width: 100%;
    margin: 30px 0 0;
    font-weight: normal;
  }
  .clock #Date {
    font-size: 18px;
    text-align: center;
  }
  .clock ul {
    width: 100%;
    padding: 0px;
    list-style: none;
    text-align: center;
    font-size: 55px;
    line-height: 50px;
    margin: 0 0 20px 0;
    letter-spacing: -3px;
  }
  .clock ul li {
    display: inline;
    text-align: center;
    padding: 0px;
    margin: 0 -5px 0 -5px;
  }
  .clock #point { 
    position:relative; 
    -moz-animation:mymove 1s ease infinite; 
    -webkit-animation:mymove 1s ease infinite; 
    padding:0px; margin:0;
  }
  .clock #ampm{ 
    margin-left:10px; 
    font-size:30px; 
    text-transform:uppercase;
  }

  @-webkit-keyframes mymove 
  {
    0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
    50% {opacity:0; text-shadow:none; }
    100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
  }
  
  
  @-moz-keyframes mymove 
  {
    0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
    50% {opacity:0; text-shadow:none; }
    100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
  }
  .button{
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px; 
    -khtml-border-radius: 50px;

    background-color: #000;
    color: #fff;
    text-decoration:none;
    cursor:pointer;
    font-size:1.2em;
    padding:18px 10px;
    width:180px;
    margin: 10px;
    outline: none;
  }
  .button:hover{
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    background-color: #666;
  }

  .punch_panel{
    margin-left: 324px;
  }
</style>
<?php 
  $active_time_in = 'active';
  $active_time_out = '';
//kprint($previous_time_logs);exit;
  if(array_check($previous_time_logs)){
    if($previous_time_logs['time_out'] == '' AND $previous_time_logs['time_out'] == '0000-00-00 00:00:00'){
      $active_time_out = 'active';
      $active_time_in = '';
    }
  }

  if(array_check($time_logs)){
    if($time_logs['time_in'] != ''){
      $active_time_in = '';
    }

    if($time_logs['time_out'] != '0000-00-00 00:00:00'){
      $active_time_out = '';
    }else{
      $active_time_out = 'active';
    }
  }

?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url();?>">Sargas</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url();?>Time">
            <i class="fa fa-fw fa-clock-o"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Employee">
          <a class="nav-link" href="<?php echo base_url();?>Employee">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span class="nav-link-text">Employee</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <?php if($user['username'] == 'sgsddbadmin'){
                  $user['family_name'] = 'Admin';
                  $user['given_name'] = 'Sgs';
            }?>
          <span class="nav-link" style="cursor: default!important;"><?php echo $user['given_name'].' '.$user['family_name'];?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'logout/index'?>">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url().'time';?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Bundy</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          Bundy</div>
        <div class="card-body">
          <div class="clock">
            <div id="Date"></div>
            
            <ul>
              <li id="hours"><?php echo date('h');?></li>
                <li id="point">:</li>
                <li id="min"><?php echo date('i');?></li>
                <li id="point">:</li>
                <li id="sec"><?php echo date('s');?></li>
                <li id="ampm"><?php echo date('a');?></li>
            </ul>
          </div>

          <div class="punch_panel">
            <table cellspacing="0" cellpadding="0" width="100%">
              <tbody>
                <tr>
                  <td style="width: 255px;">
                     <?php if($active_time_in != ''):?>
                        <button class="button" id="button-start" data-toggle="modal" data-title="Punch in" data-target="#set_schedule">Punch in</button>
                     <?php else:?>
                        <button  class="button" id="button-start" disabled="" style="background-color: #999!important; cursor: default;">Punch in</button>
                      <?php endif;?>
                  </td>
                  <td>
                    <a href="<?php echo base_url().'time/bundy/time_out'?>" class="end_time">
                      <?php if($active_time_out == 'active'):?>
                        <button class="button" id="button-start">Punch Out</button>
                      <?php else:?>
                        <button class="button" id="button-start" disabled="" style="background-color: #999!important; cursor: default;">Punch Out</button>
                      <?php endif;?>
                    </a>
                  </td>
                </tr>
                <tr>
                  <?php if(array_check($time_logs)):?>
                    <?php if(isset($time_logs['time_in']) AND $time_logs['time_in'] != ''):?>
                      <td style="padding-right: 50px;"><?php echo date('F j, Y', strtotime($time_logs['time_in']));?> <br/>
                        <?php echo date('h:i a', strtotime($time_logs['time_in']));?>
                      </td>
                    <?php else:?>
                      <td></td>
                    <?php endif;?>
                    <?php if(isset($time_logs['time_out']) AND $time_logs['time_out'] != '0000-00-00 00:00:00'):?>
                      <td style="padding-right: 50px;"><?php echo date('F j, Y', strtotime($time_logs['time_out']));?> <br/>
                        <?php echo date('h:i a', strtotime($time_logs['time_out']));?>
                      </td>
                    <?php else:?>
                      <td></td>
                    <?php endif;?>
                  <?php else:?>
                    <?php if(isset($previous_time_logs['time_in']) AND $previous_time_logs['time_in'] != ''):?>
                      <td style="padding-right: 50px;"><?php echo date('F j, Y', strtotime($previous_time_logs['time_in']));?> <br/>
                        <?php echo date('h:i a', strtotime($previous_time_logs['time_in']));?>
                      </td>
                    <?php else:?>
                      <td></td>
                    <?php endif;?>
                    <?php if(isset($previous_time_logs['time_out']) AND $previous_time_logs['time_out'] != '0000-00-00 00:00:00'):?>
                      <td style="padding-right: 50px;"><?php echo date('F j, Y', strtotime($previous_time_logs['time_out']));?> <br/>
                        <?php echo date('h:i a', strtotime($previous_time_logs['time_out']));?>
                      </td>
                    <?php else:?>
                      <td></td>
                    <?php endif;?>
                  <?php endif;?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade new_modal" id="set_schedule" tabindex="-1" role="dialog" aria-labelledby="BKA GAME TIMER" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title">Input today's schedule</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-error error_message" style="display: none;"></div>
            <div class="row margin-top-10 shift_in">
              <div class="col-md-4 col-sm-3">
                Schedule shift in:
              </div>
              <div class="col-md-6 col-sm-6" style="">
                <div class="input-group date f_left" style="width: 220px">
                  <input id="shift_in" type="text" class="form-control tp" placeholder="" name="shift_in" date-format="Y-m-d hh:mm a" />
                  <span class="input-group-addon" style="width: 40px"><span class="fa fa-clock-o"></span></span>
                </div>        
              </div>
            </div>

            <div class="row margin-top-10 shift_out">
              <div class="col-md-4 col-sm-3">
                Schedule shift out:
              </div>
              <div class="col-md-5 col-sm-5" style="">
                <div class="input-group date f_left" style="width: 220px">
                  <input id="shift_out" type="text" class="form-control tp" placeholder="" name="shift_out" date-format="hh:mm a" />
                  <span class="input-group-addon" style="width: 40px"><span class="fa fa-clock-o"></span></span>
                </div>        
              </div>
            </div>
          </div>
          <div class="modal-footer" id="modal-footer">
            <div id="action_wrapper">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="start">Start</button>
            </div>
            <div id="loading_wrapper" style="display: none;">
              <div class="progress progress-striped active" style="margin-bottom: 10px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="100%" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                  <span class="sr-only">Loading</span>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div></div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/moment.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.en-au.js"></script>

    <script src="<?php echo base_url()?>assets/js/bootbox.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.form.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.numeric.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/employee.js"></script>

    <!-- <script type="text/javascript">
    var sBaseURL = '<?php //echo base_url(); ?>';
      
      $( document ).ready(function() {
        $('.dp').datetimepicker({
            pickTime: false,
            icons: {  
              timebutton : '',
                  datebutton : ''
              }
          });
      });
      
  </script> -->
  <script type="text/javascript">
    var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
    var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
    var serverDate = new Date("<?php echo date('F j, Y h:i:s a')?>");
    
    serverDate.setDate(serverDate.getDate());
       
    $('#Date').html(dayNames[serverDate.getDay()] + ", " +  monthNames[serverDate.getMonth()] + ' ' + serverDate.getDate() + ', ' + serverDate.getFullYear());

    setInterval( function() {
      serverDate.setSeconds( serverDate.getSeconds() + 1);
      var seconds = serverDate.getSeconds();
      
      $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
      
      
      var minutes = serverDate.getMinutes();
      $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
      
      var hours = serverDate.getHours();
      var ampm = hours >= 12 ? 'pm' : 'am';
      
      hours = hours % 12;
        hours = hours ? hours : 12;

      $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
        $("#ampm").html(ampm);
        
        $('#Date').html(dayNames[serverDate.getDay()] + ", " +  monthNames[serverDate.getMonth()] + ' ' + serverDate.getDate() + ', ' + serverDate.getFullYear());
        
    },1000);


    setTimeout(function() {
      window.location.reload();
    }, 1800000);

    $(document).ready(function(){
      $('.tp').datetimepicker({
            format: 'YYYY-MM-DD hh:mm a',
            pickDate: false,
            icons: {
              timebutton : '',
              datebutton : '',
              up: 'fa fa-arrow-up',
              down: 'fa fa-arrow-down'
            }
      });

      $('#start').on('click', function(e){
        var data = {};
        var uiParentModal = $(this).closest('#set_schedule');

        data.shift_in = uiParentModal.find('#shift_in').val();
        data.shift_out   = uiParentModal.find('#shift_out').val();

        data.sargas_form_token = $.cookie('sargas_form_cookie');

        $.ajax({
          url   : 'bundy/time_in',
          data  : data,
          type  : 'post',
          dataType : 'json',
          error : function(xhr, status, message){

          },
          beforeSend : function(){
            $('#action_wrapper').hide();
            $('#loading_wrapper').show();
          },
          complete : function(){
            $('#action_wrapper').show();
            $('#loading_wrapper').hide();
          },
          success : function(oData){
            if(oData.status == 'false'){
              $('.error_message').html(oData.message).fadeIn();
            }else{
              window.location.reload();
            }
          }
        });
      });
    });
  </script>

    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>

</html>
