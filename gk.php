<?


include'header1.php';
?>

<h1>Голосование за лучших вратарей сезона 2019/20</h1>

<?
function bd(){
    $hostname="localhost";
    $user="root";
    $password="";

    $connection = mysqli_connect($hostname,$user,$password);
    $db = mysqli_select_db($connection, "golos");
    return $connection;

}

function gk1(){
    $connection = bd();
    $query = mysqli_query($connection, "SELECT * FROM gk");
    mysqli_close($connection);

    if ((mysqli_num_rows($query) > 1)){
      while ($data = mysqli_fetch_assoc($query)){?>

        <div class = 'block1011'>
                <ul>
                <li><b><? print $data['id'];?></b></li>
              <li><img src=fut/<? print $data['photo']?> width = '300' height='350'/></a></li>
              <li><b><? print $data['name'];?></b></li>
              <li><a href="dobasket1.php?type=1&id_sport= <?print $data["id"];?>" class ='korzina'>Отдать голос</a></li>
              </ul>

                </div><?;


      }
    }

  }
?>

  <div class='block10'>

    <div class = 'block101'>
        <?php

          gk1();


        ?>
        </div>
  </div>

<?php
include'sposor.php';
?>


<?
include 'footer.php';
?>