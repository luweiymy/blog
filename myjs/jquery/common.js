$(document).ready(function () {
	var messageReq = getXMLHttpRequest();
	var theURL= '../../data/message.php';
	var id=$("#id").val();
 	var inputName=$("#inputName").val();
 	var inputContent=$("#inputContent").val();
 	if (inputName==''||inputContent=='') {
 		alert("评价的昵称和留言的内容不能为空的哦！");
 	};
 	var data = {name:inputName,contents:inputContent};
	$.ajax({
		url:theURL,
		type:"POST",
		data: data,
		async: true,
		dataType:"json",
		success:function(data){
		// var result = messageReq.responseText ;			
 		// 	$("#showreq").innerHTML = result ;
 		// 	alert(result);
 			alert("success");
		},
		error:function(){
			alert("error");
		}
	});
})