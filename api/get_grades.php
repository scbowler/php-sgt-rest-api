<?php
$output = [
    'records' => []
];

$result = mysqli_query($conn, 'SELECT pid, course, grade, name, updated AS lastUpdated FROM grades');

if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $output['records'][] = $row;
    }
}

echo json_encode($output);
