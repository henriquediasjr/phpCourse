<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

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
   
	echo rand(1, 1000);


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>