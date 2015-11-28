
<?php
//require class
require_once 'classes/Errors.php';

//use namespace
use Memuya\ErrorHandler\Errors;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Error Handling</title>
	<link rel="stylesheet" href="css/notice-boxes.css">
</head>
<body>
	
	<?php
	/*****************
	* FIRST SCENARIO *
	******************/
	$name = null;
	$age = 0;

	if(empty($name))
		Errors::add("Name is empty");

	if($age <= 0)
		Errors::add("Age can not be 0");

	//display the error messages or a success message
	echo Errors::display("This message will show if no errors have been generated");

	//clear the error messages so we can start fresh on the same page
	Errors::clear();


	/******************
	* SECOND SCENARIO *
	*******************/
	$name = "Bob";
	$age  = 50;

	if(empty($name))
		Errors::add("Name is empty");

	if($age == 0)
		Errors::add("Age can not be 0");

	//Displays the success message because no errors have been added
	echo Errors::display("This message will show if no errors have been generated");
	?>
</body>
</html>
