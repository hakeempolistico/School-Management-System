$(function () {
    $('#sectionsTable').DataTable()
    populateTable();

    //ADD SECTION BOX

    $.ajax({
      url: getStrands,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        //console.log(result);

        $.each(result, function( index, value ) {
          //console.log('index: '+index+' value: '+value);
          $('#select-strand').append($('<option>', { 
              value: value.code,
              text : value.name
          })).select2();
        });

      }
    }); 

    $.ajax({
      url: getYears,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        //console.log(result);

        $.each(result, function( index, value ) {
          //console.log('index: '+index+' value: '+value);
          $('#select-year').append($('<option>', { 
              value: value.id,
              text : value.name
          })).select2();
        });

      }
    }); 

    $('#btn-add').click(function(){
      var strand_code = $('#select-strand').val();
      var year_level_id = $('#select-year').val();
      var name = $('#input-name').val();
      var capacity = $('#input-capacity').val();
      var sectionCount;

      $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {
              'table' : 'sections', 
              'set' : 'strand_code', 
              'value' : strand_code,
              'set2' : 'name', 
              'value2' : name, 
              'set3':'year_level_id', 
              'value3' : year_level_id  
            }, 
            success: function(result){
              sectionCount = result;

              if(strand_code == null || strand_code.trim() === ''){
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please select section strand.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else if(year_level_id == null || year_level_id.trim() === ''){
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please please select year level.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else if(name == null || name.trim() === ''){
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Please fill up section name.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else if(sectionCount > 0){
                $('#alert-box').slideDown(1000);
                $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
                $('#alert-message').html('Section name is already used. Please use another one.');
                $('#alert-box').delay( 1500 ).slideUp(1000);
              }
              else{
                $.ajax({
                  url: addUrl,
                  type: 'post',
                  dataType: 'json', 
                  data: {
                    'table' : 'sections',
                    'strand_code' : strand_code, 
                    'year_level_id' : year_level_id, 
                    'name' : name, 
                    'capacity' : capacity
                  }, 
                  success: function(result){
                    //console.log(result);              
                    populateTable();

                    $('#alert-box').addClass('alert-success').removeClass('alert-danger');
                    $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
                    $('#alert-message').html(
                      'Added '+
                      '<br> Section Name: '+name+ 
                      '<br> Capacity: '+capacity);
                    $('#alert-box').slideDown(1000).delay( 2000 ).slideUp(1000);
                  }
                }); 
              }
            }
          });     
    })


})


//POPULATE TABLE 

function populateTable(){
  
  $('#table-sections').DataTable().destroy();


  $('#table-sections').DataTable({
    "columns": [
        { "width": "22%" },
        { "width": "22%" },
        { "width": "22%" },
        { "width": "22%" },
        { "width": "12%" }
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


  $("#strands-table").on("click", "tr td .delete-btn", function(){
      code = $(this).parents('tr').find('td:first').html();
  });
  
}