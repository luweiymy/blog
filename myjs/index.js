
$(document).ready(function(){
	$('#myTab a').click(function (e) {
	 	e.preventDefault();
	 	$(this).tab('show');
	});
	$(".userimg").mouseover(function () {
		$(".useredit").show();
	});
	$(".userimg").mouseout(function () {
		$(".useredit").hide();
	});
})
