$('.toggle').on('change', function(){
  console.log();
  var module; 

  if($(this).is(':checked')){
    module = $(this).parents('.info-box-content').find('.info-box-number').text();
    //console.log(module + ' : active');

    $.ajax({
      url: updateUrl,
      type: 'post',
      dataType: 'json', 
      data: {'module' : module , 'status': 'active'}, 
      success: function(result){
        //console.log(result);
        if(result && result==true){
          $.notify({
            title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong><br>',
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
    });

  }
  else{
    module = $(this).parents('.info-box-content').find('.info-box-number').text();
    //console.log(module + ' : inactive');      

    $.ajax({
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
    });

  }
})