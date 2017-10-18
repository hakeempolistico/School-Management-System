var id;
var name;
var building;
var newId;
var newName;
var newBuilding;

$(function () {
  $('#rooms-table').DataTable()
  
  populateTable();
  

  $('#add-btn').on('click', function(){ 

    var id = $('#number-input').val();
    var name = $('#name-input').val();
    var building = $('#building-input').val();

    $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'rooms', 'set' : 'room_id', 'value' : id  }, 
            success: function(result){
              roomCount = result;

              if(id == null || id.trim() === ''){
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please fill up room number.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
    //           else if(strandCount > 0){
    //             $('#alert-box').slideDown(1000);
    //             $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
    //             $('#alert-message').html('Strand code is already used. Please use another one.');
    //             $('#alert-box').delay( 1500 ).slideUp(1000);
    //           }
              else{
                $.ajax({
                  url: addRoom,
                  type: 'post',
                  dataType: 'json',  
                  data: {
                    'room_id': id, 
                    'room_name' : name, 
                    'building' : building},
                  success: function(result){
                    console.log(result);
                    $('#alert-box').addClass('alert-success').removeClass('alert-danger');
                    $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
                    $('#alert-message').html('Added <br> Room Number: '+id+ ' <br> Room name: ' + name+ ' <br> Building: ' + building );
                    $('#alert-box').slideDown(1000);
                    $('#alert-box').delay( 2000 ).slideUp(1000);
                    $('#number-input').val('');
                    $('#name-input').val('');
                    $('#building-input').val('');
                    populateTable();
                  }
                });
              }
            }
        });     

  })

  $('#edit-update').on('click', function(){ 

    newId = $('#edit-id').val();
    newName = $('#edit-name').val();
    newBuilding = $('#edit-building').val();

      $.ajax({
        url: updateUrl,
        type: 'post',
        dataType: 'json', 
        data: {
          'room_id' : newId, 
          'room_name': newName, 
          'building': newBuilding, 
          'set': room_id }, 
        success: function(result){
          console.log(result);
          populateTable();
        }
      }); 
  })


})

$('#delete-confirm').click(function(){
  $.ajax({
    url: deleteRowUrl,
    type: 'post',
    dataType: 'json', 
    data: {'room_id': id }, 
    success: function(result){
      console.log(result);
      populateTable();
    }
  }); 
})


function populateTable(){
  $('#rooms-table').DataTable().destroy();

    $('#rooms-table').DataTable({
    // "columns": [
    //     { "width": "10%" },
    //     { "width": "20%" },
    //     { "width": "60%" },
    //     { "width": "10%" }
    // ],
        "order": [] ,
        "ajax": getRecordsUrl
  });
  }

  $("#rooms-table").on("click", "tr td .edit-btn", function(){

    room_id = $(this).parents('tr').find('td:first').html();

    $.ajax({
            url: getRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'rooms', 'set': 'room_id', 'value': room_id}, 
            success: function(result){  
              id = result.id;
              name = result.name;
              building = result.building;
              $( "#edit-id" ).val(result.room_id);
              $( "#edit-name" ).val(result.room_name);
              $( "#edit-building" ).val(result.building);
              console.log(result);
            }
          });   
  });


  $("#rooms-table").on("click", "tr td .delete-btn", function(){
      id = $(this).parents('tr').find('td:first').html();
  });
  