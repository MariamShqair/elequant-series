<!DOCTYPE html>
<html>
<head>
	<title>CSS Grid Aria</title>
</head>
<style type="text/css">
	
	body{margin-top: 40px;}
	#container {
		display:grid;
		grid-template-columns:150px 100px auto;
		grid-template-rows: 100px  auto  100px;
		grid-template-areas:
		"nav aside header"
		"nav aside main"
		"nav footer footer";
		grid-gap:10px;
	}


	header{
		grid-area:header;
		background:red;
	}

	nav{
		grid-area:nav;
		background:brown;
	}

	aside{
		grid-area:aside;
		background: black;
		color: white;
	}

	main{
		grid-area:main;
		background: blue;
	}

	footer{
		grid-area:footer;
		background:green;
	}

</style>
<body>
	<section id="container">
		<header>header area</header>
		<nav>navigation area</nav>
		<aside>asid area</aside>
		<main>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</main>
		<footer>footer area</footer>
	</section>
</body>
</html>