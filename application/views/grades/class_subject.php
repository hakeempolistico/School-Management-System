<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Class Subject</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pace/pace.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/  /3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
  <style type="text/css">
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<div hidden class="loading">Loading&#8230;</div>
  
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <div class="alert alert-success alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
        Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
     </div> -->
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Grades
        <small>Input students grades per subject</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-file"></i> Grades Management</li>
        <li><a href="<?php echo base_url('grades/manage');?>">Manage</a></li>
        <li class="active">Class Subject</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-line-chart"></i> Class Subjects Info</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-12" style="margin: -5px 0px -5px 0px;">
                <a href="<?php echo base_url('grades/manage');?>"><h5>Choose another class </h5></a>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Semester:</b></h5>
                <h5><?php echo $data['semester'];?></h5>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Quarter:</b></h5>
                <h5><?php echo $data['quarter'];?></h5>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Subject Code:</b></h5>
                <h5><?php echo $data['subject'];?></h5>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Class:</b></h5>
                <h5><?php echo $data['section_info'];?></h5>
              </div>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-line-chart"></i> Student Grades</h3>
            </div>
            <div class="panel-body">
              <table id = "table-grades" class="table table-bordered table-striped" style="font-size: 14px;">
                <thead>
                  <tr>
                    <th style="width: 15%">LRN</th>
                    <th>Full Name</th>
                    <th style="width: 10%">Grade</th>
                    <th style="width: 10%">Status</th>
                  </tr>
                </thead>
                <style>
                  table.dataTable tbody td {
                    vertical-align: middle;
                  }
                </style>
                <tbody>
                  <?php foreach ($grades as $v) { ?> 
                  <tr>
                    <td><?php echo $v->students_info_lrn;?></td>
                    <td><?php echo $v->full_name;?></td>
                    <td><?php echo (isset($v->grade) ? $v->grade : 
                    '<select id="select-subject" data-placeholder="" class="subject-input form-control select2" style="width:100%;">
                        <option></option>
                        <option>65</option>
                        <option>66</option>
                        <option>67</option>
                        <option>68</option>
                        <option>69</option>
                        <option>70</option>
                        <option>71</option>
                        <option>72</option>
                        <option>73</option>
                        <option>74</option>
                        <option>75</option>
                        <option>76</option>
                        <option>77</option>
                        <option>78</option>
                        <option>79</option>
                        <option>80</option>
                        <option>81</option>
                        <option>82</option>
                        <option>83</option>
                        <option>84</option>
                        <option>85</option>
                        <option>86</option>
                        <option>87</option>
                        <option>88</option>
                        <option>89</option>
                        <option>90</option>
                        <option>91</option>
                        <option>92</option>
                        <option>93</option>
                        <option>94</option>
                        <option>95</option>
                        <option>96</option>
                        <option>97</option>
                        <option>98</option>
                        <option>99</option>
                      </select>'
                    ); ?></td>
                    <td><?php echo $v->action;?></td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-confirm">
        <div class="modal-dialog" style="max-width: 400px">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-check"></i> Confirmation Message!</h3>
            </div>
            <div class="panel-body">
              <p>Are you sure you want to input data? Once confirmed, data cannot be updated.</p>              
              <button data-dismiss="modal" type="button" id="btn-confirm" style="width: 100px" class="btn btn-sm btn-block btn-success pull-right"><i class="fa fa-check"></i> &nbsp; Confirm</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {footer}
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->

<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })

  var aYear = '<?php echo $this->session->academic_year; ?>';
  var addGradeUrl = '<?php echo base_url('grades/manage/addGrade'); ?>';

  $(function () {
    $('#studentList1').DataTable() 
    $('.select2').select2();
    var grade, lrn;
    var semester = '<?php echo $data['semester'];?>';
    var quarter = '<?php echo $data['quarter'];?>';
    var subject = '<?php echo $data['subject'];?>';

    $('#table-grades').on('click', ".btn-input", function(){
      grade = $(this).parents('tr').find('select').val();
      lrn = $(this).parents('tr').find('td:first').text();
      if(grade || grade != ''){
      $('#modal-confirm').modal('show');
      }
    })

    $('#btn-confirm').on('click',function(){
      $.ajax({
        url: addGradeUrl,
        type: 'post',
        dataType: 'json',  
        data: {'lrn' : lrn, 'semester' : semester, 'quarter' : quarter, 'subject_code' : subject, 'grade' :  grade, 'academic_year' : aYear},
        success: function(res){
          location.reload()
        }
      });
      
    })
  })
</script>
</body>
</html>
