<?php 

    function validate($str = null){
        return isValidPassword($str) && isEmpty($str) && checkSize($str) ? true : false;
    }

    function isEmpty($str){
        return trim(strlen($str) > 0) ? true : false;
    }

    function checkSize($str){
        $min = 2;
        return strlen($str) >= $min ? true : false;
    }

    
    function isValidPassword($str){
        return preg_match_all('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $str) ? false : true;
    }

    function isStartingNumbers($str) {
        return preg_match( '/\d/', $str) ? false : true;
    }
    
    // Does string contain special characters?
    function isStartSpecialCharacter($str) {
        return preg_match('/[^a-zA-Z\d]/', $str) ? false : true;
    }


?>