

<?php

include'header.php';

?>
<h1>Наши товары</h1>




	<?php

	function gk1(){
		$connection = db();
		$query = mysqli_query($connection, "SELECT * FROM tovar ORDER BY id_sport DESC");
		mysqli_close($connection);

		if ((mysqli_num_rows($query) > 1)){
			while ($data = mysqli_fetch_assoc($query)){?>

				<div class = 'block411'>
								<ul>
							<li><img src=image/<? print $data['photo']?> width = '220' height='220'/></a></li>
							<li><label><?print $data["name"];?></label></li>
							<li> Цена <b><? print $data['price'];?></b>p.</li>
							<li><a href="dobasket.php?type=1&id_sport= <?print $data["id_sport"];?>" class ='korzina'>В корзину</a></li>
							</ul>

								</div><?;


			}
		}

	}

	?>

	<div class='block4'>

		<div class = 'block41'>
				<?php

					gk1();


				?>
				</div>
	</div>

<?php
include'sposor.php';
?>
<?
include'footer.php';
?>
<!--<a href="dobasket.php?type=1&id_bask= <?print $data["id"];?>" class ='korzina'>В корзину</a>--!


