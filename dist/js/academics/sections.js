var strand_code;
var year_level;
var name;
var capacity;

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
      strand_code = $('#select-strand').val();
      year_level_id = $('#select-year').val();
      name = $('#input-name').val();
      capacity = $('#input-capacity').val();

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

    //EDIT MODAL

    $('#edit-update').on('click', function(){ 

    var newStrand = $('#edit-strand').val();
    var newYear = $('#edit-year').val();
    var newName = $('#edit-name').val();
    var newCapacity = $('#edit-capacity').val();

    var sectionCount;


      $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {
              'table' : 'sections', 
              'set' : 'strand_code', 
              'value' : newStrand,
              'set2' : 'name', 
              'value2' : newName, 
              'set3':'year_level_id', 
              'value3' : newYear  
            }, 
            success: function(result){
              sectionCount = result;

              if(strand_code == null || strand_code.trim() === ''){
                alert('Please select section strand.');
              }
              else if(year_level == null || year_level === ''){
                alert('Please select year level.');
              }
              else if(name == null || name.trim() === ''){
                alert('Please fill up section name.');
              }
              else if(sectionCount > 0 && name != newName){
                alert('Section name alreay used. Please use another one.');
              }
              else{
                $.ajax({
                  url: updateUrl,
                  type: 'post',
                  dataType: 'json', 
                  data: {
                    'strand_code' : newStrand, 
                    'year_level_id': newYear, 
                    'name': newName, 
                    'capacity': newCapacity, 
                    'set' : strand_code,
                    'set2' : year_level,
                    'set3': name
                  }, 
                  success: function(result){
                    populateTable();
                    strand_code = newStrand;
                    year_level = newYear;
                    name = newName;
                    capacity = newCapacity;
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

  $("#table-sections").on("click", "tr td .edit-btn", function(){
    strand_code = $(this).parents('tr').find('td:first').html();
    year_level = $(this).parents('tr').find('td:nth-child(2)').html();
    name = $(this).parents('tr').find('td:nth-child(3)').html();
    capacity = $(this).parents('tr').find('td:nth-child(4)').html();

    if(year_level=='Grade 11'){
      year_level = 1;
    }
    else if(year_level=='Grade 12'){
      year_level = 2;
    }


    $.ajax({
      url: getStrands,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        //console.log(result);

        $.each(result, function( index, value ) {
          //console.log('index: '+index+' value: '+value);
          $('#edit-strand').append($('<option>', { 
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
          $('#edit-year').append($('<option>', { 
              value: value.id,
              text : value.name
          })).select2();
        });

      }
    }); 


    $('#edit-strand').val(strand_code).trigger('change');
    $('#edit-year').val(year_level).trigger('change');
    $('#edit-name').val(name);
    $('#edit-capacity').val(capacity);
  
  });


  $("#table-section").on("click", "tr td .delete-btn", function(){
      code = $(this).parents('tr').find('td:first').html();
  });
  
}