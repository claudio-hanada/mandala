<?php
    session_start();

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['file'] = $_FILES['file'];
    $_SESSION['idioma'] = $_POST['idioma'];

    header('Location: perguntas.php');

?>