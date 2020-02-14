<?php include 'generalSettings/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $tittle; ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo $siteURL ?>css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script type="text/javascript" src="<?php echo $siteURL ?>js/jQuery.js"></script>
	<script type="text/javascript" src="<?php echo $siteURL ?>js/all-plugins.js"></script>
	<script type="text/javascript" src="<?php echo $siteURL ?>js/js.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	
</head>

<body>
	<!-- Full screen image -->
	<div class="headerDownImage"><h1>Hi, My Name is Özgün,<br>I'm Mobile and Web Developer.</h1></div>
	
	<?php include 'loading.php'; ?>
	<!-- Start Header -->
	<header>
		
		<div class="header">
			
			<div class="leftSideLogo">
				
				<img src=" <?php echo $siteURL ?>images/logo.png ">

			</div>

			<div class="rightSide">
				
				<ul>
					
					<li><a class="link active" data-target="#about" >About Me</a></li>
					<li><a class="link" data-target="#skills" href="javascript:void(0)" >My Skills</a></li>
					<li><a class="link" data-target="#seminar" href="javascript:void(0)" >Seminar</a></li>


				</ul>

			</div>

		</div>

	</header>

	<div class="stickyHeader">
	
	<i class="fas fa-bars menuOpen" style="font-size: 30px;color: #ededed;"></i>

	<div class="stickyLogo">

		<a href="<?php echo $siteURL ?>"><h1>{ Özgün Akkoyun }</h1></a>
		
	</div>

</div>

<div class="mobileHeader" style="display: none">

	<nav>
		<ul>

			<li><a class="link active" data-target="#about" >About Me</a></li>
			<li><a class="link" data-target="#skills" href="javascript:void(0)" >My Skills</a></li>
			<li><a class="link" data-target="#seminar" href="javascript:void(0)" >Seminar</a></li>


		</ul>
	</nav>
	
</div> 
	<!-- End Header -->

	<!-- Start Container Section -->

			<section id="about" class="section">
				<h1 class="sectionHeaderText">About Me</h1>

				<div class="aboutContainer">

					<div class="leftSideText">
						
						<h2>My name is Özgün Akkoyun. I graduated from the statistics department of Hacettepe University and I did my master's degree in computer engineering. I'm currently working on mobile applications development with react native and making web development. </h2>

					</div>

					<div class="middleImage">

						<img src=" <?php echo $siteURL ?>images/me.jpg " alt="<?php echo $siteURL ?>images/me.jpg">
						
					</div>

				</div>

			</section>
			
			<section id="skills" class="section">
				<h1 class="sectionHeaderText">My Skills</h1>
				<div class="phaseContainer">
				<?php foreach ($mySkills as $item) { ?>

					<div class="skillsSingle">
						<div class="logoandName">
							<img src=" <?php echo $siteURL ?>images/<?php echo $item['logo'] ?> " alt="<?php echo $siteURL ?>images/<?php echo $item['logo'] ?>">
							<h1><?php echo $item['name'] ?></h1>
						</div>
						<h2><?php echo $item['skill'] ?>%</h2>
						<div id="myProgress">
							<div id="myBar" <?php echo $item['style'] ?> ></div>
						</div>

					</div>
					
				<?php } ?>
 				</div>
			</section>
			
			<section id="seminar" class="section">
				<h1 class="sectionHeaderText">Seminars</h1>
				<div class="seminarContainer">
					<div class="seminarSingle">
						
						<div class="img1 seminarImg" data-videoLink="<?php echo $siteURL ?>videos/seminar1.mp4">
							
							<div class="seminarDescription" >
								<h1> <u>Date:</u> 26.11.2017</h1>
								<h1> <u>Subject:</u> Survival game with Unity</h1>
								<h1> <u>Place:</u> Yıldırım Beyazıt Universty </h1>
							</div>

						</div>

					</div>

					<div class="seminarSingle">
						
						<div class="img2 seminarImg" data-videoLink="<?php echo $siteURL ?>videos/seminar2.mp4">
							
							<div class="seminarDescription" >
								<h1> <u>Date:</u> 09.12.2017</h1>
								<h1> <u>Subject:</u> Survival game with Unity</h1>
								<h1> <u>Place:</u> Gazi Universty </h1>
							</div>

						</div>

					</div>
				</div>
			</section>
		
	<!-- End Container Section -->


	<footer style="width: 100%;">
		
		<div class="footer">
			<h1>Özgün Akkoyun • Mobile & Web Developer</h1>
		</div>

	</footer>

	<div class="videoContainer">
		
		<video src="<?php echo $siteURL ?>videos/seminar1.mp4"></video>

		<i class="fas fa-times closeVideo" style="font-size:25px; color:#fff" ></i>
	</div>

</body>
</html>