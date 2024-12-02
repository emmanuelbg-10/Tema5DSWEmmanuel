<?php
require '../data/employees.php';
header('Content-type: application/json; charset=utf-8');
if(isset($_GET['id'])){
  $employee = array_filter($employees, fn($e) => $e['id'] == $_GET['id']);
  $employee = array_pop($employee);
  if($employee) {
    echo json_encode($employee);
  } else {
    http_response_code(404);
  }
} else if (isset($_GET['position'])) {
  $employeeFilter = array_filter($employees, fn($e) => $e['position'] == $_GET['position']);
  if($employeeFilter) {
    echo json_encode(array_values($employeeFilter) , JSON_PRETTY_PRINT);
  } else {
    http_response_code(404);
  }
}else
 {
  echo json_encode($employees);
}

?>