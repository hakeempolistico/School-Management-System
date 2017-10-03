var i;
var new_empoyee_id;
var employee_id;
var first_name;
var middle_name;
var last_name;
var position;
var major;
var status;


  var getRecordsUrl = 'teachers/ajaxGetRecords';
  var countUrl = "teachers/ajaxCountRow";
  var addUrl = "teachers/ajaxInsert";
  var updateUrl = "teachers/ajaxUpdate";
  var getRowUrl = "teachers/ajaxGetRow";
  var deleteRowUrl = "teachers/ajaxDeleteRow";


$(function () {
   $('.loading').show();
   populateTable();
   $('.loading').delay(500).hide();
})
    

    function updateRow(){ 
      $('.loading').show();
      $.ajax({
                url: countUrl,
                type: 'post',
                dataType: 'json', 
                data: {'table' : 'teachers', 'set' : 'employee_id', 'value' : new_empoyee_id  }, 
                success: function(result){
                  var employeeCount = result;    
                  if (new_empoyee_id == null || new_empoyee_id.trim() === ''){
                    alert('Employee ID cannot be empty');
                  }
                  else if(employeeCount > 0 && employee_id != new_empoyee_id){
                    alert('Employee ID already exist');
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
                      'major': major, 
                      'position': position, 
                      'status': status, 
                      'set': employee_id }, 
                      success: function(result){
                        console.log(result);
                        hide();
                        populateTable();
                      }
                    }); 
                  } 
                $('.loading').delay(500).hide();
                }
      }); 

    }

function populateTable(){
  
  $('#teachersTable').DataTable().destroy();

  $('#teachersTable').DataTable({
    "columns": [
        { "width": "20%" },
        { "width": "40%" },
        { "width": "20%" },
        { "width": "20%" }
        ],
        "order": [] ,
        "ajax": getRecordsUrl
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
              $( "#view-major" ).val(result.major);
              $( "#view-position" ).val(result.position);
              $( "#view-status" ).val(result.status);
            }
          });   
  });

  $("#teachersTable").on("click", "tr td .edit-btn", function(){

    employee_id = $(this).parents('tr').find('td:first').html();

    $.ajax({
            url: getRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'teachers', 'set': 'employee_id', 'value': employee_id}, 
            success: function(result){          
              employee_id = result.employee_id;
              $( "#edit-id" ).val(result.employee_id);
              $( "#edit-firstname" ).val(result.first_name);
              $( "#edit-middlename" ).val(result.middle_name);
              $( "#edit-lastname" ).val(result.last_name);
              $( "#edit-major" ).val(result.major);
              $( "#edit-position" ).val(result.position);
              $( "#edit-status" ).val(result.status);
            }
          });   
  });

  $("#teachersTable").on("click", "tr td .delete-btn", function(){
      employee_id = $(this).parents('tr').find('td:first').html();
  });
  
}

//ADD RECORD

$("#add-btn").click(function(){
    var id = $('#id-input').val();
    var first_name = $('#firstname-input').val();
    var middle_name = $('#middlename-input').val();
    var last_name = $('#lastname-input').val();
    var major = $('#major-input').val();
    var position = $('#position-input').val();

    $('.loading').show();
    $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'teachers', 'set' : 'employee_id', 'value' : id  }, 
            success: function(result){
              var idCount = result;    
              if (id == null || id.trim() === ''){
                $('#alert-box').slideDown(1000);
                $('#alert-box').addClass('alert-danger').removeClass('alert-success');
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please fill up subject code.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else if(idCount > 0){
                $('#alert-box').slideDown(1000);
                $('#alert-box').addClass('alert-danger').removeClass('alert-success');
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Subject code in in use. Please try another one.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
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
                    $('#major-input').val('');
                    $('#position-input').val('');
                    $('#alert-box').slideDown(1000);
                    $('#alert-box').addClass('alert-success').removeClass('alert-danger');
                    $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
                    $('#alert-message').html(
                      'Added <br> Employee ID: '+id+ 
                      '<br> Teacher: '+first_name+' '+middle_name+' '+last_name+ 
                      '<br> Subject Major: ' + major + 
                      '<br> Position: ' + position);
                    $('#alert-box').delay( 2000 ).slideUp(1000);
                  }
                }); 
              }

              $('.loading').delay(500).hide();
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
  $( "#view-major" ).prop( "disabled", false );
  $( "#view-position" ).prop( "disabled", false );
  $( "#view-status" ).prop( "disabled", false );
  $( "#view-update" ).show();
}

function hide(){
  i=0;
    $( "#view-id" ).prop( "disabled", true );
    $( "#view-firstname" ).prop( "disabled", true );
    $( "#view-middlename" ).prop( "disabled", true );
    $( "#view-lastname" ).prop( "disabled", true );
    $( "#view-major" ).prop( "disabled", true );
    $( "#view-position" ).prop( "disabled", true );
    $( "#view-status" ).prop( "disabled", true );
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
  last_name = $( "#view-lastname" ).val();
  major = $( "#view-major" ).val();
  position = $( "#view-position" ).val();
  status = $( "#view-status" ).val();
  updateRow();
  
})

//EDIT MODAL

$('#edit-update').click(function(){
  new_empoyee_id = $( "#edit-id" ).val();
  first_name = $( "#edit-firstname" ).val();
  middle_name = $( "#edit-middlename" ).val();
  last_name = $( "#edit-lastname" ).val();
  major = $( "#edit-major" ).val();
  position = $( "#edit-position" ).val();
  status = $( "#edit-status" ).val();
  updateRow();
})

//DELETE MODAL

$('#delete-confirm').click(function(){
  $('.loading').show();
  $.ajax({
            url: deleteRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table':'teachers', 'employee_id': employee_id }, 
            success: function(result){
              console.log(result);
              populateTable();
              $('.loading').delay(500).hide();
            }
          }); 
})