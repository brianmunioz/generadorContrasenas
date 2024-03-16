<?php
require __DIR__ . '/../utils/Characters.php';

$psw_length = $_GET['psw-length'] ?? NULL;

if($psw_length){
    $duplicates_allowed = $_GET['duplicates'] || false;
}

$allowed_characters = $_GET['characters'] ?? [];

$input_class = '';
$suggest_class = '';

if(!isset($psw_length)){
    $class = 'alert-secondary';
    $message = "👉🏼 Tú contraseña se verá aquí👈🏼";
}else if(empty($psw_length) || empty($allowed_characters)){
    $class = 'alert-danger';
    $input_class = 'is-invalid';
    $suggest_class = 'invalid-feedback';
    $message = "Contraseña inválida ⚠️";
}else{
    $password = generate_password($psw_length, $duplicates_allowed, $allowed_characters);
    $class = 'alert-success';
    $message = $password;
}

function generate_password($length, $duplicates_allowed, $allowed_characters) {

    $password = '';

    $arr_char = set_characters($allowed_characters);

    $characters_length = mb_strlen($arr_char);

    while(mb_strlen($password) < $length){
        $random_character = $arr_char[rand(0, $characters_length -1)];

        
        if($duplicates_allowed || !str_contains($password, $random_character)){

            $password .= $random_character;
        }
    }

     return $password;
}