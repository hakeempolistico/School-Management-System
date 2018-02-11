$(function (){
    $('#studentList1').DataTable();
    var fullname, semester;

      /*$.ajax({
        url: getAdvisoryClassUrl,
        type: 'post',
        dataType: 'json', 
        data: {'section_id' : section_id}, 
        success: function(result){  
          //console.log(result)
          if(result == ''){
            //console.log('NO RECORDS');
            $('#studentList1').find('tbody tr').remove();
            $('#studentList1').find('tbody').append(
          '<tr> <td colspan="5"><center> NO SCHEDULE SET <center></td> </tr>'
          );
          return;
          }
          else{
            $('#studentList1').find('tbody tr').remove();
            $.each(result, function( index, value ) {
              $('#studentList1').find('tbody').append(
                '<tr> <td>'+value[0]+'</td> <td>'+value[1]+'</td> <td>'+value[2]+'</td> </tr>'
                )
            });

            
      
            $('.btn-view').on('click', function(){
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
      
            $('.btn-grades').on('click', function(){
              lrn = $(this).parents('tr').find('td:first').html();
              fullname = $(this).parents('tr').find('td:nth-child(2)').text();
              semester = $('#select-semester').val();

              $('#g-fullname').html('<b>Name: </b>'+fullname);


              $.ajax({
                url: getGradesUrl,
                type: 'post',
                dataType: 'json', 
                data: {'lrn' : lrn, 'semester' : semester}, 
                success: function(result){  
                  console.log(result);
                }
              });

            }) 
          }
        }
      });*/
      populateTable();



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

        $("#table-students").on("click", "tr td .btn-grades", function(){
          lrn = $(this).parents('tr').find('td:first').html();
          fullname = $(this).parents('tr').find('td:nth-child(2)').text();
          semester = $('#select-semester').val();

          $('#g-fullname').html('<b>Name: </b>'+fullname);


          $.ajax({
            url: getGradesUrl,
            type: 'post',
            dataType: 'json', 
            data: {'lrn' : lrn, 'semester' : semester}, 
            success: function(result){  
              console.log(result);
              $('#table-grades').find('tbody tr').remove();
              $.each(result, function( index, value ) {
                if(!value.first_quarter){
                  value.first_quarter = '-';
                }
                else if(!value.second_quarter){
                  value.second_quarter = '-';
                }
                $('#table-grades').find('tbody').append('<tr><td>'+index+' </td> <td>'+value.first_quarter+' </td> <td> '+value.second_quarter+'</td><td> </td></tr>')
              });
              
            }
          });

        })
      }
  })