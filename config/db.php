<?php


$conn=mysqli_connect("localhost","root","","hr-system");
function insert($sql){
global $conn;
    $result=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)>0){
        return true;
    }return false;

}
function getdata($table){
global $conn;
$result=mysqli_query($conn,"SELECT * FROM $table ");
$data=[];
while($row=mysqli_fetch_assoc($result)){
$data[]=$row;
}return $data;


}


function delete($table, $id)
{
    global $conn;
    $result = mysqli_query($conn, "DELETE FROM `$table` WHERE `id`='$id'");
    if ($result) {
        return true;
    }
    return false;
}
function jointables($table1,$table2){
    global $conn;
    $sql="SELECT *,$table1.name AS emp_name,$table1.id AS emp_id FROM $table1 INNER JOIN $table2 ON $table2.id = $table1.departements_id";
    $result=mysqli_query($conn,$sql);
    $data=[];
    while($row=mysqli_fetch_assoc($result)){
        $data[]=$row;
    }return $data;
}
