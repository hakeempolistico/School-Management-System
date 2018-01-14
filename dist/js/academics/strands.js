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
        $.notify({
          title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
          message: "Strand deleted: " + code + "."
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
  });
  
}