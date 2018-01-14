$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#select-year').prop('disabled', true);
    $('#select-section').prop('disabled', true);

    var strand_code;
    var year_id;
    
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
          $('#select-subject-1st').append($('<option>', { 
              value: value.code,
              text : value.name
          })).select2();
        });
        $.each(result, function( index, value ) {
          $('#select-subject-2nd').append($('<option>', { 
              value: value.code,
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
          $('#select-teacher-1st').append($('<option>', { 
              value: value.employee_id,
              text : value.first_name+' '+value.last_name
          })).select2();
        });
        $.each(result, function( index, value ) {
          $('#select-teacher-2nd').append($('<option>', { 
              value: value.employee_id,
              text : value.first_name+' '+value.last_name
          })).select2();
        });

      }
    }); 

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

      $('.overlay').hide();

      $.ajax({
        url: getClassSubjects,
        type: 'post',
        dataType: 'json',  
        data: {'section_id' : section_id},
        success: function(result){
          if(result.length!=0){
            //console.log(result);
            //GET First Semester Subjects and Teachers
            $.ajax({
              url: getClassSubjects,
              type: 'post',
              dataType: 'json',  
              data: {'section_id' : section_id, 'semester' : 'First Semester'},
              success: function(res){
                console.log(res);
                var x = res.length;
                for(var i=0; i<x-1; i++){
                  duplicate(1);
                }
                for(var i=0; i<x; i++){
                  $( ".subject-input-1:eq("+i+")" ).val(res[i].subject_id).trigger('change');
                  $( ".subject-input-1:eq("+i+")" ).prop('disabled', true);
                  $( ".teacher-input-1:eq("+i+")" ).val(res[i].teacher_id).trigger('change');
                }
              }
            });
            //GET Second Semester Subjects and Teachers
            $.ajax({
              url: getClassSubjects,
              type: 'post',
              dataType: 'json',  
              data: {'section_id' : section_id, 'semester' : 'Second Semester'},
              success: function(res){
                console.log(res);
                var x = res.length;
                for(var i=0; i<x-1; i++){
                  duplicate(2);
                }
                for(var i=0; i<x; i++){
                  $( ".subject-input-2:eq("+i+")" ).val(res[i].subject_id).trigger('change');
                  $( ".subject-input-2:eq("+i+")" ).prop('disabled', true);
                  $( ".teacher-input-2:eq("+i+")" ).val(res[i].teacher_id).trigger('change');
                }
              }
            });
          }

          else{
            $( ".subject-input-1" ).val("").trigger("change");
            $( ".teacher-input-1" ).val("").trigger("change");
            $( ".subject-input-2" ).val("").trigger("change");
            $( ".teacher-input-2" ).val("").trigger("change");
            
            $.ajax({
              url: getCurrSubjects,
              type: 'post',
              dataType: 'json',  
              data: {'strand_code': $('#select-strand').val(), 'year_level_id' : $('#select-year').val(), 'semester' : 'First Semester'},
              success: function(res){
                //console.log(result);
                var x = res.length;
                var y = res.length-1;

                for(var i=0; i<x-1; i++){
                  duplicate(1);  
                }
                for(var i=0; i<x; i++){
                  $( ".subject-input-1:eq("+i+")" ).val(res[i].subject_code).trigger('change');
                  $( ".subject-input-1:eq("+i+")" ).prop('disabled', true);
                }
              }
            });
            
            $.ajax({
              url: getCurrSubjects,
              type: 'post',
              dataType: 'json',  
              data: {'strand_code': $('#select-strand').val(), 'year_level_id' : $('#select-year').val(), 'semester' : 'Second Semester'},
              success: function(res){
                //console.log(res);
                var x = res.length;
                var y = res.length-1;

                for(var i=0; i<x-1; i++){
                  duplicate(2);  
                }

                for(var i=0; i<x; i++){
                  $( ".subject-input-2:eq("+i+")" ).val(res[i].subject_code).trigger('change');
                  $( ".subject-input-2:eq("+i+")" ).prop('disabled', true);
                  $( ".teacher-input-2:eq("+i+")" ).val(res[i].teacher_id).trigger('change');    
                }
              }
            });
          }
        }
      });

    })


    //ADD SUBJECT-TEACHER BOX

    function duplicate(set){
      $( "#set-"+set ).clone().attr("style", "margin-top: 10px;").addClass('clone').appendTo('.append-to-'+set);
      $('.select2').select2();
      $('.select2').next().next().remove();
      $('.btn-close').on('click', function(){
        this.closest('.set').remove();
      });
    }

    $('#save-btn').on('click', function(){
      var subjects_1 = [];
      var teachers_1 = [];
      var subjects_2 = [];
      var teachers_2 = [];
      var section_id = $('#select-section').val();
      $('.subject-input-1').each(function(index, elem) {
        subjects_1.push($(elem).val());
      })
      $('.teacher-input-1').each(function(index, elem) {
        teachers_1.push($(elem).val());
      })
      $('.subject-input-2').each(function(index, elem) {
        subjects_2.push($(elem).val());
      })
      $('.teacher-input-2').each(function(index, elem) {
        teachers_2.push($(elem).val());
      })
      var x = subjects_1.length;
      var y = subjects_2.length;

      $.ajax({
            url: deleteUrl,
            type: 'post', 
            data: {'section_id' :  section_id}, 
            success: function(result){
              //console.log(result);
              for(var i=0; i<x; i++){
                if(!teachers_1[i]){
                  console.log('return');
                  $.notify({
                    title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                    message: "Please fill up all teacher input."
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
                  return;
                }
              };
              for(var i=0; i<y; i++){
                if(!teachers_2[i]){
                  console.log('return 2');
                  $.notify({
                    title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                    message: "Please fill up all teacher input."
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
                  return;
                }
              };
              for(var i=0; i<x; i++){
                //console.log(teachers[i] +' : '+ subjects[i]);
                //console.log(subjects);
                $.ajax({
                  url: addUrl,
                  type: 'post', 
                  data: {'teacher_id' : teachers_1[i], 'subject_id' : subjects_1[i], 'section_id' :  section_id, 'semester' : 'First Semester'}, 
                  success: function(result){
                    //console.log(result);
                  }
                }); 
              }
              for(var i=0; i<y; i++){
                //console.log(teachers[i] +' : '+ subjects[i]);
                //console.log(subjects);
                $.ajax({
                  url: addUrl,
                  type: 'post', 
                  data: {'teacher_id' : teachers_2[i], 'subject_id' : subjects_2[i], 'section_id' :  section_id, 'semester' : 'Second Semester'}, 
                  success: function(result){
                    //console.log(result);
                  }
                }); 
              }

              $.notify({
                title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
                message: "Saved."
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

    })



     

    

  })
