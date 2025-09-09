<?php
function gerar_senha($chars,$qtd_chars){
    // print_r($chars);
    $chars_array = str_split($chars);
    $password_random = array_rand($chars_array,$qtd_chars);
    $final_password = '';
    // $max_index = strlen($chars) - 1;
    foreach($password_random as $pass){
        $final_password .= $chars_array[$pass];
    }

    // for($i = 0; $i < $qtd_chars; $i++){
    //     $final_password .= $chars[random_int(0,$max_index)];
    // }

    return $final_password;
}