var i, new_empoyee_id, employee_id, first_name, middle_name, last_name, birthdate, sex, contact, email, position, major, status, activeStatus;
var oldMajor, oldBirthdate, oldSex, oldEmail, oldPosition, oldFirstName, oldMiddleName, oldLastName, oldContactNo;


$(function () {
   populateTable();
})
    

    function updateRow(){ 
      $.ajax({
                url: countUrl,
                type: 'post',
                dataType: 'json', 
                data: {'table' : 'teachers', 'set' : 'employee_id', 'value' : new_empoyee_id  }, 
                success: function(result){
                  var employeeCount = result;    
                  if (new_empoyee_id == null || new_empoyee_id.trim() === ''){
                    $.notify({
                      title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                      message: "Employee ID cannot be empty."
                    },{
                      type: 'danger',
                      animate: {
                        enter: 'animated fadeInUp',
                        exit: 'animated fadeOutRight'
                      },
                      placement: {
                        from: "top",
                        align: "right"
                      },
                      offset: 20,
                      spacing: 10,
                      z_index: 1031,
                    });
                  }
                  else if(employeeCount > 0 && employee_id != new_empoyee_id){
                    $.notify({
                      title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                      message: "Employee ID already exist."
                    },{
                      type: 'danger',
                      animate: {
                        enter: 'animated fadeInUp',
                        exit: 'animated fadeOutRight'
                      },
                      placement: {
                        from: "top",
                        align: "right"
                      },
                      offset: 20,
                      spacing: 10,
                      z_index: 1031,
                    });
                  }
                  else{
                    $.ajax({
                      url: updateUrl,
                      type: 'post',
                      dataType: 'json', 
                      data: {
                      'table' : 'teachers',
                      'employee_id' : new_empoyee_id, 
                      'first_name': first_name, 
                      'middle_name': middle_name, 
                      'last_name': last_name, 
                      'birthdate': birthdate, 
                      'contact_no': contact, 
                      'sex': sex, 
                      'email': email, 
                      'major': major,
                      'position': position, 
                      'set': employee_id }, 
                      success: function(result){
                        console.log(result);

                        $.ajax({
                          url: auditTrailUpdateUrl,
                          type: 'post',
                          dataType: 'json', 
                          data: {'oldFirstName' : oldFirstName, 'first_name' : first_name, 'oldMiddleName' : oldMiddleName, 'middle_name' : middle_name, 'oldLastName': oldLastName, 'last_name' : last_name, 'oldBirthdate' : oldBirthdate, 'birthdate' : birthdate, 'oldContactNo' : oldContactNo, 'contact_no' : contact, 'oldSex' : oldSex, 'sex' : sex, 'oldEmail' : oldEmail, 'email' : email, 'oldMajor' : oldMajor, 'major': major, 'oldPosition' : oldPosition, 'position' : position, 'employee_id' : employee_id, 'new_empoyee_id' : new_empoyee_id}, 
                          success: function(result){
                            console.log(result);
                          }
                        });

                        hide();
                        populateTable();
                        $.notify({
                          title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
                          message: "Teacher info updated."
                        },{
                          type: 'success',
                          animate: {
                            enter: 'animated fadeInUp',
                            exit: 'animated fadeOutRight'
                          },
                          placement: {
                            from: "top",
                            align: "right"
                          },
                          offset: 20,
                          spacing: 10,
                          z_index: 1031,
                        });
                      }
                    }); 
                  } 
                }
      }); 

    }

function populateTable(){
  
  $('#teachersTable').DataTable().destroy();

  $('#teachersTable').DataTable({
        "columns": [
            { "width": "20%" },
            { "width": "40%" },
            { "width": "10%" },
            { "width": "20%" },
            { "width": "5%" },
            { "width": "15%" }
            ],
        "order": [] ,
        "ajax": getRecordsUrl,
        "responsive": true
  });

  $("#teachersTable").on("click", "tr td .view-btn", function(){

    hide();
    
    employee_id = $(this).parents('tr').find('td:first').html();

    $.ajax({
            url: getRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'teachers', 'set': 'employee_id', 'value': employee_id}, 
            success: function(result){
              employee_id = result.employee_id;
              $( "#view-id" ).val(result.employee_id);
              $( "#view-firstname" ).val(result.first_name);
              $( "#view-middlename" ).val(result.middle_name);
              $( "#view-lastname" ).val(result.last_name);
              $( "#view-birthdate" ).val(result.birthdate);
              $( "#view-sex" ).select2().val(result.sex).trigger('change');
              $( "#view-contact" ).val(result.contact_no);
              $( "#view-email" ).val(result.email);
              $( "#view-major" ).val(result.major);
              $( "#view-position" ).val(result.position);
              
              oldFirstName = result.first_name;
              oldMiddleName = result.middle_name;
              oldLastName = result.last_name;
              oldBirthdate = result.birthdate;
              oldSex = result.sex;
              oldContactNo = result.contact_no;
              oldEmail = result.email;
              oldMajor = result.major;
              oldPosition = result.position;
            }
          });   
  });

  $("#teachersTable").on("click", "tr td .delete-btn", function(){
      employee_id = $(this).parents('tr').find('td:first').html();
      active_status = $(this).parents('tr').find('td:nth-child(5)').find('span').html();

      if(active_status=='active'){
        $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-danger');
        $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
        $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
        $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-danger');
        $('#text-status').html('Are you sure you want to inactivate record?');
      }
      else if(active_status=='inactive'){
        $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-success');
        $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-success');
        $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-success');
        $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-success');
        $('#text-status').html('Are you sure you want to activate record?');
      }
  });
  
}

//ADD RECORD

$("#add-btn").click(function(){
    var id = $('#id-input').val();
    var first_name = $('#firstname-input').val();
    var middle_name = $('#middlename-input').val();
    var last_name = $('#lastname-input').val();
    var birthdate = $('#birthdate-input').val();
    var sex = $('#sex-input').val();
    var contact = $('#contact-input').val();
    var email = $('#email-input').val();
    var major = $('#major-input').val();
    var position = $('#position-input').val();

    $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'teachers', 'set' : 'employee_id', 'value' : id  }, 
            success: function(result){
              var idCount = result;    
              if (id == null || id.trim() === ''){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please fill up Employee ID."
                },{
                  type: 'danger',
                  animate: {
                    enter: 'animated fadeInUp',
                    exit: 'animated fadeOutRight'
                  },
                  placement: {
                    from: "top",
                    align: "right"
                  },
                  offset: 20,
                  spacing: 10,
                  z_index: 1031,
                });
              }
              else if(idCount > 0){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Employee ID in use."
                },{
                  type: 'danger',
                  animate: {
                    enter: 'animated fadeInUp',
                    exit: 'animated fadeOutRight'
                  },
                  placement: {
                    from: "top",
                    align: "right"
                  },
                  offset: 20,
                  spacing: 10,
                  z_index: 1031,
                });
              }
              else{
                $.ajax({
                  url: addUrl,
                  type: 'post',
                  dataType: 'json', 
                  data: {
                    'table' : 'teachers',
                    'employee_id' : id, 
                    'first_name' : first_name, 
                    'middle_name' : middle_name, 
                    'last_name' : last_name, 
                    'birthdate' : birthdate, 
                    'sex' : sex, 
                    'contact_no' : contact, 
                    'email' : email, 
                    'major' : major, 
                    'position' : position 
                  }, 
                  success: function(result){
                    console.log(result);              
                    populateTable();
                    $('#id-input').val('');
                    $('#firstname-input').val('');
                    $('#middlename-input').val('');
                    $('#lastname-input').val('');
                    $('#birthdate-input').val('');
                    $('#sex-input').val('');
                    $('#contact-input').val('');
                    $('#email-input').val('');
                    $('#major-input').val('');
                    $('#position-input').val('');
                    
                    $.notify({
                      title: '<strong><i class="icon fa fa-ban"></i>SUCCESS!</strong>',
                      message: "Employee added."
                    },{
                      type: 'success',
                      animate: {
                        enter: 'animated fadeInUp',
                        exit: 'animated fadeOutRight'
                      },
                      placement: {
                        from: "top",
                        align: "right"
                      },
                      offset: 20,
                      spacing: 10,
                      z_index: 1031,
                    });
                  }
                }); 
              }
            }
          
          });     
    
  })




//VIEW MODAL 

function show(){
  i=1;
  $( "#view-id" ).prop( "disabled", false );
  $( "#view-firstname" ).prop( "disabled", false );
  $( "#view-middlename" ).prop( "disabled", false );
  $( "#view-lastname" ).prop( "disabled", false );
  $( "#view-birthdate" ).prop( "disabled", false );
  $( "#view-sex" ).prop( "disabled", false );
  $( "#view-contact" ).prop( "disabled", false );
  $( "#view-email" ).prop( "disabled", false );
  $( "#view-major" ).prop( "disabled", false );
  $( "#view-position" ).prop( "disabled", false );
  $( "#view-update" ).show();
}

function hide(){
  i=0;
    $( "#view-id" ).prop( "disabled", true );
    $( "#view-firstname" ).prop( "disabled", true );
    $( "#view-middlename" ).prop( "disabled", true );
    $( "#view-lastname" ).prop( "disabled", true );
    $( "#view-birthdate" ).prop( "disabled", true );
    $( "#view-sex" ).prop( "disabled", true );
    $( "#view-contact" ).prop( "disabled", true );
    $( "#view-email" ).prop( "disabled", true );
    $( "#view-major" ).prop( "disabled", true );
    $( "#view-position" ).prop( "disabled", true );
    $( "#view-update" ).hide();
}

$('#view-edit').click(function(){
  if(i==0){
    show();
  }
  else if(i==1){
    hide();
  }      
})

$('#view-update').click(function(){
  new_empoyee_id = $( "#view-id" ).val();
  first_name = $( "#view-firstname" ).val();
  middle_name = $( "#view-middlename" ).val();
  birthdate = $('#view-birthdate').val();
  sex = $('#view-sex').val();
  contact = $('#view-contact').val();
  email = $('#view-email').val();
  last_name = $( "#view-lastname" ).val();
  major = $( "#view-major" ).val();
  position = $( "#view-position" ).val();
  updateRow();
  
})


//DELETE MODAL

$('#delete-confirm').click(function(){
  var setStat;
  if(active_status=='active'){
    setStat='inactive';
  }
  else if(active_status=='inactive'){
    setStat='active';
  }
  $.ajax({
    url: updateUrl,
    type: 'post',
    dataType: 'json', 
    data: {'table' : 'teachers', 'status': setStat, 'set': employee_id }, 
    success: function(result){
      console.log(result);
      populateTable();

      $.ajax({
        url: auditTrailUpdateUrl,
        type: 'post',
        dataType: 'json', 
        data: {'employee_id': employee_id, 'status' : setStat }, 
        success: function(result){
          console.log(result);
        }
      });

      if(setStat=='inactive'){
        $.notify({
          title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
          message: "Employee: " + employee_id + " set to inactive."
        },{
          type: 'danger',
          animate: {
            enter: 'animated fadeInUp',
            exit: 'animated fadeOutRight'
          },
          placement: {
            from: "top",
            align: "right"
          },
          offset: 20,
          spacing: 10,
          delay: 5000,
          z_index: 1031,
        });     
      }
      else if(setStat=='active'){
        $.notify({
          title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
          message: "Employee: " + employee_id + " set to active."
        },{
          type: 'success',
          animate: {
            enter: 'animated fadeInUp',
            exit: 'animated fadeOutRight'
          },
          placement: {
            from: "top",
            align: "right"
          },
          offset: 20,
          spacing: 10,
          delay: 5000,
          z_index: 1031,
        });     
      }
    }
  }); 
})