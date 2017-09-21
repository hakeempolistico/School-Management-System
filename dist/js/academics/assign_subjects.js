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
        //console.log(result);

        $.each(result, function( index, value ) {
          $('#select-strand').append($('<option>', { 
              value: value.id,
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
          $('#select-year').append($('<option>', { 
              value: value.id,
              text : value.name
          })).select2();
        });

      }
    }); 

    $.ajax({
      url: getSubjects,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        //console.log(result);

        $.each(result, function( index, value ) {
          $('#select-subject').append($('<option>', { 
              value: value.id,
              text : value.name
          })).select2();
        });

      }
    }); 

    $.ajax({
      url: getTeachers,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        //console.log(result);

        $.each(result, function( index, value ) {
          $('#select-teacher').append($('<option>', { 
              value: value.id,
              text : value.first_name+' '+value.last_name
          })).select2();
        });

      }
    }); 

    $('.subject-input').prop('disabled', true);
    $('.teacher-input').prop('disabled', true);
    $('#add-btn').prop('disabled', true);
    $('#save-btn').prop('disabled', true);
    $('#confirm-btn').prop('disabled', true);


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
            //console.log(result);

            $.each(result, function( index, value ) {
              $('#select-section').append($('<option>', { 
                  value: value.id,
                  text : value.name
              })).select2();
            });

          }
        }); 

       $('#confirm-btn').prop('disabled',false);

    })

    $('#confirm-btn').on('click', function(){ 

      var section_id = $('#select-section').val();

      $('.cloneInput').select2('destroy').remove();
      $('.clone').remove();

      $( "#select-subject" ).val(null).trigger("change");
      $( "#select-teacher" ).val(null).trigger("change");

      $('.subject-input').prop('disabled', false);
      $('.teacher-input').prop('disabled', false);
      $('#add-btn').prop('disabled', false);
      $('#save-btn').prop('disabled', false); 

      $.ajax({
          url: getClassSubjects,
          type: 'post',
          dataType: 'json',  
          data: {'section_id': section_id},
          success: function(result){
            console.log(result);
            var x = result.length;
            var y = result.length-1;
            for(var i=0; i<x-1; i++){
              $( "#label-subject" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-subject");
              $( "#select-subject" ).clone().insertBefore("#select-subject").addClass('cloneInput').select2();

              $( "#label-teacher" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-teacher");
              $( "#select-teacher" ).clone().insertBefore("#select-teacher").addClass('cloneInput').select2();    
            }
            for(var i=0; i<x; i++){
              $( ".subject-input:eq("+i+")" ).val(result[i].teacher_id).trigger('change');
              $( ".teacher-input:eq("+i+")" ).val(result[i].teacher_id).trigger('change');    
            }
            //$('.cloneInput').removeAttr('id');

          }
        });

    })


    //ADD SUBJECT-TEACHER BOX

    $('#add-btn').on('click', function(){
      $( "#label-subject" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-subject");
      $( "#select-subject" ).clone().insertBefore("#select-subject").addClass('cloneInput').select2();
      $( "#label-teacher" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-teacher");
      $( "#select-teacher" ).clone().insertBefore("#select-teacher").addClass('cloneInput').select2();
    })

    $('#save-btn').on('click', function(){
      var subjects = [];
      var teachers = [];
      var section_id = $('#select-section').val();
      $('.subject-input').each(function(index, elem) {
        subjects.push($(elem).val());
      })
      $('.teacher-input').each(function(index, elem) {
        teachers.push($(elem).val());
      })
      
      //console.log(subjects);
      console.log(subjects);
      var x = subjects.length;

      $.ajax({
            url: deleteUrl,
            type: 'post', 
            data: {'section_id' :  section_id}, 
            success: function(result){
              //console.log(result);
              for(var i=0; i<x; i++){
                //console.log(teachers[i] +' : '+ subjects[i]);

                  $.ajax({
                    url: addUrl,
                    type: 'post', 
                    data: {'table' : 'class_subjects', 'employee_id' : teachers[i], 'subject_id' : subjects[i], 'section_id' :  section_id}, 
                    success: function(result){
                      //console.log(result);
                    }
                  }); 

              }
            }
          }); 

      

    })



     

    

  })
