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

function getMessage(){
	var theURL='../data/sqlid.php';
	myReq.open("GET",theURL,true);
	myReq.onreadystatechange=theHTTPResponse;
	myReq.send(null);
}
function userInfo(){	
 	var userName=encodeURI(document.getElementById("userName").value);
 	var password=encodeURI(document.getElementById("password").value);
 	if (userName==""||password=="") {
 		alert("用户名或密码不能为空！");
 	}
 	else{
 		if (userName=="php"&&password=="123") {
 			  window.location.href="index.html"	
 		}else{
 				alert("用户名或者密码填写不正确！");
 			}
 	};
 	
}
function postMessage(){	
	var theURL= '../data/userInfo.php';
 	var headname=encodeURI(document.getElementById("headName").value);
 	var contents=encodeURI(document.getElementById("inputContent").value);
 	var params="headname="+headname+"&"+"contents="+contents;
 	myReq.open("POST",theURL,true);
 	myReq.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 	// myReq.setRequestHeader("Content-length",params.length);
 	// myReq.setRequestHeader("Connection","close");
 	myReq.onreadystatechange=theHTTPResponse;
 	myReq.send(params);
 	return false;
}
function theHTTPResponse(){
	if (myReq.readyState==4) {//HTTP 响应已经完全接收。
		if (myReq.status==200) {			
			var result=myReq.responseText;
			window.location.href="../html/blog.html?id=5";
		}else{
			console.dir(myReq)
		}
	};
}