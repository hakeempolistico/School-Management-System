var employee_id, status, name, assign_class, strand, year, section, section_id;

populateTable();
$('#select-section').prop('disabled', true);
$('#select-year').prop('disabled', true);

$('#select-strand').on('change',function(){
  strand = $(this).val();
  $("#select-year").val("").trigger("change");
  $('#select-year').prop('disabled', false);
  $('#select-section').prop('disabled', true);
  $('#btn-save').prop('disabled', true);
})

$('#select-year').on('change',function(){
  year = $(this).val();
  $('#select-section').find('option').remove();
  $('#btn-save').prop('disabled', true);
   $.ajax({
      url: getSection,
      type: 'post',
      dataType: 'json',  
      data: {'strand_code': strand, 'year_level_id': year},
      success: function(result){
        //console.log(result);
        $('#select-section').append($('<option>', { 
            value: null,
            text : null
        })).select2();

        $.each(result, function( index, value ) {
          $('#select-section').append($('<option>', { 
              value: value.id,
              text : value.name
          })).select2();
        });
      }
    }); 
    $('#select-section').prop('disabled', false);
})

$('#select-section').on('change',function(){
	section = $(this).val();
  //console.log(section);
  $('#btn-save').prop('disabled', false);
})

$('#btn-save').prop('disabled', true).on('click',function(){
  $.ajax({
    url: validateUrl,
    type: 'post',
    dataType: 'json',  
    data: {'employee_id': employee_id, 'academic_year': aYear},
    success: function(result){
      if(result == ''){
        $.ajax({
          url: addUrl,
          type: 'post',
          dataType: 'json',  
          data: {'employee_id': employee_id, 'section_id' : $('#select-section').val(), 'academic_year': aYear},
          success: function(result){  
            populateTable() 
          }
        });
      }else{
        $.ajax({
          url: updateAdvisoryUrl,
          type: 'post',
          dataType: 'json',  
          data: {'employee_id': employee_id, 'section_id' : $('#select-section').val(), 'academic_year': aYear},
          success: function(result){   
            populateTable()
          }
        });
      }  

      /*$.notify({
        title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
        message: "Class assigned."
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
        delay: 2000,
        spacing: 10,
        z_index: 1031,
      });*/

      $("#select-strand").val("").trigger("change");
      $("#select-year").val("").trigger("change");
      $("#select-section").val("").trigger("change");
      $('#select-year').prop('disabled', true);
      $('#select-section').prop('disabled', true);
    }
  });
})

function populateTable(){
  
  $('#advisory-table').DataTable().destroy();

  $('#advisory-table').DataTable({
    "columns": [
        { "width": "15%" },
        { "width": "50%" },
        { "width": "15%" },
        { "width": "10%" },
        { "width": "10%" }
    ],
        "order": [] ,
        "ajax": getRecordsUrl,
        "responsive" : true
  });

  $("#advisory-table").on("click", "tr td .btn-assign", function(){
     name = $(this).parents('tr').find('td:nth-child(2)').html();
     employee_id = $(this).parents('tr').find('td:nth-child(1)').html();
     section_id = $(this).parents('tr').find('.section-id').html();

     //console.log(section_id);
     assign_status = $(this).parents('tr').find('td:nth-child(4)').find('span').html();
    //console.log(assign_status);
    if(assign_status=='assigned'){
      assign_status = '<span class="badge bg-green status pull-right">'+ assign_status+'</span>'
    }
    else {
      assign_status = '<span class="badge bg-red status pull-right">'+ assign_status+'</span>'
    }
    $('#modal-status').html('<b>Name:</b>  '+name+' '+ assign_status);

  });

}