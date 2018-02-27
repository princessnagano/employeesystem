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

  .table td, .table th{
    padding: 0 !important;
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

          <ul style="list-style: none;" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Punch in/out">
              <a class="nav-link" href="<?php echo base_url();?>Time/bundy_index">
                <i class="fa fa-fw fa-clock-o"></i>
                <span class="nav-link-text">Punch in/out</span>
              </a>
            </li>
            <?php if($user['role_id'] == 1 OR $user['time_log_access'] == 1):?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Employee Time Logs">
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
      <div style="margin-left: 85%; margin-bottom: 20px;">
  <?php if($user['role_id'] == '1' OR $user['role_id'] == '2'):?>
          <button type="button" class="btn btn add_employee" data-toggle="modal" data-title="Add Employee" data-target="#add_employee">Add Employee</button>
  <?php endif;?>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Employee List</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="text-align: center;">Employee id</th>
                  <th style="text-align: center;">Family Name</th>
                  <th style="text-align: center;">Given Name</th>
                  <th style="text-align: center;">Position</th>
                  <th style="text-align: center;">Work Location</th>
                  <th style="text-align: center;">Gender</th>
                  <th style="text-align: center;">Hire Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>

                </tr>
              </tfoot>
              <tbody>
                <?php if(array_check($employees)):?>
                  <?php foreach($employees as $ekey => $employee):?>
                    <tr>
                      <td style="text-align: center;">
                        <?php $url_encode = url_encode($employee['username']);?>
                        <a href="<?php echo base_url() . 'employee/info/' . $url_encode ?>"><?php echo $employee['employee_id'];?></a>
                      </td>
                      <td style="text-align: center;"><?php echo $employee['family_name'];?></td>
                      <td style="text-align: center;"><?php echo $employee['given_name'];?></td>
                      <td style="text-align: center;"><?php echo isset($employee['position_name']) ? $employee['position_name'] : '';?></td>
                      <td style="text-align: center;"><?php echo isset($employee['work_location']) ? $employee['work_location'] : '';?></td>
                      <td style="text-align: center;"><?php echo isset($employee['gender']) ? $employee['gender'] : '';?></td>
                      <td style="text-align: center;"><?php echo isset($employee['hire_date']) ? date('F d, Y', strtotime($employee['hire_date'])) : '';?></td>
                    </tr>
                  <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
            <div class="pagination_holder" align="right"><?php echo $links['pagination']; ?></div>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Ã—</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade new_modal" id="add_employee" tabindex="-1" role="dialog" aria-labelledby="ADD STAFF TITLE" aria-hidden="true">
      <div class="modal-dialog dialog" style="margin-left: 280px!important;">
        <div class="modal-content" style="width: 150%;">
          <div class="modal-header">
            <h4 class="modal-title">Add Staff</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p style="font-size: 12px">Fields with asteres are required.</p>
            <input type="hidden" class="report_type" value="add_employee"/>
            
            <div class="row margin-top-10"></div>
            <div class="alert alert-error error_message" style="display: none;"></div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                <span style="color: red">*</span>Employee Id:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="employee_id" class="form-control" id="employee_id"/>         
              </div>

              <div class="col-md-2 col-sm-1">
                Salary:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="salary" class="form-control" id="salary"/>         
              </div>
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                <span style="color: red">*</span>First Name:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="given_name" class="form-control" id="given_name"/>         
              </div>

              <div class="col-md-2 col-sm-1">
                Billing Rate:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="billing_rate" class="form-control" id="billing_rate"/>         
              </div>
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                <span style="color: red">*</span>Last Name:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="family_name" class="form-control" id="family_name"/>         
              </div>

              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                Default:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <select name="default" class="form-control default" id="default">
                  <option value="">- Select -</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <div class="row margin-top-10 drill_down_row">
              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                Position:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="position" class="form-control" id="position"/>
              </div>

              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                Hire Date:
              </div>
              <div class="col-md-5 col-sm-5" style="padding-right: 0px !important">
                <div class="input-group date f_left" style="width: 150px">
                  <input style="margin: 0" id="hire_date" type="text" class="form-control dp" placeholder="" name="date" data-date-format="YYYY-MM-DD" />
                  <span class="input-group-addon" style="width:41px"><span class="fa fa-calendar"></span></span>
                </div>
              </div>           
            </div>

            <div class="row margin-top-10 drill_down_row">
              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                Gender:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <select name="gender_name" class="form-control default" id="gender">
                  <option value="">- Select -</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>

              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                Release Date:
              </div>
              <div class="col-md-5 col-sm-5" style="padding-right: 0px !important">
                <div class="input-group date f_left" style="width: 150px">
                  <input style="margin: 0" id="release_date" type="text" class="form-control dp" placeholder="" name="date" data-date-format="YYYY-MM-DD" />
                  <span class="input-group-addon" style="width:41px"><span class="fa fa-calendar"></span></span>
                </div>
              </div>            
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                <span style="color: red">*</span>Username:
              </div>
              <div class="col-md-3 col-sm-4" style="">
                <input name="username" class="form-control" id="username"/>         
              </div>

              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                Date of Birth:
              </div>
              <div class="col-md-5 col-sm-5" style="padding-right: 0px !important">
                <div class="input-group date f_left" style="width: 150px">
                  <input style="margin: 0" id="birth_date" type="text" class="form-control dp" placeholder="" name="date" data-date-format="YYYY-MM-DD" />
                  <span class="input-group-addon" style="width:41px"><span class="fa fa-calendar"></span></span>
                </div>
              </div>
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                <span style="color: red">*</span>Password:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="password" class="form-control" id="password" type="password" />         
              </div>

              <div class="col-md-2 col-sm-1">
                Street:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="street" class="form-control" id="street"/>         
              </div>              
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                Location:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <select name="location" class="form-control role" id="location">
                  <option value="">- Select -</option>
                  <option value="PH-LRCI2">PH-LRCI2</option>
                  <option value="PH-Bethaphil">PH-Bethaphil</option>
                  <option value="PH-LRCI1">PH-LRCI1</option>
                  <option value="PH-Oceana">PH-Oceana</option>
                  <option value="PH-Laoag">PH-Laoag</option>
                  <option value="PH-LS">PH-LS</option>
                  <option value="KH-PNH Cambodia">KH-PNH Cambodia</option>
                </select>
              </div>

              <div class="col-md-2 col-sm-1">
                City:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="city" class="form-control" id="city"/>         
              </div>
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                Email:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="email" class="form-control" id="email"/>         
              </div>

              <div class="col-md-2 col-sm-1">
                State/Province:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="province" class="form-control" id="province"/>         
              </div>
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                Phone:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="phone" class="form-control" id="phone"/>         
              </div>

              <div class="col-md-2 col-sm-1">
                Postal Code:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="postal_code" class="form-control" id="postal_code"/>         
              </div>
            </div>

            <div class="row margin-top-10">
              <div class="col-md-2 col-sm-1">
                Mobile:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="mobile" class="form-control" id="mobile"/>         
              </div>

              <div class="col-md-2 col-sm-1">
                Country:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="country" class="form-control" id="country"/>         
              </div>
            </div>

            <div class="row margin-top-10 drill_down_row">
              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                <span style="color: red">*</span>Access:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <select name="role" class="form-control role" id="role">
                  <option value="">- Select -</option>
                  <option value="1">Admin</option>
                  <option value="2">View/Edit</option>
                  <option value="5">View</option>
                </select>
              </div> 

              <div class="col-md-2 col-sm-1">
                Employee Status:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="employee_status" class="form-control" id="employee_status"/>         
              </div>           
            </div>

            <div class="row margin-top-10 drill_down_row">
              <div class="col-md-2 col-sm-1" style="margin-top: 5px;">
                Time Log Access:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <select name="time_log_access" class="form-control default" id="time_log_access">
                  <option value="">- Select -</option>
                  <option value="1">Yes</option>
                  <option value="2">No</option>
                </select>
              </div>

              <div class="col-md-2 col-sm-1">
                Work Email:
              </div>
              <div class="col-md-3 col-sm-3" style="">
                <input name="work_email" class="form-control" id="work_email"/>         
              </div>
            </div>
          </div>
          <div class="modal-footer" id="modal-footer">
            <div id="action_wrapper">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary save_employee_info">Save</button>
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
