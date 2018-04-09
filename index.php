<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Addition</title>
</head>

<script>

function z()
{



	var a=document.getElementById("num1").value;

	var b=document.getElementById("num2").value;


		if(a=="" || b=="")
		{
			alert("Enter both values");
			return;
		}

	document.getElementById("para").innerHTML="sum is "+(parseInt(a)+parseInt(b));

}
</script>

<body>
	
<input type="number" name="" id="num1">
<br>
<br>

<input type="number" name="" id="num2">
<br><br>

<input type="button" value="Sum" onClick="z()">

<br><br>

<p id="para"></p>

</body>
</html>