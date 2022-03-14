<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 if(10 <= 10){
	 echo "I love PHP <br>";
 }else if(10 > 4){
	 echo "I dont love PHP";
 }else{
	 echo "goodbye";
 }

 for($i = 0; $i <= 10; $i++){
	echo $i . "<br>";
 }

 $value = 10;
 
 switch($value){
	 case 10: 
		echo "this is it man";
		break;
	case 20: 
		echo "this is not right";
		break;
 }
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>