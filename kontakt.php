<h1>Наш персонал</h1>

<?php
    function dbb (){
    $hostname="localhost";
    $user="root";
    $password="";

    $connection = mysqli_connect($hostname,$user,$password);
    $db = mysqli_select_db($connection, "people");
    return $connection;

  }
  function writeAdmins_1(){
    $connection = dbb();
    $query = mysqli_query($connection, "SELECT * FROM pers ORDER BY id ASC");
    mysqli_close($connection);

    if ((mysqli_num_rows($query) > 1)){
      while ($data1 = mysqli_fetch_assoc($query)){
        echo  "<div class = 'block811'>
                <ul>
              <li><img src='images/".$data1['photo']."' width = '300' height='370' /></li>
              <li><label>".$data1['name']."</label></li>
              <li><label 'class = 'pos'>".$data1['position']."</label></li>
              <li><label>тел. <b>".$data1['phone']."</b></label></li>
              </ul>
                </div>";


      }
    }

  }

  ?>
<div class="block8">
  <div class = "block81">
    <?php

          writeAdmins_1();

        ?>
  </div>
</div>



