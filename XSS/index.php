<?php
 $msg='';
 $flag='';

 $msg=base64_decode($_GET['msg']);
//echo base64_encode($_GET['msg']);
//echo base64_decode($_GET['msg']);
//echo ($_GET['msg']);

if(isset($msg)){
 if($msg=="<script>alert('flag');</script>"){
	 $flag='IEEEIUCS-CTF{Easy_XSS_FOR_YOU}';
  $msg= $msg;
}
 else if($msg=='<<SCRIPT>alert("flag");//<</SCRIPT>'){
	 $flag='IEEEIUCS-CTF{Easy_XSS_FOR_YOU}';
  $msg= $msg;
}
 else if($msg=='<IMG SRC=x onerror="alert(String.fromCharCode(88,83,83))">'){
	 $flag='IEEEIUCS-CTF{Easy_XSS_FOR_YOU}';
  $msg= $msg;
}
 else if($msg=="<img/src=`` onerror=this.onerror=confirm(flag)"){
	 $flag='IEEEIUCS-CTF{Easy_XSS_FOR_YOU}';
  $msg= $msg;
}
 else if ($msg){
	  
 $msg= htmlspecialchars($msg);
}

}
else{}



?>


<!DOCTYPE html><html lang="en">
<head><meta charset="UTF-8"><title></title>
</head>
<body>

<h2> <?php echo $msg; ?><br><?php echo $flag; ?> </h2>
<h1> Easy One </h1>
<form id="myForm">
 
<input id="msg" type="text" name="msg" value="">
<br>
<input type="button" value="Submit" onclick="getcontent();">
 </form>

 <script type="text/javascript">
function getcontent(){


document.getElementById("msg").value= btoa(document.getElementById("msg").value);

 
  document.getElementById("myForm").submit();
 
}

</script>

</body>
</html>
