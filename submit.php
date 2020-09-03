<?php
//function processDrpdown() {
   /*echo "Selected value in php ".$selectedVal;
   include 'phpArray.php';
   $url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new ShowJSON($url);
	//$show->getVals();
	$jsonArr = $show->completeData();
	print_r($jsonArr);
	*/
//}      

if ($_POST['dropdownValue']){
    //call the function or execute the code
    $selected=$_POST['dropdownValue'];
	//echo "<br/><br/><br/><br/><br/>Selected value in php ".$selected;
   include 'phpArray.php';
   $url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new ShowJSON($url);
	//$show->getVals();
	$jsonArr = $show->completeData();
	$option=$show->option;
	$key=array_search($selected,$option);
	$details = $jsonArr['menu_items'][$key];
	
	//print_r($details);
	$id = $details['id'];
	$short_name = $details['short_name'];
	$name = $details['name'];
	$description = $details['description'];
	$price_small = $details['price_small'];
	$price_large = $details['price_large'];
	$small_portion_name = $details['small_portion_name'];
	$large_portion_name = $details['large_portion_name'];
	//processDrpdown($details);
	print("<center><div style='font-family:Times New Roman;
												font-size:100%;
												color:white;
												width:300px;
												text-align:left;
												background-color:black;
												display:block;
												margin-top:40px;
												border:5px solid pink;
												box-shadow: 
												0 0 0 10px hsl(0, 0%, 50%),
												0 0 0 15px hsl(0, 0%, 60%),
												0 0 0 20px hsl(0, 0%, 70%),
												0 0 0 25px hsl(0, 0%, 80%),
												0 0 0 30px hsl(0, 0%, 90%);'>");
												
	echo "<b>ID : </b>".$id."<br><b>Short Name : </b>".$short_name."<br><b>Name : </b>".$name."<br><b>Description : </b>".$description
	."<br><b>Price_Small : </b>".$price_small."<br><b>Price_Large : </b>".$price_large."<br><b>Small Portion Name : </b>".$small_portion_name
	."<br><b>Large Portion Name : </b>".$large_portion_name;
	print("</div></center>");
	
	
}

?>