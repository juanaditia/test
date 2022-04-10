<html>
<body>

<?php
$numbers = array(2,2,3,4,6,4,5,7,3); 
$repeated = array(); 
 
$counts = array_count_values($numbers); 
 
foreach($counts as $number=>$count) { 
	if($count > 1) { 
		$repeated[] = $number; 
        echo json_encode($repeated);
	} 
   
}
?>

</body>
</html>