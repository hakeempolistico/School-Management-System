$(document).ready(function(){
      $("#inputLRN").change(function(){
          var value = $('#inputLRN').val();
          $('#textLRN').text(value);
      });
      $("#inputFNAME").change(function(){
          var value = $('#inputFNAME').val();
          $('#textFNAME').text(value);
      });
      $("#inputMNAME").change(function(){
          var value = $('#inputMNAME').val();
          $('#textMNAME').text(value);
      });
      $("#inputLNAME").change(function(){
          var value = $('#inputLNAME').val();
          $('#textLNAME').text(value);
      });
      $("#inputSEX").change(function(){
          var value = $('#inputSEX').val();
          $('#textSEX').text(value);
      });
      $("#datepicker").change(function(){
          var value = $('#datepicker').val();
          $('#textDATEPICKER').text(value);
      });
      $("#inputBIRTHPLACE").change(function(){
          var value = $('#inputBIRTHPLACE').val();
          $('#textBIRTHPLACE').text(value);
      });
      $("#inputAGE").change(function(){
          var value = $('#inputAGE').val();
          $('#textAGE').text(value);
      });
      $("#inputMOTHERTONGUE").change(function(){
          var value = $('#inputMOTHERTONGUE').val();
          $('#textMOTHERTONGUE').text(value);
      });
      $("#inputRELIGION").change(function(){
          var value = $('#inputRELIGION').val();
          $('#textRELIGION').text(value);
      });
      $("#inputPROVINCE").change(function(){
          var street = $('#inputSTREET').val();
          var brgy = $('#inputBARANGAY').val();
          var city = $('#inputCITY').val();
          var province = $('#inputPROVINCE').val();
          $('#textADDRESS').text(street+', '+brgy+', '+city+', '+province);
      });
      $("#inputFATHER").change(function(){
          var value = $('#inputFATHER').val();
          $('#textFATHER').text(value);
      });
      $("#inputMOTHER").change(function(){
          var value = $('#inputMOTHER').val();
          $('#textMOTHER').text(value);
      });
      $("#inputFATHERCONTACT").change(function(){
          var value = $('#inputFATHERCONTACT').val();
          $('#textFATHERCONTACT').text(value);
      });
      $("#inputMOTHERCONTACT").change(function(){
          var value = $('#inputMOTHERCONTACT').val();
          $('#textMOTHERCONTACT').text(value);
      });
      $("#inputGUARDIAN").change(function(){
          var value = $('#inputGUARDIAN').val();
          $('#textGUARDIAN').text(value);
      });
      $("#inputRELATIONSHIP").change(function(){
          var value = $('#inputRELATIONSHIP').val();
          $('#textRELATIONSHIP').text(value);
      });
      $("#inputGUARDIANCONTACT").change(function(){
          var value = $('#inputGUARDIANCONTACT').val();
          $('#textGUARDIANCONTACT').text(value);
      });
      $("#inputCONTACT").change(function(){
          var value = $('#inputCONTACT').val();
          $('#textCONTACT').text(value);
      });
      $("#inputREQUIREMENTS").on("change", function (e) {
          var a = "Form 137,Form 138,NSO Birth Certificate"

          if ($(this).val() == a) {
            document.getElementById("textREQUIREMENTS").innerHTML ='<span class="label label-success">Complete</span>';
            } else {
            document.getElementById("textREQUIREMENTS").innerHTML = '<span class="label label-warning">Incomplete</span>';
            }
      });

    });