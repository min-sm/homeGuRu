<?php


function gettoken()
{
    $char = "0123456789ABCDEFGHIJKLMNOPURSTUVWXYZabcdefghijklnmopqrstuvwxyz";
    $ramdonString = "";
    for ($i = 0; $i < 128; $i++) {
        $index =  rand(0, strlen($char) - 1);
        $ramdonString .= $char[$index];
    }

    return $ramdonString;
}
