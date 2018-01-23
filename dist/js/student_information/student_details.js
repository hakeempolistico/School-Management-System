$(function () {

	$('.btn-view').on('click', function(){
		lrn = $(this).parents('tr').find('td:first').html();

	    $.ajax({
	      url: getStudentInfoUrl,
	      type: 'post',
	      dataType: 'json', 
	      data: {'lrn' : lrn}, 
	      success: function(result){  
	      	//console.log(result);
	      	$('#admission-date').html(result[0].date_registered);
	      	$('#full-name').html(result[0].first_name + ' ' + result[0].middle_name + ' ' + result[0].last_name);
	      	$('#lrn').html(lrn);
	      	$('#sex').html(result[0].sex);
	      	$('#birthdate').html(result[0].birth_date);
	      	$('#contact-no').html(result[0].contact_number);
	      }
	    });

	    $.ajax({
	      url: getGuardianInfoUrl,
	      type: 'post',
	      dataType: 'json', 
	      data: {'students_info_lrn' : lrn}, 
	      success: function(result){  
	      	//console.log(result);
	      	$('#guardian').html(result[0].name);
	      	$('#guardian-contact').html(result[0].contact);

	      }
	    });
	}) 

	$('.btn-sched').on('click', function(){
		lrn = $(this).parents('tr').find('td:first').html();
	    $.ajax({
	      url: getSchedUrl,
	      type: 'post',
	      dataType: 'json', 
	      data: {'lrn' : lrn}, 
	      success: function(result){  
	      	if(result == ''){
	      		//console.log('NO RECORDS');
		      	$('#table-sched').find('tbody tr').remove();
	      		$('#table-sched').find('tbody').append(
			  	'<tr> <td colspan="5"><center> NO SCHEDULE SET <center></td> </tr>'
			  	);
			  	return;
	      	}
	      	else{
		      	$('#table-sched').find('tbody tr').remove();
		      	$.each(result, function( index, value ) {
				  $('#table-sched').find('tbody').append(
				  	'<tr> <td>'+value[0]+'</td> <td>'+value[1]+'</td> <td>'+value[2]+'</td> <td>'+value[3]+'</td> <td>'+value[4]+'</td> </tr>'
				  	)
				});
	      	}
	      }
	    });

	}) 
})