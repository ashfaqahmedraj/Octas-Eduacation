<?php

if(!isset($_SESSION['user_id'])){
    if(!$_SESSION['user_id']):
        header('Location: login.php');
        exit();
    endif;
}


?>