<?php
	require_once('data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="static/confirm_style.css">
	<title>Confirm</title>
</head>
<body>
	<?php $count = 0 ?>
	<?php $category = $_GET['id'] ?>
	<?php $category_menu = array() ?>
	<?php foreach($menus as $menu): ?>
		<?php if($menu->getId() == $category): ?>
			<?php $category_menu[] = $menu ?>
		<?php endif ?>
	<?php endforeach ?>
	<div class="container">
		<div class="confirm_container">
			<?php foreach($category_menu as $menu): ?>
				<?php if($_POST[$menu->getCode()] > 0): ?>
					<div class="choose">
						<h2 class="menu_name"><?php echo $menu->getName() ?></h2>
						<h2 class="menu_count">×<?php echo $_POST[$menu->getCode()] ?></h2>
					</div>
					<?php $count += $_POST[$menu->getCode()] ?>
				<?php endif ?>
			<?php endforeach ?>
			<?php if($count == 0): ?>
				<h1>メニューが選択されていません。</h1>
				<form action="show.php?id=<?php echo $category ?>" method="POST">
					<div class="return_button">
						<button type="submit" name="return" class="return">もどる</button>
					</div>
				</form>
			<?php else: ?>
				<h1 class="total_count">以上<span><?php echo $count ?></span>品</h1>
				<form action="sumple.php" method="POST">
					<div class="confirm_button">
						<button type="submit" name="confirm" class="confirm">注文する</button>
					</div>
				</form>
				<div class="return_button">
					<a href="show.php?id=<?php echo $category ?>" style="text-decoration:none;">
						<button class="return">もどる</button>
					</a>
				</div>
			<?php endif ?>
		</div>
	</div>
</body>
</html>