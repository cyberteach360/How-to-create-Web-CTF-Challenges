<?php 
//b8289dad09a1994d714e5c8b800e03bba1786c19  
//9c2ae665e6d0fca2dc626cfb1fd0993cc158d518
if(isset($_REQUEST['user'])){$user=$_REQUEST['user'];}else{$user='';}
if(isset($_REQUEST['pass'])){$pass=$_REQUEST['pass'];}else{$pass='';}


	
	
if($user=='admin'||$pass=='Admin'){
	
	
    
	setcookie("rule",'12dea96fec20593566ab75692c9949596833adc9',time()+(86400*7));
    
     $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 2; URL=$url1");
	}
	
if(isset($_COOKIE["rule"])){
				if($_COOKIE["rule"]=='12dea96fec20593566ab75692c9949596833adc9'){
				echo '<b>MR.X</b>';
				echo '<br>Welcome to User Area <br>No Secret Massage';
				}
				
				if($_COOKIE["rule"]=='dc76e9f0c0006e8f919e0c515c66dbba3982f785'){
				echo '<b>MR.X</b>';
				echo '<br>Welcome to Admin or Root Area<br>Secret Massage: <b>IEEEIUCS-CTF{Respect your Parents}';
				}
}else{
	?>

	<form method="POST">
	USER NAME<br>
	<input type="text" name="user"><br>
	Password<br>
	<input type="password" name="pass"><br>
	<input type="submit" value="submit">
	</form>

	<?php
	
}

?>
