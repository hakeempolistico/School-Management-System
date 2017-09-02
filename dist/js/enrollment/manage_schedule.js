  
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
      var val1 = $('#new-event-subject').val()
      var val2 = $('#new-event-teacher').val()
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
        event.html(val1+'<br><div class="text-gray">'+val2+'</div>')
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
      $('#new-event-subject').val('')
      $('#new-event-teacher').val('')
      
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
    $("#icon").animate({fontSize: '60px'},"slow");
}


  $('#removeAll').click(function(){
    $('tbody tr').remove();
  })
  $('#remove').click(function(){
     $('.selectedRow').remove();
  })
  $('#add').click(function(){
    $('tbody').append('<tr class="tr-height"><td contenteditable="true"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td><td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td></tr>');
      
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

$('#printBtn').on('click',function(){
printData();
});

$('#classes-select').hide();
$('#teachers-select').hide();
$('#rooms-select').hide();
$('#profile-box').hide();
$('#profile-box-class').hide();
$('#profile-box-room').hide();

var table; 
var set;
$('#classes-pick').on('click',function(){
  table = "classes";
  set = "id"
  $('#classes-select').show();
  $('#teachers-pick').show();
  $('#rooms-pick').show();
  $('#teachers-select').hide();
  $('#rooms-select').hide();
  $('.select2').select2()
  $(this).hide();
})
$('#teachers-pick').on('click',function(){
  table = "teachers";
  set = "employee_id";
  $('#teachers-select').show();
  $('#classes-pick').show();
  $('#rooms-pick').show();
  $('#classes-select').hide();
  $('#rooms-select').hide();
  $('.select2').select2()
  $(this).hide();
})
$('#rooms-pick').on('click',function(){
  table = "rooms";
  set = "room_id";
  $('#rooms-select').show();
  $('#teachers-pick').show();
  $('#classes-pick').show();
  $('#teachers-select').hide();
  $('#classes-select').hide();
  $('.select2').select2()
  $(this).hide();
})

$('#select-teacher').on('change',function(){
  $('#profile-box-class').hide();
  $('#profile-box-room').hide();
  var value = $('#select-teacher').val();
  $('#profile-box').show();
  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'set' : set, 'table' : table, 'value' : value }, 
            success: function(result){
              console.log(result);
              $.each(result, function(index, val) {
                $('#profile-name').html(val.first_name +" " + val.last_name);
                $('#profile-position').html(val.position);
                $('#profile-major').html(val.major);
                $('#profile-status').html(val.status);
                  if(val.status == "ACTIVE"){
                    $('#profile-status').removeClass('badge bg-red');
                    $('#profile-status').addClass('badge bg-blue');
                  }
                  else{
                    $('#profile-status').removeClass('badge bg-blue');
                    $('#profile-status').addClass('badge bg-red');
                  }
                $('#profile-contact').html(val.contact);
              })
            }
          });

})

$('#select-room').on('change',function(){
  $('#profile-box-class').hide();
  $('#profile-box').hide();
  var value = $('#select-room').val();
  $('#profile-box-room').show();
  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'set' : set, 'table' : table, 'value' : value }, 
            success: function(result){
              console.log(result);
              $.each(result, function(index, val) {
                $('#profile-room-name').html(val.room_name);
                $('#profile-room-building').html(val.building);
                $('#profile-room-status').html(val.status);
                  if(val.status == "AVAILABLE"){
                    $('#profile-room-status').removeClass('badge bg-red');
                    $('#profile-room-status').addClass('badge bg-blue');
                  }
                  if(val.status == "OCCUPIED"){
                    $('#profile-room-status').removeClass('badge bg-blue');
                    $('#profile-room-status').addClass('badge bg-red');
                  }
                $.ajax({
                    url: ajaxUrl,
                    type: 'post',
                    dataType: 'json', 
                    data: {'set' : 'id', 'table' : 'classes', 'value' : val.class_id }, 
                    success: function(result){    
                       $.each(result, function(index, val) {
                          $('#profile-room-class').html(val.class_name);
                       })           
                      
                    }
                })
              })
            }
          });

})

$('#select-class').on('change',function(){
  $('#profile-box').hide();
  $('#profile-box-room').hide();
  var value = $('#select-class').val();
  $('#profile-box-class').show();
  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'set' : set, 'table' : table, 'value' : value }, 
            success: function(result){
              console.log(result);
              $.each(result, function(index, val) {
                $('#profile-class-name').html(val.class_name);
                $('#profile-class-grade').html(val.year);
                $('#profile-class-capacity').html(val.occupants+'/'+val.capacity); 
                var stat;
                if(val.occupants >= val.capacity){
                  stat="FULL";
                }
                else{
                  stat="NOT FULL";
                }
                $('#profile-class-status').html(stat);
                  if(stat == "NOT FULL"){
                    $('#profile-class-status').removeClass('badge bg-red');
                    $('#profile-class-status').addClass('badge bg-blue');
                  }
                  else{
                    $('#profile-class-status').removeClass('badge bg-blue');
                    $('#profile-class-status').addClass('badge bg-red');
                  }

                $.ajax({
                    url: ajaxUrl,
                    type: 'post',
                    dataType: 'json', 
                    data: {'set' : 'employee_id', 'table' : 'teachers', 'value' : val.adviser }, 
                    success: function(result){    
                       $.each(result, function(index, val) {
                          $('#profile-class-adviser').html(val.first_name+' '+val.last_name);
                       })           
                      
                    }
                })
              })
            }
          });

})
