<?php 

$c = 10;
$a = 4;
$b = 0;
$matriz= array(array(0,0,0,0,0,0,0,0,0,0),
			   array(0,0,0,0,0,0,0,0,0,0),		
			   array(0,0,0,0,0,0,0,0,0,0));
				
for ($i=10;$i>0;$i--){
	echo "<br />";
	echo "<br />";
	for($j=10;$j>$i;$j--){
		$matriz[$i][$j]=1;
		 echo $matriz[$i][$j];
		 echo "\n";
	}
}
				
/*
if ($a<5){
	for($i=0;$i<5;$i++){
		$b +=$i=$c;
	}
}

else {
	for($i=0;$i<5;$i++){
	$b +=$i+$c; 
	}
} */ 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Page Title</title>
</head>
<body>
	
</body>
</html>