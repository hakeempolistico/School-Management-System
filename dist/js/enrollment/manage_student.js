$(document).ready(function () {
  
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".btnNext").click(function (e) {

        var $active = $('.wizard .nav-wizard li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });

    $('.btnBack').click(function(){
    $('.nav-wizard > .active').prev('li').find('a').trigger('click');
});
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}



// $(function () {
//       $('#example1').DataTable(){
//         //select: true;
//       }
//       $('#example2').DataTable()
//     })
/*
{
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      }

*/