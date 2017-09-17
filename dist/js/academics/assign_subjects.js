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


    //ADD SUBJECTS BOX

    $.ajax({
      url: getSubjects,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        console.log(result);

        for (var i = 0; i >= 0; i++) {
          $('.subject-input').append($('<option>', { 
              value: result[i].code,
              text : result[i].name
          })).select2();
        }

      }
    }); 

    $.ajax({
      url: getTeachers,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        console.log(result);

        for (var i = 0; i >= 0; i++) {
          var name=result[i].first_name+' '+result[i].middle_name+' '+result[i].last_name;
          console.log(name);
          $('.teacher-input').append($('<option>', { 
              value: result[i].employee_id,
              text : name
          })).select2();
        }

      }
    }); 

  })
