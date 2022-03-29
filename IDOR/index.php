
<?php
 

 if(isset($_GET['page'])){
 if($_GET['page']){
 $user= $_GET['page']
?>

<!DOCTYPE html><html lang="en">
<head><meta charset="UTF-8"><title></title></head>
<body>
<h2> PROFILE </h2>

<?php 

if($user=="17"){$sms="IEEEIUCS-CTF{Cyber Teach 360 Idor Problems}";}else{$sms="EMPTY";}
echo "USER ID: AKE0000$user";
echo "<br>SECRET INFO: $sms";
}
}else{
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	 
	header("Location: $actual_link?page=1");
	
	}?>
</body>
</html>
