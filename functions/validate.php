<?php


function checkEmpty($value) {
    if (empty($value)) {
        return false;
    } else {
        return true;
    }
}

function checkEmail($value) {
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

function checkPassword($value) {
    if (strlen($value) < 8) {
        return false;
    } else {
        return true;
    }
}

function checkPasswordMatch($value1, $value2) {
    if ($value1 !== $value2) {
        return false;
    } else {
        return true;
    }
}

