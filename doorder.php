<?
$id_bask=$_COOKIE["id_bask"];
print $id_bask;

if (!isset($id_bask)) {
 $uniq_ID=mt_rand();
}

include 'header1.php';
?>

<?
function db3 (){
		$hostname="localhost";
		$user="root";
		$password="";

		$connection = mysqli_connect($hostname,$user,$password);
		$db = mysqli_select_db($connection, "shop");
		return $connection;

}
$connection = db3();
	$id_sport=$_GET["id_name"];
 	$fio = $_POST['fio'];
    $karta = $_POST['karta'];
    $nomer = $_POST['nomer'];
    $email = $_POST['email'];
    $strana = $_POST['strana'];
    $oblast = $_POST['oblast'];
    $city = $_POST['city'];
    $strit = $_POST['strit'];
    $home = $_POST['home'];
    $flat = $_POST['flat'];
    $date= date('d,F,H:i');

  if (($fio == ' ') or ($karta== ' ') or ($nomer == ' ') or ($email == ' ') or ($strana == ' ') or ($oblast == ' ') or ($city == ' ') or ($strit == ' ') or ($home == ' ') or ($flat == ' ')  or ($nomer < 1) or ($karta < 1) or ($home < 1) or ($flat < 1 ))
    {
      echo '<p> У вас есть не заполненые поля или вы ввели значение меньше 0 </p>
      <p> Попробуйте позже  </p>';
      include('footer.php');
      exit();


    }
    else
    {

    	$strSQL="SELECT name, price, basket_sport.kolvo, tovar.id_sport, id_cus, fio, karta, nomer, email, strana, oblast, city, strit, home, flat, dates, zakaz.kkolvo FROM tovar, basket_sport, zakaz WHERE tovar.id_sport=basket_sport.id_sport and basket_sport.id_zakaz = zakaz.id_zakaz and basket_sport.kolvo <> zakaz.kkolvo  GROUP BY id_sport";

		$result=mysqli_query($connection,$strSQL) or die("Не могу выполнить запрос1!");

		while($row=mysqli_fetch_array($result)) {




			$name= $row["name"];
			$kolvo=$row["kolvo"];
			$sum=$row["price"]*$row["kolvo"];
			$total=$row["price"];



			print $name;
			//print $kolvo;



		$strSQL="INSERT IGNORE INTO `zakaz`(id_cus, fio, karta, nomer, email, strana, oblast, city, strit, home, flat, dates, total, id_zakaz, id_name, kkolvo, sum) VALUES ( '".$uniq_ID."','".$fio."','".$karta."','".$nomer."','".$email."','".$strana."','".$oblast."','".$city."','".$strit."','".$home."','".$flat."','".$date."','".$total."', 0,'".$name."','".$kolvo."','".$sum."') , ( '".$uniq_ID."','".$fio."','".$karta."','".$nomer."','".$email."','".$strana."','".$oblast."','".$city."','".$strit."','".$home."','".$flat."','".$date."','".$total."', 0,'".$name."','".$kolvo."','".$sum."')";





	}

		mysqli_query($connection,$strSQL) or die ("Не могу выполнить запрос12!");
}
		$strSQL="gfDELETE FROM basket_sport";
      mysqli_query($connection,$strSQL);




?>

<h1>Заказ отправлен</h1>
<a align="center" href="index.php">На главнуюю</a>
<?
include('footer.php');
?>
