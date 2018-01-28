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
		showTable();
	})

	$('#select-quarter').on('change', function(){
		quarter = $(this).val();
		$('#box-select').show();
		showTable();
	})

	$('#select-subject').on('change', function(){
		subject = $(this).val();
		$('#select-class').val(null).trigger("change");
		$('#select-class').find('option').remove();

        $.ajax({
          url: getClassUrl,
          type: 'post',
          dataType: 'json',  
          data: {'subject_code' :  $('#select-subject').val()},
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
	}) 

	$('#select-class').on('change', function(){
		active_class = $(this).val();
		showTable();
	}) 


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
});