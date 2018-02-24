var employeeID, name, user_role;

$(document).ready(function () {
	$('#UsersTable').DataTable();
    $('.select2').select2();
    populateTeachersTable();
})

$('#btn-confirm-add').on('click', function(){
	console.log(employeeID);	
    $.ajax({
      url: addUserUrl,
      type: 'post',
      dataType: 'json',  
      data: {'employee_id': employeeID},
      success: function(result){
        console.log(result);
        populateTeachersTable();
      }
    });
})

$('#btn-confirm-reset').on('click', function(){
	//console.log(employeeID);	
    $.ajax({
      url: resetUrl,
      type: 'post',
      dataType: 'json',  
      data: {'employee_id': employeeID},
      success: function(result){
        //console.log(result);
        populateTeachersTable();
      }
    });
})

$('#btn-confirm-deac').on('click', function(){
	//console.log(employeeID);	
    $.ajax({
      url: deacUrl,
      type: 'post',
      dataType: 'json',  
      data: {'employee_id': employeeID},
      success: function(result){
        //console.log(result);
        populateTeachersTable();
      }
    });
})

$('#btn-confirm-change').on('click', function(){
	user_role = $('#select-role').val();
	//console.log(user_role+' : '+employeeID);	
    $.ajax({
      url: changeUrl,
      type: 'post',
      dataType: 'json',  
      data: {'employee_id': employeeID, 'user_role' : user_role},
      success: function(result){
        //console.log(result);
        populateTeachersTable();
      }
    });
})

function populateTeachersTable(){
  
  $('#users-table').DataTable().destroy();

  $('#users-table').DataTable({
    "columns": [
        { "width": "15%" },
        { "width": "45%" },
        { "width": "10%" },
        { "width": "10%" },
        { "width": "10%" },
        { "width": "10%" }
    ],
        "order": [] ,
        "ajax": getTeacherRecordsUrl,
        "responsive" : true
  });

  $("#users-table").on("click", "tr td .btn-add-user", function(){
    employeeID = $(this).parents('tr').find('td:first').text();
    //console.log(employeeID);
  });
  $("#users-table").on("click", "tr td .btn-reset", function(){
    employeeID = $(this).parents('tr').find('td:first').text();
    //console.log(employeeID);
  });
  $("#users-table").on("click", "tr td .btn-deac", function(){
    employeeID = $(this).parents('tr').find('td:first').text();
    console.log(employeeID);
  });
  $("#users-table").on("click", "tr td .btn-change", function(){
    employeeID = $(this).parents('tr').find('td:first').text();
    name = $(this).parents('tr').find('td:nth-child(2)').text();
    user_role = $(this).parents('tr').find('td:nth-child(4)').text();
    if(user_role != '-'){
      $('#select-role').val(user_role).trigger('change');;
    }else{
      $('#select-role').val(null).trigger('change');;      
    }
    $('#input-id').attr('placeholder', employeeID);
    $('#input-name').attr('placeholder', name);
    //console.log(employeeID+' : '+name);
  });

}