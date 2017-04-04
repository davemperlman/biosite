<?php 
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
			<section id="about-me">
				<nav>
					<ul>
						<li><a href="https://davemperlman.github.io/resume/">Resume</a></li>
						<li><a href="http://www.entertainmentmaine.com">Business</a></li>
						<li><a href="#">Projects</a></li>
					</ul>
				</nav>
				<h2>things about me</h2>
			</section>
			<aside id="bio">
				<p>I am a budding web developer from Auburn, Maine. After a few years in candidacy for a bachelor's degree in business from the University of Maine I decided that I wanted to change course. Since then, I've been in several customer service related fields from retail management to sales always striving to do things a little better than I did the day before. I consider myself lucky to be able to pursue a career while living out my delusional rockstar fantasy on nights and weekends. In the warm weather, you can find me out running and hiking or at a barbeque. Conversely, in the winter I'm usually hibernating.</p>
				<section id="photopane">
					<div class="pane-picture">
						<img id="race" src="https://scontent-ort2-1.xx.fbcdn.net/v/t1.0-9/10698622_10152784311244374_8267419072588093988_n.jpg?oh=209e1998208dbd97f095a17046464abe&oe=58E5C0B9">
					</div>
					<div class="pane-picture">
						<img src="https://scontent-ord1-1.xx.fbcdn.net/v/t1.0-9/10377350_345383718950024_5553098222139393788_n.jpg?oh=2522f2e331862ed5213cb929f524fa02&oe=5872C59F" alt="Hike to top of waterfall 2013">
					</div>
				</section>
			</aside>
			<section id="photo">
				<img src="img/profile.jpg" alt="Handsome dude who just finished a half-marathon">
			</section>
			<ul id="bullets">
				<h3>some facts about me</h3>
				<li>
					i play a number of different instruments
				</li>
				<li>
					i've run a half marathon race
				</li>
				<li>
					dogs are the best
				</li>
				<li>
					building and tinkering are things i enjoy
				</li>
				<li>
					i <strong>hate</strong> wasps
				</li>
			</ul>
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
