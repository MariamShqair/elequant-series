<!DOCTYPE html>
<html>
<head>
	<title> confusingAutoFitAndAutoFill</title>
	<style type="text/css">
		body{
			margin-top: 40px;
			padding: 0 50px;
		}
		.container{
			background:#333;
			display: grid;
			/*grid-template-columns: repeat(auto-fill,minmax(200px,1fr));	*/
			grid-template-columns: repeat(auto-fit,minmax(200px,1fr));	
			grid-gap: 5px;
			}
		.box{
			background:#00b1b3;
			padding: 50px 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="box">A</div>
		<div class="box">B</div>
		<div class="box">C</div>	
		<div class="box">D</div>
		<div class="box">E</div>
	</div>
</body>
</html>