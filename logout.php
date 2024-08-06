<?php
session_start();
if ($_GET['do'] == 'exit'){
    unset ($_SESSION['login']);
    unset ($_SESSION['auth']);
    header("Location: index.php");
}
?>