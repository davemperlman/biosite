<?php 
$dir = "projects/*/*{.md,.png}";
$projects = (array_filter(glob('projects/*'), 'is_dir'));
$email = 'daveperlman89@me.com';
$business = 'info@entertainmentmaine.com';
 ?>

 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>About Me</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
			<h1>David Perlman</h1>
			<p>musician | business owner | junior web developer</p>
		</header>
		<div class="container">
			<section id="portfolio-nav">
				<nav>
					<ul>
						<li><a href="https://davemperlman.github.io/resume/">Resume</a></li>
						<li><a href="http://www.entertainmentmaine.com">Business</a></li>
						<li><a href="#">Portfolio</a></li>
					</ul>
				</nav>
			</section>
			<section class="portfolio-list">
					<?php 
						foreach ($projects as $project_dir) {
							$info = glob($project_dir . '/*{.png,.md}', GLOB_BRACE);
							echo "<div class='portfolio-item'>";
							foreach ($info as $path) {
								if (pathinfo($path, PATHINFO_EXTENSION) == 'png') {
									echo "<a href=".dirname($path)."><img class='thumbnail' src=$path></a>";
								} else {
									$md = preg_replace('/#/', "", file_get_contents($path));
									echo "<p class='description'>" . $md . "</p>";
								}
							}
							echo "</div>";
						}
					?>
			</section>
			<footer>
				<ul id="call">
					<h3 class="footer-title">call</h3>
					<li id="call-mobile"><p>T: <a href="tel:207-713-4245">207-713-4245</a></p></li>
					<li id="call-desktop"><p>T: 207-713-4245</p></li>
				</ul>
				<ul id="email">
					<h3 class="footer-title">email</h3>
					<li><a href="mailto:?to=<?php echo $email; ?>"><?php echo $email; ?></a></li>
					<li><a href="mailto:?to=<?php echo $business; ?>"><?php echo $business; ?></a></li>
				</ul>
				<ul id="follow">
					<h3 class="footer-title">follow me</h3>
					<li><a href="http://www.facebook.com/dave.perlman12"><img src="img/fb2.png" width="34px" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/channel/UCxjPmBFfLNuTHM9bGABY_0g"><img src="img/you.png" width="34px" alt="Youtube"></a></li>
					<li><a href="https://www.instagram.com/daveperlman89/"><img src="img/Instagram-128.png" width="34px" alt="instagram"></a></li>	
				</ul>
				<ul id="copyright">
					
				</ul>
			</footer>
		</div>
			
	</body>
</html>
