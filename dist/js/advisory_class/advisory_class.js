$(function (){
    var fullname, semester, quarter, section_id;

      populateTable();

      $('#select-quarter').on('change', function(){
        quarter = $(this).val()
        semester = $('#select-semester').val()
        section_id = $('#select-section').val()
        $('#i-quarter').val(quarter)
      })
      $('#select-semester').on('change', function(){
        semester = $(this).val()
        quarter = $('#select-quarter').val()
        section_id = $('#select-section').val()
        $('#i-semester').val(semester)
      })


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