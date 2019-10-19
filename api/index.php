<?php

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {
    case 'GET':
        require_once('./get_grades.php');
        break;
    case 'POST':
        require_once('./add_grade.php');
        break;
    case 'PATCH':
        require_once('./edit_grade.php');
        break;
    case 'DELETE':
        require_once('./delete_grade.php');
        break;
    default:
        echo 'Unknown Request Method';
}
