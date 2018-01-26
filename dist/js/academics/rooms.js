var id;
var name;
var building;
var newId;
var newName;
var newBuilding;
var activeStatus;

$(document).ready(function() {
    $('#table-schedule').DataTable( {
        responsive: true,
        ordering: false,
        paging: false,
        info: false,
        searching: false,
        autoWidth: true,
        columns: [
          { "width": "25%" },
          null,
          null,
          null,
          null,
          null
        ],  
    } );
} );

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
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please fill up Room No."
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
                    //console.log(result);
                      $.notify({
                        title: '<strong><i class="icon fa fa-ban"></i>SUCCESS!</strong>',
                        message: "Room added."
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
          //console.log(result);
          populateTable();
          $.notify({
            title: '<strong><i class="icon fa fa-ban"></i>SUCCESS!</strong>',
            message: "Room updated."
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
  })


})

$('#delete-confirm').click(function(){
  if(activeStatus == 'active'){
    var setStat = 'inactive';
  }
  else if(activeStatus == 'inactive'){
    var setStat = 'active';
  }
  //console.log(id + ' : ' + activeStatus + ' : ' + setStat);
  $.ajax({
    url: updateUrl,
    type: 'post',
    dataType: 'json', 
    data: {
      'status': setStat, 
      'set': id }, 
    success: function(result){
      //console.log(result);
      
      $.ajax({
        url: auditTrailUpdateUrl,
        type: 'post',
        dataType: 'json', 
        data: {'room_id': id, 'status' : setStat }, 
        success: function(result){
          console.log(result);
        }
      });

      populateTable();
      if(setStat=='active'){
          $.notify({
          title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
          message: "Room set to active."
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
      else if(setStat=='inactive'){
          $.notify({
          title: '<strong><i class="icon fa fa-ban"></i>WARNING!</strong>',
          message: "Room set to active."
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
      
    }
  }); 
})


function populateTable(){
  $('#rooms-table').DataTable().destroy();

    $('#rooms-table').DataTable({
    "columns": [
        { "width": "10%" },
        { "width": "20%" },
        { "width": "50%" },
        { "width": "5%" },
        { "width": "15%" }
    ],
        "order": [] ,
        "ajax": getRecordsUrl,
        "responsive": true
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
        //console.log(result);
      }
    });   
  });


  $("#rooms-table").on("click", "tr td .delete-btn", function(){
      id = $(this).parents('tr').find('td:first').html();
      activeStatus = $(this).parents('tr').find('.status').html();
      if(activeStatus=='active'){
        $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-danger');
        $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
        $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
        $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-danger');
        $('#text-status').html('Are you sure you want to inactivate record?');
      }
      else if(activeStatus=='inactive'){
        $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-success');
        $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-success');
        $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-success');
        $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-success');
        $('#text-status').html('Are you sure you want to activate record?');
      }
  });
  
  $("#rooms-table").on("click", "tr td .schedule-btn", function(){

      //console.log($(this).parents('tr').find('td:first').html());
      $.ajax({
        url: getScheduleUrl,
        type: 'post',
        dataType: 'json', 
        data: {'room_id' : $(this).parents('tr').find('td:first').html()}, 
        success: function(result){  
          //console.log(result);
          $('#table-sched tbody').html('');
          $.each(result, function( index, value ) {
            $('#table-sched tbody').append('<tr> <td>'+value.class +' </td> <td> '+value.subject_code +'</td> <td>'+value.day +' </td> <td>'+value.time +' </td> </tr>');
          });
        }
      }); 

  });

  