<?php
session_start();
if(isset($_COOKIE['s_user'])){
  unset($_SESSION['s_user']);
  setcookie("s_user", "", time()-86400);
  header("location:?controller=pages");
  setcookie("userid", "", time() - 86400);
}else {
  header("location:?controller=pages");
}
 ?>
