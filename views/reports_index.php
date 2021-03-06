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

  <link href="<?php echo base_url()?>assets/css/jquery.multiselect.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/jquery.multiselect.filter.css" rel="stylesheet">


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

 .report-filter-select{
  margin-bottom: 10px;
}

.report-section .report-list .list{
  /*font-size:  0;*/
  margin-bottom: 10px;
}

.report-section .report-list .list.cyan > div{
  border-top-color: #7cd8bf;
}

.report-section .report-list .list.orange > div{
  border-top-color: #feb298;
}

.report-section .report-list .list.pink > div{
  border-top-color: #f08fb0;
}

.report-section .report-list .list.blue > div{
  border-top-color: #4b8fe2;
}

.report-section .report-list .list > div{
  background: #fff;
  padding: 10px;
  border-top: 4px solid;
  margin: 0 15px 10px;
  width: calc(33.33333333333333% - 30px);
  min-width: 200px;
  display: inline-block;  
  vertical-align: top;
  text-align: center;
}

/*.report-section .report-list .list > div p.title{
  text-align: left;
}*/

.report-section .report-list .list > div p.desc{
  width: 100%;
  padding-left: 10px;
  font-size: 12px;
  margin-top: 10px;
  min-height: 45px;
  text-align: left;
}

.report-section .report-list .list > div .or-form{
  min-height: 45px;
  margin-top: 10px;
  margin-bottom: 10px
}

.report-section .report-list .list > div .or-form form{
  width: 100%;
  padding-left: 10px;
  font-size: 0;
  text-align: left;
  position: relative;
}

.report-section .report-list .list > div .or-form form label{
  display: inline-block;
  vertical-align: middle;
  width: 80px;
  font-size: 12px;
}


.report-section .report-list .list > div .or-form form input{
  display: inline-block;
  vertical-align: middle;
  width: calc(100% - 80px);
  font-size: 12px;
  border-radius: 4px;
  border: 1px solid #979797;
}

.report-section .report-list .list > div .or-form form .tip{
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #b3b2ad;
  padding: 0px 5px;
  color: #000;
  font-size: 10px;
  cursor: default;
  position: absolute;
  top: 4px;
  right: 5px;
}

.report-section .report-list .list > div .or-form form .tip:hover{
  background: #c5c5c5;
}

.f_left{
  float: left;
}

.ui-multiselect-menu{
    font-size:12px;
    
  }
  
  .ui-multiselect-checkboxes label span{
    margin-left:0px;
    font-weight:normal;
  }
  
  .ui-multiselect-checkboxes input[type="checkbox"]{
    margin-top:-2px;
  }
  
  .ui-multiselect-filter input{
    height:auto !important;
  }

  /*button:focus,button:active,button:hover{
  -webkit-animation: none !important;
  -moz-animation: none !important;
  -ms-animation: none !important;
  -o-animation: none !important;
  animation: none !important;
  background:url("<?php //echo base_url()?>assets/css/images/ui-bg_glass_75_e6e6e6_1x400.png") repeat-x scroll 50% 50% #e6e6e6;
  border:1px solid #d3d3d3;
  color:#555;
  font-weight:normal;
  
  }*/

  button.ui-multiselect{
    height:30px;
    margin:0px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 12px !important; 
    color: #555;
  }

</style>
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

          <ul style="list-style: none;">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="<?php echo base_url();?>Time/bundy_index">
                <i class="fa fa-fw fa-clock-o"></i>
                <span class="nav-link-text">Punch in/out</span>
              </a>
            </li>
            <?php if($user['role_id'] == 1 OR (isset($user['time_log_access']) AND $user['time_log_access'] == 1)):?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Employee">
              <a class="nav-link" href="<?php echo base_url();?>Time/time_logs_index">
                <i class="fa fa-fw fa-clock-o"></i>
                <span class="nav-link-text">Employee Time Logs</span>
              </a>
            </li>
            <?php endif;?>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Employee">
          <a class="nav-link" href="<?php echo base_url();?>Employee">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span class="nav-link-text">Employee</span>
          </a>

          <ul style="list-style: none;" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Teams">
              <a class="nav-link" href="<?php echo base_url();?>Employee/manage_team_index">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="nav-link-text">Manage Teams</span>
              </a>
            </li>
          </ul>
        </li>
        <?php if($user['role_id'] == 1 OR (isset($user['reports_access']) AND $user['reports_access'] == 1)):?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reports">
          <a class="nav-link" href="<?php echo base_url();?>Reports">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span class="nav-link-text">Reports</span>
          </a>
        </li>
         <?php endif;?>
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
      <div class="card mb-3">
        <div class="card-header">
          Reports</div>
        <div class="card-body">
          <div class="report-section">
            <div class="report-list">
              <div class="list">
                <div>
                  <p class="title">Time Logs Report</p>
                  <p class="desc"></p>
                  <button data-toggle="modal" data-target="#time_log_report" class="btn" data-title="Time Log Report" report-type="time_log_report">Generate</button>
                </div>
              </div>
            </div>
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
    
    <div class="modal fade new_modal" id="time_log_report" tabindex="-1" role="dialog" aria-labelledby="REPORT TITLE" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="width: 116%;">
          <div class="modal-header">
          <h4 class="modal-title">Generate Time Logs</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-error error_message" style="display: none;"></div>
            <div class="row margin-top-10 drill_down_row">
              <div class="col-md-3 col-sm-2" style="margin-top: 5px;">
                Date Range:
              </div>
              <div class="col-md-9 col-sm-9" style="padding-right: 0px !important">
                <div class="f_left" style="padding:5px">From: </div>
                <div class="input-group date f_left" style="width: 150px">
                  <input style="margin: 0" id="dp1" type="text" class="form-control dp" placeholder="" name="date_from" data-date-format="YYYY-MM-DD" value="<?php echo post_input_value_checker('date_from','')?>" />
                  <span class="input-group-addon" style="width:41px"><span class="fa fa-calendar"></span></span>
                </div>
                <div class="f_left" style="padding:5px; margin-left: 20px;">To: </div>
                <div class="input-group date f_left" style="width: 150px">
                  <input style="margin: 0" id="dp2" type="text" class="form-control dp" placeholder="" name="date_to" data-date-format="YYYY-MM-DD" value="<?php echo post_input_value_checker('date_to','')?>"/>
                  <span class="input-group-addon" style="width:41px"><span class="fa fa-calendar"></span></span>
                </div>
              </div>
            </div>
            <div class="row margin-top-10">
              <div class="col-md-3 col-sm-1">
                Employee:
              </div>
              <div class="col-md-5 col-sm-5" style="">
                <select name="employees" class="multiselect multiselect_employees" style="width:370px; font-size:12px; height:30px !important;" autocomplete="off">
                  <?php if(array_check($employees)) { ?>
                    <?php foreach($employees as $key => $employee){?>
                        <option value="<?php echo $employee['username']; ?>"><?php echo $employee['family_name']?>, <?php echo $employee['given_name']?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
              <!-- <div class="col-md-8 col-sm-8" style="">
                <select name="username" class="form-control default" id="username">
                  <option value="">- Select -</option>
                  <?php if(array_check($employees)):?>
                    <?php foreach($employees as $key => $e):?>
                      <option value="<?php echo $e['username'];?>">
                        <?php echo $e['family_name'].', '.$e['given_name'];?>
                      </option>
                    <?php endforeach;?>
                  <?php endif;?>
                </select>         
              </div> -->
            </div>
          </div>
          <div class="modal-footer" id="modal-footer">
            <div id="action_wrapper">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="generate_time_log">Generate Excel</button>
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

   <!--  <script src="<?php //echo base_url();?>assets/vendor/jquery/jquery.min.js"></script> --> 
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

    <script src="<?php echo base_url()?>assets/js/jquery.multiselect.filter.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.multiselect.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/reports.js"></script>

    <script type="text/javascript">
    //var sBaseURL = '<?php //echo base_url(); ?>';
      
      $( document ).ready(function() {
        $('.dp').datetimepicker({
            pickTime: false,
            icons: {  
              timebutton : '',
                  datebutton : ''
              }
          });
      });

      $(function(){
        $(".multiselect").multiselect({
          position: { top:50, left:0 }, 
          noneSelectedText: " - Select Employees - ",
          multiple : true
          
        }).multiselectfilter({
          placeholder: 'Search'
          
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
