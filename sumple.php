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
				<h1 class="message_text">ご注文承りました</h1>
				<?php unset($_POST['confirm']);?>
			</div>
		<?php endif ?>
	</header>
	<div class="container">
		<div class="title_container">
			<h1 class="title">Menu.</h1>
		</div>
		<div class="menu_cont">
			<?php foreach($categorys as $category): ?>
				<div class="category_item">
					<a href="show.php?id=<?php echo $category->getId() ?>">
						<img src="static/<?php echo $category->getImage() ?>">
					</a>
					<h3 class="category_name"><?php echo $category->getName() ?></h3>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
<footer>
	
</footer>
</html>