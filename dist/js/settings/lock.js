var user;

$('.toggle').prop('disabled', true);
$('#select-user').on('change', function(){
  user = $(this).val();
  $('.toggle').removeAttr('disabled');

  $.ajax({
    url: ajaxGetPermissionUrl,
    type: 'post',
    dataType: 'json', 
    success: function(res){
      //console.log(res);

      $.each(res, function( index, val ) {
        var u = 'val.'+user;
        var mn = val.module_name.split(' ').join('-');
        var n = '.'+mn+'-toggle';

        if(user == 'admin'){
          if(val.admin == 'active'){
            $(n).bootstrapToggle('on');
            console.log('User :  '+u);
            console.log('val.admin :  '+ val.admin);
          }
          else{
            $(n).bootstrapToggle('off');
            console.log('User :  '+u);
            console.log('val.admin :  '+ val.admin);
          }
        }
        else if(user == 'teacher'){
          if(val.teacher == 'active'){
            $(n).bootstrapToggle('on');
            console.log('User :  '+u);
            console.log('val.teacher :  '+ val.teacher);
          }
          else{
            $(n).bootstrapToggle('off');
            console.log('User :  '+u);
            console.log('val.teacher :  '+ val.teacher);
          }
        }
        else if(user == 'student'){
          if(val.student == 'active'){
            $(n).bootstrapToggle('on');
            console.log('User :  '+u);
            console.log('val.student :  '+ val.student);
          }
          else{
            $(n).bootstrapToggle('off');
            console.log('User :  '+u);
            console.log('val.student :  '+ val.student);
          }
        }
        
      });

    }
  });
}) 


$('.toggle').on('change', function(){
  var module;
  if(user == '' || !user){
    console.log(user);
    $.notify({
      title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong><br> ',
      message: "Select user first."
    },{
      type: 'danger',
      animate: {
        enter: 'animated fadeInUp',
        exit: 'animated fadeOutRight'
      },
      placement: {
        from: "top",
        align: "right"
      },
      offset: 20,
      delay: 2000,
      spacing: 10,
      z_index: 1031,
    });
    return;
  }

  if($(this).is(':checked') && $(this).hasClass('toggle-academics')){
    module = $(this).parents('.info-box-content').find('.info-box-number').text();

    $('.toggle-acad').each(function(){
      var m = $(this).parents('.info-box-content').find('.info-box-number').text();
      $(this).bootstrapToggle('on');
    })
  }
  else if(!$(this).is(':checked') && $(this).hasClass('toggle-academics')){
    module = $(this).parents('.info-box-content').find('.info-box-number').text();

    $('.toggle-acad').each(function(){
      var m = $(this).parents('.info-box-content').find('.info-box-number').text();
      $(this).bootstrapToggle('off');
    })
  }

  if($(this).is(':checked')){
    module = $(this).parents('.info-box-content').find('.info-box-number').text();
    //console.log(module + ' : active');

    /*$.ajax({
      url: updateUrl,
      type: 'post',
      dataType: 'json', 
      data: {'module' : module , 'status': 'active'}, 
      success: function(result){
        //console.log(result);
        if(result && result==true){
          $.notify({
            title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong><br> ',
            message: module + "   set active."
          },{
            type: 'success',
            animate: {
              enter: 'animated fadeInUp',
              exit: 'animated fadeOutRight'
            },
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            delay: 2000,
            spacing: 10,
            z_index: 1031,
          });
        }
      }
    });*/

    $.ajax({
      url: updateRecordUrl,
      type: 'post',
      dataType: 'json', 
      data: {'module' : module , 'status': 'active', 'user' : user}, 
      success: function(result){
        //console.log(result);
        /*if(result && result==true){
          $.notify({
            title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong><br> ',
            message: module + "   set active for " + user
          },{
            type: 'success',
            animate: {
              enter: 'animated fadeInUp',
              exit: 'animated fadeOutRight'
            },
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            delay: 2000,
            spacing: 10,
            z_index: 1031,
          });
        }*/
      }
    });

  }
  else{
    module = $(this).parents('.info-box-content').find('.info-box-number').text();
    //console.log(module + ' : inactive');      

    /*$.ajax({
      url: updateUrl,
      type: 'post',
      dataType: 'json', 
      data: {'status': 'inactive', 'module' : module}, 
      success: function(result){
        //console.log(result);
        if(result && result==true){
          $.notify({
            title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong> <br>',
            message: module + "   set inactive."
          },{
            type: 'danger',
            animate: {
              enter: 'animated fadeInUp',
              exit: 'animated fadeOutRight'
            },
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            delay: 2000,
            spacing: 10,
            z_index: 1031,
          });
        }
      }
    });*/

    $.ajax({
      url: updateRecordUrl,
      type: 'post',
      dataType: 'json', 
      data: {'module' : module , 'status': 'inactive', 'user' : user}, 
      success: function(result){
        //console.log(result);
        /*if(result && result==true){
          $.notify({
            title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong> <br>',
            message: module + "   set active for " + user
          },{
            type: 'danger',
            animate: {
              enter: 'animated fadeInUp',
              exit: 'animated fadeOutRight'
            },
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            delay: 2000,
            spacing: 10,
            z_index: 1031,
          });
        }*/
      }
    });

  }
})