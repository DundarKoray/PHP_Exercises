<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 // Step1
 $numbers = [199, 21, 57, 54, 98, 12, 15];
 echo max($numbers);
 echo "<br/>";
 print_r($numbers);
 echo "<br/>";
 echo $numbers[rand(0, count($numbers))];
 echo "<br/>";
 echo 


// Step 2
$name = "Koray Dündar";
echo strlen($name);
echo "<br/>";
echo strtoupper($name);
echo "<br/>";

// Step3
$names = ["Koray", "Anna", "Emma"];
sort($names);
print_r($names);
echo "<br/>";
foreach($names as $item){
	echo $item . " ";
}
echo "<br/>";

function exist($name, $array){

	if (in_array($name, $array)){
		echo "This name exists in the array";
	} else {
		echo "This name is not found in the array";
	}
}

echo exist("Koray", $names);
echo "<br/>";
echo exist("Ömer", $names);
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>