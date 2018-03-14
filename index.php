  <html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty nuove funzioni altre modifiche";
    } else {
        echo $name;
    }
}	
echo "<br>";
echo "<br>";
?>


 
 
 
 <?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";


$arrlength = count($cars);

$cars[$arrlength] = "VW";

for($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$age["Simone"] = "42"; 

foreach($age as $chiave => $valore) {
    echo "Key=" . $chiave . ", Value=" . $valore;
    echo "<br>";
}

echo "<br>";
echo "Sort by value<br>";
asort($age);
foreach($age as $chiave => $valore) {
    echo "Key=" . $chiave . ", Value=" . $valore;
    echo "<br>";
}

echo "<br>";
echo "Sort by key<br>";
ksort($age);
foreach($age as $chiave => $valore) {
    echo "Key=" . $chiave . ", Value=" . $valore;
    echo "<br>";
}

$x = 75;
$y = 25;
 
function addition() {
	$x = 10;
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>


</body>
</html> 