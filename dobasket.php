<?


$type=$_GET["type"];
$id_sport=$_GET["id_sport"];


function db1 (){
		$hostname="localhost";
		$user="root";
		$password="";

		$connection = mysqli_connect($hostname,$user,$password);
		$db = mysqli_select_db($connection, "shop");
		return $connection;

}
$connection = db1();






if ($type==1) {
	$strSQL="SELECT * FROM basket_sport WHERE id_sport='".$id_sport."'";

	$result=mysqli_query($connection,$strSQL) or die("Не могу выполнить запрос1!");
	if ($row=mysqli_fetch_array($result)) {
		$strSQL="UPDATE basket_sport SET kolvo=kolvo+1 WHERE id_sport= '".$id_sport."'";

	}      else {

		$strSQL="INSERT INTO `basket_sport`(id_zakaz, basket_sport.id_sport, kolvo) VALUES (0,'".$id_sport."',1)";

	}      mysqli_query($connection,$strSQL);
}
else if ($type==2) {
	$strSQL1="SELECT * FROM basket_sport WHERE id_sport = '".$id_sport."'";
	  $result=mysqli_query($connection,$strSQL1)  or die("Не могу выполнить запрос1!");
	  if ($row=mysqli_fetch_array($result)) {
		    if ($row["kolvo"]>1) {
		    	$strSQL1="UPDATE basket_sport SET kolvo=kolvo-1 WHERE id_sport='".$id_sport."'";
		    }

	    }
	mysqli_query($connection,$strSQL1);
}
else if ($type==3) {


$strSQL="DELETE FROM basket_sport   WHERE id_sport='".$id_sport."'";
      mysqli_query($connection,$strSQL);
}
else if ($type==4) {


$strSQL="DELETE FROM basket_sport";
      mysqli_query($connection,$strSQL);
}


include'korzina.php';
 ?>

