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
    padding: 6px 12px;
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

  .display_none{
    display: none;
  }

  .table-bordered td{
    border: none!important;
  }

  label{
    font-weight: bold;
  }

  .table{
    width: 75% !important;
  }
  .table td, .table th{
    padding: 0 !important;
  }

  p{
    margin-bottom: 0!important;
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
            <?php if($user['role_id'] == 1 OR $user['time_log_access'] == 1):?>
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
          <a href="<?php echo base_url().'employee';?>">Employee List</a>
        </li>
        <li class="breadcrumb-item active">Employee Information</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Employee Information</div>
        <div class="card-body">
          <div class="table-responsive">
            <p style="font-size: 12px">Don't leave the field blank instead put an "N/A" for text field and "0000-00-00" for date field.<br/>
            Required field must have value.</p>
            <table class="table table-bordered" id="info_table" width="100%" cellspacing="0">
              <tbody>
                <tr>
                  <td>
                    <div class="alert alert-error error_message" style="display: none;"></div>
                    <div class="alert alert-success success_message display_none"></div>
                  </td>
                  <td>
                      <input type="hidden" name="username" value="<?php echo $info['username']?>" autocomplete="off" />
                      <?php if($info['username'] == 'sgsddbadmin'){
                              $info['password'] = '$uperadmin2017';
                            }
                      ?>
                      <input type="hidden" name="old_password" value="<?php echo isset($info['password']) ? $info['password'] : ''?>" autocomplete="off" />
                      <input type="hidden" name ="base_url" value="<?php echo base_url();?>">
                  </td>
                  <td>

                    <?php if($role_id == '1' OR $role_id == '2'):?>
                      <p style="float: right; padding-left: 10px;" data-placement="top" data-toggle="tooltip" title="Edit" class="edit" data-value="">
                        <button class="btn" data-title="Edit" >Edit</button>
                      </p>
                    <?php endif;?>

                    <?php if($role_id == '1'):?>
                      <p style="float: right;" data-placement="top" data-toggle="tooltip" title="Delete" class="delete" data-value="">
                        <button class="btn" data-toggle="modal" data-title="Delete" data-target="#delete_modal">Delete</button>
                      </p>
                    <?php endif;?>

                    <p style="float: right; padding-left: 10px;" data-placement="top" data-toggle="tooltip" title="Save" class="save display_none" data-value="">
                      <button class="btn" data-title="Save" data-toggle="modal" data-target="#save" >Save</button>
                    </p>

                    <p style="float: right;" data-placement="top" data-toggle="tooltip" title="Cancel" class="cancel display_none" data-value="">
                      <button class="btn" data-title="Cancel" data-toggle="modal" data-target="#cancel" >Cancel</button>
                    </p>
                  </td>
                </tr>
               <tr>
                  <td>
                    <label>
                      <span style="color: red">*</span>Employee Id:
                    </label>
                    <span class="employee_id"><?php echo isset($info['employee_id']) ? $info['employee_id'] : '';?></span>
                    <input name="employee_id" value="<?php echo isset($info['employee_id']) ? $info['employee_id'] : '';?>" class="form-control display_none" id="employee_id"/>
                 </td>
                 <td>
                    <label>
                      Salary:
                    </label>
                    <span class="salary"><?php isset($info['salary']) ? '$'.$info['salary'] : '';?></span>
                    <input name="salary" value="<?php isset($info['salary']) ? $info['salary'] : '';?>" class="form-control display_none" id="salary"/>
                 </td>
                 <td>
                  <label>
                      Work Email:
                    </label>
                    <span class="work_email"><?php echo isset($info['work_email']) ? $info['work_email'] : '';?></span>
                    <input name="work_email" value="<?php echo isset($info['work_email']) ? $info['work_email'] : '';?>" class="form-control display_none" id="work_email"/>
                 </td>
               </tr>
               <tr>
                  <td>
                    <label>
                      <span style="color: red">*</span>First Name:
                    </label>
                    <span class="given_name"><?php echo isset($info['given_name']) ? $info['given_name'] : '';?></span>
                    <input name="given_name" value="<?php echo isset($info['given_name']) ? $info['given_name'] : '';?>" class="form-control display_none" id="given_name"/>
                 </td>
                 <td>
                    <label>
                      Billing Rate:
                    </label>
                    <span class="billing_rate"><?php echo isset($info['billing_rate']) ? '$'.$info['billing_rate'] : '';?></span>
                    <input name="billing_rate" value="<?php isset($info['billing_rate']) ? $info['billing_rate'] : '';?>" class="form-control display_none" id="billing_rate"/>
                  </td>
                  <td>
                    <?php
                      if(isset($info['time_log_access'])){
                        if($info['time_log_access'] == 1){
                          $info['time_log_access'] = 'Yes';
                        }elseif($info['time_log_access'] == 2){
                          $info['time_log_access'] = 'No';
                        }
                      }
                    ?>
                    <label>
                      Time log Access:
                    </label>
                    <span class="time_log_access"><?php echo isset($info['time_log_access']) ? $info['time_log_access'] : '';?></span>
                    <select name="time_log_access" class="form-control default display_none" id="time_log_access">
                      <?php if($info['time_log_access'] == 'Yes'):?>
                        <option value="">- Select -</option>
                        <option value="1" selected>Yes</option>
                        <option value="2">No</option>
                      <?php elseif($info['time_log_access'] == 'No'):?>
                        <option value="">- Select -</option>
                        <option value="1">Yes</option>
                        <option value="2" selected>No</option>
                      <?php else:?>
                        <option value="" selected>- Select -</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                      <?php endif;?>
                    </select>
                  </td>
               </tr>
               <tr>
                  <td>
                    <label>
                     <span style="color: red">*</span> Last Name:
                    </label>
                    <span class="family_name"><?php echo isset($info['family_name']) ? $info['family_name'] : '';?></span>
                    <input name="family_name" value="<?php echo isset($info['family_name']) ? $info['family_name'] : '';?>" class="form-control display_none" id="family_name"/>
                 </td>
                 <td>
                    <label>
                      Default:
                    </label>
                    <span class="is_default"><?php echo isset($info['is_default']) ? $info['is_default'] : '';?></span>
                    <select name="default" class="form-control default display_none" id="default">
                      <?php if($info['is_default'] == 'Yes'):?>
                        <option value="">- Select -</option>
                        <option value="Yes" selected>Yes</option>
                        <option value="No">No</option>
                      <?php elseif($info['is_default'] == 'NO'):?>
                        <option value="">- Select -</option>
                        <option value="Yes">Yes</option>
                        <option value="No" selected>No</option>
                      <?php else:?>
                        <option value="" selected="">- Select -</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      <?php endif;?>
                    </select>
                  </td>
                 <td>
                 </td>
               </tr>
               <tr>
                  <td>
                    <label>
                      Position:
                    </label>
                    <span class="position_name"><?php echo isset($info['position_name']) ? $info['position_name'] : '';?></span>
                    <input name="position_name" value="<?php echo isset($info['position_name']) ? $info['position_name'] : '';?>" class="form-control display_none" id="position"/>
                 </td>
                 <td>
                    <label>
                      Hire Date:
                    </label>
                    <span class="hire_date"><?php echo isset($info['hire_date']) ? $info['hire_date'] : '';?></span>
                    <input type="text" name="hire_date" id="hire_date" value="<?php echo isset($info['hire_date']) ? $info['hire_date'] : '';?>" class="datetimepicker form-control dp display_none" data-date-format="YYYY-MM-DD" placeholder="" />
                 </td>
                 <td>
                   
                 </td>
               </tr>
               <tr>
                  <td>
                    <label>
                      Gender:
                    </label>
                    <span class="gender"><?php echo isset($info['gender']) ? $info['gender'] : '';?></span>
                    <select name="gender" class="form-control default display_none" id="gender">
                      <?php if($info['gender'] == 'M'):?>
                        <option value="">- Select -</option>
                        <option value="M" selected>Male</option>
                        <option value="F">Female</option>
                      <?php elseif($info['gender'] == 'F'):?>
                        <option value="">- Select -</option>
                        <option value="M">Male</option>
                        <option value="F" selected>Female</option>
                      <?php else:?>
                        <option value="" selected="">- Select -</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      <?php endif;?>
                    </select>
                 </td>
                 <td>
                    <label>
                      Release Date:
                    </label>
                    <span class="release_date"><?php echo isset($info['release_date']) ? $info['release_date'] : '';?></span>
                    <input type="text" name="release_date" id="release_date" value="<?php echo isset($info['release_date']) ? $info['release_date'] : '';?>" class="datetimepicker form-control dp display_none" data-date-format="YYYY-MM-DD" placeholder="" />
                 </td>
                 <td></td>
               </tr>
               <tr>
                 <td>
                    <label class="hidden">
                      <span style="color: red">*</span>Username:
                    </label>
                    <span class="username"><?php echo $info['username'];?></span>
                 </td>
                 <td>
                    <label>
                      Date of Birth:
                    </label>
                    <span class="birth_date"><?php echo isset($info['birth_date']) ?$info['birth_date'] : '';?></span>
                    <input type="text" name="birth_date" id="birth_date" value="<?php echo isset($info['birth_date']) ? $info['birth_date'] : '';?>" class="datetimepicker form-control dp display_none" data-date-format="YYYY-MM-DD" placeholder="" />
                 </td>
                 <td></td>
               </tr>
               <tr>
                  <td>
                   <label class="show" style="display: none;">
                      <span style="color: red">*</span>Password:
                    </label>
                    <input name="password" type="password" value="<?php echo isset($info['password']) ? $info['password'] : '';?>" class="form-control display_none" id="password"/>
                 </td>
                 <td>
                    <label>
                      Address Street:
                    </label>
                    <span class="street"><?php echo isset($info['street']) ? $info['street'] : '';?></span>
                    <input name="street" value="<?php echo isset($info['street']) ? $info['street'] : '';?>" class="form-control display_none" id="street"/>
                 </td>
                 <td></td>
               </tr>
               <tr>
                  <td>
                   <label>
                      Location:
                   </label>
                   <span class="work_location"><?php echo isset($info['work_location']) ? $info['work_location'] : '';?></span>
                   <select name="location" class="form-control role display_none" id="location">
                    <?php if($info['work_location'] == 'PH-LRCI2'):?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2" selected>PH-LRCI2</option>
                      <option value="PH-Bethaphil">PH-Bethaphil</option>
                      <option value="PH-LRCI1">PH-LRCI1</option>
                      <option value="PH-Oceana">PH-Oceana</option>
                      <option value="PH-Laoag">PH-Laoag</option>
                      <option value="PH-LS">PH-LS</option>
                      <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                    <?php elseif($info['work_location'] == 'PH-Bethaphil'):?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2">PH-LRCI2</option>
                      <option value="PH-Bethaphil" selected>PH-Bethaphil</option>
                      <option value="PH-LRCI1">PH-LRCI1</option>
                      <option value="PH-Oceana">PH-Oceana</option>
                      <option value="PH-Laoag">PH-Laoag</option>
                      <option value="PH-LS">PH-LS</option>
                      <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                    <?php elseif($info['work_location'] == 'PH-LRCI1'):?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2">PH-LRCI2</option>
                      <option value="PH-Bethaphil">PH-Bethaphil</option>
                      <option value="PH-LRCI1" selected>PH-LRCI1</option>
                      <option value="PH-Oceana">PH-Oceana</option>
                      <option value="PH-Laoag">PH-Laoag</option>
                      <option value="PH-LS">PH-LS</option>
                      <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                    <?php elseif($info['work_location'] == 'PH-Oceana'):?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2">PH-LRCI2</option>
                      <option value="PH-Bethaphil">PH-Bethaphil</option>
                      <option value="PH-LRCI1">PH-LRCI1</option>
                      <option value="PH-Oceana" selected>PH-Oceana</option>
                      <option value="PH-Laoag">PH-Laoag</option>
                      <option value="PH-LS">PH-LS</option>
                      <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                    <?php elseif($info['work_location'] == 'PH-Laoag'):?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2">PH-LRCI2</option>
                      <option value="PH-Bethaphil">PH-Bethaphil</option>
                      <option value="PH-LRCI1">PH-LRCI1</option>
                      <option value="PH-Oceana">PH-Oceana</option>
                      <option value="PH-Laoag" selected>PH-Laoag</option>
                      <option value="PH-LS">PH-LS</option>
                      <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                    <?php elseif($info['work_location'] == 'PH-LS'):?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2">PH-LRCI2</option>
                      <option value="PH-Bethaphil">PH-Bethaphil</option>
                      <option value="PH-LRCI1">PH-LRCI1</option>
                      <option value="PH-Oceana">PH-Oceana</option>
                      <option value="PH-Laoag">PH-Laoag</option>
                      <option value="PH-LS" selected>PH-LS</option>
                      <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                    <?php elseif($info['work_location'] == 'KH-PNH Cambodia'):?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2">PH-LRCI2</option>
                      <option value="PH-Bethaphil">PH-Bethaphil</option>
                      <option value="PH-LRCI1">PH-LRCI1</option>
                      <option value="PH-Oceana">PH-Oceana</option>
                      <option value="PH-Laoag">PH-Laoag</option>
                      <option value="PH-LS">PH-LS</option>
                      <option value="KH-PNH Cambodia" selected>KH-PNH Cambodia</option>
                    <?php else:?>
                      <option value="">- Select -</option>
                      <option value="PH-LRCI2">PH-LRCI2</option>
                      <option value="PH-Bethaphil">PH-Bethaphil</option>
                      <option value="PH-LRCI1">PH-LRCI1</option>
                      <option value="PH-Oceana">PH-Oceana</option>
                      <option value="PH-Laoag">PH-Laoag</option>
                      <option value="PH-LS">PH-LS</option>
                      <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                    <?php endif;?>
                  </select>
                 </td>
                 <td>
                    <label>
                      City:
                    </label>
                    <span class="city"><?php echo isset($info['city']) ? $info['city'] : '';?></span>
                    <input name="city" value="<?php echo isset($info['city']) ? $info['city'] : '';?>" class="form-control display_none" id="city"/>
                 </td>
                 <td></td>
               </tr>
               <tr>
                 <td>
                    <label>
                      Email:
                    </label>
                    <span class="email"><?php echo isset($info['email']) ? $info['email'] : '';?></span>
                    <input name="email" value="<?php echo isset($info['email']) ? $info['email'] : '';?>" class="form-control display_none" id="email"/>
                 </td>
                 <td>
                    <label>
                      State/Province:
                    </label>
                    <span class="province"><?php echo isset($info['province']) ? $info['province'] : '';?></span>
                    <input name="province" value="<?php echo isset($info['province']) ? $info['province'] : '';?>" class="form-control display_none" id="province"/>
                 </td>
                 <td></td>
               </tr>
               <tr>
                 <td>
                    <label>
                      Phone:
                    </label>
                    <span class="phone"><?php echo isset($info['phone']) ? $info['phone'] : '';?></span>
                    <input name="phone" value="<?php echo isset($info['phone']) ? $info['phone'] : '';?>" class="form-control display_none" id="phone"/>
                 </td>
                 <td>
                    <label>
                      Postal Code:
                    </label>
                    <span class="postal_code"><?php echo isset($info['postal_code']) ? $info['postal_code'] : '';?></span>
                    <input name="postal_code" value="<?php echo isset($info['postal_code']) ? $info['postal_code'] : '';?>" class="form-control display_none" id="postal_code"/>
                 </td>
                 <td></td>
               </tr>
               <tr>
                 <td>
                    <label>
                      Mobile:
                    </label>
                    <span class="mobile"><?php echo isset($info['mobile']) ? $info['mobile'] : '';?></span>
                    <input name="mobile" value="<?php echo isset($info['mobile']) ? $info['mobile'] : '';?>" class="form-control display_none" id="mobile"/>
                 </td>
                 <td>
                    <label>
                      Country:
                    </label>
                    <span class="country"><?php echo isset($info['country']) ? $info['country'] : '';?></span>
                    <input name="country" value="<?php echo isset($info['country']) ? $info['country'] : '';?>" class="form-control display_none" id="country"/>
                 </td>
                 <td></td>
               </tr>
               <tr>
                 <td>
                    <?php
                      if(isset($info['role_id'])){
                        if($info['role_id'] == 1){
                          $info['role_id'] = 'Admin';
                        }elseif($info['role_id'] == 2){
                          $info['role_id'] = 'Edit/View';
                        }elseif($info['role_id'] == 5){
                          $info['role_id'] = 'View';
                        }
                      }
                    ?>
                    <label>
                      <span style="color: red">*</span>Access:
                    </label>
                    <span class="role_id"><?php echo isset($info['role_id']) ? $info['role_id'] : '';?></span>
                    <select name="role" class="form-control default display_none" id="role">
                      <?php if($info['role_id'] == 'Admin'):?>
                        <option value="">- Select -</option>
                        <option value="1" selected>Admin</option>
                        <option value="2">Edit/View</option>
                        <option value="5">View</option>
                      <?php elseif($info['role_id'] == 'Edit/View'):?>
                        <option value="">- Select -</option>
                        <option value="1">Admin</option>
                        <option value="2" selected>Edit/View</option>
                        <option value="5">View</option>
                      <?php elseif($info['role_id'] == 'View'):?>
                        <option value="">- Select -</option>
                        <option value="1">Admin</option>
                        <option value="2">Edit</option>
                        <option value="5" selected>View</option>
                      <?php else:?>
                        <option value="" selected>- Select -</option>
                        <option value="1">Admin</option>
                        <option value="2">Edit/View</option>
                        <option value="5">View</option>
                      <?php endif;?>
                    </select>
                  </td>
                  <td>
                    <label>
                      Employee Status:
                    </label>
                    <span class="employee_status"><?php echo isset($info['employee_status']) ? $info['employee_status'] : '';?></span>
                    <input name="employee_status" value="<?php echo isset($info['employee_status']) ? $info['employee_status'] : '';?>" class="form-control display_none" id="employee_status"/>
                  </td>
                  <td></td>
               </tr>
               <tr>
                 <td>
                   <div id="loading_wrapper" style="display: none;">
                    <div class="progress progress-striped active" style="margin-bottom: 10px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="100%" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">Loading</span>
                      </div>
                      
                    </div>
                  </div>
                 </td>
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
    <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5> -->
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    <input type="hidden" name="username" value="<?php echo $info['username']?>" autocomplete="off" />
    <input type="hidden" name ="base_url" value="<?php echo base_url();?>">
          <div class="modal-body">Select "Yes" below if you are sure to delete the employee.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary delete_employee_info">Yes</button>
          </div>
        </div>
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

    <script type="text/javascript">
      var sBaseURL = '<?php echo base_url(); ?>';

      $( document ).ready(function() {
        $('.dp').datetimepicker({
            pickTime: false,
            icons: {  
              timebutton : '',
                  datebutton : ''
              }
          });


      });

    //   var objSelect = document.getElementById("team_leader");

    // //Set selected
    //  setSelectedValue(objSelect, '<?php echo isset($info['team_leader']) ? $info['team_leader'] : '';?>');

    // function setSelectedValue(selectObj, valueToSet) {
    //     for (var i = 0; i < selectObj.options.length; i++) {
    //         if (selectObj.options[i].text== valueToSet) {
    //             selectObj.options[i].selected = true;
    //             return;
    //         }
    //     }
    // }

      
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
