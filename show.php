<?php
	require_once('menu.php');
	require_once('data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="static/show_style.css">
	<title>Menu</title>
</head>

<body>
	<header>
		<div class="button">
			<a href="sumple.php" style="text-decoration:none;">
				<button class="top_btn">TOP</button>
			</a>
		</div>
	</header>
	<div class="wrapper">
		<div class="container">
			<?php $category = $_GET['id'] ?>
			<form action="confirm.php?id=<?php echo $category ?>" method="POST">
				<?php foreach($menus as $menu): ?>
					<?php if($menu->getId() == $category): ?>
						<div class="menu_item">
							<div class="menu_name">
								<h2><?php echo $menu->getName() ?></h2>
							</div>
							<div class="count_form">
								<input type="number" value="0" name="<?php echo $menu->getCode() ?>" min="0" max="10" class="menu_count">
							</div>
							<div class="menu_price">
								<h2><?php echo $menu->getPrice().'円' ?></h2>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach ?>
				<p>※値段はすべて税込みで表示しています。</p>
				<div class="button">
					<button type="submit" class="order_btn">注文確認</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>