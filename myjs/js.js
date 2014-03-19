function postMessage(msg){
	var request=new XMLHttpRequest();
	request.open("POST","message.php");
	request.setRequestHeader("Content-Type","text/plain;charset=UTF-8");
	request.send(msg);
}