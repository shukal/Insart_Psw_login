<?php
include("db.php");
include("ADDFUNCTION.php");
$table_name="jasmin";
$name="jasmin1";
$mname="rajseshbhai";
$lname="shukal";
$where_clause="id=3";
$form_data = array(
    'name' => $name,
    'mname' => $mname,
    'lname' => $lname
);
//dbRowInsert($table_name,$form_data);
//dbRowDelete($table_name,$where_clause);
//dbRowUpdate($table_name,$form_data,$where_clause);
echo "string";
?>
