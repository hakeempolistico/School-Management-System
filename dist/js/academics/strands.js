var code, name, newCode, newName, status;

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
                 $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please full up strand code."
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
                  delay: 2000,
                  spacing: 10,
                  z_index: 1031,
                });
              }
              else if(strandCount > 0){
                 $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Strand code already used. Please use another one."
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
              else{
                $.ajax({
                  url: addStrand,
                  type: 'post',
                  dataType: 'json',  
                  data: {'code': code, 'name' : name},
                  success: function(result){
                    //console.log(result);
                    populateTable();
                    $.notify({
                      title: '<strong><i class="icon fa fa-check"></i>SUCCESS MESSAGE!</strong>',
                      message: "Strand added"
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
                });
              }
            }
          });     

  })

  $('#edit-update').on('click', function(){ 

    newCode = $('#edit-code').val();
    newName = $('#edit-name').val();

    if(newCode == null || newCode.trim() === ''){
      $.notify({
        title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
        message: "Strand code cannot be empty."
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
      $.ajax({
        url: auditTrailUpdateUrl,
        type: 'post',
        dataType: 'json', 
        data: {'name' : name, 'newName' : newName, 'code': code, 'newCode': newCode}, 
        success: function(result){
          console.log(result);
        }
      }); 
    }
       

    
  })


})

$('#delete-confirm').click(function(){
  var setStat;
  if(status=='active'){
    setStat='inactive';
  }
  else if(status=='inactive'){
    setStat='active';
  }
  $.ajax({
    url: updateUrl,
    type: 'post',
    dataType: 'json', 
    data: {'set': code, 'status' : setStat }, 
    success: function(result){
      console.log(result);

      $.ajax({
        url: auditTrailUpdateUrl,
        type: 'post',
        dataType: 'json', 
        data: {'code': code, 'status' : setStat }, 
        success: function(result){
          console.log(result);
        }
      });

      populateTable();
        if(setStat=='inactive'){

          $.notify({
            title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
            message: "Strand: " + code + " set to inactive."
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
            message: "Strand: " + code + " set to active."
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


function populateTable(){
  
  $('#strands-table').DataTable().destroy();

  $('#strands-table').DataTable({
    "columns": [
        { "width": "20%" },
        { "width": "65%" },
        { "width": "5%" },
        { "width": "10%" }
    ],
        "order": [] ,
        "ajax": getRecordsUrl,
        "responsive" : true
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
      status = $(this).parents('tr').find('td:nth-child(3)').find('span').html();
      //console.log(status);
      if(status=='active'){
        $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-danger');
        $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
        $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
        $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-danger');
        $('#text-status').html('Are you sure you want to inactivate record?');
      }
      else if(status=='inactive'){
        $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-success');
        $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-success');
        $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-success');
        $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-success');
        $('#text-status').html('Are you sure you want to activate record?');
      }
  });
}