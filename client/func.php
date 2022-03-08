<?php
function has_error($filed)
{
    global $errors;
    return isset($errors[$field]);
}
function get_error($field)
{
    global $errors;
    return has_errors($field) ? $errors[$field]:null;
}