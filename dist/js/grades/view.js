var view, semester, quarter, subject, active_class;

$(function () {
	$('#box-select').hide();
	$('#box-quarter').hide();
	$('#box-semester').hide();
	$('#box-sy').hide();
	$('#col-sem').hide();
	$('#col-quarter').hide();


	$('#select-view').on('change', function(){
		view = $(this).val();
		if(view=='1'){
			$('#col-quarter').show();
			$('#col-sem').hide();
		}
		else if(view=='2'){
			$('#col-quarter').hide();
			$('#col-sem').show();
		}
		else if(view=='3'){
			$('#col-quarter').hide();
			$('#col-sem').hide();
			$('#box-select').show();
		}
		showTable();
		//showTable();
	});

	$('#select-semester').on('change', function(){
		semester = $(this).val();
		$('#box-select').show();
		$('#select-class').val(null).trigger("change");
		$('#select-subject').val(null).trigger("change");
		$('#select-class').find('option').remove();
		populateClass();
		showTable();
		populateTable();
	})

	$('#select-quarter').on('change', function(){
		quarter = $(this).val();
		$('#box-select').show();
		showTable();
	})

	$('#select-subject').on('change', function(){
		subject = $(this).val();
		populateClass();
	}) 

	$('#select-class').on('change', function(){
		active_class = $(this).val();
		showTable();
		populateTable();
	}) 

	function populateClass(){
		$('#select-class').val(null).trigger("change");
		$('#select-class').find('option').remove();

        $.ajax({
          url: getClassUrl,
          type: 'post',
          dataType: 'json',  
          data: {'subject_id' :  $('#select-subject').val(), 'semester' : semester},
          success: function(res){
            //console.log(res);
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

	function showTable(){
		if(view=='1'){
			if(quarter){
				if(subject && active_class){
					$('#box-semester').hide();
					$('#box-sy').hide();
					$('#box-quarter').show();
				}
			}
		}
		else if(view=='2'){
			if(semester){
				if(subject && active_class){
					$('#box-semester').show();
					$('#box-sy').hide();
					$('#box-quarter').hide();
				}
			}
		}
		else if(view=='3'){
			if(subject && active_class){
				$('#box-semester').hide();
				$('#box-sy').show();
				$('#box-quarter').hide();
			}
		}
	}

	function populateTable(){
	  	if(!semester && !subject_code && !active_class){
	  		return;
	  	}
	    $.ajax({
	      url: getClassStudentsUrl,
	      type: 'post',
	      dataType: 'json',  
	      data: {'section_id' :  active_class, 'subject_code' : subject, 'semester' : semester},
	      success: function(res){
	        console.log(res);
		    $('#table-sem').find('tbody').find('tr').remove();
		    $('#title-sem').text(semester + ' Grades')
	        $.each(res, function( index, val ) {
			  //alert( index + ": " + value );
			  var ave = 0;
			  if(val.first_grade){
			  	if(val.first_grade < 75){
			  		var gradeInput = '<center><span class="badge bg-red">'+val.first_grade+'</span></center>';
			  		var status = '<center><span class="badge bg-red">failed</span></center>';
			  		ave = parseInt(val.first_grade);
			  	}
			  	else{
			  		var gradeInput = '<center><span class="badge bg-green">'+val.first_grade+'</span></center>';
			  		var status = '<center><span class="badge bg-green">passed</span></center>';
			  		ave = parseInt(val.first_grade);
			  	}
			  }
			  else{
			  		var gradeInput = '<center>-</center>';
			  }

			  if(val.second_grade){
			  	if(val.second_grade < 75){
			  		var gradeInput2 = '<center><span class="badge bg-red">'+val.second_grade+'</span></center>';
			  		ave = (ave + parseInt(val.second_grade)) / 2;
			  	}
			  	else{
			  		var gradeInput2 = '<center><span class="badge bg-green">'+val.second_grade+'</span></center>';
			  		ave = (ave + parseInt(val.second_grade)) / 2;
			  	}
			  }
			  else{
			  		var gradeInput2 = '<center>-</center>';
			  }

			  if(ave == 0){
			  	var b_ave = '<center><span class="badge bg-blue">pending</span></center>';
			  	var status = '<center><span class="badge bg-blue">pending</span></center>';
			  }
			  else if(ave < 75){
			  	var b_ave = '<center><span class="badge bg-red">'+ave+'</span></center>';
			  	var status = '<center><span class="badge bg-red">failed</span></center>';
			  }
			  else{
			  	var b_ave = '<center><span class="badge bg-green">'+ave+'</span></center>';
			  	var status = '<center><span class="badge bg-green">passed</span></center>';
			  }
			  $('#table-sem').find('tbody').append(
			  	'<tr><td>'+val.students_info_lrn+'</td>'+
			  	'<td>'+val.full_name+'</td><td>'+
			  	gradeInput + '</td><td>' + gradeInput2 +'</td><td>'+b_ave+'</td><td>' + status + '</td>'
			  	)
			});
	      }
	    });

	}
});