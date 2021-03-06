<?php  
require_once 'config.php';
require 'class.user.php';
session_start();

if( isset($_POST['upload']) ) {
	$unserialized = unserialize($_SESSION['user']);
	$unserialized->image_upload($_FILES['to-upload'], $_POST['caption']);
}
$images = $pdo->query("SELECT * FROM images")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<link rel="stylesheet" href="">
		<title>Gallery</title>
	</head>
	<body>
		<header>
			<nav>
			<h1>Gallery</h1>
				<ul class="nav-ul">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="admin.php"><span>Admin</span></a></li>
					<li><a href="mailto:info@entertainmentmaine.com"><span>Contact</span></a></li>
				</ul>
			</nav>
		</header>
		<div class="container">
			<div class="gallery-wrap">
				<section id="gallery">
					<h2>Dave's Pics</h2>
					<?php if ( isset($_SESSION['user']) ): ?>
						<section id="main-upload">
							<form method="post" enctype="multipart/form-data">
								<label id="label-button" for="to-upload" data-title="Upload an Image">Upload an Image</label>
								<input type="file" name="to-upload" id="to-upload">
								<label id="caption-label" for="caption">Enter a Caption: </label>
								<input type="text" name="caption" id="caption" placeholder="Enter a Caption">
								<button type="submit" id="upload-submit" name="upload"></button>
							</form>
						</section>
					<?php endif ?>

					<?php foreach ($images as $img): ?>
						<div class="img-panel">
							<img class="thumbnail"src="<?php echo $img[path]; ?>" alt="">
							<p class="caption"><?php echo $img['caption']; ?></p>
						</div>
					<?php endforeach ?>
				</section>
			</div>
			<aside>
			</aside>
			<footer>
			<ul>
				<h3>Filler Content</h3>
				<li><a href="">More Stuff</a></li>
				<li><a href="">Other Stuff</a></li>
				<li><a href="">More Stuff</a></li>
			</ul>
		</footer>
		</div>
	</body>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
		
	</script>
</html>