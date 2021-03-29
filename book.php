<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Professional Hairstylist">
<meta name="keywords" content="Hairstyle,Mary style,Hairstylist">
<meta name="author" content="Mary Dimitrova">
<title>Mary Style | Book</title>
<link rel="stylesheet" href="./css/style.css"type="text/css">
<link rel="stylesheet" href="./css/book.css"type="text/css">
<link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
</head>
<body>
<header>
<div class="container">
	<div id="branding">
    <h1 style="width: 100%;font-family: 'Parisienne'; margin: 0; font-size: 70px;text-shadow: 4px 4px 4px #aaa;padding:15px"><span class="highlight">Mary</span> Hairstylist</h1>
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


<section id="main">
<div class="container1"> 
            <form id="contact" action="book.php" method="post">
              <h1 style="font-family: 'Philosopher'; text-align: center;";><u>Запазете си час</u></h1>
              <br>
              <?php include('errors.php')?>
              <fieldset>
                  <label>Име:<font color=red>*</font>
                <input name="name" placeholder="Вашето  име " type="text" tabindex="1"  value="<?php echo $name; ?>">
            </label>
              </fieldset>
              <fieldset>
                  <label>Фамилия:<font color=red>*</font>
                <input name="lastname" placeholder="Вашата фамилия" type="text" tabindex="2" value="<?php echo $lastname; ?>" >
            </label>
              </fieldset>
              <fieldset>
                  <label>Телефон:<font color=red>*</font>
                <input name="phone" placeholder="Телефон за връзка" type="tel" tabindex="3"  value="<?php echo $phone; ?>">
            </label>
              </fieldset>
              <fieldset>
                  <label>Изберете дата:<font color=red>*</font>
                <input type="date" id="date" name="date" tabindex="4"  value="<?php echo $date; ?>">
            </label>
              </fieldset>
              <fieldset>
                  <div class="select">
                  <label>Изберете час:<font color=red>*</font>
                <select name="time" tabindex="5"  value="<?php echo $time; ?> ">
                    <option value="9">9:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                    <option value="13">13:00</option>
                    <option value="14">14:00</option>
                    <option value="15">15:00</option>
                    <option value="16">16:00</option>
                </select>
                </label>
                </div>
              </fieldset>
              <fieldset>
              <label>Услуга:<font color=red>*</font>
                <select name="others" tabindex="6"  value="<?php echo $others; ?> ">
                    <option value="Podstrigvane s izmivane">Подстригване с измиване</option>
                    <option value="Boqdisvane">Боядисване</option>
                    <option value="Seshoar,Presa,Masha">Сешоар, Преса, Маша</option>
                    <option value="Pricheski">Прически</option>
                    <option value="Therapy">Терапия</option>
                </select>
                </label>
              </fieldset>
              <fieldset>
                <button name="reserve" type="submit" id="contact-submit" data-submit="...Sending">Запазете</button>
              </fieldset>
            </form>
          </div>
    
    
</div>
</section>

<footer>
<p>Мери Димитрова, Copyright &copy;  <script>document.write(new Date().getFullYear());</script></p>
</footer>
</body>
</html>