var i, subjectCode;
var name;
var code;
var type;
var description;
var newCode;


  var getRecordsUrl = 'subjects/ajaxGetRecords';
  var updateUrl = "subjects/ajaxUpdate";
  var addUrl = "subjects/ajaxInsert";
  var getRowUrl = "subjects/ajaxGetRow";
  var deleteRowUrl = "subjects/ajaxDeleteRow";
  var countUrl = "subjects/ajaxCountRow";

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
function updateRow(){ 

  $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'subjects', 'set' : 'code', 'value' : newCode  }, 
            success: function(result){
              var codeCount = result;    
              if (newCode == null || newCode.trim() === ''){
                alert('Subject code cannot be empty');
              }
              else if(codeCount > 0 && code != newCode){
                alert('Subject code already exist');
              }
              else if (name == null || name.trim() === ''){
                alert('Subject name cannot be empty');
              }
              else{
                $.ajax({
                  url: updateUrl,
                  type: 'post',
                  dataType: 'json', 
                  data: {'name' : name, 'code': newCode, 'type': type, 'description': description, 'set': subjectCode }, 
                  success: function(result){
                    console.log(result);
                    hide();
                    populateTable();
                  }
                }); 
              }


            }
  }); 

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
  name = $( "#view-name" ).val();
  newCode = $( "#view-code" ).val();
  type = $( "#view-type" ).val();
  description = $( "#view-description" ).val();
  updateRow();
  
})

$('#edit-update').click(function(){
  name = $( "#edit-name" ).val();
  newCode = $( "#edit-code" ).val();
  type = $( "#edit-type" ).val();
  description = $( "#edit-description" ).val();
  updateRow(); 
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
              code = result.code;
              $( "#view-name" ).val(result.name);
              $( "#view-code" ).val(result.code);
              $( "#view-type" ).val(result.type);
              $( "#view-description" ).val(result.description);
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
              code = result.code;
              $( "#edit-name" ).val(result.name);
              $( "#edit-code" ).val(result.code);
              $( "#edit-type" ).val(result.type);
              $( "#edit-description" ).val(result.description);
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

  $('.close').click(function(){
    $('#alert-box').hide();
  })

  $("#add-btn").click(function(){
    var name = $('#name-input').val();
    var code = $('#code-input').val();
    var type = $('#type-input').val();
    var description = $('#description-input').val();

    $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'subjects', 'set' : 'code', 'value' : code  }, 
            success: function(result){
              var codeCount = result;    
              if (code == null || code.trim() === ''){
                $('#alert-box').addClass('alert-danger').removeClass('alert-success');
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please fill up subject code.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else if(codeCount > 0){
                $('#alert-box').slideDown(1000);
                $('#alert-box').addClass('alert-danger').removeClass('alert-success');
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Subject code in in use. Please try another one.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else if (name == null || name.trim() === ''){
                $('#alert-box').addClass('alert-danger').removeClass('alert-success');
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please fill up subject name.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else{
                $.ajax({
                  url: addUrl,
                  type: 'post',
                  dataType: 'json', 
                  data: {'name' : name, 'code': code, 'type': type, 'description': description }, 
                  success: function(result){
                    console.log(result);              
                    populateTable();
                    $('#name-input').val('');
                    $('#code-input').val('');
                    $('#type-input').val('');
                    $('#description-input').val('');
                    $('#alert-box').slideDown(1000);
                    $('#alert-box').addClass('alert-success').removeClass('alert-danger');
                    $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
                    $('#alert-message').html('Added <br> Subject code: '+code+ ' <br> Subject name:' + name );
                    $('#alert-box').delay( 2000 ).slideUp(1000);
                  }
                }); 
              }
            }
          });     
    
  })

