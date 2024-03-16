<?php 
function set_characters($allowed_characters)
{
    $letters_low = 'abcdefghijklmnopqrstuvwxyz';

    $letters_up = strtoupper($letters_low);

    $numbers = '0123456789';
    
    $symbols = "!\"#$%&'()*+-./:;=?@[\]^_`{|}";

    $characters = '';
    if(in_array('L', $allowed_characters)) $characters .= $letters_low . $letters_up;
    if(in_array('N', $allowed_characters)) $characters .= $numbers;
    if(in_array('S', $allowed_characters)) $characters .= $symbols;

    return $characters;
}
?>