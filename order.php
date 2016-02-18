<html>

<head>
<title>Dino's Pizza Parlor - Order Results</title>
</head>

<body>
<br/><br/>
<h2><center>YOUR ORDER</center></h2>
<br/><br/>

<?php 

$customer=$_POST['customer'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$phone=$_POST['phone'];
$sizes=$_POST['sizes'];
$pepperoni=$_POST['pepperoni'];
$mushroom=$_POST['mushroom'];
$bacon=$_POST['bacon'];
$sausage=$_POST['sausage'];
$pineapple=$_POST['pineapple'];
$olives=$_POST['olives'];

if($sizes=='small'){
	$total=9.95;
}
else if($sizes=='medium'){
	$total=11.95;
}
else if($sizes=='large'){
	$total=12.95;
}

echo "$customer<br/>";
echo "$address<br/>";
echo "$city, $state $zip<br/>";
echo "$phone<br/>";

echo "<br/><br/>";

echo "You ordered a $sizes pizza with ";

if (isset($_POST['toppings'])) {
	$optionArray=$_POST['toppings'];
	for($i=0; $i<count($optionArray); $i++) {
		echo $optionArray[$i]." ";
		$total=$total+.50;
	}
}
else if ($_POST['toppings']==0)
	echo "no toppings";


echo "<br/>";
echo "Your order total cost is $$total";

?>

</body>
</html>
