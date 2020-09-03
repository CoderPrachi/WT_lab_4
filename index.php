<!DOCTYPE html>
<html>
    <head>
       <title>Show Menu</title>
	   <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<link rel="stylesheet" href="styles.css">
		<link href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">	
		<script
			src="https://code.jquery.com/jquery-3.5.1.js"
			integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
		</script>

	</head>
<body>
<header>
	<nav id="header-nav" class="navbar navbar-default" style="border-radius:0;border:0;">
	<div class="container">
	<br><br><br>
	</div>
	</nav>
</header>
<center>
<div class="container">
<div class="row">
<div class="col-md-4">
<center>	
<div id="div1">
    <?php
	include 'phpArray.php';
	$url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new ShowJSON($url);
	$show->getVals();
	?>
</div>
 <div id="d"></div>
 </center>
 <script type="text/javascript" defer="true">
		
            $(document).ready(function(){
				
            $('#menu').change(function(){
                //Selected value
                var inputValue = $(this).val();
                
				
					//Ajax for calling php function
                $.post('submit.php', { dropdownValue: inputValue }, function(data){
                    alert('Press OK to view detail...');
					
					//document.getElementById['#div2'].innerHTML="zinda h kya";
					//document.getElementById['#div2'].innerHTML=data.id;
					$('#d').html(data);
					
                    //do after submission operation in DOM
                });
				
            });
        });
		
</script>
	

<div id="div2">
</div>
</div>
</div>
</center>	
</body>
</html>