<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Czich Tyron">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css\carte.css">
	<link rel="stylesheet" href="css\neige.css">
	<title>Bonnes fêtes de fin d'année et meilleurs voeux!</title>
</head>

<body>

	<div class="snow">
		<div class="snow__layer">
			<div class="snow__fall"></div>
		</div>
		<div class="snow__layer">
			<div class="snow__fall"></div>
		</div>
		<div class="snow__layer">
			<div class="snow__fall"></div>
			<div class="snow__fall"></div>
			<div class="snow__fall"></div>
		</div>
		<div class="snow__layer">
			<div class="snow__fall"></div>
		</div>
	</div>

	<div class="window">
		<div class="santa">
			<div class="head">
				<div class="face">
					<div class="redhat">
						<div class="whitepart"></div>
						<div class="redpart"></div>
						<div class="hatball"></div>
					</div>
					<div class="eyes"></div>
					<div class="beard">
						<div class="nouse"></div>
						<div class="mouth"></div>
					</div>
				</div>
				<div class="ears"></div>
			</div>
			<div class="body"></div>
		</div>
	</div>

	<div class="message">
		<h1>Bonnes fêtes de fin d'année et meilleurs voeux!</h1>
		<h2>Pour: <?= htmlspecialchars($_GET['for']) ?></h2>
		<h2>De la part de: <?= htmlspecialchars($_GET['name']) ?></h2>
		<h2>Message: <?= htmlspecialchars($_GET['message']) ?></h2>
		<br>
		<h3 class="copyright">© 2020 Czich Tyron - Tous les droits sont réservés <a href="" target="_blank">Czich
				Tyron</a></h3>

	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
	</script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	-->
	
</body>

</html>