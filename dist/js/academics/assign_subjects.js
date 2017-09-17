$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#select-year').prop('disabled', true);
    $('#select-section').prop('disabled', true);

    var strand_id;
    var year_id;
    
    $.ajax({
      url: getStrands,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        console.log(result);

        for (var i = 0; i >= 0; i++) {
          $('#select-strand').append($('<option>', { 
              value: result[i].id,
              text : result[i].name
          })).select2();
        }

      }
    });    

    $.ajax({
      url: getYears,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        console.log(result);

        for (var i = 0; i >= 0; i++) {
          $('#select-year').append($('<option>', { 
              value: result[i].id,
              text : result[i].name
          })).select2();
        }

      }
    }); 

    $('#select-strand').on('change',function(){
       $('#select-section').find('option').remove();
       $("#select-year").val("").trigger("change");
       $('#select-year').prop('disabled', false);
       $('#select-section').prop('disabled', true);
       strand_id = $('#select-strand').val();
    })

    $('#select-year').on('change',function(){
       $('#select-section').prop('disabled', false);
       year_id = $('#select-year').val();
       $('#select-section').find('option').remove();

       $.ajax({
          url: getSection,
          type: 'post',
          dataType: 'json',  
          data: {'strand_id': strand_id, 'year_level_id': year_id},
          success: function(result){
            console.log(result);

            for (var i = 0; i >= 0; i++) {
              $('#select-section').append($('<option>', { 
                  value: result[i].id,
                  text : result[i].name
              })).select2();
            }

          }
        }); 

    })


    $('#add-btn').on('click', function(){
      $( "#label-subject" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-subject");
      $( "#select-subject" ).clone().insertAfter("#select-subject").addClass('clone').select2();
      $( "#label-teacher" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-teacher");
      $( "#select-teacher" ).clone().insertAfter("#select-teacher").addClass('clone').select2();
    })

    $('#save-btn').on('click', function(){

      $('.subject-input').each(function(index, elem) {
        value = $(elem).val();
        alert(value);
      })
    })



     

    

  })
