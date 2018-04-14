  
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))


    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val2 = $('#select-room').val()
      var val1 = $('#select-subject').val()
      
      if (val1.length == 0) {
        return
      }
      //Create id variable
      var i = $(".count").length;
      i = i ++;
      //Create events
      var event = $('<div />')
      event.addClass('external-event flat')
      if (val2.length != 0) {
        event.html('<div class="val-subject">'+val1+'</div><div class="text-gray val-room">'+val2+'</div>')
      }
      else{
        return
      }
      

      event.attr('id', i )
      event.attr('class','count object')
      event.attr('draggable','true')
      event.attr('ondragstart','drag(event)')
      event.attr('style','resize: vertical; overflow: auto; color: white; background-color:'+currColor)
      
      $('.external-events').prepend(event)

      //Remove event from text input
      $('#new-event-subject').val('').trigger('change')
      $('#new-event-teacher').val('').trigger('change')
      
    })

    $('#add-vacant').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val1 = 'VACANT'
      //Create id variable
      var i = $(".count").length;
      i = i++;
      //Create events
      var event = $('<div />')
      event.addClass('external-event flat')
      event.html('<div class="val-subject ">'+val1+'</div><div class="text-gray val-room">.</div>')
      

      event.attr('id', i )
      event.attr('class','count object')
      event.attr('draggable','true')
      event.attr('ondragstart','drag(event)')
      event.attr('style','resize: vertical; overflow: auto; color: white; background-color: grey;')
      
      $('#external-events').prepend(event)      
    })
    $('#add-break').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val1 = 'BREAK'
      //Create id variable
      var i = $(".count").length;
      i = i++;
      //Create events
      var event = $('<div />')
      event.addClass('external-event flat')
      event.html('<div class="val-subject">'+val1+'</div><div class="text-gray val-room">.</div>')

      event.attr('id', i )
      event.attr('class','count object')
      event.attr('draggable','true')
      event.attr('ondragstart','drag(event)')
      event.attr('style','resize: vertical; overflow: auto; color: white; background-color: darkgrey;')
      
      $('#external-events').prepend(event)      
    })
})

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

function dropTrash(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    $("#"+data).remove();

    $("#icon").animate({fontSize: '20px'},"fast");
    $("#icon").animate({fontSize: '70px'},"slow");
}


  

var table, set, sectionId = null, room_id, strand_code = null, year_level_id = null, semester = null, conflict = true; 

$(".custom").prop('disabled', true);
$('#select-year').prop('disabled', true);
$('#select-section').prop('disabled', true);
$('#select-semester').prop('disabled', true);

function getSections() {
  strand_code = $('#select-strand').val();
  year_level_id = $('#select-year').val();
  sectionId = null;
  if(strand_code && year_level_id){
    $.ajax({
      url: getSectionsUrl,
      type: 'post',
      dataType: 'JSON',  
      data: {'year_level_id': year_level_id, 'strand_code' : strand_code},
      success: function(result){  
        //console.log(result);
        $('#select-section').find('option').remove();
        $('#select-section').append($('<option>', { 
            value: null,
            text : null
        })).select2();
        $.each(result, function( index, value ) {
          //console.log(index + ' : ' + value);
          $('#select-section').append($('<option>', { 
              value: value.id,
              text : value.name
          })).select2();
        });
      } 
    });
  }
}

$('#select-semester').on('change', function(){
  semester = $('#select-semester').val()
  getCurrSubjects()
  updateClassInfo()
  getSchedules()
})
$('#select-section').on('change', function(){
  $('#select-semester').prop('disabled', false)
  sectionId = $('#select-section').val()
  getSchedules()
})
//POPULATE SECTION SELECT 
$('#select-year').on('change', function(){
  year_level_id = $('#select-year').val();
  getSections()
  getSchedules()
  $('#select-semester').prop('disabled', true);
  $('#select-section').prop('disabled', false);
})
$('#select-strand').on('change', function(){
  $('#select-year').prop('disabled', false);
  $("#select-year").val('').trigger('change')
  $('#select-section').prop('disabled', true);
  $('#select-semester').prop('disabled', true);
  strand_code = $('#select-strand').val();
  getSections();
  getSchedules()
})

function getCurrSubjects(){
  if(sectionId && strand_code && year_level_id && semester){
    $(".custom").prop('disabled', false);
    $.ajax({
      url: getSubjects,
      type: 'post',
      dataType: 'JSON',  
      data: {'year_level_id': year_level_id, 'strand_code' : strand_code, 'semester' : semester},
      success: function(result){  
        //console.log(result);
        $('#select-subject').find('option').remove();
        $('#select-subject').append($('<option>', { 
              value: null,
              text : null
          })).select2();
        $.each(result, function( index, value ) {
              //console.log(index + ' : ' + value);
          $('#select-subject').append($('<option>', { 
              value: value.subject_code,
              text : value.subject_code
          })).select2();
        });
      } 
    });
    getSchedules();

    $('.timepicker').timepicker({
      showInputs: false,
      defaultTime: false,
      showMeridian: false,
    })

  }
}

function updateClassInfo(){
  var years = $('#select-year').select2('data');
  var section = $('#select-section').select2('data');

  $.ajax({
    url: getSectionsUrl,
    type: 'post',
    dataType: 'JSON',  
    data: {'year_level_id': year_level_id, 'strand_code' : strand_code, 'name' : section[0].text},
    success: function(result){  
      //console.log(result);
      $('#class-strand').html(strand_code);
      $('#class-year-section').html(years[0].text + ' - ' + section[0].text);
      $('#class-capacity').html(result[0].capacity);
    } 
  });
}

function getSchedules(){
  if(!sectionId || !strand_code || !year_level_id || !semester){
    return
  }
  //console.log(sectionId + ' : ' + semester);
  $("#select-room").val('').trigger('change');

  //POPULATE TABLE 
  $.ajax({
    url: getScheduleUrl,
    type: 'post',
    dataType: 'json',
    data: {'section_id' : sectionId, 'semester' : semester, 'academic_year' : aYear}, 
    success: function(res){ 
      var i = 0;
      $('#schedule tbody tr').remove();
      
      if(res){
        //console.log(res);
        //console.log(res.length);
      }
      $.each(res, function( index, value ) {
        //console.log(res);
        var mon_obj = null;
        var tue_obj = null;
        var wed_obj = null;
        var thur_obj = null;
        var fri_obj = null;
        if(value['Monday']['color']){
          //console.log('Monday Not Null')
          mon_obj = '<div class="count object" id="'+i+'" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:'+value['Monday']['color']+'">'+
          '<div class="val-subject">'+value['Monday']['subject']+'</div>'+
          '<div class="text-gray val-room">'+value['Monday']['room']+'</div>'+
          '</div>';
          i++; 
        }
        if(value['Tuesday']['color']){
          //console.log('Tuesday Not Null')
          tue_obj = '<div class="count object" id="'+i+'" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:'+value['Tuesday']['color']+'">'+
          '<div class="val-subject">'+value['Tuesday']['subject']+'</div>'+
          '<div class="text-gray val-room">'+value['Tuesday']['room']+'</div>'+
          '</div>';
          i++; 
        }
        if(value['Wednesday']['color']){
          //console.log('Wednesday Not Null')
          wed_obj = '<div class="count object" id="'+i+'" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:'+value['Wednesday']['color']+'">'+
          '<div class="val-subject">'+value['Wednesday']['subject']+'</div>'+
          '<div class="text-gray val-room">'+value['Wednesday']['room']+'</div>'+
          '</div>';
          i++; 
        }
        if(value['Thursday']['color']){
          //console.log('Thursday Not Null')
          thur_obj = '<div class="count object" id="'+i+'" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:'+value['Thursday']['color']+'">'+
          '<div class="val-subject">'+value['Thursday']['subject']+'</div>'+
          '<div class="text-gray val-room">'+value['Thursday']['room']+'</div>'+
          '</div>';
          i++; 
        }
        if(value['Friday']['color']){
          //console.log('Friday Not Null')
          fri_obj = '<div class="count object" id="'+i+'" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:'+value['Friday']['color']+'">'+
          '<div class="val-subject">'+value['Friday']['subject']+'</div>'+
          '<div class="text-gray val-room">'+value['Friday']['room']+'</div>'+
          '</div>';
          i++; 
        }    
        
        $('#schedule').find('tbody').append(
          '<tr class="tr-height"><td class="col-time">'+index+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+mon_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+tue_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+wed_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+thur_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+fri_obj+'</td></tr>');
      
        /*$('td').click(function(){
         var row_index = $(this).parent().index()-2; 
         var hasClass=$("table tr:eq("+row_index+")").hasClass('selectedRow');
         if(hasClass==true){
            $("table tr:eq("+row_index+")").removeClass('selectedRow');
            stopPropagation();
         }else{
            $("table tr:eq("+row_index+")").addClass('selectedRow');
            stopPropagation();
         }
         
        });*/
      });

      //console.log($('.col-time').length);
    }
  });
}

//ROW ACTIONS BOX
$('#row-remove-all').click(function(){
    $('tbody tr').remove();
  })
  $('#row-remove').click(function(){
     $('.selectedRow').remove();
  })

  $('#row-add').click(function(){
    var ts = $('#time-start').val();
    var te = $('#time-end').val();
    if(ts && te && ts.length == 5 && te.length == 5){
      //console.log(ts + ' : ' + te);
      $('tbody').append('<tr class="tr-height"><td class="time">'+$('#time-start').val().slice(0, 5)+'-'+ $('#time-end').val().slice(0, 5) +'</td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td></tr>');
      $('td').click(function(){
       var row_index = $(this).parent().index()+2; 
       var hasClass=$("table tr:eq("+row_index+")").hasClass('selectedRow');
       if(hasClass==true){
          $("table tr:eq("+row_index+")").removeClass('selectedRow');
       }else{
          $("table tr:eq("+row_index+")").addClass('selectedRow');
       }
      });
    }
    else if(!ts){
      $.notify({
        title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
        message: "Please fill up time start (hh:mm)."
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
    else if(!te){
      $.notify({
        title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
        message: "Please fill up time end (hh:mm)."
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
      $.notify({
        title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
        message: "Please input format correctly (hh:mm)."
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
  })

  $('td').click(function(){
   var row_index = $(this).parent().index()+2; 
   var hasClass=$("table tr:eq("+row_index+")").hasClass('selectedRow');
   if(hasClass==true){
      $("table tr:eq("+row_index+")").removeClass('selectedRow'); stopPropagation();
   }else{
      $("table tr:eq("+row_index+")").addClass('selectedRow'); stopPropagation();
   }
   
  });

function printData()
{
   window.print();
}

$('#row-print').on('click',function(){
printData();
});

$('#row-save').on('click',function(){
  var object_length = $('#schedule').find('.object').length;
  var row_length = $('#schedule').find('tr').length;
  var row_calculate = (row_length - 2) * 5;
  //console.log('Object Length : '+object_length);
  //console.log('Row Length : '+ row_calculate);
  if(object_length != row_calculate){
    $.notify({
      title: '<strong><i class="icon fa fa-ban"></i>ALERT!</strong>',
      message: "Please fill up blank cell."
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
    return;
  }

  validate()
  function validate(){
    $("#modal-confirm").modal("show")
    $('#text-status').text('Schedule has no conflict')
    $('#text-conflicts').text(null)
    $('#btn-confirm').show()
    $('table').find('.object').each(function( index ) {

      var room_id = $( this ).find('.val-room').text();
      var time = $(this).parents('tr').find('td:first').html();
      var timeSplit = time.split("-");
      var time_start = timeSplit[0];
      var time_end = timeSplit[1];
      var day = $(this).closest('table').find('th').eq($(this).parents('td').index()+1).html();

      $.ajax({
        url: validationUrl,
        type: 'post',
        dataType: 'json',
        data: {
          'section_id' : sectionId,
          'semester' : semester,
          'academic_year' : aYear,
          'room_id' : room_id,
          'time_start' : time_start,
          'time_end' : time_end,
          'day' : day
        },  
        success: function(res){ 
          //console.log(res);          
          if(res != '1'){
            conflict = false
            console.log(res.day)
            $('#text-status').text('Schedule has conflict')
            $('#text-conflicts').append('<div>'+res.day+' : '+res.time_start+'-'+res.time_end+' : '+res.room_id+'</div>')
            $('#btn-confirm').hide()
          }
        }
      });
    });
  }

  
})

$('#btn-confirm').on('click', function(){
  addSched()
  function addSched(){
   
    $.ajax({
        url: deleteScheduleUrl,
        type: 'post',
        dataType: 'json',
        data: {'section_id' : sectionId, 'semester' : semester},  
        success: function(res){ 
          //console.log('---');

          $('table').find('.object').each(function( index ) {

            var subject_code = $( this ).find('.val-subject').text();
            var room_id = $( this ).find('.val-room').text();
            var time = $(this).parents('tr').find('td:first').html();
            var timeSplit = time.split("-");
            var time_start = timeSplit[0];
            var time_end = timeSplit[1];
            var day = $(this).closest('table').find('th').eq($(this).parents('td').index()+1).html();
            var color = $(this).css("background-color");
            var row = $(this).parents('tr').index();

            $.ajax({
              url: addScheduleUrl,
              type: 'post',
              dataType: 'json',
              data: {
                'section_id' : sectionId,
                'semester' : semester,
                'academic_year' : aYear,
                'subject_code' : subject_code,
                'room_id' : room_id,
                'time_start' : time_start,
                'time_end' : time_end,
                'day' : day,
                'color' : color,
                'row' : row
              },  
              success: function(res){ 
                //console.log(res);
                //console.log(semester);
              }
            });

          });

          $.ajax({
              url: auditTrailSaveUrl,
              type: 'post',
              dataType: 'json', 
              data: {'section_id' : sectionId}, 
              success: function(result){
                console.log(result);
              }
            });

          $.notify({
            title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong>',
            message: "Schedule saved."
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
})
  
    

  
