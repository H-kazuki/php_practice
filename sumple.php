<?php
	require_once('menu.php');
	require_once('data.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="static/sumple_style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<title>Top</title>
</head>
<body>
	<header>
		<?php if(isset($_POST['confirm'])): ?>
			<div class="message_container">
				<h1>ご注文承りました</h1>
				<?php unset($_POST['confirm']);?>
			</div>
		<?php endif ?>
		<div class="title">
			<h1>Menu.</h1>
		</div>
	</header>
	<div class="wrapper">
		<?php foreach($categorys as $category): ?>
			<div class="container">
				<div class="item">
					<a href="show.php?id=<?php echo $category->getId() ?>">
						<img src="static/<?php echo $category->getImage() ?>">
					</a>
					<h3><?php echo $category->getName() ?></h3>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</body>
</html>