<?php 
//cookies.php 
if (!empty($_POST["grondTal"])) { 
setcookie("grondTal", $_POST["grondTal"], time() + 120); 
$grondtal = $_POST["grondTal"]; 
} else { 
$grondtal=""; 
if (isset($_COOKIE["grondTal"])) { 
$grondtal = $_COOKIE["grondTal"]; 
} 
} 
?> 
<!DOCTYPE HTML> 
<html> 
<head> 
<meta charset=utf-8> 
<title>Tafels</title> 
</head> 
<body> 

<form action="tafels.php" method="post"> 
Geef een grondtal: <input type="text" name="grondTal" value="<?php print($grondtal);?>" /> 
<input type="submit" value="OK" /> 
</form> 
<br> 
</body> 
</html>
