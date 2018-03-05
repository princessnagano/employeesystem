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

  .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
  }

  .table td, .table th{
    padding: 0 !important;
  }

  /*.table{
    width: 80% !important;
    margin-left: 10%;
  }*/
  .display_none{
    display: none;
  }

  .f_left{
    float: left;
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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url().'time/time_logs_index';?>">Employee Time Logs</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $team_member['family_name'].', '.$team_member['given_name'];?></li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <?php echo $team_member['family_name'].', '.$team_member['given_name'];?></div>
        <div class="card-body">
          <?php if(isset($errors) AND array_check($errors)):?>
            <div class="alert alert-error error_message" style="width: 80%"><?php echo $errors['message'];?></div>
          <?php endif;?>
          <?php echo form_open(base_url().'time/employee_time_log/'.url_encode($team_member["username"]),'enctype="multipart/form-data"'); ?>
          <div class="row margin-top-10 drill_down_row">
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
              <button style="margin-left: 20px;" class="btn btn">Generate</button>
            </div>

          </div>
          <?php echo form_close(); ?>
          <div class="table-responsive table_div" style="margin-top: 20px;">
            <div class="alert alert-error error_message" style="display: none; width: 80%"></div>
            <div class="alert alert-success success_message display_none" style="width: 80%"></div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <th style="text-align: center;">Date</th>
                <th style="text-align: center;">Shift-in</th>
                <th style="text-align: center;">Shift-out</th>
                <th style="text-align: center;">Time-in</th>
                <th style="text-align: center;">Time-out</th>
                <th colspan="2" style="text-align: center;">Action</th>
              </thead>
              <tbody>
                <?php if(isset($time_logs)):?>
                  <?php foreach($time_logs as $key => $time_log):?>
                    <?php 
                      if(isset($time_log['time_out']) AND $time_log['time_out'] == '0000-00-00 00:00:00'){
                        $time_log['time_out'] == '';
                      }
                    ?>
                    <tr>
                      <td>
                        <span class="date"><?php echo isset($time_log['date']) ? date('F d, Y', strtotime($time_log['date'])) : '';?></span>
                        <input type="hidden" name="date" value="<?php echo isset($time_log['date']) ? $time_log['date'] : '';?>" autocomplete="off" />
                        <input type="hidden" name="username" value="<?php echo isset($time_log['username']) ? $time_log['username'] : '';?>" autocomplete="off" />
                      </td>
                      <td>
                        <span class="edit shift_in"><?php echo isset($time_log['shift_in']) ? date('M d, Y h:i a', strtotime($time_log['shift_in'])) : '';?></span>
                         <input id="shift_in" type="text" class="form-control tp display_none" value="<?php echo isset($time_log['shift_in']) ? date('Y-m-d h:i a', strtotime($time_log['shift_in'])) : '';?>" placeholder="" name="shift_in" date-format="Y-m-d hh:mm a" />
                      </td>
                      <td>
                        <span class="edit shift_out"><?php echo isset($time_log['shift_out']) ? date('M d, Y h:i a', strtotime($time_log['shift_out'])) : '';?></span>
                         <input id="shift_out" type="text" class="form-control tp display_none" value="<?php echo isset($time_log['shift_out']) ? date('Y-m-d h:i a', strtotime($time_log['shift_out'])) : '';?>" placeholder="" name="shift_out" date-format="Y-m-d hh:mm a" />
                      </td>
                      <td>
                        <span class="edit time_in"><?php echo isset($time_log['time_in']) ? date('M d, Y h:i a', strtotime($time_log['time_in'])) : '';?></span>
                        <input id="time_in" type="text" class="form-control tp display_none" value="<?php echo isset($time_log['time_in']) ? date('Y-m-d h:i a', strtotime($time_log['time_in'])) : '';?>" placeholder="" name="time_in" date-format="Y-m-d hh:mm a" />                          
                      </td>
                      <td>
                        <span class="edit time_out"><?php echo isset($time_log['time_out']) ? date('M d, Y h:i a', strtotime($time_log['time_out'])) : '';?></span>
                         <input id="time_out" type="text" class="form-control tp display_none" value="<?php echo isset($time_log['time_out']) ? date('Y-m-d h:i a', strtotime($time_log['time_out'])) : '';?>" placeholder="" name="time_out" date-format="Y-m-d hh:mm a" />
                      </td>
                      <td>
                        <p data-placement="top" data-toggle="tooltip" title="Edit" class="edit" data-value="" style="margin-left: 11%;">
                          <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-edit"></span></button>
                        </p>

                        <p data-placement="top" data-toggle="tooltip" title="Save" class="save display_none" data-value="" style="margin-left: 11%;">
                          <button class="btn btn-primary btn-xs" data-title="Save" data-toggle="modal" data-target="#save" ><span class="fa fa-save"></span></button>
                        </p>
                      </td>
                      <td>
                        <p data-placement="top" data-toggle="tooltip" title="Delete" class="delete" data-value="" style="margin-left: 11%;">
                          <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="fa fa-trash"></span></button>
                        </p>

                        <p data-placement="top" data-toggle="tooltip" title="Cancel" class="cancel display_none" data-value="" style="margin-left: 11%;">
                          <button class="btn btn-danger btn-xs" data-title="Cancel" data-toggle="modal" data-target="#cancel"><span class="fa fa-times-circle"></span></button>
                        </p>
                      </td>
                    </tr>
                  <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
            <div class="pagination_holder" align="right"><?php echo $links['pagination']; ?></div>
            <div id="loading_wrapper" style="display: none;">
              <div class="progress progress-striped active" style="margin-bottom: 10px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="100%" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                  <span class="sr-only">Loading</span>
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

      $('.dp').datetimepicker({
        pickTime: false,
        icons: {  
          timebutton : '',
              datebutton : ''
          }
      });

      $('.generate').on('click', function(e){
        var data = {};

        var uiParentDiv = $(this).closest('.card-body');

        data.date_from = uiParentDiv.find('input[name=date_from]').val();
        data.date_to = uiParentDiv.find('input[name=date_to]').val();

        data.sargas_form_token = $.cookie('sargas_form_cookie');

        $.ajax({
          url : '/time/employee_time_log/<?php echo url_encode($team_member['username']);?>',
          data : data,
          type : 'post',
          dataType : 'json',
          error : function(xhr, status, message){

          },
          beforeSend : function(){
            show_loading(uiParentDiv);
          },
          complete : function(){
            hide_loading(uiParentDiv);
          },
          success : function(oData){

          }
        });
      });
    }).on('click', 'p.edit', function(e){

        $(this).closest('tr').find('input').show();
        $(this).closest('tr').find('select').show();
        $(this).closest('tr').find('span.edit').hide();

        $(this).closest('tr').find('p.edit').hide();
        $(this).closest('tr').find('p.save').show();

        $(this).closest('tr').find('p.delete').hide();
        $(this).closest('tr').find('p.cancel').show();

        e.preventDefault();
      }).on('click', 'p.cancel', function(e){
        $(this).closest('div.table_div').find('.error_message').hide();
        $(this).closest('tr').find('input').hide();
        $(this).closest('tr').find('select').hide();
        $(this).closest('tr').find('span.edit').show();

        $(this).closest('tr').find('p.edit').show();
        $(this).closest('tr').find('p.save').hide();

        $(this).closest('tr').find('p.delete').show();
        $(this).closest('tr').find('p.cancel').hide();

        e.preventDefault();

      }).on('click', 'p.save', function(e){
        var data = {};
        var uiParentDiv = $(this).closest('div.table_div');
        var parentRow = $(this).closest('tr');

        data.date = parentRow.find('input[name=date]').val();
        data.username  = parentRow.find('input[name=username]').val();
        data.shift_in = parentRow.find('input[name=shift_in]').val();
        data.shift_out = parentRow.find('input[name=shift_out]').val();
        data.time_in = parentRow.find('input[name=time_in]').val();
        data.time_out = parentRow.find('input[name=time_out]').val();

        data.sargas_form_token = $.cookie('sargas_form_cookie');

        $.ajax({
          url : '/time/update_time_log',
          data : data,
          type : 'post',
          dataType : 'json',
          error : function(xhr, status, message){

          },
          beforeSend : function(){
            show_loading(uiParentDiv);
          },
          complete : function(){
            hide_loading(uiParentDiv);
          },
          success : function(oData){
            if(oData.status == 'false'){
              uiParentDiv.find('.error_message').html(oData.message).fadeIn();
            }else{
              uiParentDiv.find('.error_message').html(oData.message).fadeOut();
              uiParentDiv.find('.success_message').html(oData.message).fadeIn();

              parentRow.find('input').hide();
              parentRow.find('select').hide();
              parentRow.find('span.edit').show();

              parentRow.find('p.edit').show();
              parentRow.find('p.save').hide();

              parentRow.find('p.delete').show();
              parentRow.find('p.cancel').hide();

              parentRow.find('span.time_in').text(moment(oData.record['time_in']).format('h:mm A'));
              parentRow.find('span.time_out').text(moment(oData.record['time_out']).format('h:mm A'));
              parentRow.find('span.shift_in').text(moment(oData.record['shift_in']).format('h:mm A'));
              parentRow.find('span.shift_out').text(moment(oData.record['shift_out']).format('h:mm A'));

              parentRow.find('input[name=time_in]').val(oData.record['time_in']);
              parentRow.find('input[name=time_out]').val(oData.record['time_out']);
              parentRow.find('input[name=shift_in]').val(oData.record['shift_in']);
              parentRow.find('input[name=shift_out]').val(oData.record['shift_out']);

            }
          }
        });
      }).on('click','p.delete', function(){
        var data = {};
        var uiParentDiv = $(this).closest('div.table_div');
        var parentRow = $(this).closest('tr');

        data.date = parentRow.find('input[name=date]').val();
        data.username  = parentRow.find('input[name=username]').val();

        data.sargas_form_token = $.cookie('sargas_form_cookie');

        $.ajax({
          url : '/time/delete_time_log',
          data : data,
          type : 'post',
          dataType : 'json',
          error : function(xhr, status, message){

          },
          beforeSend : function(){
            show_loading(uiParentDiv);
          },
          complete : function(){
            hide_loading(uiParentDiv);
          },
          success : function(oData){
            if(oData.status == 'false'){
              uiParentDiv.find('.error_message').html(oData.message).fadeIn();
            }else{
              window.location.reload();
            }
          }
        });
      });

      function show_loading(uiTarget) {
        uiTarget.find("#loading_wrapper").show();
        uiTarget.find("#action_wrapper").hide();
      }
      function hide_loading(uiTarget) {
        uiTarget.find("#loading_wrapper").hide();
        uiTarget.find("#action_wrapper").show();
      }
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
