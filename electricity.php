<html>
<body>
<h1 align="center">Electricity Biill</h1>
<form method="POST" action="#">
<table border="1" align="center">
<tr><td>Consumer No:</td>
<td><input type="text" name="cons" value=""></td></tr>
<tr><td>Consumer Name:</td>
<td><input type="text" name="name" value=""></td></tr>
<tr><td>Previous Reading:</td>
<td><input type="text" name="prev" value=""></td></tr>
<tr><td>Present Reading:</td>
<td><input type="text" name="pres" value=""></td></tr>
<tr><input type="Submit" name="submit" value="SUBMIT"></tr>



<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$id=$_POST['cons'];
	$prev=$_POST['prev'];
	$pres=$_POST['pres'];
	$name=$_POST['name'];
	
	$unit=$pres-$prev;
	
	echo"--------------------------------------------------";
	echo"<h3>KERALA STATE ELECTRICITY BOARD</h3>";
	echo"<br><br>";
	echo"Consumer id:".$id ."<br>";
	echo"Consumer Name".$name."<br>";
	echo"Unit Consumed".$unit."<br>";
	if($unit<=100)
	{
		$amt=$unit*3;
	}
	elseif($unit>100&&$unit<=200)
	{
		$amt=$unit*4;
	}
	elseif($unit>200&&$unit<=300)
	{
		$amt=$unit*5;
	}
	else
	{
		$amt=$unit*6;
	}
echo"<h3>Total Amount:".$amt."</h3><br>";
echo"---------------------------------------------------";
}
?>	
</table>
</form>	
</body>
</html>