<?php

function validasi_username($data){
    if (strlen($data) != 8){
        return false;
    }elseif (strpos($data, '.') == false) {
        return false;
    }elseif (strtolower($data) != $data){
        return false;
    }else{
        return true;
    }
}

var_dump(validasi_username('junn.ned'));

function validasi_password($data){
    if ( strlen($data) < 8 ) {
        return false;
	}elseif (preg_match("#[0-9]+#", $data)==false){
        return false;
    }elseif(preg_match("#[a-z]+#", $data)==false){
        return false;
    }elseif(strtolower($data) == $data){
        return false;
    }elseif(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $data)==false){
        return false;
    }else{
        return true;
    }
}
var_dump(validasi_password('MangJuned123@'));