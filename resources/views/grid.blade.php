<!DOCTYPE html>
<html>
<head>
	<title>Grid</title>
</head>
<style type="text/css">
	.container{
		display: grid;
		width: 500px;
		height: 400px;
		margin: 100px auto 0;
		
		grid-template-columns:auto auto auto auto ; /*repeat(4,auto) do the same*/
		grid-template-rows:repeat(2,auto);
		grid-gap: 1em;
	}
	.item{
		border:5px solid #999;;
	}
	.item:first-child{
		background:red;
		grid-row: 2 / 3;
		grid-column: 1 / 4;
	}
	.item:last-child{
		background:green;
		grid-row:3 / 4;
		grid-column: 2 / 5;
	}
	
</style>
<body>

	<div class="container">
		<div class="item">1 </div>
		<div class="item">2 </div>
		<div class="item">3 </div>
		<div class="item">4 </div>
		<div class="item">5 </div>
		<div class="item">6 </div>
		<div class="item">7 </div>
		<div class="item">8 </div>
		
	</div>

</body>
</html>