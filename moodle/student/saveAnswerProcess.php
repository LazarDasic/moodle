<?php

    session_start();

    $questionno = $_GET['questionNumber'];
    $value1 = $_GET['checkboxvalue'];
    $value2 = $_GET['checkboxvalue'];
    $value3 = $_GET['checkboxvalue'];
    $value4 = $_GET['checkboxvalue'];
    $_SESSION['answer'][$questionno] = $value1;
    $_SESSION['answer2'][$questionno] = $value2;
    $_SESSION['answer3'][$questionno] = $value3;
    $_SESSION['answer4'][$questionno] = $value4;
    
?>