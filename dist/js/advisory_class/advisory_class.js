$(function (){
    var fullname, semester, quarter, section_id;

      populateTable();

      $('#select-quarter').on('change', function(){
        quarter = $(this).val()
        semester = $('#select-semester').val()
        section_id = $('#select-section').val()
        if(quarter && semester){
          populateGrades()
        }
      })
      $('#select-semester').on('change', function(){
        semester = $(this).val()
        quarter = $('#select-quarter').val()
        section_id = $('#select-section').val()
        if(quarter && semester){
          populateGrades()
        }
      })

      function populateGrades(){

        $.ajax({
          url: getSubjectsUrl,
          type: 'post',
          dataType: 'json', 
          data: {'semester' : semester, 'section_id' : section_id}, 
          success: function(result){
            //console.log(result);
            $('#t-grades').find('thead').find('tr').find('th').remove()
            $('#t-grades').find('thead').find('tr').append('<th style="width: 20%;">Full Name</th>')

            $.each(result, function( index, value ) {
              $('#t-grades').find('thead').find('tr').append('<th>' + value +'</th>')
            });   
 
          }
        });

        $.ajax({
          url: getGradesUrl,
          type: 'post',
          dataType: 'json', 
          data: {'semester' : semester, 'quarter' : quarter, 'section_id' : section_id}, 
          success: function(result){  
            //console.log(result);
            
            var arr, colIndex, colCount
            $('#t-grades').find('tbody tr').remove();
            colCount = $("#t-grades").find('tr')[0].cells.length - 1;
            check = colCount + 1
            if(result == ''){
              $('#t-grades').find('tbody').append('<tr><td colspan="'+check+'"><center>NO STUDENTS</center></td></tr>')
              return
            }

            $.each(result, function( index, value ) {

              $('#t-grades').find('tbody').append('<tr><td>'+index+'</td></tr>')
              for (i = 0; i < colCount; i++) { 
                $('#t-grades').find('tbody').find('tr:last').append('<td></td>')
              }
              $.each(value, function( i, val ) {

                //console.log(index+ ' : ' + i + ' : ' +val)
                $('#t-grades').find('th').each(function(){
                  if( $(this).text() == i) {
                      colIndex = $('#t-grades').find('th').index(this)
                      //console.log(colIndex)
                      $('#t-grades').find('tbody').find('tr:last').find('td:eq("'+colIndex+'")').text(val)
                  }
                });


              })
            })
            
            /*$('#table-grades').find('tbody tr').remove();
            $.each(result, function( index, value ) {
              if(!value.first_quarter){
                value.first_quarter = '-';
              }
              else if(!value.second_quarter){
                value.second_quarter = '-';
              }
              $('#table-grades').find('tbody').append('<tr><td>'+index+' </td> <td>'+value.first_quarter+' </td> <td> '+value.second_quarter+'</td><td> </td></tr>')
            });*/
            
          }
        });
      }

      function populateTable(){
        $('#table-students').DataTable().destroy();
        $('#table-students').DataTable({
          "columns": [
              { "width": "30%" },
              { "width": "60%" },
              { "width": "10%" },
          ],
              "order": [] ,
              "ajax": getAdvisoryClassUrl,
              "responsive" : true
        });

        $("#table-students").on("click", "tr td .btn-view", function(){
          lrn = $(this).parents('tr').find('td:first').html();

          $.ajax({
            url: getStudentInfoUrl,
            type: 'post',
            dataType: 'json', 
            data: {'lrn' : lrn}, 
            success: function(result){  
              console.log(result);
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
              console.log(result);
              $('#guardian').html(result[0].name);
              $('#guardian-contact').html(result[0].contact);

            }
          });
        }) 

      }


  })