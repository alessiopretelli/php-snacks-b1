<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (empty($name) && empty($mail) && empty($age)) {
        echo 'Prego, inserire tutti i dati';
    } elseif (strpos($mail, '.') && strpos($mail, '@')) {
        
        if ((strlen($name) > 3) && (is_numeric($age))) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }

    } else {
        echo 'Accesso negato';
    }

?>