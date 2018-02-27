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

  .table th{
    padding: 0 !important;
  }

  .table td{
    border: none;
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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url().'employee/manage_team_index';?>">Team List</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $team_name;?></li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> <?php echo $team_name;?></div>
        <div class="card-body">
          <div class="table-responsive table_div" style="position: relative; min-height: 450px!important">
            <div class="alert alert-error error_message" style="display: none;"></div>
            <table class="table" style="width: 47%!important; position: absolute;" cellspacing="0">
              <th style="text-align: center;">Team Leaders</th>
              <th>
                <?php
                  $disabled = '';
                  if(isset($team_leaders['count'])){
                    if($team_leaders['count'] >= 5){
                      $disabled = 'disabled';
                    }
                  }
                ;?>
                <button style="float: right;" type="button" class="btn btn add_team_leader" data-toggle="modal" data-title="Add Employee" data-target="#add_team_leader" <?php echo $disabled;?>>Add Team Leaders</button>
              </th>
              <tbody>
                <?php if(isset($team_leaders['team_leader'])):?>
                  <?php foreach($team_leaders['team_leader'] as $key => $tl):?>
                    <tr>
                      <td class="team_leader"><?php echo $tl['team_leader'];?></td>
                      <td style="float: right;">
                        <input type="hidden" name="team_name" value="<?php echo $team_name;?>">
                        <a class="delete_tl" href="#">Remove</a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>

            <table class="table" style="width: 47%!important; float: right;" cellspacing="0">
              <th style="text-align: center;">Team Members</th>
              <th>
                <button style="float: right;" type="button" class="btn btn add_team_member" data-toggle="modal" data-title="Add Employee" data-target="#add_team_member">Add Team Members</button>
              </th>
              <tbody>
                <?php if(array_check($team_members)):?>
                  <?php foreach($team_members['team_members'] as $key => $tm):?>
                    <tr>
                      <td><?php echo $tm['given_name'].' '.$tm['family_name'];?></td>
                      <td style="float: right;">
                        <input type="hidden" name="team_member" value="<?php echo $tm['username'];?>">
                        <a class="delete_tm" href="#">Remove</a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
            <div id="loading_wrapper" style="display: none;">
              <div class="progress progress-striped active" style="margin-bottom: 10px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="100%" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                  <span class="sr-only">Loading</span>
                </div>
              </div>
            </div>
          </div>
          <div class="margin-top-10"></div>
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
              <span aria-hidden="true">×</span>
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

    <div class="modal fade new_modal" id="add_team_leader" tabindex="-1" role="dialog" aria-labelledby="ADD Team TITLE" aria-hidden="true">
      <div class="modal-dialog dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Team Leader</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row margin-top-10"></div>
            <div class="alert alert-error error_message" style="display: none;"></div>
             <input type="hidden" class="modal_type" value="team_leader"/>
             <input type="hidden" class="team_name" value="<?php echo $team_name;?>"/>
            <div class="row margin-top-10">
              <div class="col-md-3 col-sm-1">
                Team Leader:
              </div>
              <div class="col-md-8 col-sm-8" style="">
                <select name="team_leader" class="form-control default" id="team_leader">
                  <option value="">- Select -</option>
                  <?php if(array_check($employees)):?>
                    <?php foreach($employees as $key => $tl):?>
                      <option value="<?php echo $tl['given_name'].' '.$tl['family_name'];?>">
                        <?php echo $tl['family_name'].', '.$tl['given_name'];?>
                      </option>
                    <?php endforeach;?>
                  <?php endif;?>
                </select>         
              </div>
            </div>
          </div>
          <div class="modal-footer" id="modal-footer">
            <div id="action_wrapper">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary add_tl">Add</button>
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

    <div class="modal fade new_modal" id="add_team_member" tabindex="-1" role="dialog" aria-labelledby="ADD Team TITLE" aria-hidden="true">
      <div class="modal-dialog dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Team Members</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row margin-top-10"></div>
            <div class="alert alert-error error_message" style="display: none;"></div>
             <input type="hidden" class="modal_type" value="team_member"/>
             <input type="hidden" class="team_name" value="<?php echo $team_name;?>"/>
            <div class="row margin-top-10">
              <div class="col-md-3 col-sm-1">
                Employees:
              </div>
              <div class="col-md-8 col-sm-8" style="">
                <select name="team_member" class="form-control default" id="team_member">
                  <option value="">- Select -</option>
                  <?php if(array_check($employees)):?>
                    <?php foreach($employees as $key => $tm):?>
                      <option value="<?php echo $tm['username'];?>">
                        <?php echo $tm['family_name'].', '.$tm['given_name'];?>
                      </option>
                    <?php endforeach;?>
                  <?php endif;?>
                </select>         
              </div>
            </div>
          </div>
          <div class="modal-footer" id="modal-footer">
            <div id="action_wrapper">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary add_tm">Add</button>
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
