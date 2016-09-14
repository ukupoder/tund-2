<?php
	//echo ("test");	

	$age = 5;
	
	if ($age < 18)
	{
		echo "alaealine";	
	}
	else 
	{
		echo "täisealine";
	}
	
?>

<br>

<?php

	for ($i = 1; $i <= $age; $i++)
	{
		echo $i."palju ";
		
	}
		echo "Õnne";
?>
<br>
<?php

	echo date ("d.m.y H:i:s");

?>