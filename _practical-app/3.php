<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 //step 1
 
 if(3 > 5){
	echo "Me like JavaScript!";
 } elseif(10 < 7) {
	 echo "Me like JAVA!";
 } else {
	echo "Me like PHP <br/>";
 }

 //step 2
 for($i = 0; $i <= 10; $i++){
	 echo $i . "<br/>";
 }

 $weekDay = "Tuesday";

 switch($weekDay){
	 case "Monday": 
		 echo "Saranen Meeting.";
		 break;
		 case "Tuesday": 
		 echo "First day at new job.";
		 break;
		 case "Wednesday": 
		 echo "Meet with guys.";
		 break;
		 case "Thursday": 
		 echo "Watch a Movie.";
		 break;
		 case "Friday": 
		 echo "Pizza Perjantai.";
		 break;
		 default: 
		 echo "Weekend Plans are secret!";
		break;	
 }
	
?>






    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php" ?>