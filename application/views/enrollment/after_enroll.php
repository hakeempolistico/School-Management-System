<!-- include header.php file in template_blocks folder-->
<?php include 'template_blocks/header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!--<div class="alert bg-navy alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Make sure to receive the necessary requirements for enrollment, otherwise the student won't be enrolled!
     </div>-->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Enroll Student
        <small>Success</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li>Register Student</li>
        <li class="active">After Register</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="callout callout-success">
        <h4>Enrollment Complete!</h4>

        <p>You have successfully enrolled <bold class="name">Adrielle Kristine Nicolette M. Escaro</bold> to <bold id="strand">STEM</bold>. Would you like to enroll another student?</p>
      </div>

      <div class="box box-default">
        <div class="box-body box-profile" style=" padding: 20px;">
          <div class="row">
            <div class="col-md-4"><center>
              <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>" style="width: 70%; margin-bottom: 10px;"></center>
              <h3 class="profile-username text-center name" style="padding: 0 20px;">Adrielle Kristine Nicolette M. Escaro</h3>

              <a href="<?php echo site_url('enrollment/enroll_student'); ?>" class="btn btn-primary" style="width:100%; margin-bottom: 10px;">Enroll another student</a>
            </div>
            <!-- /. col-->

            <div class="col-md-8">
              <table class="table">
                <tr>
                  <td><b>LRN</b></td>
                  <td><a id="lrn">SEE HOW DIRTY I CAN GET THEM</a></td>
                </tr>
                <tr>
                  <td><b>Note</b></td>
                  <td><a id="note">LETS BE ALONE TOGETHER</a></td>
                </tr>
                <tr>
                  <td><b>Section Name</b></td>
                  <td><a id="section_name">TAKE IT ALL AWAY</a></td>
                </tr>
                <tr>
                  <td><b>Academic Year</b></td>
                  <td><a id="academic_year">OOOOOOOOOH</a></td>
                </tr>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /. box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  {footer}
  <!-- /.Footer -->


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- js ni adrii -->
<script src="<?php echo base_url(); ?>js/forminput.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
$(document).ready(function(){ 


  var lastLrn = <?php echo $lastLrn;?>;
  var ajaxUrl = "<?php echo base_url("enrollment/enroll_student/ajax"); ?>"

  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : lastLrn, 'table': 'students_info', 'set': 'lrn'}, 
            success: function(result){
              //alert(result);

                $('.name').html(result.first_name +" "+ result.middle_name + " " + result.last_name);

            }
  });

  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : lastLrn, 'table': 'enrolled_students', 'set': 'students_info_lrn'}, 
            success: function(result){

                $('#lrn').html(result.students_info_lrn);
                $('#note').html(result.note); 

                var section_id = result.section_id;
                var academic_year_id = result.academic_year_id;

                $.ajax({
                          url: ajaxUrl,
                          type: 'post',
                          dataType: 'json', 
                          data: {'value' : section_id, 'table': 'sections', 'set': 'id'}, 
                          success: function(result){

                              var strand_code = result.strand_code;
                              var year_level_id = result.year_level_id;
                              var name = result.name;

                              if (year_level_id == 1)
                              {
                                year_level_id = '11';
                              } else 
                              {
                                year_level_id = '12';
                              }

                              $('#strand').html(strand_code);
                              $('#section_name').html(strand_code+year_level_id+name);
                            
                            }
                });

                $.ajax({
                          url: ajaxUrl,
                          type: 'post',
                          dataType: 'json', 
                          data: {'value' : academic_year_id, 'table': 'academic_years', 'set': 'id'}, 
                          success: function(result){

                              $('#academic_year').html(result.year_start+'-'+result.year_end);
                            
                          }
                });
              
              }
  });

  

  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : lastLrn, 'table': 'parents', 'set': 'students_info_lrn'}, 
            success: function(result){

                $('#father_name').html(result.father_name);
                $('#father_contact').html(result.father_contact);
                $('#mother_name').html(result.mother_name);
                $('#mother_contact').html(result.mother_contact);
              
              }
  });
});
</script>
<script>

    $('.flat-red').on('ifChecked', function(event){
      var radioInput = $(this).val(); 
      

      if(radioInput == "Father"){
        alert(radioInput);
        $('#guardianInput').hide();
        $('#inputGUARDIAN').val($('#inputFATHER').val());
        $('#inputRELATIONSHIP').val(radioInput);
        $('#inputGUARDIANCONTACT').val($('#inputFATHERCONTACT').val());

      }else if(radioInput == "Mother"){
        alert(radioInput);
        $('#guardianInput').hide();
        $('#inputGUARDIAN').val($('#inputMOTHER').val());
        $('#inputRELATIONSHIP').val(radioInput);
        $('#inputGUARDIANCONTACT').val($('#inputMOTHERCONTACT').val());

      }else{
        $('#guardianInput').show();
        $('#inputGUARDIAN').val('');
        $('#inputRELATIONSHIP').val('');
        $('#inputGUARDIANCONTACT').val('');
      }

    });
</script>
<script>
//Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd'
    })

    //iCheck for checkbox and radio inputs
    $('input[type="radio"].minimal').iCheck({
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="radio"].minimal-red').iCheck({
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="radio"].flat-red').iCheck({
      radioClass   : 'iradio_flat-green'
    })
</script>
<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2();
    
</script>


</body>
</html>
