$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();



    $('#select-year').prop('disabled', true);
    $('#select-section').prop('disabled', true);

    var strand_code;
    var year_id;
    
    $('.loading').show();
    $.ajax({
      url: getStrands,
      type: 'post',
      dataType: 'json',  
      success: function(result){  
        //console.log(result);

        $.each(result, function( index, value ) {
          $('#select-strand').append($('<option>', { 
              value: value.code,
              text : value.name
          })).select2();
        });

        $('.loading').delay(500).hide();
      }
    });    

    $('.loading').show();
    
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
        $('.loading').delay(500).hide();
      }
    }); 

    $('.loading').show();

    $.ajax({
      url: getSubjects,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        //console.log(result);

        $.each(result, function( index, value ) {
          $('#select-subject').append($('<option>', { 
              value: value.code,
              text : value.name
          })).select2();
        });
        $('.loading').delay(500).hide();
      }
    }); 

    $('.loading').show();
    $.ajax({
      url: getTeachers,
      type: 'post',
      dataType: 'json',  
      success: function(result){
        //console.log(result);

        $.each(result, function( index, value ) {
          $('#select-teacher').append($('<option>', { 
              value: value.employee_id,
              text : value.first_name+' '+value.last_name
          })).select2();
        });
        $('.loading').delay(500).hide();

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
       strand_code = $('#select-strand').val();
    })

    $('#select-year').on('change',function(){
       $('#select-section').prop('disabled', false);
       year_id = $('#select-year').val();
       $('#select-section').find('option').remove();

       $('.loading').show();
       $.ajax({
          url: getSection,
          type: 'post',
          dataType: 'json',  
          data: {'strand_code': strand_code, 'year_level_id': year_id},
          success: function(result){
            //console.log(result);

            $.each(result, function( index, value ) {
              $('#select-section').append($('<option>', { 
                  value: value.id,
                  text : value.name
              })).select2();
            });
            $('.loading').delay(500).hide();
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

      $('.loading').show();
      $.ajax({
          url: getClassSubjects,
          type: 'post',
          dataType: 'json',  
          data: {'section_id': section_id},
          success: function(result){
            //console.log(result);
            var x = result.length;
            var y = result.length-1;
            for(var i=0; i<x-1; i++){
              $( "#label-subject" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-subject");
              $( "#select-subject" ).clone().insertBefore("#select-subject").addClass('cloneInput').select2();

              $( "#label-teacher" ).clone().attr("style", "margin-top: 10px;").addClass('clone').insertAfter("#select-teacher");
              $( "#select-teacher" ).clone().insertBefore("#select-teacher").addClass('cloneInput').select2();    
            }
            for(var i=0; i<x; i++){
              $( ".subject-input:eq("+i+")" ).val(result[i].subject_id).trigger('change');
              $( ".teacher-input:eq("+i+")" ).val(result[i].teacher_id).trigger('change');    
            }
            //$('.cloneInput').removeAttr('id');
            var strand_value = $('#select-strand').select2('data');
            var year_value = $('#select-year').select2('data');
            var section_value = $('#select-section').select2('data');
            var year_val;
            if(year_value[0]['text'] == 'Grade 11'){
              year_val = '11';
            }
            else if(year_value[0]['text'] == 'Grade 12'){
              year_val = '12';
            }
            $('#assign-subjects-title').html(strand_value[0]['id']+' '+year_val+'-'+section_value[0]['text'])
            $('.loading').delay(500).hide();
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
      var x = subjects.length;

      $('.loading').show();

      $.ajax({
            url: deleteUrl,
            type: 'post', 
            data: {'section_id' :  section_id}, 
            success: function(result){
              //console.log(result);
              for(var i=0; i<x; i++){
                console.log(teachers[i] +' : '+ subjects[i]);
                console.log(subjects);
                $.ajax({
                  url: addUrl,
                  type: 'post', 
                  data: {'table' : 'class_subjects', 'teacher_id' : teachers[i], 'subject_id' : subjects[i], 'section_id' :  section_id}, 
                  success: function(result){
                    //console.log(result);
                  }
                }); 
              }
              
              $('#alert-box').addClass('alert-success').removeClass('alert-danger');
              $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
              $('#alert-message').html('Assigned subjects added.');
              $('#alert-box').slideDown(1000);
              $('#alert-box').delay( 2000 ).slideUp(1000);

              $('.loading').delay(500).hide();
            }
          }); 

    })



     

    

  })
