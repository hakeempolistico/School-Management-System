  
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
      i = i + 1;
      //Create events
      var event = $('<div />')
      event.addClass('external-event flat')
      if (val2.length != 0) {
        event.html('<div class="val-subject">'+val1+'</div><div class="text-gray val-room">'+val2+'</div>')
      }
      else{
        event.html(val1)
      }
      

      event.attr('id', i )
      event.attr('class','count object')
      event.attr('draggable','true')
      event.attr('ondragstart','drag(event)')
      event.attr('style','resize: vertical; overflow: auto; color: white; background-color:'+currColor)
      
      $('#external-events').prepend(event)

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
      i = i + 1;
      //Create events
      var event = $('<div />')
      event.addClass('external-event flat')
      event.html('<div class="val-subject ">'+val1+'</div><div class="text-gray val-room">none</div>')
      

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
      i = i + 1;
      //Create events
      var event = $('<div />')
      event.addClass('external-event flat')
      event.html('<div class="val-subject">'+val1+'</div><div class="text-gray val-room">none</div>')
      

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


  

var table; 
var set;
var sectionId;
var room_id;

$(".custom").prop('disabled', true);

$('#btn-enter').on('click',function(){
  sectionId = $('#select-class').val();
  $("#select-room").val('').trigger('change');

  //POPULATE TABLE 
  $('.loading').show();
  $.ajax({
    url: getScheduleUrl,
    type: 'post',
    dataType: 'json',
    data: {'section_id' : sectionId},  
    success: function(res){ 
      var i = 0;
      $('tbody tr').remove();
      console.log('----------');
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
        
        $('tbody').append(
          '<tr class="tr-height"><td contenteditable="true" class="time">'+index+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+mon_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+tue_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+wed_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+thur_obj+'</td>'+
          '<td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)">'+fri_obj+'</td></tr>');
      
        $('td').click(function(){
         var row_index = $(this).parent().index()+1; 
         var hasClass=$("table tr:eq("+row_index+")").hasClass('selectedRow');
         if(hasClass==true){
            $("table tr:eq("+row_index+")").removeClass('selectedRow');
            stopPropagation();
         }else{
            $("table tr:eq("+row_index+")").addClass('selectedRow');
            stopPropagation();
         }
         
        });
      });

    $('.loading').delay(500).hide();
    }
  });

  //POPULATE SECTIONS SELECT
  $('.loading').show();
  $.ajax({
    url: getSectionUrl,
    type: 'post',
    dataType: 'JSON',  
    data: {'id': sectionId},
    success: function(result){  
      //console.log(result);
      $('#class-strand').html(result[0].strand_code);
      $('#class-year-section').html(result[0].year_level.substring(6) + '-' + result[0].section_name);
      $('#class-capacity').html(result[0].capacity);
      $('#tbl-title').html(result[0].strand_code+' '+result[0].year_level.substring(6) + '-' + result[0].section_name);

      $(".custom").prop('disabled', false);

      $.ajax({
        url: getSubjectsUrl,
        type: 'post',
        dataType: 'json',
        data: {'section_id': sectionId},  
        success: function(res){  
          //console.log(res);
          $('#select-subject').find('option').remove();
          $('#select-subject').append($('<option>', { 
                value: null,
                text : null
            })).select2();
          $.each(res, function( index, value ) {
            //console.log('Section Code : '+value.section_code+' Section Name : '+ value.section_name);
            $('#select-subject').append($('<option>', { 
                value: value.section_code,
                text : value.section_name
            })).select2();
          });
        }
      }); 
      $('.loading').delay(500).hide();
    } 
  });    
})

//ROW ACTIONS BOX
$('#row-remove-all').click(function(){
    $('tbody tr').remove();
  })
  $('#row-remove').click(function(){
     $('.selectedRow').remove();
  })
  $('#row-add').click(function(){
    $('tbody').append('<tr class="tr-height"><td contenteditable="true" class="time"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td></tr>');
      
      $('td').click(function(){
       var row_index = $(this).parent().index()+1; 
       var hasClass=$("table tr:eq("+row_index+")").hasClass('selectedRow');
       if(hasClass==true){
          $("table tr:eq("+row_index+")").removeClass('selectedRow');
          stopPropagation();
       }else{
          $("table tr:eq("+row_index+")").addClass('selectedRow');
          stopPropagation();
       }
       
      });

  })

  $('td').click(function(){
   var row_index = $(this).parent().index()+1; 
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
  var object_length = $('table').find('.object').length;
  var row_length = $('table').find('tr').length;
  var row_calculate = (row_length - 2) * 5;
  //console.log('Object Length : '+row_length);
  //console.log('Row Length : '+object_length);
  if(object_length != row_calculate){
    alert('table must be populated!');
    return;
  }

  $('.loading').show();
  $.ajax({
      url: deleteScheduleUrl,
      type: 'post',
      dataType: 'json',
      data: {'section_id' : sectionId},  
      success: function(res){ 
        console.log('---');

        $('table').find('.object').each(function( index ) {
          //console.log( index + ": " + $( this ).find('.val-subject').text() );
          //console.log( index + ": " + $( this ).find('.val-room').text() );

          var subject_code = $( this ).find('.val-subject').text();
          var room_id = $( this ).find('.val-room').text();
          var time = $(this).parents('tr').find('.time').html();
          var timeSplit = time.split("-");
          var time_start = timeSplit[0];
          var time_end = timeSplit[1];
          var day = $(this).closest('table').find('th').eq($(this).parents('td').index()).html();
          var color = $(this).css("background-color")

          //console.log('Subject Code : ' + subject_code);
          //console.log('Section ID : ' + sectionId);
          //console.log('Room ID : ' + room_id);
          //console.log('Time Start : ' + time_start);
          //console.log('Time End : ' + time_end);
          //console.log('Day : ' + day);
          //console.log('Color : ' + color);

          $.ajax({
            url: addScheduleUrl,
            type: 'post',
            dataType: 'json',
            data: {
              'section_id' : sectionId,
              'subject_code' : subject_code,
              'room_id' : room_id,
              'time_start' : time_start,
              'time_end' : time_end,
              'day' : day,
              'color' : color
            },  
            success: function(res){ 
              console.log(res);
            }
          });

        });
        $('.loading').delay(500).hide();
      }
    });

  
});
