<?php

require_once('../../config/app.php');
$id=$_GET['id'];
delete('employees',$id);
redirect('employees/index.php');