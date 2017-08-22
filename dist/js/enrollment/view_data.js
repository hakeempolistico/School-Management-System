  $(document).ready(function(){ 
    
		function changeTable(){
			$('table').DataTable().destroy();
			$('#box').removeAttr('hidden'); 
			$('table th').remove(); 
			$('.record').remove();
			$('#lapa').remove();
		};

    //-------------------------------------------------------------------------------------------------
		$("#viewStudents").click(function(){ 
			changeTable();
			$('#tableTitle').text('List of Students');
			$('thead tr').append( $('<th />', {text : 'LRN'}) );
			$('thead tr').append( $('<th />', {text : 'Name'}) ); 
			$('thead tr').append( $('<th />', {text : 'Grade'}) ); 
			$('thead tr').append( $('<th />', {text : 'Requirements'}) ); 
			$('thead tr').append( $('<th />', {text : 'Action'}) ); 

			$.each(arrofobject, function(index, val) {
				$('tbody').append('<tr class="record"><td>'+val.lrn+'</td><td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td><td>'+val.grade+'</td>'+
          (val.requirements === "COMPLETE" ? '<td><span class="label label-success">'+val.requirements+'</span></td>': '<td><span class="label label-danger">'+val.requirements+'</span></td>')+
          '<td><button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-info btn-flat btn-xs buttonView" style="max-width: 100px; display:block;margin: auto;">View</button></td> </div> </tr>');
				});
				
				$(".buttonView").click(function(){
          var lrn = $(this).closest('tr').find('td:eq(0)').html(); 
          $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'lrn' : lrn, 'table': 'students', 'set': 'lrn' }, 
            success: function(result){
              //alert(result);
              $.each(result, function(index, val) {
                $('#name').html(val.first_name +" "+ val.middle_name + " " + val.last_name);
                $('#lrn').html(val.lrn);
                $('#contact').html(val.contact);
                $('#birth_date').html(val.birth_date);
                $('#birth_place').html(val.birth_place);
                $('#age').html(val.age);
                $('#mother_tongue').html(val.mother_tongue);
                $('#religion').html(val.religion);
                $('#street').html(val.street);
                $('#barangay').html(val.barangay+", ");
                $('#city').html(val.city);
                $('#province').html(val.province);
                $('#sex').html(val.sex);
                $('#father_name').html(val.father_name);
                $('#father_contact').html(val.father_contact);
                $('#mother_name').html(val.mother_name);
                $('#mother_contact').html(val.mother_contact);
                $('#guardian').html(val.guardian);
                $('#relationship').html(val.relationship);
                $('#guardian_contact').html(val.guardian_contact);  
                $('#position').html('Grade '+val.grade+' Student');  
                $('#modal-note').html(val.note);                   
                $('.requirements-section').show();                     
                $('#input-submit').show();                
                $('#input-lrn').val(val.lrn);  
              })
            }
          });

					$.ajax({
					  url: ajaxReqUrl,
            type: 'post',
            dataType: 'json', 
            data: {'lrn' : lrn, 'table': 'requirements', 'set': 'lrn' }, 
						success: function(result){
							//alert(result);
              var requirements = [];
              $.each(result, function(index, val) {
               //alert(val.requirement);
               requirements.push(val.requirement);

              });
              $('#modal-requirements').val(requirements);
              $('#modal-requirements').val(requirements).trigger('change')       
            }
					});
				});
					
		 $('table').DataTable();
		});
    //-------------------------------------------------------------------------------------------------
    $("#viewTeachers").click(function(){ 
      changeTable();
      $('#tableTitle').text('List of Teachers');
      $('thead tr').append( $('<th />', {text : 'Employee ID'}) );
      $('thead tr').append( $('<th />', {text : 'Name'}) ); 
      $('thead tr').append( $('<th />', {text : 'Position'}) ); 
      $('thead tr').append( $('<th />', {text : 'Major'}) ); 
      $('thead tr').append( $('<th />', {text : 'Status'}) ); 
      $('thead tr').append( $('<th />', {text : 'Action'}) ); 

      $.each(arrofobject2, function(index, val) {
        $('tbody').append('<tr class="record"><td>'+val.employee_id+'</td><td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td><td>'+val.position+'</td> <td>'+val.major+'</td>'+
          (val.status == "ACTIVE" ? '<td><span class="label label-success">'+val.status+'</span></td>': '<td><span class="label label-danger">'+val.status+'</span></td>')+' <td><button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-info btn-flat btn-xs buttonView" style="max-width: 100px; display:block;margin: auto;">View</button></td> </div> </tr>');
        });
        
        $(".buttonView").click(function(){
          var lrn = $(this).closest('tr').find('td:eq(0)').html(); 
          $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json',
            data: {'lrn' : lrn, 'table': 'teachers', 'set': 'employee_id' }, 
            success: function(result){
              //alert(result);
              $.each(result, function(index, val) {
                $('#name').html(val.first_name +" "+ val.middle_name + " " + val.last_name);
                $('#lrn').html(val.employee_id);
                $('#contact').html(val.contact);
                $('#birth_date').html(val.birth_date);
                $('#birth_place').html(val.birth_place);
                $('#age').html(val.age);
                $('#mother_tongue').html(val.mother_tongue);
                $('#religion').html(val.religion);
                $('#street').html(val.street);
                $('#barangay').html(val.barangay+", ");
                $('#city').html(val.city);
                $('#province').html(val.province);
                $('#sex').html(val.sex);
                $('#father_name').html('NOT AVAILABLE');
                $('#father_contact').html('NOT AVAILABLE');
                $('#mother_name').html('NOT AVAILABLE');
                $('#mother_contact').html('NOT AVAILABLE');
                $('#guardian').html('NOT AVAILABLE');
                $('#relationship').html('NOT AVAILABLE');
                $('#guardian_contact').html('NOT AVAILABLE');
                $('#position').html(val.position); 
                $('#modal-note').html(val.note);      
                $('.requirements-section').hide(); 
                $('#input-submit').hide();     
              })
            }
          });
        });
          
     $('table').DataTable();
    });
    //-------------------------------------------------------------------------------------------------
    $("#viewRooms").click(function(){ 
      changeTable();
      $('#tableTitle').text('List of Rooms');
      $('thead tr').append( $('<th />', {text : 'Room Name'}) );
      $('thead tr').append( $('<th />', {text : 'Class'}) ); 
      $('thead tr').append( $('<th />', {text : 'Status'}) );  
      

      $.each(arrofobject3, function(index, val) {
        $('tbody').append('<tr class="record"><td>'+val.room_name+'</td><td>'+val.class_name+'</td>'+
          (val.status == 'OCCUPIED' ? '<td><span class="label label-success">'+val.status+'</span></td>':'<td><span class="label label-info">'+val.status+'</span></td></div></tr>')
          );
        });
        
          
     $('table').DataTable();
    });
    //-------------------------------------------------------------------------------------------------
    $("#viewClasses").click(function(){ 
      changeTable();
      $('#tableTitle').text('List of Classes');
      $('thead tr').append( $('<th />', {text : 'Class Name'}) );
      $('thead tr').append( $('<th />', {text : 'Adviser'}) ); 
      $('thead tr').append( $('<th />', {text : 'Grade'}) ); 
      $('thead tr').append( $('<th />', {text : 'Capacity'}) ); 
      $('thead tr').append( $('<th />', {text : 'Status'}) ); 

      $.each(arrofobject4, function(index, val) {
        $('tbody').append('<tr class="record"><td>'+val.class_name+'</td><td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td><td>'+val.year+'</td><td>'+val.occupants+'/'+val.capacity+
           (val.occupants < val.capacity ? '<td><span class="label label-success">NOT FULL</span></td>':'<td><span class="label label-danger">FULL</span></td></div></tr>')
          );
        });
        
          
     $('table').DataTable();
    });
		
		
		
}); 