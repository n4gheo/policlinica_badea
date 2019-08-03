<?php
unset($_SESSION['s_cod']);
unset($_SESSION['s_nume_user']);
unset($_SESSION['s_cod']);
unset($_SESSION['s_rol']);
unset($_SESSION['s_nume_view']);
session_start();
session_destroy();

header('location:index.php')
?>
