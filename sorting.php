<html>
<body>

<?php
$numbers = array(1, 3, 9, 2, 11, 4, 5);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo " ";
}
?>

</body>
</html>