<?php

include("../inc/db.php");
	$products = $dbh->query("SELECT * FROM products");

	if( isset( $_GET['type'] ) ){
		switch ($_GET['type']) {
			case 'del':
				$dbh->query("DELETE FROM `products` WHERE `products`.`idProducts` = '" . $_GET['id'] . "'");
				header("Location: http://localhost/diplom_shop/admin/index.php");
				break;
			case 'editor':
				$product_info = $dbh->query("SELECT * FROM products WHERE `idProducts` = '" . $_GET['id'] . "'")->fetch();
				break;

			default:
				return;
				break;
		}
	}

	if( isset( $_POST['type'] ) && $_POST['type'] == 'edit' ){
		$image_name = add_image( $_FILES['pictures'] );
		$dbh->query("UPDATE `products` SET `name` = '" . $_POST['name'] . "', `description` = '" . $_POST['description'] . "', `price` = '" . $_POST['price'] . "', `pictures` = '" . $image_name . "' WHERE `idProducts` = '" . $_POST['id'] . "';");
		header("Location: http://localhost/diplom_shop/admin/index.php");
	}

	if( isset( $_POST['type'] ) && $_POST['type'] == 'add' ){
		$image_name = add_image( $_FILES['pictures'] );
		$dbh->query("INSERT INTO `products` (`idProducts`, `name`, `description`, `price`, `category_id`, `quantity`, `pictures`, `sales`, `new`, `popular`) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['description'] . "', '" . $_POST['price'] . "', '6', '4', '" . $image_name . "', '0', '0', '1');");
		header("Location: http://localhost/diplom_shop/admin/index.php");
	}

	function add_image( $image ) {
		$new_name = uniqid();
		$type = str_replace('image/', '', $image['type'] );
		$file = '/diplom_shop/img/' . $new_name . '.' . $type;
		move_uploaded_file($image['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $file );
		return $file;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			padding: 15px;
		}

		.wrapper{
			width: 100%;
			height: 400px;
			overflow: hidden;
			overflow-y: scroll;
			border: 1px solid #000;
		}
		h2{
			padding-top: 25px;
		}
		textarea{
			width: 300px;
			height: 150px;
		}
	</style>
</head>
<body>
	<h2>Список товаров</h2>
<div class="wrapper">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Название товара</th>
			<th>Описание</th>
			<th>Цена</th>
			<th>Картинка</th>
			<th>Редактировать</th>
			<th>Удалить</th>
		</tr>
	</thead>
	<tbody>
		
			<?php foreach ($products as $key => $item) {
				echo "<tr><th>" . $item['idProducts'] . "</th>";
				echo "<th>" . $item['name'] . "</th>";
				echo "<th>" . $item['description'] . "</th>";
				echo "<th>" . $item['price'] . "</th>";
				echo "<th>" . $item['pictures'] . "</th>";
				echo "<th><a href='/diplom_shop/admin/index.php?type=editor&id=".$item['idProducts']."'>Редактировать</a></th> 	";
				echo "<th><a href='/diplom_shop/admin/index.php?type=del&id=".$item['idProducts']."'>Удалить</a></th></tr>";
			}
		?>
		
	</tbody>
</table>
</div>
<?php if( isset($_GET['type']) && $_GET['type'] == 'editor' ){ ?>
	<h2>Редактитирование товара</h2>
	<form method="POST" action="/diplom_shop/admin/index.php" enctype="multipart/form-data">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Название товара</th>
				<th>Описание</th>
				<th>Цена</th>
				<th>Картинка</th>
				<th>Сохранить</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><?=$product_info['idProducts']; ?> </th>
				<th><input type="text" name="name" value="<?=$product_info['name']; ?>"></th>
				<th><textarea name="description"><?=$product_info['description']; ?></textarea></th>
				<th><input type="text" name="price" value="<?=$product_info['price']; ?>"></th>
				<th><img src="<?=$product_info['pictures']; ?>" width="50px" height="50px"><input type="file" name="pictures"></th>
				<th><input type="hidden" name="type" value="edit">
				<input type="hidden" name="id" value="<?=$_GET['id'];?>"><input type="submit" value="Обновить"></th>
			</tr>;
		</tbody>
	</table>
	
</form>
	<?php } ?>
	<h2>Добавление товара</h2>
	<form method="POST" action="/diplom_shop/admin/index.php" enctype="multipart/form-data">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Название товара</th>
				<th>Описание</th>
				<th>Цена</th>
				<th>Картинка</th>
				<th>Сохранить</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><input type="text" name="name" value="" placeholder="Введите название товара"></th>
				<th><textarea name="description" placeholder="Описание товара"></textarea></th>
				<th><input type="text" name="price" value="" placeholder="Цена товара"></th>
				<th><input type="file" name="pictures"></th>
				<th><input type="hidden" name="type" value='add'><input type="submit" value="Добавить"></th>
			</tr>;
		</tbody>
	</table>
	
</form>
</body>
</html>