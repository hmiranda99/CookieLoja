<?php
    header('Location: index.php');

    $option = $_POST['optionSelect'];

    setcookie('item', $option);
?>