var semester, quarter, subject, active_class, grade, lrn;

$(function () {
	$('#box-grades').hide();
	$('#select-semester').on('change', function(){
		semester = $(this).val();
		populateClass();
		populateTable();
		showTable();

	}) 
	$('#select-quarter').on('change', function(){
		quarter = $(this).val();
		populateSubjects()
		$('#select-class').val(null).trigger("change");
		$('#select-subject').val(null).trigger("change");
		$('#select-class').find('option').remove();
		showTable();
	}) 
	$('#select-subject').on('change', function(){
		subject = $(this).val();
		populateClass();
		showTable();
	}) 
	$('#select-class').on('change', function(){
		active_class = $(this).val();
		populateTable();
		showTable();
	}) 

	//TEACHERS
	$('#t-select-semester').on('change', function(){
		semester = $(this).val();
		$('#h-semester').val(semester);
		populateTClass();
		populateTable();
		showTable();

	}) 
	$('#t-select-quarter').on('change', function(){
		quarter = $(this).val();
		$('#h-quarter').val(quarter);
		$('#t-select-class').val(null).trigger("change");
		$('#t-select-subject').val(null).trigger("change");
		$('#t-select-class').find('option').remove();
		populateTSubjects()
		showTable();
	}) 
	$('#t-select-subject').on('change', function(){
		subject = $(this).val();
		$('#h-subject').val(subject);
		populateTClass();
		showTable();
	}) 
	$('#t-select-class').on('change', function(){
		active_class = $(this).val();
		$('#h-class').val(active_class);
		populateTable();
		showTable();
	}) 

	function showTable(){
		if(semester && quarter && subject && active_class){
			$('#box-grades').show();
		}
	}

	function populateClass(){
		$('#select-class').val(null).trigger("change");
		$('#select-class').find('option').remove();
        $.ajax({
          url: getClassUrl,
          type: 'post',
          dataType: 'json',  
          data: {'subject_id' :  subject, 'semester' : semester},
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
          data: {'semester' : semester},
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
          data: {'subject_id' :  subject, 'semester' : semester, 'teacher_id' :  e_id,},
          success: function(res){
            console.log(res);
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
          data: {'teacher_id' :  e_id, 'semester' : semester},
          success: function(res){
            //console.log(res);
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

	function populateTable(){
	  
	    $.ajax({
	      url: getClassStudentsUrl,
	      type: 'post',
	      dataType: 'json',  
	      data: {'section_id' :  active_class, 'semester' : semester, 'quarter' : quarter, 'subject_code' : subject},
	      success: function(res){
	        //console.log(res);
		    $('#table-grades').find('tbody').find('tr').remove();
	        $.each(res, function( index, val ) {
			  if(val.grade){
			  	if(val.grade < 75){
			  		var gradeInput = '<center><span class="badge bg-red">'+val.grade+'</span></center>';
			  		var status = '<center><span class="badge bg-red">failed</span></center>';
			  	}
			  	else{
			  		var gradeInput = '<center><span class="badge bg-green">'+val.grade+'</span></center>';
			  		var status = '<center><span class="badge bg-green">passed</span></center>';
			  	}
			  		var btn = '<td><center><button class="btn btn-default btn-xs"><span class="fa fa-fw fa-ban text-danger" disabled></span></button></center></td></tr>'
			  	
			  }
			  else{
			  	var gradeInput = '<input type="number" style="width: 50px"></td>';
			  	var status = '<center><span class="badge bg-aqua">pending</span></center>';
			  	var btn = '<td><center><button class="btn btn-default btn-xs btn-input"><span class="fa fa-fw fa-check text-success"></span></button></center></td></tr>';
			  }
			  $('#table-grades').find('tbody').append(
			  	'<tr><td>'+val.students_info_lrn+'</td>'+
			  	'<td>'+val.full_name+'</td><td>'+
			  	gradeInput+
			  	'<td>'+status+'</td>'+
			  	btn
			  	)
			});
	      }
	    });

	    $('#table-grades').on('click', ".btn-input", function(){
	    	grade = $(this).parents('tr').find('input').val();
	    	lrn = $(this).parents('tr').find('td:first').text();
	    	if(grade || grade != ''){
				$('#modal-confirm').modal('show');
	    	}
	    })

	}

	$('#btn-confirm').on('click',function(){
		//console.log(grade+' : '+lrn+' : '+semester+' : '+quarter);
	    $.ajax({
	      url: addGradeUrl,
	      type: 'post',
	      dataType: 'json',  
	      data: {'lrn' : lrn, 'semester' : semester, 'quarter' : quarter, 'subject_code' : subject, 'grade' :  grade},
	      success: function(res){
	        //console.log(res);
	      }
	    });
	    populateTable();
	})


});