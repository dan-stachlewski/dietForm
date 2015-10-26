<?php

use Valitron\Validator;

function validateBmiForm($data) {
    $v = new Validator($data);
    $v->rule('required', ['email', 'height', 'weight']);
    $v->rule('numeric', ['height', 'weight']);
    $v->rule('email', 'email');
    $v->rule('max', 'height', 2.5);
    $v->rule('notIn', 'height', [0])->message('{field} - zero is not allowed here');
    $v->rule('min', 'weight', 30);

    return ['is_valid'=> $v->validate(), 'has_errors' => $v->errors()];
}