var i, subjectCode;
var name;
var code;
var type;
var description;
var newCode;
var oldName;
var oldType;
var oldDescription;


  var getRecordsUrl = 'subjects/ajaxGetRecords';
  var updateUrl = "subjects/ajaxUpdate";
  var addUrl = "subjects/ajaxInsert";
  var getRowUrl = "subjects/ajaxGetRow";
  var deleteRowUrl = "subjects/ajaxDeleteRow";
  var countUrl = "subjects/ajaxCountRow";
  var auditTrailUpdateUrl = "subjects/auditTrailUpdate";

function show(){
  i=1;
    $( "#view-name" ).prop( "disabled", false );
    $( "#view-code" ).prop( "disabled", false );
    $( "#view-type" ).prop( "disabled", false );
    $( "#view-description" ).prop( "disabled", false );
    $( "#view-update" ).show();
}
function hide(){
  i=0;
    $( "#view-name" ).prop( "disabled", true );
    $( "#view-code" ).prop( "disabled", true );
    $( "#view-type" ).prop( "disabled", true );
    $( "#view-description" ).prop( "disabled", true );
    $( "#view-update" ).hide();
}
function updateRow(){ 

  $.ajax({
    url: countUrl,
    type: 'post',
    dataType: 'json', 
    data: {'table' : 'subjects', 'set' : 'code', 'value' : newCode  }, 
    success: function(result){
      var codeCount = result;    
      if (newCode == null || newCode.trim() === ''){
        $.notify({
          title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
          message: "Please fill up subject code.."
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
          spacing: 10,
          z_index: 1031,
        });
      }
      else if(codeCount > 0 && code != newCode){
        $.notify({
          title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
          message: "Subject Code already exist."
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
          spacing: 10,
          z_index: 1031,
        });
      }
      else if (name == null || name.trim() === ''){
        $.notify({
          title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
          message: "Please fill up Subject Name."
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
          spacing: 10,
          z_index: 1031,
        });
      }
      else{
        $.ajax({
          url: updateUrl,
          type: 'post',
          dataType: 'json', 
          data: {'name' : name, 'code': newCode, 'type': type, 'description': description, 'set': subjectCode }, 
          success: function(result){
            //console.log(result);

            $.ajax({
              url: auditTrailUpdateUrl,
              type: 'post',
              dataType: 'json', 
              data: {'code' : code, 'newCode' : newCode, 'name' : oldName, 'newName' : name, 'type': oldType, 'newType' : type, 'description' : oldDescription, 'newDescription' : description}, 
              success: function(result){
                console.log(result);
              }
            });

            hide();
            populateTable();
              $.notify({
                title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
                message: "Subject added."
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
                spacing: 10,
                z_index: 1031,
              });
          }
        }); 
      }
    }
  }); 
}

$('#view-edit').click(function(){
  
  if(i==0){
    show();
  }
  else if(i==1){
    hide();
  }
  
})

$('#view-update').click(function(){
  name = $( "#view-name" ).val();
  newCode = $( "#view-code" ).val();
  type = $( "#view-type" ).val();
  description = $( "#view-description" ).val();
  updateRow();
  
})

$('#delete-confirm').click(function(){
  var setStat;
  if(status=='active'){
    setStat='inactive';
  }
  else if(status=='inactive'){
    setStat='active';
  }
  $.ajax({
    url: updateUrl,
    type: 'post',
    dataType: 'json', 
    data: {'status' : setStat, 'set': subjectCode }, 
    success: function(result){
      console.log(result);

      $.ajax({
        url: auditTrailUpdateUrl,
        type: 'post',
        dataType: 'json', 
        data: {'set': subjectCode, 'status' : setStat }, 
        success: function(result){
          console.log(result);
        }
      });

      populateTable();
        if(setStat=='inactive'){
          $.notify({
            title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
            message: "Subject set to inactive."
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
            spacing: 10,
            delay: 5000,
            z_index: 1031,
          });     
        }
        else if(setStat=='active'){
          $.notify({
            title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
            message: "Subject set to active."
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
            spacing: 10,
            delay: 5000,
            z_index: 1031,
          });     
        }
    }
  }); 
})
  

function populateTable(){
  
  $('#subjectsTable').DataTable().destroy();

  $('#subjectsTable').DataTable({
    "columns": [
        { "width": "20%" }, 
        { "width": "50%" }, 
        { "width": "15%" },
        { "width": "5%" },
        { "width": "10%" }
        ],
        "order": [] ,
        "ajax": getRecordsUrl,
        "responsive": true
  });

  $("#subjectsTable").on("click", "tr td .view-btn", function(){

    i=0;
    $( "#view-name" ).prop( "disabled", true );
    $( "#view-code" ).prop( "disabled", true );
    $( "#view-type" ).prop( "disabled", true );
    $( "#view-description" ).prop( "disabled", true );
    $( "#view-update" ).hide();
    subjectCode = $(this).parents('tr').find('td:first').html();

    $.ajax({
      url: getRowUrl,
      type: 'post',
      dataType: 'json', 
      data: {'table' : 'subjects', 'set': 'code', 'value': subjectCode}, 
      success: function(result){          
        code = result.code;
        oldName = result.name;
        oldType = result.type;
        oldDescription = result.description;
        $( "#view-name" ).val(result.name);
        $( "#view-code" ).val(result.code);
        $( "#view-type" ).val(result.type);
        $( "#view-description" ).val(result.description);
      }
    });   
  });


  $("#subjectsTable").on("click", "tr td .delete-btn", function(){

    subjectCode = $(this).parents('tr').find('td:first').html();
    status = $(this).parents('tr').find('td:nth-child(4)').find('span').html();
    console.log(status);
    if(status=='active'){
      $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-danger');
      $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
      $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-danger');
      $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-danger');
      $('#text-status').html('Are you sure you want to inactivate record?');
    }
    else if(status=='inactive'){
      $('#box-delete').removeClass('box-success').removeClass('box-danger').addClass('box-success');
      $('#box-delete-icon').removeClass('text-success').removeClass('text-danger').addClass('text-success');
      $('#box-delete-btn').removeClass('text-success').removeClass('text-danger').addClass('text-success');
      $('#delete-confirm').removeClass('btn-danger').removeClass('btn-success').addClass('btn-success');
      $('#text-status').html('Are you sure you want to activate record?');
    }

  });
  
}

  $(function () {
    populateTable();
  })

  $('.close').click(function(){
    $('#alert-box').hide();
  })

  $("#add-btn").click(function(){
    var name = $('#name-input').val();
    var code = $('#code-input').val();
    var type = $('#type-input').val();
    var description = $('#description-input').val();

    $.ajax({
            url: countUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'subjects', 'set' : 'code', 'value' : code  }, 
            success: function(result){
              var codeCount = result;    
              if (code == null || code.trim() === ''){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please fill up subject code."
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
                  spacing: 10,
                  z_index: 1031,
                });
              }
              else if(codeCount > 0){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Subject Code already used."
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
                  spacing: 10,
                  z_index: 1031,
                });
              }
              else if (name == null || name.trim() === ''){
                $.notify({
                  title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
                  message: "Please fill up subject name."
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
                  spacing: 10,
                  z_index: 1031,
                });
              }
              else{
                $.ajax({
                  url: addUrl,
                  type: 'post',
                  dataType: 'json', 
                  data: {'name' : name, 'code': code, 'type': type, 'description': description }, 
                  success: function(result){
                    //console.log(result);              
                    populateTable();
                    $('#name-input').val('');
                    $('#code-input').val('');
                    $('#type-input').val('');
                    $('#description-input').val('');
                    $.notify({
                      title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
                      message: "Subject added."
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
                      spacing: 10,
                      z_index: 1031,
                    });
                  }
                }); 
              }
            }
          });     
    
  })

