<!DOCTYPE html>
<html>
<head>
	<title>twelve days of Christmas</title>
</head>
<body>	
	<h1>On the <span id="day"></span> day of Christmas
		<br>my true love sent to me:</h1><br><span id="gift"></span><br>
	<button id='start' >Start</button>
	<hr>
	<h1 id="wala">On the <span id="day1"></span> day of Christmas
		<br>my true love sent to me:</h1><br><span id="gift1"></span><br>
	<button id='button' >Start</button>

	<?php  
	$gifts = array(
					'A Partridge in a Pear Tree' => '1st',
					'Two Turtle Doves<br>and a Partridge in a Pear Tree.' => '2nd',
					'Three French Hens,<br>Two Turtle Doves<br>and a Partridge in a Pear Tree.' => '3rd',
					'4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '4th',
					'5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '5th',
					'6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '6th',
					'7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '7th',
					'8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '8th',
					'9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '9th',
					'10 Lords a Leaping<br>9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '10th',
					'11 Pipers Piping<br>10 Lords a Leaping<br>9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree'  => '11th',
					'12 Drummers Drumming<br>11 Pipers Piping<br>10 Lords a Leaping<br>9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree' => '12th');


	?>

	




<script type="text/javascript">

	document.getElementById('start').onclick = function(){
		document.getElementById('start').innerHTML= 'Next';
		<?php 
		foreach ($gifts as $gift => $day){?>
			document.getElementById('day').innerHTML= '<?php echo $day; ?>';
			document.getElementById('gift').innerHTML= '<?php echo $gift; ?>';
		<?php } ?>
	}

	var days = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth', 'eleventh', 'twelfth'];
	var gave = ['A Partridge in a Pear Tree', 
	'Two Turtle Doves<br>and a Partridge in a Pear Tree.', 
	'Three French Hens,<br>Two Turtle Doves<br>and a Partridge in a Pear Tree.', 
	'4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'10 Lords a Leaping<br>9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'11 Pipers Piping<br>10 Lords a Leaping<br>9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree', 
	'12 Drummers Drumming<br>11 Pipers Piping<br>10 Lords a Leaping<br>9 Ladies Dancing<br>8 Maids a Milking<br>7 Swans a Swimming<br>6 Geese a Laying<br>5 Golden Rings<br>4 Calling Birds<br>3 French Hens<br>2 Turtle Doves<br>and a Partridge in a Pear Tree'];

	var x=0;
	document.getElementById('button').onclick = function(){
		document.getElementById('button').innerHTML= 'Next';

				document.getElementById('day1').innerHTML= days[x];
				document.getElementById('gift1').innerHTML= gave[x];
	x++;
		if (x>=13) {
			document.getElementById('wala').innerHTML = "binawi lahat";
			document.getElementById('gift1').innerHTML= "";
		}
	}
</script>


</body>
</html>