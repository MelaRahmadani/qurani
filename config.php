<?php
  ob_start();
  session_start();

  $con = mysqli_connect("localhost", "root", "", "quran");

  if(mysqli_connect_error()) {
    echo "Gagal tersambung : ". mysqli_connect_error();

  }

?>
