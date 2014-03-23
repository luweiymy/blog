
function getXMLHttpRequest(){
	var req=false;
	try{
		/*for firefox*/
		req= new XMLHttpRequest();
	}catch(err){
		try{
			/*for some version of ie*/
			req= new ActiveXObject("Msxml2.XMLHTTP");
		}catch(err){
			try{
				/*for other versions of ie*/
				req=new ActiveXObject("Microsoft.XMLHTTP");
			}catch(err){
				req=false;
			}
		}
	}
	return req;
}
// function getServerTime(){
// 	var thePage='severtime.php';
// 	myRand=parseInt(Math.random()*999999999999999);
// 	var theURL= thePage+"?rand=" + myRand;
// 	myReq.open("GET",theURL,true);
// 	myReq.onreadystatechange =  theHTTPResponse;
// 	myReq.send(null);
// }
// function theHTTPResponse(){
// 	if (myReq.readyState==4) {
// 		if (myReq.status==200) {
// 			var timeString=myReq.responseXML.getElementsByTagName("p")[0];
// 			document.getElementById("showtime").innerHTML=timeString.childNodes[0].nodeValue;
// 		}
// 		else{
// 			alert("0000");
// 		}
// 	};
// }
function postMessage(){	
 	var theURL= 'message.php';
 	var name=encodeURI(document.getElementById("inputName").value);
 	var contents=encodeURI(document.getElementById("inputContent").value);
 	var params="name="+name+"&"+"contents="+contents;
 	myReq.open("POST",theURL,true);
 	myReq.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 	myReq.setRequestHeader("Content-length",params.length);
 	myReq.setRequestHeader("Connection","close");
 	myReq.onreadystatechange=theHTTPResponse;
 	myReq.send(params);
 	return false;
}
function theHTTPResponse(){
	if (myReq.readyState==4) {//HTTP 响应已经完全接收。
		if (myReq.status==200) {
			var result=myReq.responseText;
			document.getElementById("showreq").innerHTML=result;
		}else{
			console.dir(myReq)
		}
	};
}