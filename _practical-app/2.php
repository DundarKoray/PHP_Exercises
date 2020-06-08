<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out


			

			 */
			
			// step 1
			$number1 = 10;
			$number2 = 20;

			// step 2
			echo $number1 + $number2 . "<br/>";

			// step 3
			$fruits1 = array("banana", "mango", "watermelon");
			echo $fruits1[1]. "<br/>";
			
			$fruits2 = array("lunch" => "lentils soup","dinner" =>"meatballs");
			echo $fruits2["dinner"] . "<br/>";

			// step 4
			define('LANGUAGE', 'PHP');
			echo LANGUAGE;					

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>