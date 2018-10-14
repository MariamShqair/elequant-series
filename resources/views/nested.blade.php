<!DOCTYPE html>
<html>
<head>
	<title>nested grid</title>
</head>
<style type="text/css">
	body{
		margin-top: 40px;
	}

	.container{
		display: grid;
		grid-template-columns: repeat(4,100px);
		grid-gap: 1em;

	}
	.box{
		background-color: #444;
		color: #fff;
		border-radius: 2px;
		padding: 10px;
	}
	.a{
		grid-column: 3 / 5;
		/*grid-row: 3 / 4 ;*/
		grid-row: 3;
		display: grid;
		grid-template-columns: repeat(2,1fr);
		grid-gap: 1em;
	}
	.a > .box{
		background: blue;

	}
	.b{
		grid-column: 3 / 5;
	}
</style>
<body>
	<div class="container">
		<div class="box a">

			<div class="box">a1</div>
			<div class="box">a2</div>
			<div class="box">a3</div>
			<div class="box">a4</div>

		</div>
		<div class="box b">B</div>
		<div class="box c">C</div>
		<div class="box d">D</div>
		<div class="box e">E</div>
		<div class="box f">F</div>
		<div class="box g">G</div>
		<div class="box h">H</div>
	</div>
</body>
</html>