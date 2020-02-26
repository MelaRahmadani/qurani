<?php
if(isset($_SERVER['HTTP_X_REQUSTED_WITH'])) {
  include("includes/config.php")

}
else {
  $url = $_SERVER['REQUEST_URL']
  echo "<script>openPage('url')<script>"
  exit();
}
 ?>
