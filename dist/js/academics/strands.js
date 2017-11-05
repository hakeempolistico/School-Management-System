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

    $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'strands', 'set' : 'code', 'value' : code  }, 
            success: function(result){
              strandCount = result;

              if(code == null || code.trim() === ''){
                $('#alert-box').addClass('alert-danger').removeClass('alert-success');
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please fill up subject code.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else if(strandCount > 0){
                $('#alert-box').addClass('alert-danger').removeClass('alert-success');
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Strand code is already used. Please use another one.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else{
                $.ajax({
                  url: addStrand,
                  type: 'post',
                  dataType: 'json',  
                  data: {'code': code, 'name' : name},
                  success: function(result){
                    //console.log(result);
                    $('#alert-box').addClass('alert-success').removeClass('alert-danger');
                    $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
                    $('#alert-message').html('Added <br> Strand code: '+code+ ' <br> Strand name: ' + name );
                    $('#alert-box').slideDown(1000);
                    $('#alert-box').delay( 2000 ).slideUp(1000);
                    populateTable();
                  }
                });
              }
            }
          });     

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

$('#delete-confirm').click(function(){
  $.ajax({
    url: deleteRowUrl,
    type: 'post',
    dataType: 'json', 
    data: {'code': code }, 
    success: function(result){
      console.log(result);
      populateTable();
    }
  }); 
})


function populateTable(){
  
  $('#strands-table').DataTable().destroy();


  $('#strands-table').DataTable({
    "columns": [
        { "width": "30%" },
        { "width": "60%" },
        { "width": "10%" }
    ],
        "order": [] ,
        "ajax": getRecordsUrl,
        "scrollX": true,
        'autoWidth':  false
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


  $("#strands-table").on("click", "tr td .delete-btn", function(){
      code = $(this).parents('tr').find('td:first').html();
  });
  
}