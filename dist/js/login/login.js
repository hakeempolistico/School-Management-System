  $(function () {
    $( document ).ready(function() {
    $( "#btn_signIn" ).click(function() {
      /*var json = { "username":"John", "password":31};
      var myJSON = JSON.stringify(json); //CONVERT TO STRING
      var obj = JSON.parse(myJSON); //CONVERT TO OBJECT
      alert(obj.username);*/

      var username = $('#input_username').val();
      var password = $('#input_password').val();

      var data = {
          username: username,
          password: password
      }
      //alert("Username: "+username+", Password: "+password);

      $.ajax({
          url: "<?php echo base_url('login/validation')?>", 
          type:'post',
          data: data,
          success: function(result){
            //alert(result);

            if (result==2){
              $('#validation').text('*No username found!');
            }
            else if(result==3){
               $('#validation').text('*Incorrect password!');
            }
            else if(result==1){
              window.location.replace("<?php echo base_url('enrollment/dashboard')?>");
            }
        }});
    });
  });
  }); 