var code;
var name;
var newCode;
var newName;

$(function () {
  
  $('#strands-table').DataTable()
  populateTable();

  $('#add-btn').on('click', function(){ 

    var code = $('#code-input').val();
    var name = $('#name-input').val();

    if(newCode == null || newCode.trim() === ''){
      alert('Strand code cannot be empty!')
    }
    else{
      $.ajax({
        url: addStrand,
        type: 'post',
        dataType: 'json',  
        data: {'code': code, 'name' : name},
        success: function(result){
          //console.log(result);
        }
      });
    }
    

    populateTable();

  })

  $('#edit-update').on('click', function(){ 

    newCode = $('#edit-code').val();
    newName = $('#edit-name').val();

    if(newCode == null || newCode.trim() === ''){
      alert('Strand code cannot be empty!')
    }
    else{
      $.ajax({
        url: updateUrl,
        type: 'post',
        dataType: 'json', 
        data: {'name' : newName, 'code': newCode, 'set': code }, 
        success: function(result){
          populateTable();
        }
      }); 
    }
       

    
  })


})


function populateTable(){
  
  $('#strands-table').DataTable().destroy();


  $('#strands-table').DataTable({
    "columns": [
        { "width": "20%" },
        { "width": "60%" },
        { "width": "20%" }
        ],
        "order": [] ,
        "ajax": getRecordsUrl
  });

  $("#strands-table").on("click", "tr td .edit-btn", function(){

    strand_code = $(this).parents('tr').find('td:first').html();

    $.ajax({
            url: getRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'strands', 'set': 'code', 'value': strand_code}, 
            success: function(result){  
              code = result.code;
              name = result.name;
              $( "#edit-code" ).val(result.code);
              $( "#edit-name" ).val(result.name);
            }
          });   
  });

  $("#teachersTable").on("click", "tr td .delete-btn", function(){
      employee_id = $(this).parents('tr').find('td:first').html();
  });
  
}