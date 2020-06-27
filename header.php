<?


include'connekt.php';


?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Магазин спорттоваров</title>
</head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />



<body>


	<div id="mySidenav" class="menu">
				  <a href="javascript:void(0)" class="close" onclick="closeNav()">×</a>
				  <a href="index.php">Главная</a>
				  <a href="personal.php">Персонал</a>
				  <a href="news.php">Новости</a>
				  <a href="#">Адреса</a>
				  <a href="#">Вакансии</a>
				  <a href="#">О компании</a>
			</div>
		<div id="wrap" >


		<div class="block0">
			<div class="block01">

				<ul>
					<li><span style="font-size:30px;cursor:pointer" onclick="openNav()"> ☰ Меню</span></li>
					<script>
						function openNav() {
						    document.getElementById("mySidenav").style.width = "250px";
						}

						function closeNav() {
						    document.getElementById("mySidenav").style.width = "0";
						}
						</script>

						<!--<a href = "index.html" >☰ Меню</a></li>-->
					<!--<li><a href = "index.html" >Мы на спорте!!!</a></li>
					<li><span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span></li>	<a id="button">Наверх</a>
	<script>
		var btn = $('#button');

	$(window).scroll(function() {
	  if ($(window).scrollTop() > 300) {
	    btn.addClass('show');
	  } else {
	    btn.removeClass('show');
	  }
	});

	btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '300');
	});
</script>-->
				</ul>
			</div>
			<div class="block03">
				<ul>
					<div class="block031">
						<li><a text = ".php" class=ggg >Голосование</a></li>
						 <div class="block0311">
					      <div class="block03111">
					        <h2>Голосование за команду сезона 2019/20 по футболу!!!!</h2>
					        <h3>С 01.06.2020 по 15.07.2020</h3>
					      </div>
					      <div class="row">
					        <div class="column">
					          <a href="gk.php">Вратари</a>
					          <a href="#">Защитники</a>
					          <a href="#">Левые защитники</a>
					          <a href="#">Правые защитники</a>
					          <a href="#">Полузащитники</a>
					          <a href="#">Левые нападающие</a>
					          <a href="#">Правые нападающие</a>
					          <a href="#">Центральные нападающие</a>

					        </div>
					      </div>
					    </div>
					</div>
					<li><a href = "korzina.php" >Корзина</a></li>
					<li><a href = "index13.php" >Войти</a></li>
				</ul>
			</div>

		</div>
	<div class="block1">
		<div class="block12">

				<ul>
					<li> <form name="search" method="post" action="index1.php">
						<input type="search" placeholder="Поиск" name="query" size = 40><button type="submit">Найти</button></li>
					</form>
				</ul>
			</div>
		</div>

