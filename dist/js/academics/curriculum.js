$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    var strand_code, year_id, semester;
    
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
      }
    }); 

    $('#btn-confirm').on('click', function(){ 

		strand = $('#select-strand').val();
		year = $('#select-year').val();
		sem = $('#select-sem').val();	

    	if(strand != '' && year != '' && sem !=''){
    		$('#box-overlay').hide();
    		strand_code = $('#select-strand').val();
    		year_id = $('#select-year').val();
    		semester = $('#select-sem').val();

    		var strand_text = $('#select-strand').select2('data');
    		var year_text = $('#select-year').select2('data');
    		var sem_text = $('#select-sem').select2('data');

    		$('#assign-subjects-title').text(strand_text[0].text+' - '+year_text[0].text+' - '+sem_text[0].text);

        $('.clone').remove();
        $( "#select-subject" ).val(null).trigger("change");
        $.ajax({
        url: getClassSubjects,
        type: 'post',
        dataType: 'json',  
        data: {'strand_code': strand_code, 'year_level_id': year_id, 'semester': semester},
        success: function(result){
          console.log(result);
          var x = result.length;
          for(var i=0; i<x-1; i++){  
            $( "#set" ).clone().attr("style", "margin-top: 10px;").addClass('clone').appendTo('.append');
            $('.select2').select2();
            $('.select2').next().next().remove();
            $('.btn-close').on('click', function(){
              this.closest('.set').remove();
            });
          }

          for(var i=0; i<x; i++){
            $( ".subject-input:eq("+i+")" ).val(result[i].subject_code).trigger('change');   
          }
        }
        });
    	}
      else{
        $.notify({
          title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
          message: "Please select Strand, Year and Semester."
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

      
    })

    $('#add-btn').on('click', function(){
      $( "#set" ).clone().attr("style", "margin-top: 10px;").addClass('clone').appendTo('.append');
      $('.select2').select2();
      $('.select2').next().next().remove();
      $('.btn-close').on('click', function(){
        this.closest('.set').remove();
      });

    })

    $('#save-btn').on('click', function(){
      var subjects = [];
      $('.subject-input').each(function(index, elem) {
        subjects.push($(elem).val());
      })
      var x = subjects.length;

      $.ajax({
            url: deleteUrl,
            type: 'post', 
            data: {'strand_code' :  strand_code, 'semester' : semester, 'year_level_id' : year_id}, 
            success: function(result){
              //console.log(result);
              for(var i=0; i<x; i++){
                if(!subjects[i]){
                  //console.log('return');
                  $.notify({
                    title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                    message: "Please fill up all subjects."
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
              }
              for(var i=0; i<x; i++){
                $.ajax({
                  url: addUrl,
                  type: 'post', 
                  data: {'subject_code' : subjects[i], 'strand_code' :  strand_code, 'year_level_id' : year_id, 'semester' : semester }, 
                  success: function(result){
                    //console.log('saved');
                  }
                }); 
              }
              $.notify({
                title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
                message: "Curriculum saved."
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

