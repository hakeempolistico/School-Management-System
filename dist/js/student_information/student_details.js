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
})