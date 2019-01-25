<!DOCTYPE html>
<html>
<head>
	<title>Javascript Playground</title>
</head>
<script>
function myFunction() {
  document.getElementById("meMe").innerHTML = "my life";
</script>
<body>

<div id="foobar"></div>
<div id="boofar"></div>


<p>Enter names in the fields, then click "Submit" to submit the form:</p>

<form id="frm1" action="">
  <div id="meMe" style="float: left; margin: 0 3px 0 0;">First name:</div> <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br><br>
  <input type="button" onclick="myFunction()" value="Submit">
</form>





</body>
</html>