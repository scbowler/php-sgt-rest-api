<?php
require_once('../db.php');

$method = $_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');

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
