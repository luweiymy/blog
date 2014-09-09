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
// 留言板向数据库插入数据
function postMessage(){	
 	var theURL= '../data/message.php';
 	var id=encodeURI(document.getElementById("id").value);
 	var name=encodeURI(document.getElementById("inputName").value);
 	console.log(name);
 	var contents=encodeURI(document.getElementById("inputContent").value);
 	var params="id="+id+"&"+"name="+name+"&"+"contents="+contents;
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
			window.location.reload();
			document.getElementById("showreq").innerHTML=result;
		}else{
			console.dir(myReq)
		}
	};
}

//分页函数
function pagination(page){
	if (page.length==0) {
		return;
	};
	var theURL= '../data/Pagination.php';
	theURL+="?page="+page+"&id"+Math.random();
	myReq.open("GET",theURL,true);
	myReq.onreadystatechange=theHttpResponse;
	myReq.send(null);
	
}
function theHttpResponse(){
	if (myReq.readyState==4) {//HTTP 响应已经完全接收。
		if (myReq.status==200) {
			var result=myReq.responseText;
			document.getElementById("pagination").innerHTML=result;
		}else{
			console.dir(myReq)
		}
	};
}
