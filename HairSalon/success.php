<?php 
  session_start(); 
?>
<html lang="en">
<!-- Basic -->
<head>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Professional Hairstylist">
<meta name="keywords" content="Hairstyle,Mary style,Hairstylist">
<meta name="author" content="Mary Dimitrova">
<title>Mary Style | Prices</title>
<link rel="stylesheet" href="./css/style.css"type="text/css">
<link rel="stylesheet" href="./css/success.css"type="text/css">
<link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
</head>
<body>
<header>
<div class="container">
	<div id="branding">
    <h1 style="width: 100%;font-family: 'Parisienne';font-size: 70px;text-shadow: 4px 4px 4px #aaa;padding:15px"><span class="highlight">Mary</span> Hairstylist</h1>
	</div>
	<nav> 
	<ul>
	<li><a href="index.html">Начало</a></li>
	<li><a href="prices.html">Цени</a></li>
	<li><a href="galery.html">Галерия</a></li>
	<li class="current"><a href="book.php">Запазване на час</a></li>
	<li><a href="contacts.html">Контакти</a></li>
	</ul>
	</nav>
</div>
</header>
<div class="center">
<?php  if (isset($_SESSION['name'])&&isset($_SESSION['lastname'])&&isset($_SESSION['date'])&&isset($_SESSION['time'])) : ?>
Благодарим ви, <strong><i><?php echo $_SESSION['name']; ?> <?php echo $_SESSION['lastname']; ?></i></strong>.<br>
Вашата резервация е успешно направена!<br>
Дата на резервацията: <strong><i><?php echo $_SESSION['date']; ?></i></strong><br>
Час на резервацията: <strong><i><?php echo $_SESSION['time']; ?></i></strong><br>
Очакваме ви! &#128522;
<?php endif ?>
</div>
<footer>
<p>Мери Димитрова, Copyright &copy; 2020</p>
</footer>
</body>
</html>