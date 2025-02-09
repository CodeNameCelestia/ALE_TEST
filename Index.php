<html>
<title> Twice Stan </title>
<head></head>
<style>
body {
	background-image: url("https://c.tenor.com/j2A5GJdXDo4AAAAC/twice-wave.gif");
	background-position: center;
	background-size: cover;
}
div {
    border: 20px solid #AE582D;
    background-color: #F2EFE5;
    padding: 50px;
    margin: 325px 950px 20px 25px;
    text-align: center
}
img {
  float: right;
}

underline {
	text-decoration: underline;
}

</style>
</head>
<img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Time_To_Twice_-_logo.png" alt="Logo" style="width:350px;height:150px;margin-right:15px;">
<center>
<div>
<h1>	
<?php 

function check($number){ 

    if($number % 2 == 0){ 

        echo "Even";  

    } 

    else{ 

        echo "Odd"; 

    } 
} 

$Num1 = 10;
$Num2 = 12;

$number = $Num1 + $Num2; 
echo "The Numbers; " . $Num1 . " + " . $Num2 . " = " . "<underline>" . $number ."</underline><br>";
echo "The number " . "<underline>" . $number . "</underline> is ";
check($number) 
?>
</h1>
</div>
</center>
</body>
</html>