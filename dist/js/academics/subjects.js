var i, subjectCode;
function show(){
  i=1;
    $( "#view-name" ).prop( "disabled", false );
    $( "#view-code" ).prop( "disabled", false );
    $( "#view-type" ).prop( "disabled", false );
    $( "#view-description" ).prop( "disabled", false );
    $( "#view-update" ).show();
}
function hide(){
  i=0;
    $( "#view-name" ).prop( "disabled", true );
    $( "#view-code" ).prop( "disabled", true );
    $( "#view-type" ).prop( "disabled", true );
    $( "#view-description" ).prop( "disabled", true );
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
  var name = $( "#view-name" ).val();
  var code = $( "#view-code" ).val();
  var type = $( "#view-type" ).val();
  var description = $( "#view-description" ).val();
  $.ajax({
            url: updateUrl,
            type: 'post',
            dataType: 'json', 
            data: {'name' : name, 'code': code, 'type': type, 'description': description, 'set': subjectCode }, 
            success: function(result){
              console.log(result);
              hide();
              populateTable();
            }
          }); 
})

$('#edit-update').click(function(){
  var name = $( "#edit-name" ).val();
  var code = $( "#edit-code" ).val();
  var type = $( "#edit-type" ).val();
  var description = $( "#edit-description" ).val();
  $.ajax({
            url: updateUrl,
            type: 'post',
            dataType: 'json', 
            data: {'name' : name, 'code': code, 'type': type, 'description': description, 'set': subjectCode }, 
            success: function(result){
              console.log(result);
              hide();
              populateTable();
            }
          }); 
})

$('#delete-confirm').click(function(){
  $.ajax({
            url: deleteRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'code': subjectCode }, 
            success: function(result){
              console.log(result);
              populateTable();
            }
          }); 
})
  

function populateTable(){
  
  $('#subjectsTable').DataTable().destroy();

  $('#subjectsTable').DataTable({
    "columns": [
        null, null, null,
        { "width": "20%" }
        ],
        "order": [] ,
        "ajax": getRecordsUrl
  });

  $("#subjectsTable").on("click", "tr td .view-btn", function(){

    i=0;
    $( "#view-name" ).prop( "disabled", true );
    $( "#view-code" ).prop( "disabled", true );
    $( "#view-type" ).prop( "disabled", true );
    $( "#view-description" ).prop( "disabled", true );
    $( "#view-update" ).hide();
    subjectCode = $(this).parents('tr').find('td:first').html();

    $.ajax({
            url: getRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'subjects', 'set': 'code', 'value': subjectCode}, 
            success: function(result){          
              var name = $( "#view-name" ).val(result.name);
              var code = $( "#view-code" ).val(result.code);
              var type = $( "#view-type" ).val(result.type);
              var description = $( "#view-description" ).val(result.description);
            }
          });   
  });

  $("#subjectsTable").on("click", "tr td .edit-btn", function(){

    subjectCode = $(this).parents('tr').find('td:first').html();

    $.ajax({
            url: getRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'subjects', 'set': 'code', 'value': subjectCode}, 
            success: function(result){          
              var name = $( "#edit-name" ).val(result.name);
              var code = $( "#edit-code" ).val(result.code);
              var type = $( "#edit-type" ).val(result.type);
              var description = $( "#edit-description" ).val(result.description);
            }
          });   
  });

  $("#subjectsTable").on("click", "tr td .delete-btn", function(){

    subjectCode = $(this).parents('tr').find('td:first').html();

  });
  
}

  $(function () {
    populateTable();
  })

  $("#add-btn").click(function(){
    var name = $('#name-input').val();
    var code = $('#code-input').val();
    var type = $('#type-input').val();
    var description = $('#description-input').val();
      
          $.ajax({
            url: addUrl,
            type: 'post',
            dataType: 'json', 
            data: {'name' : name, 'code': code, 'type': type, 'description': description }, 
            success: function(result){
              console.log(result);
              populateTable();
              var name = $('#name-input').val('');
              var code = $('#code-input').val('');
              var type = $('#type-input').val('');
              var description = $('#description-input').val('');
            }
          });   
    
  })
