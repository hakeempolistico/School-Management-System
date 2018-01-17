var semester, quarter, subject, active_class;

$(function () {

$('#select-semester').on('change', function(){
	semester = $(this).val();
	showTable();

}) 
$('#select-quarter').on('change', function(){
	quarter = $(this).val();
	showTable();
}) 
$('#select-subject').on('change', function(){
	subject = $(this).val();
	showTable();
}) 
$('#select-class').on('change', function(){
	active_class = $(this).val();
	showTable();
}) 

function showTable(){
	if(semester && quarter && subject && active_class){
		$('#table-grades').show();
	}
}
});