  
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
})

$('#students-select').hide();
$('#teachers-select').hide();
$('#rooms-select').hide();

var table; 
var set;
$('#students-pick').on('click',function(){
  table = "students";
  set = "lrn"
  $('#students-select').show();
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
  $('#students-pick').show();
  $('#rooms-pick').show();
  $('#students-select').hide();
  $('#rooms-select').hide();
  $('.select2').select2()
  $(this).hide();
})
$('#rooms-pick').on('click',function(){
  table = "rooms";
  $('#rooms-select').show();
  $('#teachers-pick').show();
  $('#students-pick').show();
  $('#teachers-select').hide();
  $('#students-select').hide();
  $('.select2').select2()
  $(this).hide();
})

$('#select-teacher').on('change',function(){
  var value = $('#select-teacher').val();
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
                  $('#profile-status').addClass('badge bg-blue');
                }
                $('#profile-contact').html(val.contact);
              })
            }
          });

})
