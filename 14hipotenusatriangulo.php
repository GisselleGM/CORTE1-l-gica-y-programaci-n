<html> 
<head> 
<title>hipotenusa triángulo</title> 
</head> 
<body> 
<?php 
$cateto1 = rand(1,20); 
echo "cateto1= $cateto1"; 
echo "<br>"; 
$cateto2 = rand(1,20); 
echo "cateto2= $cateto2"; 
echo "<br>";
echo "el area del triángulo es"; 
echo "<br>";
$hipotenusa = sqrt($cateto1 * $cateto1 + $cateto2 *$cateto2); 
echo "$hipotenusa";
?> 
</body> 
</html> 