var strand_code;
var year_level;
var name;
var capacity;
var id;
var status;

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
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please select section Strand."
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
              else if(year_level_id == null || year_level_id.trim() === ''){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please select Year Level."
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
              else if(name == null || name.trim() === ''){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please fill up section name."
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
              else if(sectionCount > 0){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Section Name already used."
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
                    $.notify({
                      title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
                      message: "Section added."
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
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please select section strand."
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
              else if(year_level == null || year_level === ''){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please select year level."
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
              else if(name == null || name.trim() === ''){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please fill up section name."
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
              else if(sectionCount > 0 && name != newName){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Section name already used."
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
                    $.notify({
                      title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
                      message: "Section updated."
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
              }
            }
          });     
  })

  
  $('#delete-confirm').click(function(){
    var setStat;
    if(status=='active'){
      setStat='inactive';
    }
    else if(status=='inactive'){
      setStat='active';
    }

    if(year_level_id=='Grade 11'){
      year_level_id = '1';
    }
    else if(year_level_id=='Grade 12'){
      year_level_id = '2';
    }
    $.ajax({
      url: updateUrl,
      type: 'post',
      dataType: 'json', 
      data: {
        'status' : setStat, 
        'name': name, 
        'set' : strand_code,
        'set2' : year_level_id,
        'set3': name 
      }, 
      success: function(result){
        console.log(result);
        populateTable();
          if(setStat=='inactive'){
            $.notify({
              title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
              message: "Section: " + name + " set to inactive."
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
              message: "Section: " + name + " set to active."
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
})

//POPULATE TABLE 
function populateTable(){
  
  $('#table-sections').DataTable().destroy();

  $('#table-sections').DataTable({
    "columns": [
        { "width": "22%" },
        { "width": "22%" },
        { "width": "19%" },
        { "width": "20%" },
        { "width": "5%" },
        { "width": "12%" }
    ],
        "order": [] ,
        "ajax": getRecordsUrl,
        "responsive": true
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

        $('#edit-strand').val(strand_code).trigger('change');
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

        $('#edit-year').val(year_level).trigger('change');
      }
    }); 

    $('#edit-name').val(name);
    $('#edit-capacity').val(capacity);
  
  });


  $("#table-sections").on("click", "tr td .delete-btn", function(){
      strand_code = $(this).parents('tr').find('td:first').html();
      year_level_id = $(this).parents('tr').find('td:nth-child(2)').html();
      name = $(this).parents('tr').find('td:nth-child(3)').html();
      status = $(this).parents('tr').find('td:nth-child(5)').find('span').html();
      id = $(this).attr('data-id');
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