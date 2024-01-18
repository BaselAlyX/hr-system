<?php

require_once('../../config/app.php');
if (isset($_POST['name'])){
extract($_POST);
    $sql="INSERT INTO `employees` (`name`,`email`,`phone`,`salary`,`departements_id`) VALUES ('$name','$email','$phone','$salary','$departement_id') ";
if(insert($sql)){
    echo"hamada yal3ab";
}else{echo"hamada la yal3ab";}
}
redirect("employees/index.php");