// JavaScript function to check whether tittle is already esists or not

function CheckAll()
{
	// add multiple select / deselect functionality
	$("#selectallcheckbox").click(function () {
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function(){
		if($(".case").length == $(".case:checked").length) { 
			$('#selectallcheckbox').prop('checked', true);
		} else {
			$('#selectallcheckbox').prop('checked', false);
		}
	});
}