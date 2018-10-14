<!DOCTYPE html>
<html>
<head>
	<title>Grid Fraction</title>
</head>
<style type="text/css">
	body{
		margin-top: 40px;
	}
	#container{
		width: 800px;
		margin:auto;
		background:#eee;

		display: grid;
		/*grid-template-columns: repeat(3, 1fr);*/
		/*grid-template-columns: 1fr 2fr 3fr;*/
		grid-template-columns: 50px 20% 2fr;
		grid-template-rows:repeat(3,50px);
		
	}
	#container > div {
		background:#999;
		font-weight: bold;
		color: white;
		font-family: sans-serif;
	}
</style>
<body>
	<div id="container">
		<div>  1</div>
		<div>  2</div>
		<div>  3</div>
		<div>  4</div>
		<div>  5</div>
		<div>  6</div>
		<div>  7</div>
		<div>  8</div>
		<div>  9</div>
	</div>
</body>
</html>