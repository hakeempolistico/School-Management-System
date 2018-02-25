var semester, quarter, subject, active_class, grade, lrn;

$(function () {
	$('#box-grades').hide();
	$('#select-semester').on('change', function(){
		semester = $(this).val();
		$('#i-semester').val(semester);
		populateClass();
	}) 
	$('#select-quarter').on('change', function(){
		quarter = $(this).val();
		$('#i-quarter').val(quarter);
		populateSubjects()
		$('#select-class').val(null).trigger("change");
		$('#select-subject').val(null).trigger("change");
		$('#select-class').find('option').remove();
	}) 
	$('#select-subject').on('change', function(){
		subject = $(this).val();
		$('#i-subject').val(subject);
		populateClass();
	}) 
	$('#select-class').on('change', function(){
		active_class = $(this).val();
		$('#i-class').val(active_class);
	}) 

	//TEACHERS
	$('#t-select-semester').on('change', function(){
		semester = $(this).val();
		$('#h-semester').val(semester);
		populateTSubjects();
		populateTClass();

	}) 
	$('#t-select-quarter').on('change', function(){
		quarter = $(this).val();
		$('#h-quarter').val(quarter);
		$('#t-select-class').val(null).trigger("change");
		$('#t-select-subject').val(null).trigger("change");
		$('#t-select-class').find('option').remove();
	}) 
	$('#t-select-subject').on('change', function(){
		subject = $(this).val();
		$('#h-subject').val(subject);
		populateTClass();
	}) 
	$('#t-select-class').on('change', function(){
		active_class = $(this).val();
		$('#h-class').val(active_class);
	}) 

	function populateClass(){
		$('#select-class').val(null).trigger("change");
		$('#select-class').find('option').remove();
        $.ajax({
          url: getClassUrl,
          type: 'post',
          dataType: 'json',  
          data: {'subject_id' :  subject, 'semester' : semester, 'academic_year' : aYear},
          success: function(res){
            console.log(res);
	        $('#select-class').append($('<option>', {value: null,text : null})).select2();
            $.each(res, function( index, value ) {
		        $('#select-class').append($('<option>', { 
		            value: value.section_id,
		            text : value.class
		        })).select2();
			});
          }
        });
	}

	function populateSubjects(){
		$('#select-subject').val(null).trigger("change");
		$('#select-subject').find('option').remove();
        $.ajax({
          url: getSubjectsUrl,
          type: 'post',
          dataType: 'json',  
          data: {'semester' : semester, 'academic_year' : aYear},
          success: function(res){
            //console.log(res);
	        $('#select-subject').append($('<option>', {value: null,text : null})).select2();
            $.each(res, function( index, value ) {
		        $('#select-subject').append($('<option>', { 
		            value: value,
		            text : value
		        })).select2();
			});
          }
        });
	}

	function populateTClass(){
		$('#t-select-class').val(null).trigger("change");
		$('#t-select-class').find('option').remove();
        $.ajax({
          url: getClassUrl,
          type: 'post',
          dataType: 'json',  
          data: {'subject_id' :  subject, 'semester' : semester, 'teacher_id' :  e_id, 'academic_year' : aYear},
          success: function(res){
            //console.log(res);
	        $('#t-select-class').append($('<option>', {value: null,text : null})).select2();
            $.each(res, function( index, value ) {
		        $('#t-select-class').append($('<option>', { 
		            value: value.section_id,
		            text : value.class
		        })).select2();
			});
          }
        });
	}

	function populateTSubjects(){
		$('#t-select-subject').val(null).trigger("change");
		$('#t-select-subject').find('option').remove();
        $.ajax({
          url: getSubjectsUrl,
          type: 'post',
          dataType: 'json',  
          data: {'teacher_id' :  e_id, 'semester' : semester, 'academic_year' : aYear},
          success: function(res){
            console.log(res);
	        $('#t-select-subject').append($('<option>', {value: null,text : null})).select2();
            $.each(res, function( index, value ) {
		        $('#t-select-subject').append($('<option>', { 
		            value: value,
		            text : value
		        })).select2();
			});
          }
        });
	}



});