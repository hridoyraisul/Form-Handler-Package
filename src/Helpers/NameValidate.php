<?php
function validateName($name){
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
        return false;
    } else {
        return true;
    }
}
