<?php

require_once('../../config/app.php');
if (isset($_POST['title'])){
$name=$_POST['title'];
$sql="INSERT INTO `departements` (`title`) VALUES ('$name') ";
if(insert($sql)){
    echo"hamada yal3ab";
}else{echo"hamada la yal3ab";}
}
redirect("departements/index.php");