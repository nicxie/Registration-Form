<?php 
    include_once('../utilities/validation.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if(validate($firstname != null && $lastname != null)){
        header("location: ../main.php");
    }else{
        header("location: ../error.php");
    }

?>