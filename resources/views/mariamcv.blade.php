<!DOCTYPE html>
<html>
<head>
	<title>Mariam Shqair CV</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Libre+Baskerville|Lora" rel="stylesheet">
<style type="text/css">

	body{
		margin-bottom: 40px;
		
	}

	#container{
		display: grid;
		width: 80%;
		margin:0 auto;
		grid-template-columns: 2fr 1fr ;
		grid-template-rows: repeat(2 ,auto);
		grid-gap: 10px;
		
	}
	#container h1{
		padding: 5px;
		color:#EE4266;
		font-family: 'Lora', serif;
		margin: 0;
	}
	header{
		background:#3BCEAC;
		display: grid;
		padding: 30px 0;
		grid-column: 1/3;
		
	}
	header .name{
		text-align: center;
		font-size: 50px;
		color: #FFD23F;
		font-family: 'Dancing Script', cursive;
	}

	nav{
		
		display: grid;
		grid-template-rows: 1fr  150px  100px;
		grid-template-columns: 1fr;
		grid-gap: 5px;
	}
	
	nav .experience{
		padding: 0 10px;
	}

	
	nav .experience ol > li
	{
    	padding: 5px;
    	color: #540D6E;
    	font-family: 'Libre Baskerville', serif;
	}
	nav .experience ol > li span
	{
		color: #0EAD69;
	}

	nav .education{
		
		padding-top:  10px;
		padding-left: 10px;
				
	}
	nav .education .degree{
		padding: 10px 25px ;
		font-size: 15px;
		color: #0EAD69;
		font-family: 'Libre Baskerville', serif; 

	}
	
	

	aside{
		
		padding:  0 10px;
		display: grid;
		grid-template-rows: repeat(4 , auto);
		grid-gap: 10px;
		border-left: #FFD23F solid 5px;
	}
	
	aside .contact .info{
		display: grid;
		grid-template-columns: 1fr 3fr;
		grid-template-rows: repeat(3 , 1fr);
		font-family: 'Libre Baskerville', serif; 
		font-size: 13px;
		color: #3BCEAC;
		padding:  5px 15px;

	}
	.info h5{
		color: #540D6E;
		font-weight: bold;
		margin: 0;
	}
	.profile > div {
		font-family: 'Libre Baskerville', serif; 
		color:#3BCEAC;
		font-size: 15px;
		padding:  5px 15px;
	}
	 .skill-info {
	 	padding: 0 25px;
		color:#3BCEAC;
		display: grid;
		grid-template-columns:1fr 3fr;
		grid-gap: 5px;
	}
	.skill-info .percentage:nth-child(even){
		background-color: #FFD23F;
		
	}
	.skill-info .percentage .pcolor{
		background-color: #EE4266;
		color:#FFD23F;
	}
	.skill-info .percentage .p100{
		width: 100%;
		
	}
	.skill-info .percentage .p90{
		width: 90%;
		
	}
	.skill-info .percentage .p80{
		width: 80%;
		
	}
	.skill-info .percentage .p70{
		width: 70%;
		
	}
	
	.interest-info > div{
		font-family: 'Libre Baskerville', serif; 
		color:#3BCEAC;
		font-size: 15px;
		padding:  5px 15px;
	}
	
</style>
<body>
	
	<section id="container">
		
		<header>
		 	<div class="name">	Mariam Shqair CV</div>
		 	
		</header>
		<nav> 
			<div class="experience">
				<h1>EXPERIENCE</h1>
				<ol>
					<li> <span> Good understanding of web-related technologies such as HTML, CSS, JavaScript, PHP, Laravel, Sql ,Mysql</span>
					</li>
					<li> <span>Experienced working in web development environment
					</span>
					</li>
					<li> <span>Skilled in web and database integration and developing web applications
					</span>
					</li>
					<li> <span>
						Quick learner and hard-working individual
					</span>
					</li>
					<li> <span>
						Excellent analytical, written and verbal communication skills
					</span>
					</li>
					<li> <span>
						Sound knowledge of Photoshop
					</span>
					</li>
					<li> <span>
						Building databases and information caches
					</span>
					</li>
					<li> <span>
						Assisting in development and maintenance of in-house and out-bound web applications
					</span>
					</li>
					
				</ol>
			</div> 
			
			<div class="experience">
				<h1>PROJECTS</h1>
				<ol>
					<li> <span> e-commerce php project</span>
					</li>
					<li> <span>Blog Laravel project
					</span>
					</li>
					<li> <span>Building Laravel project
					</span>
					</li>
						
				</ol>
			</div>
			<div class="education">
				<div><h1>EDUCATION</h1></div>
				<div class="degree" >
					Bachelor's Degree in Computer Information System
					Al-Najah University, 2014
				</div>
				
			</div>
		</nav>
		<aside>
			<div class="contact">
				<h1>CONTACT</h1>
				<div class="info">
					<div><h5>EMAIL:</h5> </div>
					<div>mariamshqair89@gmail.com</div>
					<div><h5>MOBILE:</h5></div>
					<div>0598607564</div>
					<div><h5>ADDRESS:</h5></div>
					<div>AL-ZAWYA , SALFEET , PALESTINE</div>

				</div>
			</div>
			<div class="profile">
				<h1>PROFILE</h1>
				<div >
					A junior web developer position with an IT company to use my skills in developing and maintaining functional websites and learn new technology as well.
				</div>
			</div>
			<div class="skills">
				<h1>SKILLS</h1>
				<div class="skill-info">
					<div>HTML </div>
					<div class="percentage">
						<div class="pcolor p100">100%</div>
					</div>
					<div>CSS </div>
					<div class="percentage">
						<div class="pcolor p80">80%</div>
					</div>
					<div>Bootstrap </div>
					<div class="percentage">
						<div class="pcolor p80">80%</div>
					</div>
					<div>JS </div>
					<div class="percentage">
						<div class="pcolor p70">70%</div>
					</div>
					<div>PHP </div>
					<div class="percentage">
						<div class="pcolor p90">90%</div>
					</div>
					<div>OOP </div>
					<div class="percentage">
						<div class="pcolor p90">90%</div>
					</div>
					<div>Laravel </div>
					<div class="percentage">
						<div class="pcolor p80">80%</div>
					</div>
					
					


				</div>
			</div>
			<div class="interest">
				<h1>INTEREST</h1>
				<div class="interest-info">
					<div>
					 Reading
					</div>
					<div>
					 Teaching
					</div>
					<div>
					 Sports
					</div>

				</div>
			</div>
		</aside>

	</section>

</body>
</html>