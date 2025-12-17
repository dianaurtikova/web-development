<?php
function generatePassword($length) {
    $lowercase = range('a', 'z');
    $uppercase = range('A', 'Z');
    $digits = range(0, 9);
    
    $res = array_merge($lowercase, $uppercase, $digits);
    
    shuffle($res);
    
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $res[random_int(0, count($res) - 1)];
    }
    
    return $password;
}
echo GeneratePassword(10);